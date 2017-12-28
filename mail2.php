<html>
<head>
<title>Страница с примером передачи переменных с помощью Post</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$mess = $_POST['mess'];

$REMOTE_ADDR = $_POST['REMOTE_ADDR'];

if (isset ($name))
{
$name = substr($name,0,20); //Не может быть более 20 символов
if (empty($name))
{
echo "<center><b>Не указано имя !!!<p>";
echo "<a href=mail.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$name = "не указано";
}

if (isset ($phone))
{
$phone = substr($phone,0,20); //Не может быть более 20 символов
if (empty($phone))
{
echo "<center><b>Не указан phone !!!<p>";
echo "<a href=mail.php>Вернуться и правильно заполнить форму.</a>";
exit;
}
}
else 
{
$phone = "не указано";
}



$i = "не указано";
if ($name == $i AND $email == $i AND $mess == $i)
{
echo "Внимание! Произошла ошибка! Вы не заполнили поля сообщения!";
exit;
}

$to = "mail@de1.by";
$subject = "Сообщение с сайта DE1.BY";
$message = "Имя пославшего письмо: $name .\nНомер телефона : $phone .\nСообщение: $mess .\nIP-адрес: $_SERVER[REMOTE_ADDR]";
mail ($to,$subject,$message,"Content-type:text/plain; charset = utf-8") or print "Не могу отправить письмо !!!";
echo "<center><b>Спасибо за отправку Вашего сообщения. <br><br> Для нас это очень важно! <br><br> В ближайшее время мы обязательно с Вами свяжемся.";
exit;
?>

</body>
</html>