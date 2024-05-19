<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $to = "ox.cmex@mail.ru"; // Replace with your email address
    $subject = "Заявка с сайта Фабрика слаймов";
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone";

    if (mail($to, $subject, $body)) {
        header('Location: https://nikitanevsky.github.io/slime/index.html?success');
    } else {
        header('Location: https://nikitanevsky.github.io/slime/index.html?error');
    }

?>