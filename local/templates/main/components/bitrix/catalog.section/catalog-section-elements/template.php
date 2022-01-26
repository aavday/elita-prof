<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */

if (!empty($arResult['ITEMS'])):
    $APPLICATION->SetTitle('Элита Проф - ' . $arResult['NAME']);
    $APPLICATION->SetPageProperty('title', $arResult['NAME']);
    ?>
    <div class="row">
        <?php foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
            ?>
            <div class="col-xl-3 col-sm-6">
                <a href="<?=$item['DETAIL_PAGE_URL']; ?>" class="hover-scale text-center d-block dark-purple-link hover-underline fw-bold">
                    <img src="<?=$item['DETAIL_PICTURE']['SRC']; ?>" alt="" class="catalog-items__img rounded shadow w-100">
                    <p class="mt-2"><?=$item['NAME']; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>