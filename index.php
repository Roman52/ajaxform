<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-box">
		<form class="form">
			<div class="form__box">
				<input type="text" name="name" class="form__field form__field--name" placeholder="Ваше имя">
			</div>
			<div class="form__box">
				<input type="text" name="phone" class="form__field form__field--phone" placeholder="Номер телефона">
			</div>
			<input type="hidden" name="label" value="Form_1">
			<div class="form__box form__box--tac">
				<input type="submit" name="submit" value="Отправить">
			</div>
			<div class="form-message form-message--js"></div>
		</form>
	</div>
	<div class="form-box">
		<form class="form">
			<div class="form__box">
				<input type="text" name="name" class="form__field form__field--name" placeholder="Ваше имя">
			</div>
			<div class="form__box">
				<input type="text" name="phone" class="form__field form__field--phone" placeholder="Номер телефона">
			</div>
			<input type="hidden" name="label" value="Form_2">
			<div class="form__box form__box--tac">
				<input type="submit" name="submit" value="Отправить">
			</div>
			<div class="form-message form-message--js"></div>
		</form>
	</div>

	<div class="form-box">
		<form class="form">
			<div class="form__box">
				<input type="text" name="name" class="form__field form__field--name" placeholder="Ваше имя">
			</div>
			<div class="form__box">
				<input type="text" name="phone" class="form__field form__field--phone" placeholder="Номер телефона">
			</div>
			<input type="hidden" name="label" value="Form_3">
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