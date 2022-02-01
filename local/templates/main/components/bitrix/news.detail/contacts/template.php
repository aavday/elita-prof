<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */
?>
<div class="row">
    <?php if ($arResult['PROPERTIES']['EMAILS']['VALUE']): ?>
    <div class="col-lg-3 col-sm-6 mt-3">
        <p class="fs-medium">
            <?=$arResult['NAME']; ?>
        </p>
        <?php foreach ($arResult['PROPERTIES']['EMAILS']['VALUE'] as $email): ?>
        <div>
            <a href="mailto:<?=$email; ?>"><i class="fas fa-envelope me-2"></i><?=$email; ?></a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($arResult['PROPERTIES']['ADDRESS']['VALUE']): ?>
    <div class="col-lg-3 col-sm-6 mt-3">
        <p class="fs-medium">
            Адрес
        </p>
        <p>
            <?=$arResult['PROPERTIES']['ADDRESS']['~VALUE']['TEXT']; ?>
        </p>
    </div>
    <?php endif; ?>
    <?php if ($arResult['PROPERTIES']['PHONES']['VALUE']): ?>
    <div class="col-lg-3 col-sm-6 mt-3">
        <p class="fs-medium">
            Телефоны
        </p>
        <?php foreach ($arResult['PROPERTIES']['PHONES']['VALUE'] as $phone): ?>
        <div>
            <a href="tel:<?=$phone; ?>"><i class="fas fa-phone me-2"></i><?=$phone; ?></a>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($arResult['PROPERTIES']['WORKING_HOURS']['VALUE']): ?>
    <div class="col-lg-3 col-sm-6 mt-3">
        <p class="fs-medium">
            Режим работы
        </p>
        <p>
            <?=$arResult['PROPERTIES']['WORKING_HOURS']['~VALUE']['TEXT']; ?>
        </p>
    </div>
    <?php endif; ?>
</div>
