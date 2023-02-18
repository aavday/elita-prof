<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @global CMain $APPLICATION */

use \Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php $APPLICATION->ShowTitle(false); ?></title>
    <!— Yandex.Metrika counter —>
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(86501877, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/86501877" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!— /Yandex.Metrika counter —>
    <?php
        Asset::getInstance()->addCss('/node_modules/lightbox2/dist/css/lightbox.min.css');
        Asset::getInstance()->addCss('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');
        Asset::getInstance()->addCss('/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');
        Asset::getInstance()->addCss('/dist/css/style.css');
        Asset::getInstance()->addString('<script src="https://kit.fontawesome.com/c0475dd5ed.js" crossorigin="anonymous"></script>');
        Asset::getInstance()->addString('<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>');
        Asset::getInstance()->addJs('/node_modules/jquery/dist/jquery.min.js');
        Asset::getInstance()->addJs('/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js');
        Asset::getInstance()->addJs('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js');
        Asset::getInstance()->addJs('/node_modules/owl.carousel/dist/owl.carousel.min.js');
        Asset::getInstance()->addJs('/node_modules/lightbox2/dist/js/lightbox.min.js');
        Asset::getInstance()->addJs('/dist/js/main-min.js');

        $APPLICATION->ShowHead();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-image: url('/dist/img/bg-top.png');">

<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<header class="header">
    <div class="header-main">
        <?php $APPLICATION->IncludeComponent("bitrix:news.detail","header-top",
            Array(
                "IBLOCK_TYPE" => "info",
                "IBLOCK_ID" => IBLOCK_CONTACTS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
                "PROPERTY_CODE" => ['PHONES', 'VK', 'INSTAGRAM', 'FACEBOOK', 'LOGO', 'OZON', 'WILDBERRIES'],
                "ELEMENT_CODE" => 'contacts',
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N"
            )
        );?>
        <div class="header-bottom px-4">
            <?php $APPLICATION->IncludeComponent("bitrix:menu","header-menu",
                Array(
                    "MENU_CACHE_TYPE" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left"
                )
            );?>
        </div>
    </div>
    <?php $APPLICATION->IncludeComponent("bitrix:news.detail","header-mob",
        Array(
            "IBLOCK_TYPE" => "info",
            "IBLOCK_ID" => IBLOCK_CONTACTS,
            "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
            "PROPERTY_CODE" => ['LOGO'],
            "ELEMENT_CODE" => 'contacts',
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );?>
</header>

<main class="main">