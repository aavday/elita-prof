<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @global CMain $APPLICATION */
?>

</main>

<footer class="footer mt-5 color-white">
    <div class="container py-5">
        <div class="footer-top row">
            <div class="col-lg-3 col-sm-6">
                <?php $APPLICATION->IncludeComponent("bitrix:news.detail","footer-contacts",
                    Array(
                        "IBLOCK_TYPE" => "info",
                        "IBLOCK_ID" => IBLOCK_CONTACTS,
                        "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME'],
                        "PROPERTY_CODE" => ['PHONES', 'ADDRESS_SHORT'],
                        "ELEMENT_CODE" => 'contacts',
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N"
                    )
                );?>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-3">
                <p class="fw-bold">Мебель</p>
                <nav class="footer__nav">
                    <ul>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Медицинская и лабораторная мебель</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Корпусная</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Офисная</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Торговая</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-sm-6">
                <p class="fw-bold">Алюминиевый профиль</p>
                <nav class="footer__nav">
                    <ul>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Для шкафов</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Для торгово-выставочного оборудования</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Для мобильных перегородок</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Для подвесных дверей</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Для кухни</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-sm-6">
                <p class="fw-bold">Другие разделы</p>
                <nav class="footer__nav">
                    <ul>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">О компании</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Фото</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Вопрос-ответ</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Блог</a>
                        </li>
                        <li class="footer__nav-item mb-2">
                            <a href="" class="white-link hover-underline">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-purple-dark py-1 color-smoke fs-small">
        <div class="container d-flex justify-content-between align-items-center">
            <span class="footer-copyright mx-2">© 2012–2021 ООО «Элита-Проф»</span>
            <span class="footer-copyright mx-2">Дизайн, разработка и поддержка - Авдеев Алексей, avdey@avdey.su</span>
        </div>
    </div>
</footer>

<div class="modal fade" tabindex="-1" id="feedback-modal" data-handlerUrl="/ajax/forms/ajax_form.php">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="modal-header">
                <p class="modal-title fw-bold fs-medium">Оставить отзыв</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-small">
                    Если вы имели опыт работы с нашей компанией - пожалуйста, оставьте нам свой отзыв, для нас это очень важно
                </p>
                <form action="" id="feedback-form" name="feedback-form" class="ajax-form" data-handlerUrl="/ajax/forms/ajax_form.php">
                    <div class="my-2">
                        <label for="feedback-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name="Имя" id="feedback-name" required>
                    </div>
                    <div class="my-2">
                        <label for="feedback-city" class="form-label">Ваш город</label>
                        <input type="text" class="form-control" name="Город" id="feedback-city">
                    </div>
                    <div class="my-2">
                        <label for="feedback-feedback" class="form-label required">Ваш отзыв</label>
                        <textarea class="form-control" name="Отзыв" id="feedback-feedback" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="agree-policy" id="feedback-agree-policy" required>
                        <label class="form-check-label fs-small" for="feedback-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="feedback__submit-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                            Отправить
                        </button>
                    </div>
                    <input type="hidden" name="subject" value="Оставлен отзыв">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="question-answers-modal">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="modal-header">
                <p class="modal-title fw-bold fs-medium">Задать вопрос</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-small">
                    Задайте нам вопрос и мы ответим на него в этом же разделе, а также можем вам позвонить и/или написать на почту
                </p>
                <form action="" id="question-answers-form" class="ajax-form" name="question-answers-form" data-handlerUrl="/ajax/forms/ajax_form.php">
                    <div class="my-2">
                        <label for="question-answers-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name=Имя" id="question-answers-name" required>
                    </div>
                    <div class="my-2">
                        <label for="question-answers-phone" class="form-label required">Ваш номер телефона (только для связи, не будет показан)</label>
                        <input type="tel" class="form-control js-mask" name="Номер" id="question-answers-phone" pattern="+7 \(9[0-9]{2}\) [0-9]{3}-[0-9]{4}" data-mask="+7 (999) 999-99-99">
                    </div>
                    <div class="my-2">
                        <label for="question-answers-email" class="form-label">Ваш E-mail (только для связи, не будет показан)</label>
                        <input type="email" class="form-control" name="E-mail" id="question-answers-email">
                    </div>
                    <div class="my-2">
                        <label for="question-answers-question" class="form-label required">Ваш вопрос</label>
                        <textarea class="form-control" name="Вопрос" id="question-answers-question" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="agree-policy" id="question-answers-agree-policy" required>
                        <label class="form-check-label fs-small" for="question-answers-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="question-answers__submit-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                            Отправить
                        </button>
                    </div>
                    <input type="hidden" name="subject" value="Задан вопрос">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="contact-us-modal">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="modal-header">
                <p class="modal-title fw-bold fs-medium">Связаться с нами</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-small">
                    Оставьте здесь ваш вопрос, и мы ответим в течение 30 минут
                </p>
                <form action="" id="contact-us-form" class="ajax-form" name="contact-us-form" data-handlerUrl="/ajax/forms/ajax_form.php">
                    <div class="my-2">
                        <label for="contact-us-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name="Имя" id="contact-us-name" required>
                    </div>
                    <div class="my-2">
                        <label for="contact-us-city" class="form-label required">Ваш город</label>
                        <input type="text" class="form-control" name="Город" id="contact-us-city">
                    </div>
                    <div class="my-2">
                        <label for="contact-us-organization" class="form-label">Ваша организация</label>
                        <input type="text" class="form-control" name="Организация" id="contact-us-organization">
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="agree-policy" id="contact-us-agree-policy" required>
                        <label class="form-check-label fs-small" for="contact-us-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <button type="submit" class="contact-us__submit-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                        Отправить
                    </button>
                    <input type="hidden" name="subject" value="Заполнена форма обратной связи">
                </form>
            </div>
        </div>
    </div>
</div>

<script type="module" src="/dist/js/main-min.js"></script>
</body>
</html>