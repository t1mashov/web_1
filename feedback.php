<?php

$current_page = 'feedback.php';

date_default_timezone_set("Europe/Moscow");
$date = date('d.m.y');
$time = date('H:i:s');

$FIO = '';
$Email = '';
$info_from = 'Adds';
// $message_type = 'predlozhenie';
// $message_text = '';
// $file = '';
// $edit_data = 'off';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head.php'?>
    <link rel="stylesheet" href="css/feedback_style.css">
    <title>Feedback</title>
</head>
<body>
    
    <?php include 'templates/header.php'?>

    <main>
        <form action="home.php" method="post">

            <?php
            if (isset($_GET['FIO'])) $FIO = $_GET['FIO'];
            if (isset($_GET['Email'])) $Email = $_GET['Email'];
            if (isset($_GET['otkuda_uznali_o_nas'])) $info_from = $_GET['otkuda_uznali_o_nas'];
            ?>

            <p><strong>ФИО:<input name="FIO" class="inp" value="<?php echo $FIO?>"></strong></p>
            <p><strong>Email:<input type="email" name="Email" class="inp" value="<?php echo $Email?>"></strong></p>
            <div class="otkuda_uznali">
                <strong>Откуда узнали о нас?</strong>
                <p><input name="otkuda_uznali_o_nas" type="radio" value="Adds" <?php if ($info_from=='Adds') echo 'checked'?>>Из рекламы</p>
                <p><input name="otkuda_uznali_o_nas" type="radio" value="Find" <?php if ($info_from=='Find') echo 'checked'?>>Сами нашли</p>
                <p><input name="otkuda_uznali_o_nas" type="radio" value="Friend" <?php if ($info_from=='Friend') echo 'checked'?>>От друга</p>
            </div>
            <p><strong>Тип обращения: <select class="inp" name="Message_type">
                <option value="predlozhenie">Предложение</option>
                <option value="zhaloba">Жалоба</option>
            </select></strong></p>
            <p><strong>Сообщение:</strong></p>
            <div class="ta-center">
                <p><textarea name="Message_text" rows="10" cols="50" style="resize: none;"></textarea></p>
                <p><input class="inp" type="file" name="file"></input></p>
            
                <p><input type="checkbox" name="agree_to_edit_personal_data" checked>Даю согласие на обработку персональных данных</p>
            
                <button type="submit">Отправить</button>
            </div>
        </form>
    </main>
    
    <?php include 'templates/footer.php'?>

</body>
</html>