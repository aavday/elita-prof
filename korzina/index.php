<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

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
            <div class="fs-big">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/cart/empty_cart_text.html"
                    )
                );?>
            </div>
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>