<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $to = "ox.cmex@mail.ru"; // Replace with your email address
    $subject = "Заявка с сайта Фабрика слаймов";
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone";

    if (mail($to, $subject, $body)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false));
    }

?>