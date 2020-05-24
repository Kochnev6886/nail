<meta charset="utf-8">

<?php

$first_name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$first_name = htmlspecialchars($first_name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

$first_name = urldecode($first_name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

$first_name = trim($first_name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);

echo $first_name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $message;

if (mail("kochnev.maxim@gmail.com", "Тема письма, можно указать любую", "ФИО:".$first_name.". E-mail: ".$email ,"From: kochnev.maxim@gmail.com \r\n")){
    echo "Сообщение успешно отправлено";
    } else {
    echo "При отправке сообщения возникли ошибки";
    }
   }
   ?>
