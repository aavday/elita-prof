<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

<div class="question-answers-items">
<?php
foreach ($arResult['ITEMS'] as $item):
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
    ?>
    <div class="question-answers-item p-4" id="<?=$this->GetEditAreaId($item['ID']);?>">
        <p>
            <span class="question-answers-item__date me-2"><i class="fas fa-calendar me-2"></i><?=$item['DISPLAY_ACTIVE_FROM']; ?></span>
            <span class="question-answers-item__author"><i class="fas fa-user me-2"></i><?=$item['PROPERTIES']['AUTHOR']['VALUE']; ?></span>
        </p>
        <p class="question-answers-item__question-text">
            <?=$item['PROPERTIES']['QUESTION']['VALUE']['TEXT']; ?>
        </p>
        <p class="quote">
            <?=$item['PROPERTIES']['ANSWER']['VALUE']['TEXT']; ?>
        </p>
    </div>
<?php endforeach; ?>
</div>

<?php endif; ?>