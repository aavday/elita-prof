<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

if (!empty($arResult['ITEMS'])):
?>

<div class="question-answers-items" itemscope itemtype="http://schema.org/QAPage">
<?php
foreach ($arResult['ITEMS'] as $item):
    $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
    $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'));
    ?>
    <div class="question-answers-item p-4" id="<?=$this->GetEditAreaId($item['ID']);?>" itemscope itemtype="http://schema.org/Question">
        <p>
            <span class="question-answers-item__date me-2"><i class="fas fa-calendar me-2"></i><?=$item['DISPLAY_ACTIVE_FROM']; ?></span>
            <span class="question-answers-item__author">
                <i class="fas fa-user me-2"></i>
                <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <?=$item['PROPERTIES']['AUTHOR']['VALUE']; ?>
                </span>
            </span>
        </p>
        <p class="question-answers-item__question-text" itemprop="text">
            <?=$item['PROPERTIES']['QUESTION']['VALUE']['TEXT']; ?>
        </p>
        <p class="quote" itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
            <?=$item['PROPERTIES']['ANSWER']['VALUE']['TEXT']; ?>
        </p>
    </div>
<?php endforeach; ?>
</div>

<?php endif; ?>