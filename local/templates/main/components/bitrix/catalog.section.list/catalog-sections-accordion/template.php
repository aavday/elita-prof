<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['SECTIONS'])):
?>
    <ul class="catalog-sections rounded shadow bg-purple-dark p-0  accordion accordion-flush">
    <?php
    foreach ($arResult['SECTIONS'] as $key => $section):
        $this->AddEditAction($section['ID'], $section['EDIT_LINK'], CIBlock::GetArrayByID($section['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], CIBlock::GetArrayByID($section['IBLOCK_ID'], 'ELEMENT_DELETE'));
        ?>
        <li class="catalog-sections__item py-2 px-4" id="<?=$this->GetEditAreaId($section['ID']); ?>">
            <div class="d-flex">
                <a href="<?=$section['SECTION_PAGE_URL']; ?>" class="white-link d-block accordion-header">
                    <?=$section['NAME']; ?>
                </a>
                <?php if (!empty($section['SUB_SECTIONS'])): ?>
                <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#accordion-item-<?=$key; ?>"></button>
                <?php endif; ?>
            </div>
            <?php if (!empty($section['SUB_SECTIONS'])): ?>
            <div class="accordion-collapse collapse" id="accordion-item-<?=$key; ?>">
                <ul class="accordion-body">
                <?php
                foreach ($section['SUB_SECTIONS'] as $subSection):
                    $this->AddEditAction($subSection['ID'], $subSection['EDIT_LINK'], CIBlock::GetArrayByID($subSection['IBLOCK_ID'], 'ELEMENT_EDIT'));
                    $this->AddDeleteAction($subSection['ID'], $subSection['DELETE_LINK'], CIBlock::GetArrayByID($subSection['IBLOCK_ID'], 'ELEMENT_DELETE'));
                    ?>
                    <li class="catalog-sections__item py-2" id="<?=$this->GetEditAreaId($subSection['ID']); ?>">
                        <a href="<?=$subSection['SECTION_PAGE_URL']; ?>" class="white-link d-block"><?=$subSection['NAME']; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif;?>
