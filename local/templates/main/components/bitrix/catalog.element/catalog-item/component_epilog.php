<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */

if ($arResult['NAME'] !== '') {
    $APPLICATION->SetTitle('Элита Проф - ' . $arResult['NAME']);
}