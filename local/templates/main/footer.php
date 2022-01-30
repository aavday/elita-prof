<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

</main>

<footer class="footer mt-5 color-white">
    <div class="container py-5">
        <div class="footer-top row">
            <div class="col-lg-3 col-sm-6">
                <p class="fw-bold">ООО «Элита-Проф»</p>
                <p>Набережные Челны, Профильная улица, 84</p>
                <a href="" class="white-link hover-underline d-block"><i class="fas fa-phone"></i> (8552)77-80-90</a>
                <a href="" class="white-link hover-underline d-block"><i class="fas fa-phone"></i> (8552)44-54-04</a>
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

<div class="modal fade" tabindex="-1" id="contact-modal">
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
                <form action="" id="contact-form" name="contact-form">
                    <div class="my-2">
                        <label for="contact-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                    </div>
                    <div class="my-2">
                        <label for="contact-phone" class="form-label required">Ваш номер телефона</label>
                        <input type="tel" class="form-control js-mask" name="contact-phone" id="contact-phone" pattern="+7 \(9[0-9]{2}\) [0-9]{3}-[0-9]{4}" data-mask="+7 (999) 999-99-99" required>
                    </div>
                    <div class="my-2">
                        <label for="contact-email" class="form-label">Ваш E-mail</label>
                        <input type="email" class="form-control" name="contact-email" id="contact-email">
                    </div>
                    <div class="my-2">
                        <label for="contact-city" class="form-label">Ваш город</label>
                        <input type="text" class="form-control" name="contact-city" id="contact-city">
                    </div>
                    <div class="my-2">
                        <label for="contact-question" class="form-label required">Ваш вопрос</label>
                        <textarea class="form-control" name="contact-question" id="contact-question" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="contact-agree-policy" id="contact-agree-policy" required>
                        <label class="form-check-label fs-small" for="contact-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="contact__send-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                            Отправить
                        </button>
                    </div>
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
                <form action="" id="question-answers-form" name="question-answers-form">
                    <div class="my-2">
                        <label for="question-answers-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name="question-answers-name" id="question-answers-name" required>
                    </div>
                    <div class="my-2">
                        <label for="question-answers-phone" class="form-label required">Ваш номер телефона (только для связи, не будет показан)</label>
                        <input type="tel" class="form-control js-mask" name="question-answers-phone" id="question-answers-phone" pattern="+7 \(9[0-9]{2}\) [0-9]{3}-[0-9]{4}" data-mask="+7 (999) 999-99-99">
                    </div>
                    <div class="my-2">
                        <label for="question-answers-email" class="form-label">Ваш E-mail (только для связи, не будет показан)</label>
                        <input type="email" class="form-control" name="question-answers-email" id="question-answers-email">
                    </div>
                    <div class="my-2">
                        <label for="question-answers-question" class="form-label required">Ваш вопрос</label>
                        <textarea class="form-control" name="question-answers-question" id="question-answers-question" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="question-answers-agree-policy" id="question-answers-agree-policy" required>
                        <label class="form-check-label fs-small" for="question-answers-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="question-answers__send-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="feedback-modal">
    <div class="modal-dialog">
        <div class="modal-content p-4">
            <div class="modal-header">
                <p class="modal-title fw-bold fs-medium">Связаться с нами/p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="fs-small">
                    Оставьте здесь ваш вопрос, и мы ответим в течение 30 минут
                </p>
                <form action="" id="feedback-form" name="feedback-form">
                    <div class="my-2">
                        <label for="feedback-name" class="form-label required">Ваше имя</label>
                        <input type="text" class="form-control" name="feedback-name" id="feedback-name" required>
                    </div>
                    <div class="my-2">
                        <label for="feedback-surname" class="form-label required">Ваша фамилия</label>
                        <input type="text" class="form-control" name="feedback-surname" id="feedback-surname" required>
                    </div>
                    <div class="my-2">
                        <label for="feedback-city" class="form-label required">Ваш город</label>
                        <input type="text" class="form-control" name="feedback-city" id="feedback-city">
                    </div>
                    <div class="my-2">
                        <label for="feedback-organization" class="form-label">Ваша организация</label>
                        <input type="text" class="form-control" name="feedback-organization" id="feedback-organization">
                    </div>
                    <div class="my-2 form-check">
                        <input type="checkbox" class="form-check-input" name="feedback-agree-policy" id="feedback-agree-policy" required>
                        <label class="form-check-label fs-small" for="feedback-agree-policy">Я согласен с <a href="">условиями обработки</a> персональных данных</label>
                    </div>
                    <button type="submit" class="feedback__leave-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                        Отправить
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="module" src="/dist/js/main-min.js"></script>
</body>
</html>