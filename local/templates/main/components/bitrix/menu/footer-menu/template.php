<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */

if (!empty($arResult)):
?>
<nav class="footer__nav">
    <ul class="accordion accordion-flush">
    <?php foreach($arResult as $key => $item): ?>
        <?php if (!empty($item['SUB_ITEMS'])): ?>
        <li class="footer__nav-item mb-2 <?php if($item['SELECTED']) echo 'fw-bold'; ?>">
            <div class="d-flex">
                <a class="white-link hover-underline accordion-header"><?=$item['TEXT']; ?></a>
                <button type="button" class="accordion-button collapsed p-0" data-bs-toggle="collapse" data-bs-target="#footer-other-sections-accordion-item-<?=$key; ?>"></button>
            </div>
            <div class="accordion-collapse collapse" id="footer-other-sections-accordion-item-<?=$key; ?>">
                <ul class="accordion-body" aria-labelledby="dropdownMenuLink">
                    <?php foreach ($item['SUB_ITEMS'] as $subItem): ?>
                        <li class="my-3">
                            <a class="color-white text-decoration-none" href="<?=$subItem['LINK']?>"><?=$subItem['TEXT']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </li>
        <?php else: ?>
        <li class="footer__nav-item mb-2 <?php if($item['SELECTED']) echo 'fw-bold'; ?>">
            <a href="<?=$item['LINK']?>" class="white-link hover-underline"><?=$item['TEXT']; ?></a>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>

