<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */

if ($arResult['SECTION']['NAME'] !== '') {
    $APPLICATION->SetTitle('Элита Проф - ' . $arResult['SECTION']['NAME']);
    $APPLICATION->SetPageProperty('title', $arResult['SECTION']['NAME']);
}