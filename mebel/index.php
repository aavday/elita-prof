<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
// сохраняем тайтл, чтобы повторить его в конце страницы и избежать переопределения тайтла в компонентах
$title = $APPLICATION->GetTitle();
?>

<section class="section container catalog catalog-furniture py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="catalog__title section-title fs-big mb-4 text-center">
            Производство мебели
        </h1>
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","catalog-sections-accordion",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => "1",
                        "SECTION_CODE" => "",
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
            <div class="col-xl-9 col-md-8">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","catalog-sections",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => "1",
                        "SECTION_CODE" => $_REQUEST['SECTION_CODE'],
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
        </div>
    </div>
</section>

<?php $APPLICATION->IncludeComponent("bitrix:news.list","colors",
    Array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "2",
        "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
        "PARENT_SECTION" => 1,
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N"
    )
);?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list","colors",
    Array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "2",
        "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
        "PARENT_SECTION" => 2,
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N"
    )
);?>

<?php
$APPLICATION->SetTitle($title);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>