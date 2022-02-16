<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */

if (!empty($arResult['ITEMS'])):
?>
<div class="row">
    <?php foreach ($arResult['ITEMS'] as $item):
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
        ?>
        <div class="col-xl-3 col-sm-6 mb-4">
            <a href="<?=$item['DETAIL_PAGE_URL']; ?>" class="hover-scale text-center d-block dark-purple-link hover-underline fw-bold">
                <img src="<?=$item['DETAIL_PICTURE']['SRC']; ?>" alt="<?=$item['NAME']; ?>" class="catalog-items__img rounded shadow w-100">
                <p class="my-2"><?=$item['NAME']; ?></p>
            </a>
            <div class="text-center mt-3">
                <?php if ($item['PROPERTIES']['PRICE']['VALUE']): ?>
                <div class="mb-1">От <b><?=$item['PROPERTIES']['PRICE']['VALUE']; ?> р.</b></div>
                <?php endif; ?>
                <button class="catalog-item__add-to-cart-btn fs-small py-2 button hover-scale button-dark-purple text-shadow-contour hover-shadow rounded fw-bold" data-itemId="<?=$item['ID']; ?>" title="Нажмите, чтобы добавить товар в корзину">
                    <i class="fas fa-cart-arrow-down me-2"></i>В корзину
                </button>
                <div class="mt-2">
                    <label for="item-<?=$item['ID'] ?>-quantity">Кол-во:</label>
                    <input type="number" class="catalog-item__quantity rounded shadow border-purple-dark" id="item-<?=$item['ID'] ?>-quantity" title="Задайте нужное количество данного товара и добавьте в корзину">
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>