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
		<?php if ($current_user): ?>
			<a href="#" class="user"><?= $current_user['fullname'] ?></a><a href="logout.php" class="button">Выход</a>
		<?php endif; ?>
	</div>
</header>
<div class="wrapper">
	<h1>Зарегистрированные пользователи</h1>
	<table class="users" border="1">
		<tr>
			<th>ID</th>
			<th>Ник</th>
			<th>Эл.почта</th>
			<th>ФИО</th>
			<th>Пол</th>
			<th>Подписка</th>
		</tr>
		<?php foreach ($user_list as $i => $user): ?>
		<tr class="<?= ($i+1)%2 == 0 ? 'even' : 'odd' ?>">
			<td><?= $user['id'] ?></td>
			<td><?= htmlspecialchars($user['nickname']) ?></td>
			<td><?= htmlspecialchars($user['email']) ?></td>
			<td><?= htmlspecialchars($user['fullname']) ?></td>
			<td><?= $user['gender'] == 'M' ? 'Муж' : 'Жен' ?></td>
            <td><?php if($user['newsletter']==1)
                {
                    echo('<a href="/getRulle.php?id='.$user["id"].'">Выключить</a>');}
                elseif($user['rule']==0){ echo('<a href="/getRulle.php?id='.$user["id"].'">Включить</a>'); }
                elseif($user['rule']==2)
                    echo("Администратор");   ?>

		</tr>
		<?php endforeach; ?>
	</table>
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