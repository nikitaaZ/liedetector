<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['cont'])) {$cont = $_POST['cont'];}
 if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
 
/* Сюда впишите свою эл. почту */
 $address = "liedetector_brest@mail.ru";
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Контактная информация: $cont\nСообщение: $mess";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Сообшение с сайта'; //сабж
$email='Сообшение с сайта <krovlia.by>'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>С вами свяжутся</title>
<meta mess="generator">
<style type="text/css">
body
{
   background: #22BFF7 ;
   text-align: center;
   color: #fff;
 
}
</style>>
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо, мы Вам перезвоним</h1>
</body>
</html>