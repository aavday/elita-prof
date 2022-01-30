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
                        "IBLOCK_ID" => IBLOCK_ALUMINIUM,
                        "SECTION_CODE" => "",
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
            <div class="col-xl-9 col-md-8">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.element","catalog-item",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => IBLOCK_ALUMINIUM,
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

<?php $APPLICATION->IncludeComponent("bitrix:news.list","colors",
    Array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => IBLOCK_ALUMINIUM_COLORS,
        "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N"
    )
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>