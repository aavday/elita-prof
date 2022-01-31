<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */
?>

<h1 class="blog-article__title section-title fs-big mb-4 text-center">
    <?=$arResult['NAME']; ?>
</h1>
<p>
    <i class="fas fa-calendar me-2" aria-hidden="true"></i><span><?=$arResult['DISPLAY_ACTIVE_FROM']; ?></span>
</p>
<p class="blog-article__detail-text">
    <?=$arResult['DETAIL_TEXT']; ?>
</p>

