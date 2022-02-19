<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */

use \Bitrix\Main\Page\Asset;

Asset::getInstance()->addString('<link rel="canonical" href="https://' . $_SERVER['HTTP_HOST'] . $arResult['DETAIL_PAGE_URL'] . '"/>');
?>

<h1 class="photo__title section-title fs-big mb-4 text-center">
    <?=$arResult['NAME']; ?>
</h1>
<p class="photo__detail-text">
    <?=$arResult['DETAIL_TEXT']; ?>
</p>
<div class="photo-items">
    <div class="row">
        <?php foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $key => $photo): ?>
        <a href="<?=CFile::GetPath($photo); ?>" class="col-4 photo-item text-center my-3" data-lightbox="photo-items">
            <img src="<?=CFile::GetPath($photo); ?>" alt="<?=$arResult['NAME'] . '-' . $key; ?>" class="photo-item__img img-height-300px w-100 p-4 rounded shadow">
        </a>
        <?php endforeach; ?>
    </div>
</div>
