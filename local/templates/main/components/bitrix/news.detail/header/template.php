<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */
?>

<header class="header position-fixed">
    <div class="header-main">
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
                    </ul>
                </div>
                <div class="header-top-bottom text-center text d-md-flex d-sm-none flex-sm-row flex-column justify-content-end">
                    <div class="search my-sm-0 justify-content-sm-start justify-content-center my-2">
                        <input type="text" name="search" id="search h-100" placeholder="Поиск по сайту" class="search-input">
                        <button class="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                    <button class="button button-dark-purple fs-medium text-shadow-contour hover-shadow-white rounded fw-bold ms-3" data-bs-toggle="modal" data-bs-target="#contact-modal">
                        Связаться с нами
                    </button>
                </div>
            </div>
        </div>
        <div class="header-bottom px-4">
            <nav class="header-nav text-shadow-contour" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <ul class="header-nav__menu d-flex flex-md-row flex-column justify-content-around align-items-center">
                    <li class="header-nav__menu-item">
                        <a href="" itemprop="url" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">О компании</a>
                        <ul class="dropdown-menu px-3 bg-purple-dark" aria-labelledby="dropdownMenuLink">
                            <li class="my-3"><a class="dropdown-item" href="/o-kompanii/">О компании</a></li>
                            <li class="my-3"><a class="dropdown-item" href="/komanda/">Команда</a></li>
                            <li class="my-3"><a class="dropdown-item" href="/dostizheniya/">Достижения</a></li>
                            <li class="my-3"><a class="dropdown-item" href="/dilerskaya-informaciya/">Дилерская информация</a></li>
                            <li class="my-3"><a class="dropdown-item" href="/privacy-policy/">Согласие на обработку персональных данных</a></li>
                        </ul>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="/mebel/" itemprop="url">Мебель</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="/profil/" itemprop="url">Алюминиевый профиль</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="/photo/" itemprop="url">Фото</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="/vopros-otvet/" itemprop="url">Вопрос-ответ</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="/blog/" itemprop="url">Блог</a>
                    </li>
                    <li class="header-nav__menu-item">
                        <a href="/contacts/" itemprop="url">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-mob px-4 pb-3 pt-2 d-md-none d-flex justify-content-sm-between justify-content-center align-items-center">
        <div class="search h-100 d-md-none d-sm-flex d-none">
            <input type="text" name="search" id="search" placeholder="Поиск по сайту" class="search-input">
            <button class="search-btn"><i class="fas fa-search"></i></button>
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
</header>
