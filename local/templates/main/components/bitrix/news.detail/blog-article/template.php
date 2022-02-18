<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */
?>

<div itemscope itemtype="http://schema.org/Article" class="blog-article">
    <h1 class="blog-article__title section-title fs-big mb-4 text-center" itemprop="headline">
        <?=$arResult['NAME']; ?>
    </h1>
    <p>
        <i class="fas fa-calendar me-2" aria-hidden="true"></i><span><?=$arResult['DISPLAY_ACTIVE_FROM']; ?></span>
    </p>
    <div class="blog-article__detail-text py-3" itemprop="articleBody">
        <?=$arResult['DETAIL_TEXT']; ?>
    </div>
    <time itemprop="datePublished" datetime="<?=$arResult['DISPLAY_ACTIVE_FROM']; ?>"></time>
    <span itemprop="author" class="d-none">ООО "Элита-Проф"</span>
    <div itemprop="publisher">
        <meta itemprop="name" content="Элита-Проф">
    </div>
    <meta itemscope itemprop="mainEntityOfPage" itemType="http://schema.org/WebPage" itemid="https://<?=$_SERVER['HTTP_HOST']; ?><?=$arResult['DETAIL_PAGE_URL']; ?>" />
</div>

