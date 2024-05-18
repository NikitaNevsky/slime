<?php
    // Получаем данные из полей ввода
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = 'ox.cmex@mail.ru';
    $header = 'Заявка на франшизу "Фабрика слаймов"'
    // Собираем все данные в письмо
    $message = "Имя пользователя: $name \nЭлектронная почта: $email \nТелефон: $phone";
    // Отправляем письмо
    $send = mail($to, $header, $message, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
?>