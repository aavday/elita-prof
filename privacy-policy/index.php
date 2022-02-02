<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

/** @global CMain $APPLICATION */

$APPLICATION->SetTitle('Элита-Проф - дилерская информация');
?>
    <section class="section container privacy-policy py-4">
        <div class="bg-white px-3 py-5 rounded">
            <?php $APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array());?>
            <h1 class="privacy-policy__title section-title fs-big mb-4 text-center">
                Согласие на обработку персональных данных
            </h1>
            <p>
                Предоставляя свои персональные данные, на основании Федерального закона № 152-ФЗ «О персональных данных» от 27.07.2006 г. Пользователь даёт согласие
                на обработку, хранение и использование своих персональных данных Оператором
                ООО «Элита-Проф», расположенному по адресу: РФ, Республика Татарстан, Набережные Челны, ул. Профильная, д. 84, в следующих целях:
            </p>
            <ul>
                <li>Онлайн консультирование.</li>
                <li>Осуществление клиентской поддержки.</li>
                <li>Получения Пользователем информации о маркетинговых событиях.</li>
                <li>Проведения аудита и прочих внутренних исследований с целью повышения качества предоставляемых услуг.</li>
            </ul>
            <p>
                Под персональными данными подразумевается любая информация личного характера, позволяющая установить личность Пользователя такая как:
            </p>
            <ul>
                <li>Фамилия, Имя, Отчество</li>
                <li>Дата рождения</li>
                <li>Контактный телефон</li>
                <li>Адрес электронной почты</li>
                <li>Почтовый адрес</li>
            </ul>
            <p>
                Персональные данные Пользователей хранятся исключительно на электронных носителях и обрабатываются с использованием автоматизированных систем, за исключением случаев, когда неавтоматизированная обработка персональных данных необходима в связи с исполнением требований законодательства.
            </p>
            <p>
                Оператор обязуется не передавать полученные персональные данные третьим лицам, за исключением следующих случаев:
            </p>
            <ul>
                <li>По запросам уполномоченных органов государственной власти РФ только по основаниям и в порядке, установленным законодательством РФ</li>
                <li>Стратегическим партнерам, которые работают с Оператором для предоставления продуктов и услуг, или тем из них, которые помогают Оператору реализовывать продукты и услуги потребителям. Мы предоставляем третьим лицам минимальный объем персональных данных, необходимый только для оказания требуемой услуги или проведения необходимой транзакции.</li>
            </ul>
            <p>
                Оператор оставляет за собой право вносить изменения в одностороннем порядке в настоящие правила, при условии, что изменения не противоречат действующему законодательству РФ. Изменения условий настоящих правил вступают в силу после их публикации на сайте.
            </p>
            <p>
                Пользователь дает согласие на обработку персональных данных до отзыва согласия. Отзыв согласия на обработку персональных данных может быть осуществлен путем направления Пользователем соответствующего письменного заявления.
            </p>
        </div>
    </section>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>