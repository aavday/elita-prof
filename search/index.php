<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

    <section class="section advantages container py-4">
        <div class="bg-white px-3 py-5 rounded">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:search.page",
                "suggest",
                array(
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "Y",
                    "AJAX_OPTION_SHADOW" => "Y",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "N",
                    "CHECK_DATES" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TITLE" => "Результаты поиска",
                    "PAGE_RESULT_COUNT" => "20",
                    "RESTART" => "Y",
                    "SHOW_WHERE" => "N",
                    "USE_TITLE_RANK" => "N",
                    "NO_WORD_LOGIC" => "Y",
                    "DEFAULT_SORT" => "rank",
                    "FILTER_NAME" => "",
                    "SHOW_WHEN" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "USE_LANGUAGE_GUESS" => "N",
                    "USE_SUGGEST" => "N",
                    "SHOW_ITEM_TAGS" => "N",
                    "TAGS_INHERIT" => "Y",
                    "SHOW_ITEM_DATE_CHANGE" => "Y",
                    "SHOW_ORDER_BY" => "N",
                    "SHOW_TAGS_CLOUD" => "N",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                ),
                false
            );?>
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
