<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

    <section class="section container areas-of-activity pt-4">
        <div class="row justify-content-center">
        <?php
        foreach ($arResult['ITEMS'] as $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
            ?>
            <div class="col-xl col-md-6 col-12 mb-4">
                <div class="areas-of-activity-item bg-white p-4 rounded shadow" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    <div class="areas-of-activity-item__picture rounded w-100" style="background-image: url('<?=$item['PREVIEW_PICTURE']['SRC']; ?>');">
                        <?php if (!empty($item['PROPERTIES']['DETAIL_BTN']['VALUE'])): ?>
                        <a href="" class="areas-of-activity-item__detail-btn white-link hover-underline text-shadow-contour rounded shadow-white button button-dark-purple fs-medium">
                            Подробнее
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="areas-of-activity-item__name fs-medium my-2 fw-bold"><?=$item['NAME']; ?></div>
                    <p class="areas-of-activity-item__description">
                        <?=$item['PREVIEW_TEXT']; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>

<?php endif; ?>
