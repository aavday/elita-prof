<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - поиск по сайту');
?>

    <section class="section search-page container py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h1 class="search-page__title section-title fs-big mb-4 text-center">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/search-page/h1.html"
                    )
                );?>
            </h1>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:search.page",
                "clear-custom",
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
                    "USE_SUGGEST" => "Y",
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
