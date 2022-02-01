<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - контакты');
?>

<section class="section contacts container py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="contacts__title section-title fs-big mb-4 text-center">Контакты</h1>
        <?php $APPLICATION->IncludeComponent("bitrix:news.detail","contacts",
            Array(
                "IBLOCK_TYPE" => "info",
                "IBLOCK_ID" => IBLOCK_CONTACTS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
                "PROPERTY_CODE" => ['PHONES', 'EMAILS', 'ADDRESS', 'WORKING_HOURS'],
                "ELEMENT_CODE" => 'contacts',
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N"
            )
        );?>
    </div>
</section>

<?php $APPLICATION->IncludeComponent("bitrix:news.detail","map",
    Array(
        "IBLOCK_TYPE" => "info",
        "IBLOCK_ID" => IBLOCK_CONTACTS,
        "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
        "PROPERTY_CODE" => ['MAP_POINTS'],
        "ELEMENT_CODE" => 'contacts',
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N"
    )
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>