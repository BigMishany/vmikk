<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация пользователя</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>
<div class="wrapper">
	<h1>Спасибо за регистрацию, <?= ucfirst($user['username']) ?>!</h1>
	<div class="info">
		<div class="row">
			<span class="title">Имя пользователя:</span><span class="value"><?= htmlspecialchars($user['username']) ?></span>
		</div>
		<div class="row">
			<span class="title">ФИО:</span><span class="value"><?= htmlspecialchars($user['fullname']) ?></span>
		</div>
		<div class="row">
			<span class="title">Пол:</span><span class="value"><?= isset($user['gender']) ? ($user['gender'] == 'M' ? 'Джентльмен' : 'Леди') : 'не указан' ?></span>
		</div>
		<div class="row">
			<span class="title">Подписка на новости:</span><span class="value"><?= $user['newsletter'] ? 'Да' : 'Нет' ?></span>
		</div>
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