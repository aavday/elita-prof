<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

    <div class="row justify-content-sm-start justify-content-center">
        <?php foreach ($arResult['ITEMS'] as $item): ?>
        <div class="col-lg-3 col-sm-6 col-10">
            <img src="<?=$item['PREVIEW_PICTURE']['SRC']; ?>" alt="<?=$item['NAME']; ?>" class="team-member__img rounded shadow w-100 mx-auto mb-2">
            <div class="team-member__name fw-bold"><?=$item['NAME']; ?></div>
            <p class="team-member__position fs-small text-center"><?=$item['PROPERTIES']['POSITION']['VALUE']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>