<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - фотографии');
?>

<section class="section photo container py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <?php $APPLICATION->IncludeComponent("bitrix:news.detail","photo",
            Array(
                "IBLOCK_TYPE" => "photos",
                "IBLOCK_ID" => IBLOCK_PHOTOS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE'],
                "ELEMENT_CODE" => $_REQUEST['ELEMENT_CODE'],
                "PROPERTY_CODE" => ['PHOTOS'],
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N"
            )
        );?>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
