<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['SECTIONS'])) {
    foreach ($arResult['SECTIONS'] as $keySection => $section) {
        foreach ($arResult['SECTIONS'] as $keySubSection => $subSection) {
            if ($subSection['IBLOCK_SECTION_ID'] === $section['ID']) {
                $arResult['SECTIONS'][$keySection]['SUB_SECTIONS'][] = $subSection;
                unset($arResult['SECTIONS'][$keySubSection]);
            }
        }
    }
}
