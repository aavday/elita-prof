<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

    <?php $APPLICATION->IncludeComponent("bitrix:news.list","slider-main",
        Array(
            "IBLOCK_TYPE" => "mainpage",
            "IBLOCK_ID" => IBLOCK_SLIDER_MAIN,
            "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE'],
            "PROPERTY_CODE" => ['DETAIL_BTN'],
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );?>

    <?php $APPLICATION->IncludeComponent("bitrix:news.list","areas-of-activity",
        Array(
            "IBLOCK_TYPE" => "mainpage",
            "IBLOCK_ID" => IBLOCK_AREAS_OF_ACTIVITY,
            "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT'],
            "PROPERTY_CODE" => ['DETAIL_BTN'],
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );?>

    <section class="section container about-main py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="about-main__title text-center section-title fs-big mb-4">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/mainpage/about_title.html"
                    )
                );?>
            </h2>
            <div class="row flex-xl-row flex-column-reverse">
                <div class="col-xxl col-xl-5">
                    <div class="about-main__video-wrapper">
                        <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/mainpage/about_video.html"
                            )
                        );?>
                    </div>
                </div>
                <div class="col-xxl col-xl-7 mb-4">
                    <div class="about-main__text-wrapper">
                        <div>
                            <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/mainpage/about_text.html"
                                )
                            );?>
                        </div>
                        <a href="/o-kompanii/" class="about-main__detail-btn py-2 white-link hover-underline text-shadow-contour rounded shadow-white button button-dark-purple fs-medium">
                            Подробнее
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section container blog-main py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="blog-main__title section-title fs-big mb-4 text-center">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/mainpage/blog_title.html"
                    )
                );?>
            </h2>
            <?php $APPLICATION->IncludeComponent("bitrix:news.list","blog-main",
                Array(
                    "IBLOCK_TYPE" => "blog",
                    "IBLOCK_ID" => IBLOCK_ARTICLES,
                    "NEWS_COUNT" => 5,
                    "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "ACTIVE_DATE_FORMAT" => 'd.m.Y',
                )
            );?>
        </div>
    </section>

    <section class="section container feedback py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="feedback-main__title section-title fs-big mb-4 text-center">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/mainpage/feedback_title.html"
                    )
                );?>
            </h2>
            <?php $APPLICATION->IncludeComponent("bitrix:news.list","feedbacks",
                Array(
                    "IBLOCK_TYPE" => "feedbacks",
                    "IBLOCK_ID" => IBLOCK_FEEDBACKS,
                    "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
                    "PROPERTY_CODE" => ['NAME', 'CITY', 'TEXT'],
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                )
            );?>
            <div class="text-center">
                <button type="button" class="feedback__leave-btn py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium" data-bs-toggle="modal" data-bs-target="#feedback-modal">
                    Оставить отзыв
                </button>
            </div>
        </div>
    </section>

    <section class="section capture mx-auto py-4">
        <div class="container">
            <div class="bg-white px-3 py-5 rounded">
                <h2 class="capture__title section-title fs-big mb-4 text-center">
                    <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/mainpage/capture_title.html"
                        )
                    );?>
                </h2>
                <p class="text-center">
                    Оставьте здесь ваш вопрос, и мы ответим в течение 30 минут
                </p>
                <form action="" class="ajax-form" name="capture-form" id="capture-form" data-handlerUrl="/ajax/forms/ajax_form.php" data-successText="Спасибо за ваш вопрос! Мы скоро дадим на него ответ">
                    <div class="my-2">
                        <label for="capture-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name="capture-name" id="capture-name" required>
                    </div>
                    <div class="my-2">
                        <label for="capture-phone" class="form-label required">Ваш номер телефона</label>
                        <input type="tel" class="form-control js-phone" name="capture-phone" id="capture-phone" pattern="+7 \(9[0-9]{2}\) [0-9]{3}-[0-9]{4}" data-mask="+7 (999) 999-99-99" required>
                    </div>
                    <div class="my-2">
                        <label for="capture-email" class="form-label">Ваш E-mail</label>
                        <input type="email" class="form-control" name="capture-email" id="capture-email">
                    </div>
                    <div class="my-2">
                        <label for="capture-city" class="form-label">Ваш город</label>
                        <input type="text" class="form-control" name="capture-city" id="capture-city">
                    </div>
                    <div class="my-2">
                        <label for="capture-question" class="form-label required">Ваш вопрос</label>
                        <textarea class="form-control" name="capture-question" id="capture-question" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="capture-agree-policy" id="capture-agree-policy" required>
                        <label class="form-check-label fs-small" for="capture-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="capture__send-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                            Отправить
                        </button>
                    </div>
                    <input type="hidden" name="subject" value="Задан вопрос">
                </form>
            </div>
        </div>
    </section>

    <section class="section photos-main container py-4">
        <div class="bg-white px-5 py-5 rounded">
            <h2 class="photos-main__title section-title fs-big mb-4 text-center">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/mainpage/photos_title.html"
                    )
                );?>
            </h2>
            <?php $APPLICATION->IncludeComponent("bitrix:news.list","photos-main",
                Array(
                    "IBLOCK_TYPE" => "mainpage",
                    "IBLOCK_ID" => IBLOCK_PHOTOS_MAIN,
                    "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
                    "SET_TITLE" => "N",
                    "SET_BROWSER_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N"
                )
            );?>
            <div class="text-center">
                <a href="/photo/">Смотреть все ></a>
            </div>
        </div>
    </section>


    <section class="section advantages container py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="photos-main__title section-title fs-big mb-4 text-center">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/mainpage/advantages_title.html"
                    )
                );?>
            </h2>
            <?php $APPLICATION->IncludeComponent("bitrix:news.list","advantages",
                Array(
                    "IBLOCK_TYPE" => "mainpage",
                    "IBLOCK_ID" => IBLOCK_ADVANTAGES,
                    "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_TEXT'],
                    "PROPERTY_CODE" => ['ICON'],
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