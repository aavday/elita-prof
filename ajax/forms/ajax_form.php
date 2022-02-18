<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

    $emails = explode(',', COption::GetOptionString('main', 'all_bcc'));
    $emails[] = COption::GetOptionString('main', 'email_from');

    $subject = (!empty($_REQUEST['subject'])) ? $_REQUEST['subject'] : 'Заполнена форма на сайте';;
    $message = '<b>' . $subject . '</b> на сайте ' . $_SERVER['HTTP_HOST'] . '<br><br>';

    foreach ($_POST as $key => $value)
    {
        if ($value !== '' && $key !== 'agree-policy' && $key !== 'subject') {
            $valueText = '<b>' . $key . ':</b> ' . $value;
            $message = $message . $valueText . '<br><br>';
        }
    }

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: Элита-Проф <no-reply@$_SERVER[HTTP_HOST]>" . "\r\n";

    foreach ($emails as $email) {
        mail(trim($email), $subject, $message, $headers);
    }

    echo true;
}