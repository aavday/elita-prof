<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>
    <div class="row">
        <?php
        foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
            ?>
            <a href="<?=$item['DETAIL_PAGE_URL']; ?>" class="col-4 photos-item text-center" id="<?=$item['ID']; ?>">
                <img src="<?=$item['PREVIEW_PICTURE']['SRC']; ?>" alt="<?=$item['NAME']; ?>" class="photos-item__img img-height-300px w-100 p-4 rounded shadow">
                <p><?=$item['NAME']; ?></p>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
