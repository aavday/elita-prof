<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>
<div class="feedback-slider color-white pb-5 owl-carousel owl-theme owl-nav-bottom" data-loop="true" data-margin="10" data-nav="true" data-dots="false" data-autoplay="true" data-center="true" data-items="1">
<?php foreach ($arResult['ITEMS'] as $item):
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
    ?>
    <div class="feedback__item p-4 rounded" id="<?=$this->GetEditAreaId($item['ID']);?>">
        <div class="feedback__item-header d-flex">
            <p class="d-flex flex-column">
                <span class="feedback__item-name fw-bold"><?=$item['PROPERTIES']['NAME']['VALUE']; ?></span>
                <span class="feedback__item-subtitle fs-small"><?=$item['PROPERTIES']['CITY']['VALUE']; ?></span>
            </p>
        </div>
        <p class="feedback__item-text">
            <?=$item['PROPERTIES']['TEXT']['VALUE']['TEXT']; ?>
        </p>
    </div>
<?php endforeach; ?>
</div>
<?php endif; ?>