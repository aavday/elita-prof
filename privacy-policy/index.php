<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - согласие на обработку персональных данных');
?>
    <section class="section container privacy-policy py-4">
        <div class="bg-white px-3 py-5 rounded">
            <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
            <h1 class="privacy-policy__title section-title fs-big mb-4 text-center">
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/privacy-policy/h1.html"
                    )
                );?>
            </h1>
            <div>
                <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/privacy-policy/text.html"
                    )
                );?>
            </div>
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>