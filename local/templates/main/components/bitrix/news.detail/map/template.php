<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */
?>
<section class="section map">
    <div class="map-content" id="yandex-map" style="position:relative; width:100%; height:500px; box-sizing: border-box; -moz-box-sizing: border-box; margin-right:35px"></div>
    <script type="text/javascript">
        function initYandexMap() {
            if (typeof ymaps !== "undefined") {
                ymaps.ready(function() {
                    var myMap = new ymaps.Map('yandex-map', {
                        center: [55.681455,52.348366],
                        zoom: 12
                    });

                    myPlacemark1 = new ymaps.Placemark(
                        [55.655673,52.312716],
                        {
                            hintContent: 'База Элита-Проф',

                            balloonContentHeader: 'База Элита-Проф',
                            balloonContentBody: 'Набережные Челны, Профильная улица, 84',
                            balloonContentFooter: '8 (8552) 77-80-90',
                            iconContent: "1"
                        },{
                            preset: 'islands#violetFactoryIcon'
                        }
                    );
                    myMap.geoObjects.add(myPlacemark1);
                    myMap.behaviors.disable('scrollZoom');

                    myPlacemark2 = new ymaps.Placemark(
                        [55.681423,52.347444],
                        {
                            hintContent: 'Торговый дом Элита-Проф',

                            balloonContentHeader: 'Торговый дом Элита-Проф',
                            balloonContentBody: 'Набережные Челны, Казанский проспект, 198, с.3',
                            balloonContentFooter: '8 (8552) 44-54-04',
                            iconContent: "2"
                        },{
                            preset: 'islands#violetShoppingIcon'
                        }
                    );
                    myMap.geoObjects.add(myPlacemark2);
                    myMap.behaviors.disable('scrollZoom');

                });
            } else {
                window.setTimeout(
                    function() {
                        initYandexMap();
                    },
                    100
                );
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            initYandexMap();
        })
    </script>
</section>