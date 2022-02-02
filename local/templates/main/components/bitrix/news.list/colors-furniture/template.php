<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

    <section class="section container catalog-color py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="catalog-color__title section-title fs-big mb-4 text-center">
                <?=$arResult['SECTION']['PATH'][0]['NAME']; ?>
            </h2>
            <div class="row">
            <?php foreach ($arResult['ITEMS'] as $item):
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
                ?>
                <div class="col-xl-1 col-md-2 col-3 mb-2">
                    <a href="<?=$item['DETAIL_PICTURE']['SRC']; ?>" data-lightbox="catalog-colors">
                        <img src="<?=$item['PREVIEW_PICTURE']['SRC']; ?>" alt="Цвет <?=$item['NAME']; ?>" class="catalog-color__img w-100">
                    </a>
                    <div class="fs-small text-center">
                        <?=$item['NAME']; ?><br>
                        <?=$item['CODE']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>