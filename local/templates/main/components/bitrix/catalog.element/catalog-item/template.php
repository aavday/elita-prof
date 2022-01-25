<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult)):
?>

    <div class="catalog-item">
        <h1 class="catalog-item__title fs-big mb-4 fw-bold">
            <?=$arResult['NAME']; ?>
        </h1>
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <a href="<?=$arResult['DETAIL_PICTURE']['SRC']; ?>" data-lightbox="catalog-item">
                    <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']; ?>" alt="" class="catalog-item__img rounded shadow w-100">
                </a>
            </div>
            <div class="col-xl-7 col-lg-6 mt-lg-0 mt-4" >
                <p class="catalog-item__preview-text">
                    <?=$arResult['PREVIEW_TEXT']; ?>
                </p>
                <div>
                    <?php if ($arResult['PROPERTIES']['PRICE']['VALUE']): ?>
                    <p class="fw-bold">Цена:</p>
                    <p>От <b><?=$arResult['PROPERTIES']['PRICE']['VALUE']; ?> р.</b></p>
                    <?php endif; ?>
                    <button class="catalog-item__add-to-cart-btn py-2 button hover-scale button-dark-purple text-shadow-contour hover-shadow rounded fw-bold">
                        <i class="fas fa-cart-arrow-down me-2"></i>В корзину
                    </button>
                    <p class="catalog-item__colors">
                    <p class="fw-bold">Цвет:</p>
                    <input type="radio" name="color" id="color-1" class="catalog-item__colors-radio d-none" checked>
                    <label for="color-1" class="catalog-item__colors-label button rounded py-2" style="background-image: url('/dist/img/color-1-big.jpg')">
                        Айскрим
                    </label>
                    <input type="radio" name="color" id="color-2" class="catalog-item__colors-radio d-none">
                    <label for="color-2" class="catalog-item__colors-label color-white button rounded py-2" style="background-image: url('/dist/img/wood-1-big.jpg')">
                        Амброзия
                    </label>
                    </p>
                </div>
            </div>
        </div>
        <p class="catalog-item__detail-text">
            <?=$arResult['DETAIL_TEXT']; ?>
        </p>
        <div class="catalog-item__disclaimer bg-light-yellow rounded p-3">
            * Точная цена изделия зависит от его габаритных размеров, используемых материалов и комплектующих.
            По желанию клиента в стоимость может включаться доставка, монтаж изделия.
            <b>Скидки при заказе партии и постоянным покупателям</b>
        </div>
    </div>

<?php endif; ?>