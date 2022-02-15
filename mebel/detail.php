<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

<section class="section container catalog py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","catalog-sections-accordion",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => IBLOCK_FURNITURE,
                        "SECTION_CODE" => "",
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
            <div class="col-xl-9 col-md-8">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.element","catalog-item-furniture",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => IBLOCK_FURNITURE,
                        "ELEMENT_CODE" => $_REQUEST['ELEMENT_CODE'],
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "ADD_ELEMENT_CHAIN" => "Y",
                    )
                );?>
            </div>
        </div>
    </div>
</section>

<section class="section container catalog-colors py-4">
    <div class="bg-white px-3 py-5 rounded">
        <h2 class="catalog-colors__title section-title fs-big mb-4 text-center">
            <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/catalog-furniture/colors_title.html"
                )
            );?>
        </h2>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","colors",
            Array(
                "IBLOCK_TYPE" => "catalog",
                "IBLOCK_ID" => IBLOCK_FURNITURE_COLORS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
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