<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult)):
?>

    <div class="catalog-item">
        <h1 class="catalog-item__title fs-big mb-4 fw-bold">
            <?=$arResult['NAME']; ?>
        </h1>
        <div class="row mb-5">
            <div class="col-xl-5 col-lg-6">
                <div class="catalog-item-img-slider owl-carousel owl-carousel owl-theme rounded shadow" data-margin="10" data-nav="true" data-items="1">
                    <?php if ($arResult['PREVIEW_PICTURE']['SRC']): ?>
                    <a <?php if ($arResult['DETAIL_PICTURE']['SRC']) echo 'href="' . $arResult['DETAIL_PICTURE']['SRC'] . '" data-lightbox="catalog-item"'; ?>>
                        <img src="<?=$arResult['PREVIEW_PICTURE']['SRC']; ?>" alt="<?=$arResult['NAME']; ?>" class="catalog-item__img w-100">
                    </a>
                        <?php
                        if ($arResult['PROPERTIES']['PHOTOS']['VALUE']):
                            foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo):
                            ?>
                            <a href="<?=CFile::GetPath($photo); ?>" data-lightbox="catalog-item">
                                <img src="<?=CFile::GetPath($photo); ?>" alt="<?=$arResult['NAME']; ?>" class="catalog-item__img w-100">
                            </a>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    <?php endif;?>
                </div>
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
                    <button class="catalog-item__add-to-cart-btn py-2 button hover-scale button-dark-purple text-shadow-contour hover-shadow rounded fw-bold" data-itemId="<?=$arResult['ID']; ?>" title="Нажмите, чтобы добавить товар в корзину">
                        <i class="fas fa-cart-arrow-down me-2"></i>В корзину
                    </button>
                    <?php if (!empty($arResult['PROPERTIES']['COLORS']['VALUE'])): ?>
                    <p class="catalog-item__colors">
                        <p class="fw-bold">Цвет:</p>
                        <?php foreach ($arResult['PROPERTIES']['COLORS']['FIELDS'] as $key => $colorFields): ?>
                        <input type="radio" name="color" id="color-<?=$colorFields['ID']; ?>" value="<?=$colorFields['NAME']; ?>" class="catalog-item__colors-radio d-none" <?php if ($key === 0) echo 'checked'; ?>>
                        <label for="color-<?=$colorFields['ID']; ?>" class="catalog-item__colors-label button rounded py-2" style="background-image: url('<?=CFile::GetPath($colorFields['PREVIEW_PICTURE']); ?>'); color: <?=$colorFields['PROPERTY_TEXT_COLOR_XML_ID']; ?>;">
                            <?=$colorFields['NAME']; ?>
                        </label>
                        <?php endforeach; ?>
                    </p>
                    <?php endif; ?>
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
