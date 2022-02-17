<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>
<div class="mt-5">
    <h2 class="text-center mb-3">
        <?=$arResult['NAME']; ?>
    </h2>
    <div class="certificates-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-margin="5" data-nav="true" data-dots="true" data-dotsEach="5" data-responsive='{"0":{"items":1,"dots":false},"576":{"items":2},"768":{"items":3},"992":{"items":4},"1400":{"items":5}}'>
    <?php
    foreach ($arResult['ITEMS'] as $item):
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
        ?>
        <a href="<?=$item['DETAIL_PICTURE']['SRC']; ?>" class="certificates-slider__item" data-lightbox="certificates" id="<?=$this->GetEditAreaId($item['ID']);?>">
            <img src="<?=$item['PREVIEW_PICTURE']['SRC']; ?>" alt="Элита-Проф сертификат <?=$key; ?>" class="certificates-slider__item-img rounded w-auto mx-auto">
        </a>
    <?php endforeach; ?>
    </div>
</div>
<?php endif; ?>
