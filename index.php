<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- 
	http://jquery.page2page.ru/index.php5/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%87%D0%B8%D0%BA_%D0%B8%D0%BB%D0%B8_%D0%B8%D1%81%D1%82%D0%BE%D1%87%D0%BD%D0%B8%D0%BA_%D1%81%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D1%8F_submit

	http://jquery.page2page.ru/index.php5/%D0%9F%D1%80%D0%B5%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85_%D1%84%D0%BE%D1%80%D0%BC%D1%8B_%D0%B2_%D1%81%D1%82%D1%80%D0%BE%D0%BA%D1%83

	http://jquery.page2page.ru/index.php5/Ajax-%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81
	 -->

	<div class="form-box">
		<form class="form">
			<div class="form__box">
				<input type="text" name="name" class="form__field form__field_name" placeholder="Ваше имя">
			</div>
			<div class="form__box">
				<input type="text" name="phone" class="form__field form__field_phone" placeholder="Номер телефона">
			</div>
			<input type="hidden" name="label" value="Form_1">
			<div class="form__box form__box--tac">
				<input type="submit" name="submit" value="Отправить">
			</div>
			<div class="form-message form-message--js"></div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>