<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult)) {
    if (!empty($arResult['PROPERTIES']['COLORS']['VALUE'])) {
        $arColors = $arResult['PROPERTIES']['COLORS'];

        $arFilter = ['IBLOCK_ID' => IBLOCK_ALUMINIUM_COLORS, 'ID' => $arColors['VALUE']];
        $arSelect = ['ID', 'IBLOCK_ID', 'NAME', 'IBLOCK_SECTION_ID', 'CODE', 'DETAIL_PICTURE', 'PREVIEW_PICTURE', 'PROPERTY_TEXT_COLOR'];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        while ($ob = $res->Fetch()) {
            $arColors['FIELDS'][] = $ob;
        }

        $sectionIds = [];

        foreach ($arColors['FIELDS'] as $key => $item) {
            $sectionIds[] = $item['IBLOCK_SECTION_ID'];
        }

        $arFilter  = ['IBLOCK_ID' => IBLOCK_ALUMINIUM_COLORS, 'ID' => $sectionIds];
        $arSelect = ['ID', 'IBLOCK_ID', 'NAME'];
        $res = CIBlockSection::GetList([], $arFilter, false, $arSelect);
        while ($section = $res->GetNext()) {
            $arColors['SECTIONS'][] = $section;
        }

        $arResult['PROPERTIES']['COLORS'] = $arColors;
    }
}
