<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>
<div class="blog">
    <?php
    foreach ($arResult['ITEMS'] as $item):
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
        ?>
        <div class="blog-item row" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <div class="col-2">
                <img src="<?=$item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?=$item['NAME']; ?>" class="rounded shadow w-100">
            </div>
            <div class="col-10">
                <h2 class="fw-bold">
                    <?=$item['NAME']; ?>
                </h2>
                <p>
                    <i class="fas fa-calendar me-2" aria-hidden="true"></i><span><?=$item['DISPLAY_ACTIVE_FROM']; ?></span>
                </p>
                <p>
                    <?=$item['PREVIEW_TEXT']; ?>
                </p>
                <p>
                    <a href="<?=$item['DETAIL_PAGE_URL']; ?>">Читать далее ></a>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php endif; ?>