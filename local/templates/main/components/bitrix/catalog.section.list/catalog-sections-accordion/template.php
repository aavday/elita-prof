<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['SECTIONS'])):
?>
    <ul class="catalog-sections rounded shadow bg-purple-dark p-0  accordion accordion-flush">
    <?php
    foreach ($arResult['SECTIONS'] as $key => $section):
        if (!empty($section['SUB_SECTIONS'])) {
            $accordionBtnAttributes = 'class="accordion-button p-0 collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-' . $key . '"';
        } else {
            $accordionBtnAttributes = '';
        }
        ?>
        <li class="catalog-sections__item py-2 px-4">
            <button type="button" <?=$accordionBtnAttributes; ?>>
                <a href="<?=$section['SECTION_PAGE_URL']; ?>" class="white-link d-block accordion-header">
                    <?=$section['NAME']; ?>
                </a>
            </button>
            <?php if (!empty($section['SUB_SECTIONS'])): ?>
                <div class="accordion-collapse collapse" id="accordion-item-<?=$key; ?>">
                    <ul class="accordion-body">
                        <?php foreach ($section['SUB_SECTIONS'] as $subSection): ?>
                            <li class="catalog-sections__item py-2">
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
