<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - блог');
?>

<section class="section container blog py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="blog__title text-center section-title fs-big mb-4">
            Блог
        </h1>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","blog",
            Array(
                "IBLOCK_TYPE" => "blog",
                "IBLOCK_ID" => IBLOCK_ARTICLES,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE'],
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "ACTIVE_DATE_FORMAT" => 'd.m.Y',
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_SHOW_ALWAYS" => "Y"
            )
        );?>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
