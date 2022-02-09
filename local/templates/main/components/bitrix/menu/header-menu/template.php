<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */

if (!empty($arResult)):
?>
<nav class="header-nav text-shadow-contour" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <ul class="header-nav__menu d-flex flex-md-row flex-column justify-content-around align-items-center">
    <?php foreach($arResult as $item): ?>
        <?php if (!empty($item['SUB_ITEMS'])): ?>
        <li class="header-nav__menu-item <?php if($item["SELECTED"]) echo 'selected'; ?>">
            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?=$item["TEXT"]; ?></a>
            <ul class="dropdown-menu px-3 bg-purple-dark" aria-labelledby="dropdownMenuLink">
                <?php foreach ($item['SUB_ITEMS'] as $subItem): ?>
                <li class="my-3">
                    <a class="dropdown-item" href="<?=$subItem["LINK"]?>" itemprop="url"><?=$subItem["TEXT"]; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <?php else: ?>
        <li class="header-nav__menu-item <?php if($item["SELECTED"]) echo 'selected'; ?>">
            <a href="<?=$item["LINK"]?>" itemprop="url"><?=$item["TEXT"]; ?></a>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>

