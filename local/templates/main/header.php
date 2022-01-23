<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/** @var $APPLICATION */

use \Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php $APPLICATION->ShowTitle(false); ?></title>
    <?php
        Asset::getInstance()->addCss('/node_modules/lightbox2/dist/css/lightbox.min.css');
        Asset::getInstance()->addCss('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');
        Asset::getInstance()->addCss('/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');
        Asset::getInstance()->addCss('/dist/css/style.css');
        Asset::getInstance()->addString('<script src="https://kit.fontawesome.com/c0475dd5ed.js" crossorigin="anonymous"></script>');
        Asset::getInstance()->addJs('/node_modules/jquery/dist/jquery.min.js');
        Asset::getInstance()->addJs('/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js');
        Asset::getInstance()->addJs('/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js');
        Asset::getInstance()->addJs('/node_modules/owl.carousel/dist/owl.carousel.min.js');
        Asset::getInstance()->addJs('/node_modules/lightbox2/dist/js/lightbox.min.js');

        $APPLICATION->ShowHead();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-image: url('/dist/img/bg-top.png');">

<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<header class="header position-fixed">
            <div class="header-main">
                <div class="header-top row px-4 py-2">
                    <a href="/" class="header-top__item col-md-2 d-md-inline d-none">
                        <img src="/dist/img/logo.svg" alt="Логотип Элита-Проф" class="header-logo">
                    </a>
                    <div class="header-top__item col-md-10 d-flex flex-column">
                        <div class="d-flex flex-lg-row flex-column justify-content-end">
                            <ul class="header-contacts d-flex flex-sm-row flex-column justify-content-md-end justify-content-center align-items-center">
                                <li class="header-contacts__item text-shadow-contour">
                                    <a href=""><i class="fas fa-phone"></i> (8552)77-80-90</a>
                                </li>
                                <li class="header-contacts__item text-shadow-contour">
                                    <a href=""><i class="fas fa-phone"></i> (8552)44-54-04</a>
                                </li>
                            </ul>
                            <ul class="header-contacts-social d-flex justify-content-md-end justify-content-center">
                                <li class="header-contacts__item text-shadow-contour">
                                    <a href=""><i class="fab fa-vk"></i></a>
                                </li>
                                <li class="header-contacts__item text-shadow-contour">
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="header-contacts__item text-shadow-contour">
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                </li>
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
                            <li class="header-nav__menu-item text-shadow-contour">
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
                    <img src="/dist/img/logo.svg" alt="Логотип Элита-Проф" class="header-logo">
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

<main class="main">