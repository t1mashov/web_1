<?php

$current_page = 'login.php';

date_default_timezone_set("Europe/Moscow");
$date = date('d.m.y');
$time = date('H:i:s');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head.php'?>
    <link rel="stylesheet" href="css/login_style.css">
    <title>Register</title>
</head>
<body>
    
    <?php include 'templates/header.php'?>

    <main>
        <form action="https://httpbin.org/post" method="post">
            <p>Логин: <input name="login"></p>
            <p>Пароль: <input name="password" type="password"></p>
            <p><input type="checkbox" name="remember_me"> Запомнить меня</p>
            <button type="submit">Отправить</button>
        </form>
    </main>
    
    <?php include 'templates/footer.php'?>

</body>
</html>