<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

use \Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs('/dist/js/cart-min.js');

$APPLICATION->SetTitle('Элита-Проф - корзина');
?>

    <section class="section container cart py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h1 class="cart__title text-center section-title fs-big mb-4">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/cart/h1.html"
                    )
                );?>
            </h1>
            <div class="loader text-center">
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
            </div>
            <div class="fs-big cart__empty-text d-none">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/cart/empty_cart_text.html"
                    )
                );?>
            </div>
            <div class="cart-items"></div>
            <form class="cart__place-order my-2 ajax-form d-none" id="cart__place-order" name="cart__place-order" data-handlerUrl="/ajax/forms/ajax_form.php" data-successText="Спасибо за ваш заказ! Скоро с вами свяжется один из наших менеджеров">
                <h2 class="text-center fw-bold fs-big">
                    <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/cart/place_order_title.html"
                        )
                    );?>
                </h2>
                <div class="d-flex row">
                    <div class="col-md-4 col-12 my-2">
                        <label for="cart__place-order-name" class="form-label required">Как к вам обращаться</label>
                        <input type="text" class="form-control" name="Имя" id="cart__place-order-name" required>
                    </div>
                    <div class="col-md-4 col-12 my-2">
                        <label for="cart__place-order-phone" class="form-label required">Ваш номер телефона</label>
                        <input type="tel" class="form-control js-mask" name="Номер" id="cart__place-order-phone" pattern="+7 \(9[0-9]{2}\) [0-9]{3}-[0-9]{4}" data-mask="+7 (999) 999-99-99" required>
                    </div>
                    <div class="col-md-4 col-12 my-2">
                        <label for="cart__place-order-email" class="form-label">Ваш E-mail</label>
                        <input type="email" class="form-control" name="E-mail" id="cart__place-order-email">
                    </div>
                </div>
                <div class="d-flex row">
                    <div class="col-md-6 col-12 my-2">
                        <label for="cart__place-order-city" class="form-label">Ваш город</label>
                        <input type="text" class="form-control" name="Город" id="cart__place-order-city">
                    </div>
                    <div class="col-md-6 col-12 my-2">
                        <label for="cart__place-order-organization" class="form-label">Ваша организация</label>
                        <input type="text" class="form-control" name="Организация" id="cart__place-order-organization">
                    </div>
                </div>
                <div class="my-2">
                    <label for="cart__place-order-comment" class="form-label">Комментарий к заказу</label>
                    <textarea class="form-control" name="Комментарий" id="cart__place-order-comment" cols="30" rows="10"></textarea>
                </div>
                <div class="my-2 form-check">
                    <input type="checkbox" class="form-check-input" name="agree-policy" id="cart__place-order-agree-policy" required>
                    <label class="form-check-label fs-small" for="cart__place-order-agree-policy">Я согласен с <a href="/privacy-policy/">условиями обработки</a> персональных данных</label>
                </div>
                <button type="submit" class="cart__place-order__submit-btn mt-2 py-2 text-shadow-contour hover-underline rounded shadow-white button button-dark-purple fs-medium">
                    Оформить заказ
                </button>
                <input type="hidden" name="subject" value="Оформлен заказ">
                <textarea name="Товары" id="cart__place-order__items-data" cols="30" rows="10" class="cart__place-order__items-data d-none"></textarea>
            </form>
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>