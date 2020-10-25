<?php

$city = $_POST['city'];
$name = $_POST['name1'];
$email = $_POST['email'];

mail("Kirill.I120306@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n");


if (mail("Kirill.I120306@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n")){
	echo 'Сообщение отправлено';
} else {
	echo 'Сообщение не отправлено';
}

?>

