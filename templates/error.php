<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Список пользователей</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>
<div class="wrapper form-container">
	<div class="form">
		<div class="error-msg"><?= $message != '' ? htmlspecialchars($message) : 'Неизвестная ошибка' ?></div>
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