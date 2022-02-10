<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

$parentItemKey = 0;
$nextItemIsChild = false;

foreach ($arResult as $key => $item) {
    if ($item['IS_PARENT'] == 1) {
        $parentItemKey = $key;
        $nextItemIsChild = true;
    } else if ($nextItemIsChild && $item['DEPTH_LEVEL'] == 1) {
        $nextItemIsChild = false;
    } else if ($nextItemIsChild && $item['DEPTH_LEVEL'] > 1) {
        $arResult[$parentItemKey]['SUB_ITEMS'][] = $item;
        unset($arResult[$key]);
    }
}