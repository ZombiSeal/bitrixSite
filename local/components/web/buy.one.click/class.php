<?php

namespace web;
use Bitrix\Currency\CurrencyManager;
use Bitrix\Main;
use CUser;
use Bitrix\Sale;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
class BuyOneClick extends \CBitrixComponent
{
    private array $fields = [
        'name' => 'NAME',
        'second_name' => 'SECOND_NAME',
        'last_name' => 'LAST_NAME',
        'phone' => 'PHONE',
        'email' => 'EMAIL',
        'comment' => 'COMMENT',
    ];

    private array $requiredFieldsFlags =[
        'NAME' => 'Y',
        'SECOND_NAME' => 'Y',
        'LAST_NAME' => 'Y',
        'PHONE' => 'Y',
        'EMAIL' => 'Y',
        'COMMENT' => 'N'
    ];

    private array $actions = [
        'buy_product' => 'BUY_ONE_CLICK',
        'buy_all' => 'BUY_ALL'
    ];

    private string $name;
    private string $secondName;
    private string $lastName;
    private string $email;
    private string $phone;
    private string $action;
    private function setRequest() : void
    {
        $this->name = $this->request->get('NAME') ?? '';
        $this->secondName = $this->request->get('SECOND_NAME') ?? '';
        $this->lastName = $this->request->get('LAST_NAME') ?? '';
        $this->email = $this->request->get('EMAIL') ?? '';
        $this->phone = $this->request->get('PHONE') ?? '';
        $this->action = $this->request->get('action') ?? '';
    }
    private function setHiddenFields() : array
    {
        if($this->request->get('action') !== null)
        {
            switch ($this->request->get('action'))
            {
                case $this->actions['buy_product']:
                    $fields = [
                        'ACTION' => $this->actions['buy_product'],
                        'PRODUCT_ID' => $this->request->get('product_id'),
                    ];
                    break;
                case $this->actions['buy_all'] :
                    $fields = [
                        'ACTION' => $this->actions['buy_all'],
                    ];
                    break;
                default:
                    break;
            }
        }

        return $fields ?? [];
    }

    private function checkFields() : array
    {
        $errors = [];
        if(!empty($this->requiredFieldsFlags))
        {
            foreach ($this->requiredFieldsFlags as $name=>$value)
            {
                if ($value === 'Y')
                {
                    $field = $this->request->get($name);
                    switch ($name)
                    {
                        case 'PHONE':
                            if(preg_match("/\+375\((29|33|44|17)\)\d{3}-\d{2}-\d{2}/", $field) === 0)
                                $errors += [$name => 'Неверный формат телефона'];
                            break;
                        case 'EMAIL':
                            if(!filter_var($field, FILTER_VALIDATE_EMAIL))
                                $errors += [$name => 'Неверный формат email'];
                            break;
                        default:
                            if(strlen($field) < 3)
                                $errors += [$name => 'Поле обязательно (минимум 3 символа)'];
                            break;
                    }
                }
            }
        }
        return $errors;

    }
    private function isUserExist() : ?array
    {
        $email = $this->request->get('EMAIL');
        $user = Main\UserTable::getList([
            'filter' => ['=EMAIL' => $email],
            'select' => ['ID']
        ])->fetch();

        return ($user) ? $user : null;
    }
    private function registerUser($name, $secondName, $lastName, $email, $phone) : string
    {
        global $USER;
        $str = randString(8);
        $user = new CUser;
        $arFields = Array(
            "NAME" => $name,
            "LAST_NAME" => $lastName,
            "SECOND_NAME" => $secondName,
            "EMAIL"             => $email,
            "LOGIN"             => $email,
            "PERSONAL_PHONE" => $phone,
            "ACTIVE"            => "Y",
            "PASSWORD"          => $str,
            "CONFIRM_PASSWORD"  => $str,
            "UF_TYPE" => "4",
            'GROUP_ID' => [3, 4, 6]
        );

        $id = $user->Add($arFields);
        if (intval($id) > 0) {
            $USER->Authorize($id);
            return $id;
        } else {
            return $user->LAST_ERROR;
        }
    }

    private function createOrder(int $userId) : ?int
    {
        $comment = $this->request->get('COMMENT');

        $siteId = Main\Context::getCurrent()->getSite();
        $currencyCode = CurrencyManager::getBaseCurrency();

        $order = Sale\Order::create($siteId, $userId);
        $order->setPersonTypeId(1);
        $order->setField('CURRENCY', $currencyCode);
        if ($comment) {
            $order->setField('USER_DESCRIPTION', $comment);
        }
        if($this->action === $this->actions['buy_product'])
        {
            $productId = $this->request->get('PRODUCT_ID');
            $basket = Sale\Basket::create($siteId);
            $item = $basket->createItem('catalog', $productId);

            $item->setFields(array(
                'QUANTITY' => 1,
                'CURRENCY' => $currencyCode,
                'LID' => $siteId,
                'PRODUCT_PROVIDER_CLASS' => '\CCatalogProductProvider',
            ));
        }
        else
        {
            $basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), $siteId);
        }

        $order->setBasket($basket);

        // Создаём доставку
        $shipmentCollection = $order->getShipmentCollection();
        $shipment = $shipmentCollection->createItem();
        $service = Sale\Delivery\Services\Manager::getById(Sale\Delivery\Services\EmptyDeliveryService::getEmptyDeliveryServiceId());
        $shipment->setFields(array(
            'DELIVERY_ID' => $service['ID'],
            'DELIVERY_NAME' => $service['NAME'],
        ));
//        $shipmentItemCollection = $shipment->getShipmentItemCollection();
//        $shipmentItem = $shipmentItemCollection->createItem();
//        $shipmentItem->setQuantity($item->getQuantity());

        // Создаём оплату
        $paymentCollection = $order->getPaymentCollection();
        $payment = $paymentCollection->createItem();
        $paySystemService = Sale\PaySystem\Manager::getObjectById(1);
        $payment->setFields(array(
            'PAY_SYSTEM_ID' => $paySystemService->getField("ID"),
            'PAY_SYSTEM_NAME' => $paySystemService->getField("NAME"),
        ));

        // Устанавливаем свойства
        $propertyCollection = $order->getPropertyCollection();
        $phoneProp = $propertyCollection->getPhone();
        $phoneProp->setValue($this->phone);
        $nameProp = $propertyCollection->getPayerName();
        $nameProp->setValue($this->name . ' ' . $this->secondName . ' ' . $this->lastName);

        // Сохраняем
        $order->doFinalAction(true);
        $order->save();
        return $order->getId();
    }

    private function ajaxHandler() : void
    {
        global $USER;
        if($this->request->get('ajax_action')) {
            ob_end_clean();
            $errors = $this->checkFields();
            if (!empty($errors))
            {
                $res = ['status' => 'FIELD_ERROR','errors' => $errors];
            }
            else
            {
                $user = $this->isUserExist();
                if ($user)
                {
                    $USER->Authorize($user['ID']);
                }
                else
                {
                    $user['ID'] = $this->registerUser($this->name, $this->secondName, $this->lastName, $this->email, $this->phone);
                }

                $orderResult = $this->createOrder($user['ID']);
                if($orderResult)
                {
                    $res = ['status' => 'OK', 'order_id' => $orderResult];
                }
                else
                {
                    $res = ['status' => 'ORDER_ERROR'];
                }

            }
            echo json_encode($res);
            die();
        }
    }
    public function executeComponent() : void
    {
        $this->arResult['FIELDS'] = $this->fields;
        $this->arResult['HIDE_FIELDS'] = $this->setHiddenFields();
        $this->arResult['REQUIRED_FLAGS'] = $this->requiredFieldsFlags;

        if($this->request->get('ajax_action'))
            $this->setRequest();

        $this->ajaxHandler();

        $this->includeComponentTemplate();
    }
}