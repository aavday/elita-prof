<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - фотографии');
?>

<section class="section photos container py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="photos__title section-title fs-big mb-4 text-center">
            Фотогалерея
        </h1>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","photos",
            Array(
                "IBLOCK_TYPE" => "photos",
                "IBLOCK_ID" => IBLOCK_PHOTOS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE'],
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
