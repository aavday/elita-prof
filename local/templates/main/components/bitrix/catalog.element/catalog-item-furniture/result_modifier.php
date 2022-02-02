<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult)) {
    if (!empty($arResult['PROPERTIES']['COLORS']['VALUE'])) {
        $arColors = $arResult['PROPERTIES']['COLORS'];

        $arFilter = ['IBLOCK_ID' => IBLOCK_FURNITURE_COLORS, 'ID' => $arColors['VALUE']];
        $arSelect = ['ID', 'IBLOCK_ID', 'NAME', 'CODE', 'DETAIL_PICTURE', 'PREVIEW_PICTURE', 'PROPERTY_TEXT_COLOR'];
        $res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
        while ($ob = $res->Fetch()) {
            $arColors['FIELDS'][] = $ob;
        }

        $res = CIBlockPropertyEnum::GetList([], ['IBLOCK_ID' => IBLOCK_FURNITURE_COLORS, 'CODE' => 'TEXT_COLOR']);

        $textColorPropertyEnums = [];

        while ($ob = $res->Fetch()) {
            $textColorPropertyEnums[] = $ob;
        }

        foreach ($arColors['FIELDS'] as $key => $colorFields) {
            foreach ($textColorPropertyEnums as $textColorPropertyEnum) {
                if ($colorFields['PROPERTY_TEXT_COLOR_ENUM_ID'] === $textColorPropertyEnum['ID']) {
                    $arColors['FIELDS'][$key]['PROPERTY_TEXT_COLOR_XML_ID'] = $textColorPropertyEnum['XML_ID'];
                    break;
                }
            }
        }

        $arResult['PROPERTIES']['COLORS'] = $arColors;
    }
}
