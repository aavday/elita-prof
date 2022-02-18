<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @var CBitrixComponent $component */
/** @global CMain $APPLICATION */
?>
<div class="header-mob px-4 pb-3 pt-2 d-md-none d-flex justify-content-sm-between justify-content-center align-items-center">
    <div itemscope itemtype="http://schema.org/WebSite" class="d-md-none d-sm-flex d-none justify-content-center">
        <span itemprop="url" class="d-none">https://<?=$_SERVER['HTTP_HOST']; ?>/</span>
        <form action="/search/" class="search my-sm-0 justify-content-sm-start justify-content-center my-2" id="form-search" itemprop="potentialAction" itemscope itemtype="//schema.org/SearchAction">
            <meta itemprop="target" content="https://<?=$_SERVER['HTTP_HOST']; ?>/search/?q={q}"/>
            <input type="search" name="q" id="search" placeholder="Поиск по сайту" class="search-input" itemprop="query-input" required>
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="h-100">
        <img src="<?=CFIle::GetPath($arResult['PROPERTIES']['LOGO']['VALUE']); ?>" alt="Логотип Элита-Проф" class="header-logo">
        <div class="header-mob__nav-toggle mx-auto">
            <span class="header-mob__nav-toggle-line header-mob__nav-toggle-line-1 rounded"></span>
            <span class="header-mob__nav-toggle-line header-mob__nav-toggle-line-2 rounded"></span>
        </div>
    </div>
    <button class="button d-md-none d-sm-inline d-none button-dark-purple fs-medium text-shadow-contour hover-shadow-white rounded fw-bold ms-3" data-bs-toggle="modal" data-bs-target="#contact-modal">
        Связаться с нами
    </button>
</div>
