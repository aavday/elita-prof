<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

    <section class="section container catalog-colors py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="catalog-colors__title section-title fs-big mb-4 text-center">
                Цвета алюминия
            </h2>
            <nav>
                <div class="nav nav-tabs">
                    <?php foreach ($arResult['SECTIONS'] as $key => $section): ?>
                    <button class="nav-link <?php if ($key == 0) echo 'active'; ?>" data-bs-toggle="tab" data-bs-target="#color-tab-<?=$key; ?>" type="button">
                        <?=$section['NAME']; ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </nav>
            <div class="tab-content">
                <?php foreach ($arResult['SECTIONS'] as $key => $section): ?>
                <div class="tab-pane <?php if ($key == 0) echo 'show active'; ?>" id="color-tab-<?=$key; ?>">
                    <div class="row">
                        <?php
                        foreach ($arResult['ITEMS'] as $item):
                            if ($item['IBLOCK_SECTION_ID'] != $section['ID']) continue;
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
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>