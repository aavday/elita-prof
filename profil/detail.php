<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - изготовление мебели любой сложности под заказ, доставка по всей России');
?>

<section class="section container catalog py-4">
    <div class="bg-white px-3 py-5 rounded">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list","catalog-sections-accordion",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => "3",
                        "SECTION_CODE" => "",
                        "TOP_DEPTH" => "2",
                    )
                );?>
            </div>
            <div class="col-xl-9 col-md-8">
                <?php $APPLICATION->IncludeComponent("bitrix:catalog.element","catalog-item",
                    Array(
                        "IBLOCK_TYPE" => "catalog",
                        "IBLOCK_ID" => "3",
                        "ELEMENT_CODE" => $_REQUEST['ELEMENT_CODE'],
                        "SET_TITLE" => "N",
                        "SET_BROWSER_TITLE" => "N"
                    )
                );?>
            </div>
        </div>
    </div>
</section>

<section class="section container catalog-color py-4">
    <div class="bg-white px-3 py-5 rounded">
        <h2 class="catalog-color__title section-title fs-big mb-4 text-center">
            Дополнительные цвета ЛДСП
        </h2>
        <div class="row">
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/color-1-big.jpg" data-lightbox="catalog-colors">
                    <img src="/dist/img/color-1.jpg" alt="" class="catalog-color__img w-100">
                </a>
                <div class="fs-small text-center">
                    Айскрим<br>
                    U9113
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section container catalog-color-wood py-4">
    <div class="bg-white px-3 py-5 rounded">
        <h2 class="catalog-color-wood-__title section-title fs-big mb-4 text-center">
            ЛДСП под дерево
        </h2>
        <div class="row">
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
            <div class="col-xl-1 col-md-2 col-3">
                <a href="/dist/img/wood-1-big.jpg" data-lightbox="catalog-colors-wood">
                    <img src="/dist/img/wood-1.jpg" alt="" class="catalog-color-wood__img w-100">
                </a>
                <div class="fs-small text-center">
                    Амброзия<br>
                    U9112
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>