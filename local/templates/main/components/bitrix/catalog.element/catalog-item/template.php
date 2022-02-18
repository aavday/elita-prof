<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
?>
<div class="catalog-item" itemtype="http://schema.org/Product" itemscope>
    <h1 class="catalog-item__title fs-big mb-4 fw-bold" itemprop="name">
        <?=$arResult['NAME']; ?>
    </h1>
    <div class="row mb-5">
        <div class="col-xl-5 col-lg-6">
            <div class="catalog-item-img-slider owl-carousel owl-carousel owl-theme rounded shadow" data--lazy-Load="true" data-margin="10" data-nav="true" data-items="1">
                <?php if ($arResult['PREVIEW_PICTURE']['SRC']): ?>
                <a <?php if ($arResult['DETAIL_PICTURE']['SRC']) echo 'href="' . $arResult['DETAIL_PICTURE']['SRC'] . '" data-lightbox="catalog-item"'; ?>>
                    <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']; ?>" itemprop="image" alt="<?=$arResult['NAME']; ?>" class="catalog-item__img w-100">
                </a>
                    <?php
                    if ($arResult['PROPERTIES']['PHOTOS']['VALUE']):
                        foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo):
                        ?>
                        <a href="<?=CFile::GetPath($photo); ?>" data-lightbox="catalog-item">
                            <img data-src="<?=CFile::GetPath($photo); ?>" itemprop="image" alt="<?=$arResult['NAME']; ?>" class="catalog-item__img w-100">
                        </a>
                        <?php
                        endforeach;
                    endif;
                    ?>
                <?php endif;?>
            </div>
        </div>
        <div class="col-xl-7 col-lg-6 mt-lg-0 mt-4" >
            <p class="catalog-item__preview-text" itemprop="description">
                <?=$arResult['PREVIEW_TEXT']; ?>
            </p>
            <div>
                <?php if ($arResult['PROPERTIES']['PRICE']['VALUE']): ?>
                <p class="fw-bold">Цена:</p>
                <p>От <b><?=$arResult['PROPERTIES']['PRICE']['VALUE']; ?></b> р.</p>
                <?php endif; ?>
                <button class="catalog-item__add-to-cart-btn py-2 button hover-scale button-dark-purple text-shadow-contour hover-shadow rounded fw-bold" data-itemId="<?=$arResult['ID']; ?>" title="Нажмите, чтобы добавить товар в корзину">
                    <i class="fas fa-cart-arrow-down me-2"></i>В корзину
                </button>
                <div class="mt-2">
                    <label for="item-<?=$arResult['ID']; ?>-quantity me-2">Кол-во:</label>
                    <input type="number" min="1" value="1" class="catalog-item__quantity rounded shadow border-purple-dark" id="item-<?=$arResult['ID']; ?>-quantity" title="Задайте нужное количество данного товара и добавьте в корзину" data-itemId="<?=$arResult['ID']; ?>">
                </div>
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
    <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
        <link itemprop="url" href="https://<?=$_SERVER['HTTP_HOST'] . $arResult['DETAIL_PAGE_URL']; ?>" />
        <meta itemprop="availability" content="http://schema.org/InStock" />
        <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
        <?php if ($arResult['PROPERTIES']['PRICE']['VALUE']): ?>
            <meta itemprop="priceCurrency" content="RUB" />
            <meta itemprop="price" content="<?=$arResult['PROPERTIES']['PRICE']['VALUE']; ?>" />
        <?php endif; ?>
        <div itemprop="seller">
            <meta itemprop="name" content="Элита-Проф" />
        </div>
    </div>
</div>
