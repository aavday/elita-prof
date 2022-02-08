<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - вопрос-ответ');
?>

<section class="section container question-answers py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="question-answers__title text-center section-title fs-big mb-4">
            <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/question-answers/h1.html"
                )
            );?>
        </h1>
        <div class="mb-4">
            <button class="button button-dark-purple fs-medium text-shadow-contour hover-shadow-white rounded fw-bold" data-bs-toggle="modal" data-bs-target="#question-answers-modal">
                Задать вопрос
            </button>
        </div>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","question-answers",
            Array(
                "IBLOCK_TYPE" => "question_answers",
                "IBLOCK_ID" => IBLOCK_QUESTION_ANSWERS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
                "PROPERTY_CODE" => ['QUESTION', 'ANSWER', 'AUTHOR'],
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
