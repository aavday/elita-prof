<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponent $component */
/** @global CMain $APPLICATION */

if (!empty($arResult['SECTIONS'])):
?>
    <div class="row">
        <?php foreach ($arResult['SECTIONS'] as $section):
            $this->AddEditAction($section['ID'], $section['EDIT_LINK'], CIBlock::GetArrayByID($section['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], CIBlock::GetArrayByID($section['IBLOCK_ID'], 'ELEMENT_DELETE'));
            ?>
            <div class="col-xl-3 col-sm-6">
                <a href="<?=$section['SECTION_PAGE_URL']; ?>" class="hover-scale text-center d-block dark-purple-link hover-underline fw-bold">
                    <img src="<?=$section['PICTURE']['SRC']; ?>" alt="<?=$section['NAME']; ?>" class="catalog-items__img rounded shadow w-100">
                    <p class="mt-2"><?=$section['NAME']; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

<?php else: ?>

<?php $APPLICATION->IncludeComponent("bitrix:catalog.section","catalog-section-elements",
    Array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "1",
        "SECTION_CODE" => $arParams['SECTION_CODE'],
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N"
    ),
    $component
);?>

<?php endif; ?>