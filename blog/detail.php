<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - блог');
?>

<section class="section container blog py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:news.detail","blog-article",
            Array(
                "IBLOCK_TYPE" => "blog",
                "IBLOCK_ID" => IBLOCK_ARTICLES,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PICTURE'],
                "ELEMENT_CODE" => $_REQUEST['ELEMENT_CODE'],
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
