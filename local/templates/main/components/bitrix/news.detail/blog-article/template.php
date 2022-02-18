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
    <p class="blog-article__detail-text">
        <?=$arResult['DETAIL_TEXT']; ?>
    </p>
    <time itemprop="datePublished" datetime="<?=$arResult['DISPLAY_ACTIVE_FROM']; ?>"></time>
    <span itemprop="author" class="d-none">ООО "Элита-Проф"</span>
    <div itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
        <div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
            <img itemprop="url" src="/src/img/logo.svg" />
        </div>
        <meta itemprop="name" content="<?=$_SERVER['HTTP_HOST']; ?>">
        <meta itemprop="url" content="https://<?=$_SERVER['HTTP_HOST']; ?>">
    </div>
    <meta itemscope itemprop="mainEntityOfPage" itemType="http://schema.org/WebPage" itemid="https://<?=$_SERVER['HTTP_HOST']; ?><?=$arResult['DETAIL_PAGE_URL']; ?>" />
</div>

