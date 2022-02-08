<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - достижения');
?>

<section class="section container certificates py-4">
    <div class="bg-white px-3 py-5 rounded">
        <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
        <h1 class="certificates__title section-title fs-big mb-4 text-center">
            <?php $APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/certificates/h1.html"
                )
            );?>
        </h1>
        <div class="mt-5">
            <h2 class="text-center mb-3">
                Сертификаты
            </h2>
            <div class="certificates-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-margin="5" data-nav="true" data-dots="true" data-dotsEach="5" data-responsive='{"0":{"items":1,"dots":false},"576":{"items":2},"768":{"items":3},"992":{"items":4},"1400":{"items":5}}'>
                <a href="/dist/img/certificate-1-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/certificate-1.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/certificate-2-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/certificate-2.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/certificate-3-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/certificate-3.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/certificate-4-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/certificate-4.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
            </div>
        </div>
        <div class="mt-5">
            <h2 class="text-center mb-3">
                Дипломы
            </h2>
            <div class="certificates-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-margin="5" data-nav="true" data-dots="true" data-dotsEach="5" data-responsive='{"0":{"items":1,"dots":false},"576":{"items":2},"768":{"items":3},"992":{"items":4},"1400":{"items":5}}'>
                <a href="/dist/img/diplomas-1-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-1.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-2-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-2.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-3-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-3.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-4-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-4.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-5-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-5.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-6-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-6.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-7-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-7.png" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-8-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-8.png" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-9-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-9.png" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/diplomas-10-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/diplomas-10.png" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
            </div>
        </div>
        <div class="mt-5">
            <h2 class="text-center mb-3">
                Благодарственные письма
            </h2>
            <div class="certificates-slider pb-5 owl-carousel owl-theme owl-nav-bottom" data-margin="5" data-nav="true" data-dots="true" data-dotsEach="5" data-responsive='{"0":{"items":1,"dots":false},"576":{"items":2},"768":{"items":3},"992":{"items":4},"1400":{"items":5}}'>
                <a href="/dist/img/gratefulness-1-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/gratefulness-1.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/gratefulness-2-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/gratefulness-2.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/gratefulness-3-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/gratefulness-3.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/gratefulness-4-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/gratefulness-4.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
                <a href="/dist/img/gratefulness-5-big.jpg" class="certificates-slider__item" data-lightbox="certificates">
                    <img src="/dist/img/gratefulness-5.jpg" alt="" class="certificates-slider__item-img rounded w-auto mx-auto">
                </a>
            </div>
        </div>
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