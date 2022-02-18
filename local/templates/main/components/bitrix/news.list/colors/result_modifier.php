<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */

if (!empty($arResult['ITEMS'])) {
    $sectionIds = [];

    foreach ($arResult['ITEMS'] as $key => $item) {
        $sectionIds[] = $item['IBLOCK_SECTION_ID'];
    }

    $arFilter  = ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ID' => $sectionIds, 'ACTIVE' => 'Y'];
    $arSelect = ['ID', 'IBLOCK_ID', 'NAME'];
    $res = CIBlockSection::GetList([], $arFilter, false, $arSelect);
    while ($section = $res->GetNext()) {
        $arResult['SECTIONS'][] = $section;
    }
}
