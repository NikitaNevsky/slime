<?php
    // Получаем данные из полей ввода
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';

    // Проверяем, заполнены ли все поля
    if (empty($name) || empty($email) || empty($phone)) {
        echo 'Заполните все поля!';
        exit;
    }

    // Собираем все данные в письмо
    $message = "Имя пользователя: $name\n" .
            "Электронная почта: $email\n" .
            "Телефон: $phone";

    // Отправляем письмо
    $to = 'ox.cmex@mail.ru';
    $header = 'Заявка на франшизу "Фабрика слаймов"';
    $from = 'info@slime.com'; // Адрес электронной почты вашего сайта
    $subject = 'Заявка на франшизу';

    $send = mail($to, $subject, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:$from");

    if ($send) {
        echo 'Спасибо! Ваша заявка отправлена.';
    } else {
        echo 'Ошибка отправки письма.';
    }

?>