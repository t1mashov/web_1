<?php

$current_page = 'feedback.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../feedback_style.css">
    <title>Feedback</title>
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
            <p><strong>ФИО:<input name="FIO" class="inp"></strong></p>
            <p><strong>Email:<input name="Email" class="inp"></strong></p>
            <div class="otkuda_uznali">
                <strong>Откуда узнали о нас?</strong>
                <p><input name="otkuda_uznali_o_nas" type="radio" value="Adds" checked>Из рекламы</p>
                <p><input name="otkuda_uznali_o_nas" type="radio" value="Find">Сами нашли</p>
                <p><input name="otkuda_uznali_o_nas" type="radio" value="Friend">От друга</p>
            </div>
            <p><strong>Тип обращения: <select class="inp" name="Message_type">
                <option value="predlozhenie">Предложение</option>
                <option value="zhaloba">Жалоба</option>
            </select></strong></p>
            <p><strong>Сообщение:</strong></p>
            <div class="ta-center">
                <p><textarea name="Message_text" rows="10" cols="50" style="resize: none;"></textarea></p>
                <p><input class="inp" type="file" name="file"></input></p>
            
                <p><input type="checkbox" name="agree_to_edit_personal_data">Даю согласие на обработку персональных данных</p>
            
                <button type="submit">Отправить</button>
            </div>
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