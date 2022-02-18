<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
/** @global CMain $APPLICATION */
?>
<p class="fw-bold"><?=$arResult['NAME']; ?></p>
<?php if ($arResult['PROPERTIES']['ADDRESS_SHORT']['VALUE']): ?>
<p><?=$arResult['PROPERTIES']['ADDRESS_SHORT']['VALUE']; ?></p>
<?php endif; ?>
<?php foreach ($arResult['PROPERTIES']['PHONES']['VALUE'] as $phone): ?>
<a href="tel:<?=$phone; ?>" class="white-link hover-underline d-block"><i class="fas fa-phone"></i> <?=$phone; ?></a>
<?php endforeach; ?>
<?php

$organizationData = [
    '@context' => '//schema.org',
    '@type' => 'Organization',
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Набережные Челны, Россия',
        'postalCode' => '423800',
        'streetAddress' => 'Профильная улица, 84',
    ],
    'email' => $arResult['PROPERTIES']['EMAILS']['VALUE'][0],
    'name' => 'ООО "Элита-Проф"',
    'telephone' => $arResult['PROPERTIES']['PHONES']['VALUE'][0],
];

$organizationData = json_encode($organizationData);

echo '<script type="application/ld+json">' . $organizationData . '</script>';
