if (!window.BX_YMapAddPlacemark) {
    window.BX_YMapAddPlacemark = function (map, arPlacemark) {
        if (null == map)
            return false;

        if (!arPlacemark.LAT || !arPlacemark.LON)
            return false;

        var props = {};
        if (null != arPlacemark.TEXT && arPlacemark.TEXT.length > 0) {
            var value_view = '';

            if (arPlacemark.TEXT.length > 0) {
                var rnpos = arPlacemark.TEXT.indexOf("\n");
                value_view = rnpos <= 0 ? arPlacemark.TEXT : arPlacemark.TEXT.substring(0, rnpos);
            }

            props.balloonContent = arPlacemark.TEXT.replace(/\n/g, '<br />');
            props.hintContent = value_view;
        }

        var obPlacemark = new ymaps.Placemark(
            [arPlacemark.LAT, arPlacemark.LON],
            props,
            {
                balloonCloseButton: true,
                hideIconOnBalloonOpen: false,
                balloonOffset: [5, -25],
                zIndexActive: -1
            },
        );

        map.geoObjects.add(obPlacemark);

        var tabs = document.querySelectorAll('.tabs__li');
        tabs.forEach(tab => {
            tab.addEventListener('click', e => {
                if (!tab.classList.contains('active')) obPlacemark.balloon.close();
            })
        })

        var addresses = document.querySelectorAll('.address-link');
        addresses.forEach((item, key) => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                var cords = [e.target.getAttribute('data-lat'), e.target.getAttribute('data-lon')];
                if (JSON.stringify(obPlacemark.geometry._coordinates) == JSON.stringify(cords)) obPlacemark.balloon.open();
            })
        })

        return obPlacemark;
    }
}


if (!window.BX_YMapAddPolyline) {
    window.BX_YMapAddPolyline = function (map, arPolyline) {
        if (null == map)
            return false;

        if (null != arPolyline.POINTS && arPolyline.POINTS.length > 1) {
            var arPoints = [];
            for (var i = 0, len = arPolyline.POINTS.length; i < len; i++) {
                arPoints.push([arPolyline.POINTS[i].LAT, arPolyline.POINTS[i].LON]);
            }
        } else {
            return false;
        }

        var obParams = {clickable: true};
        if (null != arPolyline.STYLE) {
            obParams.strokeColor = arPolyline.STYLE.strokeColor;
            obParams.strokeWidth = arPolyline.STYLE.strokeWidth;
        }
        var obPolyline = new ymaps.Polyline(
            arPoints, {balloonContent: arPolyline.TITLE}, obParams
        );

        map.geoObjects.add(obPolyline);

        return obPolyline;
    }
}

