<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

/** @global CMain $APPLICATION */

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
?>

<div class="container page-404 color-white text-center">
    <p class="page-404__title">404</p>
    <p class="fs-big">Кажется, такой страницы не существует. Попробуйте <a href="/" class="white-link text-decoration-underline">начать сначала</a></p>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>