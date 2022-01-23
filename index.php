<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
/** @var $APPLICATION */
$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

    <section class="section intro container-fluid py-4 px-md-4">
        <div class="h-100 w-100">
            <div class="intro-slider text-shadow-contour owl-carousel owl-theme" data-loop="true" data-margin="10" data-nav="true" data-items="1" data-autoplay="true">
                <div class="intro-slider-item">
                    <div class="intro-slider-item__img" style="background-image: url('/dist/img/intro-img.jpg')"></div>
                    <div class="intro-slider-item__txt-big fw-bold">Какая-то акция</div>
                    <div class="intro-slider-item__txt-small">Описание акции</div>
                    <button class="intro-slider-item__btn text-shadow-contour button button-dark-purple fs-medium hover-scale rounded shadow-white fw-bold">Подробнее</button>
                </div>
                <div class="intro-slider-item">
                    <div class="intro-slider-item__img" style="background-image: url('/dist/img/intro-img.jpg')"></div>
                    <div class="intro-slider-item__txt-big fw-bold">Какая-то акция</div>
                    <div class="intro-slider-item__txt-small">Описание акции</div>
                    <button class="intro-slider-item__btn text-shadow-contour button button-dark-purple fs-medium hover-scale rounded shadow-white fw-bold">Подробнее</button>
                </div>
            </div>
        </div>
    </section>

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
            <div class="row">
                <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-6 col-12">
                    <div class="blog-main__left">
                        <div class="blog-main__left-item active" id="news-item-1">
                            <img src="/dist/img/blog-main-1.jpg" alt="Международная выставка здравоохранение" class="blog-main__img mb-3 rounded">
                            <h3 class="blog-main__title fw-bold fs-medium">
                                Выставка здравоохранение
                            </h3>
                            <p class="blog-main__date">
                                <i class="fas fa-calendar me-2"></i>10.12.2021
                            </p>
                            <p class="blog-main__text">
                                Компания «Элита-Проф» посетила ежегодную 30-ю юбилейную международную выставку Здравоохранение «Медицинская техника, изделия медицинского назначения и расходные материалы» в городе Москва.
                            </p>
                            <p class="blog-main__detail">
                                <a href="">Читать далее ></a>
                            </p>
                        </div>
                        <div class="blog-main__left-item" id="news-item-2">
                            <img src="/dist/img/blog-main-2.jpg" alt="Международная выставка здравоохранение" class="blog-main__img mb-3 rounded">
                            <h3 class="blog-main__title fw-bold fs-medium">
                                Выставка ЭКСПОЦЕНТР 2021
                            </h3>
                            <p class="blog-main__date">
                                <i class="fas fa-calendar me-2"></i>01.12.2021
                            </p>
                            <p class="blog-main__text">
                                В Москве проходила 32-я международная выставка мебели, фурнитуры и обивочных материалов.
                                Это крупнейшая в России и Восточной Европе отраслевая выставка, которая ежегодно собирает ведущих мировых производителей, дизайнеров и специалистов по интерьеру, определяет актуальные тенденции и демонстрирует новинки. Здесь представлен широкий выбор элитной и бюджетной мебели для спален, столовых, гостиных, детских, кухни от производителя, диваны и кресла, мебельная фурнитура, отделочные материалы и предметы интерьера.
                            </p>
                            <p class="blog-main__detail">
                                <a href="">Читать далее ></a>
                            </p>
                        </div>
                        <div class="blog-main__left-item" id="news-item-3">
                            <img src="/dist/img/blog-main-3.jpg" alt="Международная выставка здравоохранение" class="blog-main__img mb-3 rounded">
                            <h3 class="blog-main__title fw-bold fs-medium">
                                С верой в успех!
                            </h3>
                            <p class="blog-main__date">
                                <i class="fas fa-calendar me-2"></i>23.12.2018
                            </p>
                            <p class="blog-main__text">
                                Что такое социальная ответственность бизнеса? Для одних - это спонсорские вливания в социальные проекты по "просьбе" местных властей, для других - добровольная помощь ради рекламы или для замаливания грехов. А есть люди, которых, к сожалению, немного, они начинают свое дело, чтобы решить какую-то важную для людей проблему. Вот и бизнес, основанный на производстве мебели для медицинских учреждений, Флеры Закариевны Арслановой — директора хорошо известной в Татарстане компании "ЭЛИТА-ПРОФ" из Набережных Челнов,  начался практически с потрясения.
                            </p>
                            <p class="blog-main__detail">
                                <a href="">Читать далее ></a>
                            </p>
                        </div>
                        <div class="blog-main__left-item" id="news-item-4">
                            <img src="/dist/img/blog-main-4.jpg" alt="Международная выставка здравоохранение" class="blog-main__img mb-3 rounded">
                            <h3 class="blog-main__title fw-bold fs-medium">
                                Ложка дегтя — о проблеме оснащения медицинских учреждений современной специализированной медицинской мебелью
                            </h3>
                            <p class="blog-main__date">
                                <i class="fas fa-calendar me-2"></i>09.08.2018
                            </p>
                            <p class="blog-main__text">
                                Год назад Президент Республики Татарстан Рустам Минниханов принял решение о модернизации первичного звена системы республиканского здравоохранения. Это беспрецедентное в масштабах страны решение направлено на кардинальное улучшение амбулаторно-поликлинического медицинского обслуживания населения.
                            </p>
                            <p class="blog-main__detail">
                                <a href="">Читать далее ></a>
                            </p>
                        </div>
                        <div class="blog-main__left-item" id="news-item-5">
                            <img src="/dist/img/blog-main-5.jpg" alt="Международная выставка здравоохранение" class="blog-main__img mb-3 rounded">
                            <h3 class="blog-main__title fw-bold fs-medium">
                                Красота материнского сердца
                            </h3>
                            <p class="blog-main__date">
                                <i class="fas fa-calendar me-2"></i>10.03.2017
                            </p>
                            <p class="blog-main__text">
                                Не ухищрениями хитроумного маркетинга, а теплотой души и материнской заботой создано было предприятие ООО «Элита-Проф», которое под руководством замечательной женщины Флюры Закариевны Араслановой комплектует специализированной мебелью медицинские учреждения Татарстана и многих других регионов России.
                            </p>
                            <p class="blog-main__detail">
                                <a href="">Читать далее ></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-12">
                    <div class="blog-main__right fs-small d-flex flex-column mx-2">
                        <div class="blog-main__right-item active py-2" data-blog-item="news-item-1">
                            <div class="row">
                                <div class="col-6">
                                    <div class="blog-main__right-item-picture rounded" style="background-image: url('/dist/img/blog-main-thumb-1.jpg')"></div>
                                </div>
                                <div class="col-6">
                                    <p class="blog-main__right-item-date">
                                        <i class="fas fa-calendar me-2"></i>10.12.2021
                                    </p>
                                    <p class="blog-main__right-item-title">
                                        Выставка Здравоохранение
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-main__right-item py-2" data-blog-item="news-item-2">
                            <div class="row">
                                <div class="col-6">
                                    <div class="blog-main__right-item-picture rounded" style="background-image: url('/dist/img/blog-main-thumb-2.jpg')"></div>
                                </div>
                                <div class="col-6">
                                    <p class="blog-main__right-item-date">
                                        <i class="fas fa-calendar me-2"></i>01.12.2021
                                    </p>
                                    <p class="blog-main__right-item-title">
                                        Выставка ЭКСПОЦЕНТР 2021
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-main__right-item py-2" data-blog-item="news-item-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="blog-main__right-item-picture rounded" style="background-image: url('/dist/img/blog-main-thumb-3.jpg')"></div>
                                </div>
                                <div class="col-6">
                                    <p class="blog-main__right-item-date">
                                        <i class="fas fa-calendar me-2"></i>23.12.2018
                                    </p>
                                    <p class="blog-main__right-item-title">
                                        С верой в успех!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-main__right-item py-2" data-blog-item="news-item-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="blog-main__right-item-picture rounded" style="background-image: url('/dist/img/blog-main-thumb-4.jpg')"></div>
                                </div>
                                <div class="col-6">
                                    <p class="blog-main__right-item-date">
                                        <i class="fas fa-calendar me-2"></i>09.08.2018
                                    </p>
                                    <p class="blog-main__right-item-title">
                                        Ложка дегтя - о проблеме оснащения мед. учреждений специализированной мебелью.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-main__right-item py-2" data-blog-item="news-item-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="blog-main__right-item-picture rounded" style="background-image: url('/dist/img/blog-main-thumb-5.jpg')"></div>
                                </div>
                                <div class="col-6">
                                    <p class="blog-main__right-item-date">
                                        <i class="fas fa-calendar me-2"></i>10.03.2017
                                    </p>
                                    <p class="blog-main__right-item-title">
                                        Красота материнского сердца
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="photos-main-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-loop="true" data-margin="10" data-nav="true" data-dotsEach="5" data-items="5" data-autoplay="true" data-responsive='{"0":{"items":1},"576":{"items":2},"768":{"items":3},"992":{"items":5}}'>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-1.jpg" alt="" class="photos-main-slider__item-img">
                </div>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-2.jpg" alt="" class="photos-main-slider__item-img">
                </div>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-3.jpg" alt="" class="photos-main-slider__item-img">
                </div>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-4.jpg" alt="" class="photos-main-slider__item-img">
                </div>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-5.jpg" alt="" class="photos-main-slider__item-img">
                </div>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-6.jpg" alt="" class="photos-main-slider__item-img">
                </div>
                <div class="photos-main-slider__item">
                    <img src="/dist/img/photos-main-7.jpg" alt="" class="photos-main-slider__item-img">
                </div>
            </div>
            <div class="text-center">
                <a href="">Смотреть все ></a>
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

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>