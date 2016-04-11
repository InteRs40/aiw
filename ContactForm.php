<?php
 

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

 

$address = "somkin-k@mail.ru";
$sub = "Сообщение с сайта http://inters40.github.io/aiw/";
 

$mes = "Сообщение с сайта http://inters40.github.io/aiw/.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения: $message";

if (empty())
{

$from  = "From: $name <$email> \r\n Reply-To: $email \r\n"; 
if (mail($address, $sub, $mes, $from)) {
   header('Refresh: 5; URL=http://inters40.github.io/aiw/');
   echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт http://inters40.github.io/aiw/';}
else {
   header('Refresh: 5; URL=http://inters40.github.io/aiw/');
   echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу http://inters40.github.io/aiw/contact.html';}
}
?>