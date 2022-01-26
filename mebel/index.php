<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

<section class="section container catalog py-4">
    <div class="bg-white px-3 py-5 rounded">
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
        "PARENT_SECTION" => 1,
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N"
    )
);?>

<?php $APPLICATION->IncludeComponent("bitrix:news.list","colors",
    Array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "2",
        "PARENT_SECTION" => 2,
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N"
    )
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>