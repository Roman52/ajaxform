<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$label = trim($_POST["label"]);

$message = "Имя: $name\r\nТелефон: $phone\r\nФорма: $label";

$to = "test@test.ru";
$title = "Новая заявка";

$res = '';
$error = false;

if ( empty($name) ) {
	$res .= '<div class="form-error form-error--name">Поле имя - не заполено</div>';
	$error = true;
}

if ( empty($phone) ) {
	$res .= '<div class="form-error form-error--phone">Поле телефон - не заполено</div>';
	$error = true;
} else {
	$pattern = '/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/';
	if ( ! preg_match($pattern, $phone) ) {
		$res .= '<div class="form-error form-error--phone">Поле телефон - не соответствует формату</div>';
		$error = true;
	}
}

if ( !$error ) {
	if ( mail($to, $title, $message, "Content-type: text/plain; charset=\"utf-8\"") ) {
		$res = '<div class="form-success">Сообщение отправлено, спасибо за заявку!</div>';
	} else {
		$res = '<div class="form-error">Ошибка при отправке</div>';
	}
}

echo $res;