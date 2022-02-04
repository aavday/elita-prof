<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

    $to = COption::GetOptionString('main', 'email_from');

    $subject = (!empty($_REQUEST['subject'])) ? $_REQUEST['subject'] : 'Заполнена форма на сайте';;
    $message = $subject . ' на сайте ' . $_SERVER['HTTP_HOST'] . '<br><br>';

    foreach ($_REQUEST as $key => $value)
    {
        if ($value !== '') {
            $valueText = $key . ': ' . $value;
            $message = $message . $valueText . '<br>';
        }
    }

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: Элита-Проф <no-reply@$_SERVER[HTTP_HOST]>" . "\r\n";

    mail($to, $subject, $message, $headers);

    echo true;
}