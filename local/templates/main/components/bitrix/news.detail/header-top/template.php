<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @var CBitrixComponent $component */
/** @global CMain $APPLICATION */
?>
<div class="header-top row px-4 py-2">
    <a href="/" class="header-top__item col-md-2 d-md-inline d-none">
        <img src="<?=CFIle::GetPath($arResult['PROPERTIES']['LOGO']['VALUE']); ?>" alt="Логотип Элита-Проф" class="header-logo">
    </a>
    <div class="header-top__item col-md-10 d-flex flex-column">
        <div class="d-flex flex-lg-row flex-column justify-content-end">
            <ul class="header-contacts d-flex flex-sm-row flex-column justify-content-md-end justify-content-center align-items-center">
                <?php foreach ($arResult['PROPERTIES']['PHONES']['VALUE'] as $key => $phone): ?>
                <li class="header-contacts__item text-shadow-contour">
                    <a href=""><i class="fas fa-phone"></i> <?=$phone; ?></a>
                </li>
                <?php
                if ($key == 1) break;
                endforeach;
                ?>
            </ul>
            <ul class="header-contacts-social d-flex justify-content-md-end justify-content-center">
                <?php if ($arResult['PROPERTIES']['VK']['VALUE']): ?>
                <li class="header-contacts__item text-shadow-contour">
                    <a href="<?=$arResult['PROPERTIES']['VK']['VALUE']; ?>"><i class="fab fa-vk"></i></a>
                </li>
                <?php endif; ?>
                <?php if ($arResult['PROPERTIES']['INSTAGRAM']['VALUE']): ?>
                <li class="header-contacts__item text-shadow-contour">
                    <a href="<?=$arResult['PROPERTIES']['INSTAGRAM']['VALUE']; ?>"><i class="fab fa-instagram"></i></a>
                </li>
                <?php endif; ?>
                <?php if ($arResult['PROPERTIES']['FACEBOOK']['VALUE']): ?>
                <li class="header-contacts__item text-shadow-contour">
                    <a href="<?=$arResult['PROPERTIES']['FACEBOOK']['VALUE']; ?>"><i class="fab fa-facebook"></i></a>
                </li>
                <?php endif; ?>
                <?php if ($arResult['PROPERTIES']['OZON']['VALUE']): ?>
                    <li class="header-contacts__item text-shadow-contour">
                        <a href="<?=$arResult['PROPERTIES']['OZON']['VALUE']; ?>"><img src="/dist/img/ozon.svg" class="img-icon" alt=""></a>
                    </li>
                <?php endif; ?>
                <?php if ($arResult['PROPERTIES']['WILDBERRIES']['VALUE']): ?>
                    <li class="header-contacts__item text-shadow-contour">
                        <a href="<?=$arResult['PROPERTIES']['WILDBERRIES']['VALUE']; ?>"><img src="/dist/img/wildberries.svg" class="img-icon" alt=""></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="header-top-bottom text-center text d-md-flex d-sm-none flex-sm-row flex-column justify-content-end">
            <div itemscope itemtype="http://schema.org/WebSite" class="d-flex justify-content-center">
                <span itemprop="url" class="d-none">https://<?=$_SERVER['HTTP_HOST']; ?>/</span>
                <form action="/search/" class="search my-sm-0 justify-content-sm-start justify-content-center my-2" id="form-search" itemprop="potentialAction" itemscope itemtype="//schema.org/SearchAction">
                    <meta itemprop="target" content="https://<?=$_SERVER['HTTP_HOST']; ?>/search/?q={q}"/>
                    <input type="search" name="q" id="search" placeholder="Поиск по сайту" class="search-input" itemprop="query-input" required>
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <button class="button button-dark-purple fs-medium text-shadow-contour hover-shadow-white rounded fw-bold ms-3" data-bs-toggle="modal" data-bs-target="#contact-us-modal">
                Связаться с нами
            </button>
        </div>
    </div>
</div>
