<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

<div class="row">
    <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-6 col-12">
        <div class="blog-main__left">
        <?php
        foreach ($arResult['ITEMS'] as $key => $item):
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
            ?>
            <div class="blog-main__left-item <?php if ($key == 0) echo 'active'; ?>" id="blog-item-<?=$key; ?>">
                <img src="<?=$item['DETAIL_PICTURE']['SRC'] ?>" alt="<?=$item['NAME'] ?>" class="blog-main__img mb-3 rounded">
                <h3 class="blog-main__title fw-bold fs-medium">
                    <?=$item['NAME'] ?>
                </h3>
                <p class="blog-main__date">
                    <i class="fas fa-calendar me-2"></i><span><?=$item['DISPLAY_ACTIVE_FROM']; ?></span>
                </p>
                <p class="blog-main__text">
                    <?=$item['PREVIEW_TEXT']; ?>
                </p>
                <p class="blog-main__detail">
                    <a href="<?=$item['DETAIL_PAGE_URL']; ?>">Читать далее ></a>
                </p>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-6 col-12">
        <div class="blog-main__right fs-small d-flex flex-column mx-2">
        <?php foreach ($arResult['ITEMS'] as $key => $item):?>
            <div class="blog-main__right-item py-2 <?php if ($key == 0) echo 'active'; ?>" data-blog-item="blog-item-<?=$key; ?>">
                <div class="row">
                    <div class="col-6">
                        <div class="blog-main__right-item-picture rounded" style="background-image: url('<?=$item['PREVIEW_PICTURE']['SRC']; ?>')"></div>
                    </div>
                    <div class="col-6">
                        <p class="blog-main__right-item-date">
                            <i class="fas fa-calendar me-2"></i><span><?=$item['DISPLAY_ACTIVE_FROM']; ?></span>
                        </p>
                        <p class="blog-main__right-item-title">
                            <?=$item['NAME'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>


<?php endif; ?>
