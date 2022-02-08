<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

    <?php $APPLICATION->IncludeComponent("bitrix:news.list","slider-main",
        Array(
            "IBLOCK_TYPE" => "mainpage",
            "IBLOCK_ID" => IBLOCK_SLIDER_MAIN,
            "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
            "PROPERTY_CODE" => ['DETAIL_BTN', 'DETAIL_BTN_TEXT'],
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N"
        )
    );?>

    <section class="section container areas-of-activity pt-4">
        <div class="row justify-content-center">
            <div class="col-xl col-md-6 col-12 mb-4">
                <div class="areas-of-activity-item bg-white p-4 rounded shadow">
                    <div class="areas-of-activity-item__picture rounded w-100" style="background-image: url('/dist/img/areas-furniture.jpg');">
                        <a href="" class="areas-of-activity-item__detail-btn white-link hover-underline text-shadow-contour rounded shadow-white button button-dark-purple fs-medium">
                            Подробнее
                        </a>
                    </div>
                    <div class="areas-of-activity-item__name fs-medium my-2 fw-bold">Производство мебели</div>
                    <p class="areas-of-activity-item__description">
                        Можно предположить, что ощущение мира, следовательно, творит неоднозначный интеллект, ломая рамки привычных представлений
                    </p>
                </div>
            </div>
            <div class="col-xl col-md-6 col-12 mb-4">
                <div class="areas-of-activity-item bg-white p-4 rounded shadow">
                    <div class="areas-of-activity-item__picture rounded w-100" style="background-image: url('/dist/img/areas-aluminum.jpg');">
                        <a href="" class="areas-of-activity-item__detail-btn white-link hover-underline text-shadow-contour rounded shadow-white button button-dark-purple fs-medium">
                            Подробнее
                        </a>
                    </div>
                    <div class="areas-of-activity-item__name fs-medium my-2 fw-bold">Продажа профиля</div>
                    <p class="areas-of-activity-item__description">
                        Можно предположить, что ощущение мира, следовательно, творит неоднозначный интеллект, ломая рамки привычных представлений
                    </p>
                </div>
            </div>
            <div class="col-xl col-md-6 col-12 mb-4">
                <div class="areas-of-activity-item bg-white p-4 rounded shadow">
                    <div class="areas-of-activity-item__picture rounded w-100" style="background-image: url('/dist/img/areas-portfolio.jpg');">
                        <a href="" class="areas-of-activity-item__detail-btn white-link hover-underline text-shadow-contour rounded shadow-white button button-dark-purple fs-medium">
                            Подробнее
                        </a>
                    </div>
                    <div class="areas-of-activity-item__name fs-medium my-2 fw-bold">Наши работы</div>
                    <p class="areas-of-activity-item__description">
                        Можно предположить, что ощущение мира, следовательно, творит неоднозначный интеллект, ломая рамки привычных представлений
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section container about-main py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="about-main__title text-center section-title fs-big mb-4">
                О компании «Элита-Проф»
            </h2>
            <div class="row flex-xl-row flex-column-reverse">
                <div class="col-xxl col-xl-5">
                    <div class="about-main__video-wrapper">
                        <iframe width="100%" height="470" src="https://www.youtube.com/embed/pCx_GwSRd1k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-xxl col-xl-7 mb-4">
                    <div class="about-main__text-wrapper">
                        <p>Наряду с выпуском серийной медицинской и лабораторной мебели, компания эффективно изготавливает торговую, офисную и бытовую мебель, мебель по индивидуальным заказам, а высокотехнологичное оборудование обеспечивает выполнение проектов любого уровня сложности.</p>
                        <p>Использование в производстве корпусной мебели анодированного алюминиевого профиля производства «Росла», позволяет сделать нашу мебель уникальной в своём роде: каркас мебели, выполненный из алюминиевого профиля, защищает мебель от всевозможных агрессивных факторов, таких как влажность, механические повреждения, деформации и других.</p>
                        <a href="" class="about-main__detail-btn py-2 white-link hover-underline text-shadow-contour rounded shadow-white button button-dark-purple fs-medium">
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
                Блог
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
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_SHOW_ALWAYS" => "Y"
                )
            );?>
        </div>
    </section>

    <section class="section container feedback py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="feedback-main__title section-title fs-big mb-4 text-center">
                Отзывы
            </h2>
            <div class="feedback-slider color-white pb-5 owl-carousel owl-theme" data-loop="true" data-margin="10" data-nav="true" data-dots="false" data-autoplay="true" data-center="true" data-responsive='{"0":{"items":1},"992":{"items":3}}'>
                <div class="feedback__item p-4 rounded">
                    <div class="feedback__item-header d-flex">
                        <p class="d-flex flex-column">
                            <span class="feedback__item-name fw-bold">Денис Михайлов</span>
                            <span class="feedback__item-subtitle fs-small">Казань</span>
                        </p>
                    </div>
                    <p class="feedback__item-text">
                        Заказывали у компании торговый островок под ключ. Сначала долго обсуждали с менеджером, как должен выглядеть наш остров, на какой максимальный и минимальный бюджет рассчитываем. Через пару недель был готов проект, подогнанный специально под наше арендованное место в ТЦ. При приеме работ попросили посмотреть все максимально придирчиво. Мы осмотрели, нашли в паре стыков на пару миллиметров. Это не смертельно. В остальном все устроило, качество мебели на высоте. Жена была в восторге! И - пошли продажи.
                    </p>
                    <a class="feedback__item-detail white-link hover-underline" href="">
                        Читать далее >
                    </a>
                </div>
                <div class="feedback__item p-4 rounded">
                    <div class="feedback__item-header d-flex">
                        <p class="d-flex flex-column">
                            <span class="feedback__item-name fw-bold">Мария Трубицына</span>
                            <span class="feedback__item-subtitle fs-small">Казань</span>
                        </p>
                    </div>
                    <p class="feedback__item-text">
                        Сначала долго обсуждали с менеджером, как должен выглядеть наш остров, на какой максимальный и минимальный бюджет рассчитываем. Через пару недель был готов проект, подогнанный специально под наше арендованное место в ТЦ. При приеме работ попросили посмотреть все максимально придирчиво. Мы осмотрели, нашли в паре стыков на пару миллиметров. Это не смертельно. В остальном все устроило, качество мебели на высоте. Жена была в восторге! И - пошли продажи.
                    </p>
                    <a class="feedback__item-detail white-link hover-underline" href="">
                        Читать далее >
                    </a>
                </div>
                <div class="feedback__item p-4 rounded">
                    <div class="feedback__item-header d-flex">
                        <p class="d-flex flex-column">
                            <span class="feedback__item-name fw-bold">Ляйсан Кустовская</span>
                            <span class="feedback__item-subtitle fs-small">Казань</span>
                        </p>
                    </div>
                    <p class="feedback__item-text">
                        Через пару недель был готов проект, подогнанный специально под наше арендованное место в ТЦ. При приеме работ попросили посмотреть все максимально придирчиво. Мы осмотрели, нашли в паре стыков на пару миллиметров. Это не смертельно. В остальном все устроило, качество мебели на высоте. Жена была в восторге! И - пошли продажи.
                    </p>
                    <a class="feedback__item-detail white-link" href="">
                        Читать далее >
                    </a>
                </div>
                <div class="feedback__item p-4 rounded">
                    <div class="feedback__item-header d-flex">
                        <p class="d-flex flex-column">
                            <span class="feedback__item-name fw-bold">Денис Михайлов</span>
                            <span class="feedback__item-subtitle fs-small">Казань</span>
                        </p>
                    </div>
                    <p class="feedback__item-text">
                        Заказывали у компании торговый островок под ключ. Сначала долго обсуждали с менеджером, как должен выглядеть наш остров, на какой максимальный и минимальный бюджет рассчитываем. Через пару недель был готов проект, подогнанный специально под наше арендованное место в ТЦ. При приеме работ попросили посмотреть все максимально придирчиво. Мы осмотрели, нашли в паре стыков на пару миллиметров. Это не смертельно. В остальном все устроило, качество мебели на высоте. Жена была в восторге! И - пошли продажи.
                    </p>
                    <a class="feedback__item-detail white-link hover-underline" href="">
                        Читать далее >
                    </a>
                </div>
            </div>
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
                    Остались вопросы?
                </h2>
                <p class="text-center">
                    Оставьте здесь ваш вопрос, и мы ответим в течение 30 минут
                </p>
                <form action="" name="capture-form" id="capture-form">
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
                </form>
            </div>
        </div>
    </section>

    <section class="section photos-main container py-4">
        <div class="bg-white px-5 py-5 rounded">
            <h2 class="photos-main__title section-title fs-big mb-4 text-center">
                Фото нашей мебели
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
                Почему мебель лучше заказывать у нас?
            </h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="advantages__item d-flex">
                        <i class="fas fa-cart-arrow-down fs-big color-purple-dark"></i>
                        <div class="d-flex flex-column ms-2">
                            <p class="fw-bold color-purple-dark">Большой ассортимент</p>
                            <p>
                                Большое количество наименовании мебели различного назначения
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="advantages__item d-flex">
                        <i class="fas fa-trophy fs-big color-purple-dark"></i>
                        <div class="d-flex flex-column ms-2">
                            <p class="fw-bold color-purple-dark">Высочайшее качество</p>
                            <p>
                                Высочайшее качество предлагаемой к продаже мебели и аксессуаров
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="advantages__item d-flex">
                        <i class="fas fa-shipping-fast fs-big color-purple-dark"></i>
                        <div class="d-flex flex-column ms-2">
                            <p class="fw-bold color-purple-dark">Доставка и монтаж</p>
                            <p>
                                Организация доставки приобретенной мебели в адрес покупателя и ее монтаж
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="advantages__item d-flex">
                        <i class="fas fa-archive fs-big color-purple-dark"></i>
                        <div class="d-flex flex-column ms-2">
                            <p class="fw-bold color-purple-dark">Выбор принадлежностей</p>
                            <p>
                                Значительный выбор комплектующих и аксессуаров
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>