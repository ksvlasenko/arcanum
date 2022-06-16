<!-- Через 10 секунд после появления сообщения об отправке или ошибке — отправляемся на сайт  -->
<meta http-equiv='refresh' content='10; url=sogl.html'>
<meta charset="UTF-8" />
<!-- Начался блок PHP -->
<?php
// Получаем значения переменных из пришедших данных
$name = $_POST['name'];
$email = $_POST['email'];
$telephon = $_POST['telephon'];
$message = $_POST['message'];
// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "nИмя: $name \nE-mail: $email \nНомер телефона: $telephon \nТекст: $message";
// Пытаемся отправить письмо по заданному адресу
// Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
$send = mail("ksvlasenko@bk.ru", $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:ksvlasenko@bk.ru");
// Если отправка прошла успешно — так и пишем
if ($send == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}
?>