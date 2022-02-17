<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['SECTIONS'])):
?>
<nav class="footer__nav">
    <ul class="accordion accordion-flush">
    <?php
    foreach ($arResult['SECTIONS'] as $key => $section):
        $this->AddEditAction($section['ID'], $section['EDIT_LINK'], CIBlock::GetArrayByID($section['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($section['ID'], $section['DELETE_LINK'], CIBlock::GetArrayByID($section['IBLOCK_ID'], 'ELEMENT_DELETE'));
        if (!empty($section['SUB_SECTIONS'])):
        ?>
        <li class="footer__nav-item mb-2" id="<?=$this->GetEditAreaId($section['ID']); ?>">
            <div class="d-flex">
                <a href="<?=$section['SECTION_PAGE_URL']; ?>" class="white-link hover-underline accordion-header"><?=$section['NAME']; ?></a>
                <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#footer-sections-<?=$arResult['IBLOCK_SECTION_ID']; ?>-accordion-item-<?=$key; ?>"></button>
            </div>
            <div class="accordion-collapse collapse" id="footer-sections-<?=$arResult['IBLOCK_SECTION_ID']; ?>-accordion-item-<?=$key; ?>">
                <ul class="accordion-body" aria-labelledby="dropdownMenuLink">
                <?php
                foreach ($section['SUB_SECTIONS'] as $subSection):
                    $this->AddEditAction($subSection['ID'], $subSection['EDIT_LINK'], CIBlock::GetArrayByID($subSection['IBLOCK_ID'], 'ELEMENT_EDIT'));
                    $this->AddDeleteAction($subSection['ID'], $subSection['DELETE_LINK'], CIBlock::GetArrayByID($subSection['IBLOCK_ID'], 'ELEMENT_DELETE'));
                    ?>
                    <li class="my-3" id="<?=$this->GetEditAreaId($subSection['ID']);?>">
                        <a class="color-white text-decoration-none" href="<?=$subSection['SECTION_PAGE_URL']; ?>"><?=$subSection['NAME']; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </li>
        <?php else: ?>
        <li class="footer__nav-item mb-2" id="<?=$this->GetEditAreaId($section['ID']); ?>">
            <a href="<?=$section['SECTION_PAGE_URL']; ?>" class="white-link hover-underline"><?=$section['NAME']; ?></a>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</nav>
<?php endif;?>
