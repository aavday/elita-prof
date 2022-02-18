<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

<div class="photos-main-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-loop="false" data-margin="10" data-nav="true" data-lazy-Load="true" data-items="5" data-responsive='{"0":{"items":1,"dotsEach":1},"576":{"items":2,"dotsEach":2},"768":{"items":3,"dotsEach":3},"992":{"items":5,"dotsEach":5}}'>
<?php
foreach ($arResult['ITEMS'] as $item):
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
    ?>
    <a class="photos-main-slider__item d-block" <?php if ($item['DETAIL_PICTURE']['SRC']) echo 'href="' . $item['DETAIL_PICTURE']['SRC'] . '" data-lightbox="photos-main"'; ?> id="<?=$this->GetEditAreaId($item['ID']);?>">
        <img data-src="<?=$item['PREVIEW_PICTURE']['SRC']; ?>" alt="" class="owl-lazy photos-main-slider__item-img">
    </a>
<?php endforeach; ?>
</div>

<?php endif; ?>