<?php
    $current_page = 'login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../login_style.css">
    <title>Register</title>
</head>
<body>
    <header>
        <nav>
            <table class="table-nav">
                <tr>
                    <td class="title"><h1>MrBestPelmen</h1></td>
                    <td class="ta-center"><a href="index.php#0" class="nav">Пельмени с говядиной</a></td>
                    <td class="ta-center"><a href="index.php#2" class="nav">Пельмени Сибирские</a></td>
                    <td class="ta-center"><a href="index.php#3" class="nav">Сравнение пельменей</a></td>
                    <td class="ta-center">
                        <a href="<?php 
                            $link = 'login.php';
                            echo $link
                        ?>" class="nav<?php
                            if ($current_page == $link) echo ' selected'
                        ?>">Аутентификация</a>
                    </td>
                    <td class="ta-center"><a href="<?php 
                            $link = 'feedback.php';
                            echo $link
                        ?>" class="nav<?php
                            if ($current_page == $link) echo ' selected'
                        ?>">Обратная связь</a></td>
                </tr>
            </table>
        </nav>
    </header>
    <main>
        <form action="https://httpbin.org/post" method="post">
            <p>Логин: <input name="login"></p>
            <p>Пароль: <input name="password" type="password"></p>
            <p><input type="checkbox" name="remember_me"> Запомнить меня</p>
            <button type="submit">Отправить</button>
        </form>
    </main>
    <footer>
        <div class="ftr">
            <p>Телефон: 8(904)099-09-87</p>
            <p>Эл. почта: peter@timashov.su</p>
        </div>
    </footer>
</body>
</html>