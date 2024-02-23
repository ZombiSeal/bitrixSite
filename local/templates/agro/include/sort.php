<?php
$sortSelected = (isset($_GET["sort"]) && isset($_GET["method"])) ? ('sort=' . $_GET['sort'] . '&method=' . $_GET['method']) : 'sort=property_popular&method=desc';
?>
<div class="sort"><span>Сортировка:</span>
    <select class="styler">
        <option
                value="sort=property_popular&method=desc"
            <?php echo $sortSelected === 'sort=property_popular&method=desc' ? 'selected' : '';?>
        >
            Популярное
        </option>
        <option
                value="sort=property_new&method=desc"
            <?php echo $sortSelected === 'sort=property_new&method=desc' ? 'selected' : '';?>
        >
            Новые
        </option>
        <option
                value="sort=property_sale&method=desc,nulls"
            <?php echo $sortSelected === 'sort=property_sale&method=desc,nulls' ? 'selected' : '';?>
        >
            На акции
        </option>
    </select>
</div>
