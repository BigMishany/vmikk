<?php

require('lib/common.php');

/*
 * Точка входа скрипта
 */
function main()
{
    // создаем сессию
    session_start();

    if (!is_current_user()) {
        // отправляем пользователя на страницу входа в систему
        redirect('login.php');
    }

    // у нас есть пользователь, считываем список пользователей из БД, и отображаем его

    // подключаемся к базе данных
    $dbh = db_connect();
    $current_user = db_user_find_by_id($dbh, get_current_user_id());
    if ($current_user['rule']==2) {
        $id_user = $_GET['id'];
        $id_user = $id_user + 0;
        $user = db_user_find_by_id($dbh, $id_user);
        if($user['rule']==0)
        {
            $result=db_user_update($dbh,$user['id'],1);
        }
        else
        {
            $result=db_user_update($dbh,$user['id'],0);
        }
    }

    // выводим результирующую страницу

    // закрываем соединение с базой данных
    db_close($dbh);
    redirect("/");
}

main();