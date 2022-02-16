<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

    CModule::IncludeModule('iblock');

    $items = [];
    $_REQUEST['items'] = json_decode($_REQUEST['items']);

    if ($_REQUEST['items']) {
        $arFilter  = ['IBLOCK_ID' => [IBLOCK_FURNITURE, IBLOCK_ALUMINIUM], 'ID' => $_REQUEST['items'], 'ACTIVE' => 'Y'];
        $arSelect = ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PROPERTY_PRICE'];
        $res = CIBlockElement::GetList([], $arFilter, false, ['nPageSize' => 999], $arSelect);
        while ($item = $res->GetNext()) {
            if ($item['PREVIEW_PICTURE']) $item['PREVIEW_PICTURE_SRC'] = CFile::GetPath($item['PREVIEW_PICTURE']);
            $items[] = $item;
        }
    }

    echo json_encode($items);
}
