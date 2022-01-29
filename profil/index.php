<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
// сохраняем тайтл, чтобы повторить его в конце страницы и избежать переопределения тайтла в компонентах
$title = $APPLICATION->GetTitle();
?>

<section class="section container catalog py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="catalog__title section-title fs-big mb-4 text-center">
            Алюминиевый профиль
        </h1>
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","catalog-sections-accordion",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => "3",
                        "SECTION_CODE" => "",
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
            <div class="col-xl-9 col-md-8">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","catalog-sections",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => "3",
                        "SECTION_CODE" => $_REQUEST['SECTION_CODE'],
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
        </div>
    </div>
</section>

<?php
$APPLICATION->SetTitle($title);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>