<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

    <section class="section advantages container py-4">
        <div class="bg-white px-3 py-5 rounded">
            <h2 class="photos-main__title section-title fs-big mb-4 text-center">
                Почему мебель лучше заказывать у нас?
            </h2>
            <div class="row">
                <?php foreach ($arResult['ITEMS'] as $item): ?>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="advantages__item d-flex">
                        <?php if (!empty($arResult['PROPERTIES']['ICON']['VALUE'])): ?>
                        <i class="fas fa-cart-arrow-down fs-big color-purple-dark"></i>
                        <?php endif; ?>
                        <div class="d-flex flex-column ms-2">
                            <p class="fw-bold color-purple-dark"><?=$item['NAME']; ?></p>
                            <p>
                                <?=$item['PREVIEW_TEXT']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>