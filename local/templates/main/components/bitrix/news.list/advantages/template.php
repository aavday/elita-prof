<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>
<div class="row">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
    <div class="col-lg-3 col-sm-6 col-12">
        <div class="advantages__item d-flex">
            <?php if (!empty($item['PROPERTIES']['ICON']['VALUE'])): ?>
            <i class="<?=$item['PROPERTIES']['ICON']['VALUE']; ?> fs-big color-purple-dark"></i>
            <?php endif; ?>
            <div class="d-flex flex-column ms-2">
                <p class="fw-bold color-purple-dark"><?=$item['NAME']; ?></p>
                <p>
                    <?=$item['PREVIEW_TEXT']; ?>
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>