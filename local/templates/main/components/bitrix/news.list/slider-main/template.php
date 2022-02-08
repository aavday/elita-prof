<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

    <section class="section intro container-fluid py-4 px-md-4">
        <div class="h-100 w-100">
            <div class="intro-slider text-shadow-contour owl-carousel owl-theme" data-loop="true" data-margin="10" data-nav="true" data-items="1" data-autoplay="true">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                <div class="intro-slider-item">
                    <div class="intro-slider-item__img" style="background-image: url('<?=$item['PREVIEW_PICTURE']['SRC']; ?>')"></div>
                    <div class="intro-slider-item__txt-big fw-bold"><?=$item['PREVIEW_TEXT']; ?></div>
                    <div class="intro-slider-item__txt-small"><?=$item['DETAIL_TEXT']; ?></div>
                    <?php if ($item['PROPERTIES']['DETAIL_BTN']['VALUE'] === 'Y'): ?>
                    <a href="<?=$item['PROPERTIES']['DETAIL_BTN_TEXT']['VALUE']; ?>" class="intro-slider-item__btn text-shadow-contour button button-dark-purple white-link fs-medium hover-scale rounded shadow-white fw-bold">
                        Подробнее
                    </a>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>