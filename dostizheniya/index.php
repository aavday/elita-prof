<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - достижения');
?>

<section class="section container achievements py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="achievements__title section-title fs-big mb-4 text-center">
            <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/achievements/h1.html"
                )
            );?>
        </h1>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","certificates",
            Array(
                "IBLOCK_TYPE" => "achievements",
                "IBLOCK_ID" => IBLOCK_CERTIFICATES,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N"
            )
        );?>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","certificates",
            Array(
                "IBLOCK_TYPE" => "achievements",
                "IBLOCK_ID" => IBLOCK_DIPLOMAS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N"
            )
        );?>
        <?php $APPLICATION->IncludeComponent("bitrix:news.list","certificates",
            Array(
                "IBLOCK_TYPE" => "achievements",
                "IBLOCK_ID" => IBLOCK_GRATEFULLNESS,
                "FIELD_CODE" => ['ID', 'IBLOCK_ID', 'NAME', 'PREVIEW_PICTURE', 'DETAIL_PICTURE'],
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N"
            )
        );?>
        <div class="certificates-charity bg-light-green dark-green rounded col-lg-6 mx-auto p-4 my-5">
            <h2 class="text-center">
                Благотворительность
            </h2>
            <p>
                Одним из приоритетных направлений деятельности в ООО «Элита-Проф» считают оказание содействия наиболее незащищенным слоям населения. Программа поддержки предусматривает реализацию мер по оказанию адресной материальной помощи воспитанникам детских домов, интернатов и коррекционных школ, организациям инвалидов, малоимущим семьям и другим социально незащищенным слоям населения. Работая с «Элита-Проф» Вы вносите свой посильный вклад в благородное дело.
            </p>
            <p>
                Деятельность ООО "Элита-Проф" по производству мебели для предприятий, а также медицинской мебели для лечебных учреждений постоянно отмечается наградами и дипломами.
            </p>
        </div>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>