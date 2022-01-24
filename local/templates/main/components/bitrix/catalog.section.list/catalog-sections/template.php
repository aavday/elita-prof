<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['SECTIONS'])):
?>
    <div class="row">
        <?php foreach ($arResult['SECTIONS'] as $section): ?>
            <div class="col-xl-3 col-sm-6">
                <a href="<?=$section['SECTION_PAGE_URL']; ?>" class="hover-scale text-center d-block dark-purple-link hover-underline fw-bold">
                    <img src="<?=$section['PICTURE']['SRC']; ?>" alt="" class="catalog-items__img rounded shadow w-100">
                    <p class="mt-2"><?=$section['NAME']; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

<?php endif; ?>