<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

use \Bitrix\Main\Page\Asset;

$APPLICATION->SetTitle('Элита-Проф - корзина');
Asset::getInstance()->addJs('/dist/js/cart-min.js');
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
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>