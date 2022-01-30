<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

<div class="photos-main-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-loop="false" data-margin="10" data-nav="true" data-dotsEach="5" data-items="5" data-responsive='{"0":{"items":1},"576":{"items":2},"768":{"items":3},"992":{"items":5}}'>
    <?php foreach ($arResult['ITEMS'] as $item): ?>
    <a class="photos-main-slider__item d-block" <?php if ($item['DETAIL_PICTURE']['SRC']) echo 'href="' . $item['DETAIL_PICTURE']['SRC'] . '" data-lightbox="photos-main"'; ?>>
        <img src="<?=$item['PREVIEW_PICTURE']['SRC']; ?>" alt="" class="photos-main-slider__item-img">
    </a>
    <?php endforeach; ?>
</div>

<?php endif; ?>