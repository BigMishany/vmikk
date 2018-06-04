<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Список пользователей</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>

<body>
<header>
	<div class="wrapper">
		<a href="#" class="user">Вход не выполнен</a>
	</div>
</header>
<div class="wrapper form-container">
	<div class="form">
		<div class="row header">
			<h1>Вход в систему</h1>
		</div>
		<?php if (has_errors($errors)): ?>
		<div class="error-msg">
		При заполнении формы возникли ошибки, пожалуйста проверьте правильность заполнения полей и нажмите "Войти"!
		</div>
		<?php endif; ?>
		<form action="login.php" method="POST">
			<div class="row <?= is_error($errors, 'username') ? 'error' : '' ?>">
				<label for="username">Имя пользователя<span class="required">*</span>:</label>
				<input type="text" name="username" id="username"
					   value="<?= isset($form['username']) ? $form['username'] : '' ?>">
			</div>
			<div class="row <?= is_error($errors, 'password') ? 'error' : '' ?>">
				<label for="password">Пароль<span class="required">*</span>:</label>
				<input type="password" name="password" id="password" value="">
			</div>
			<div class="row footer ">
				<input type="submit" name="login" id="login" value="Войти"/>
				<input type="reset" name="reset" id="reset" value="Очистить"/>
			</div>
			<div class="row footer">
				Еще не зарегистрированы? <a href="register.php">Зарегистрируйтесь!</a>
			</div>
		</form>
	</div>
</div>
</body>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4 mt-4">


    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="mailto:vmik@rmbler.ru"> VladMikk</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>