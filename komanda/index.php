<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Наша команда');
?>

<section class="section container team py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="team__title section-title fs-big mb-4 text-center">
            <?php $APPLICATION->ShowTitle(false); ?>
        </h1>
        <div class="text-center">
            <p>
                Главное богатство компании - сплоченная команда профессионалов
            </p>
            <?php $APPLICATION->IncludeComponent("bitrix:news.list","team",
                Array(
                    "IBLOCK_TYPE" => "info",
                    "IBLOCK_ID" => IBLOCK_TEAM,
                    "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE'],
                    "PROPERTY_CODE" => ['POSITION'],
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N"
                )
            );?>
        </div>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>