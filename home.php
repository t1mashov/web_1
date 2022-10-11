
<?php

$current_page = '???';

date_default_timezone_set("Europe/Moscow");
$date = date('d.m.y');
$time = date('H:i:s');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head.php'?>
    <link rel="stylesheet" href="css/home.css">
    <title>Home</title>
</head>
<body>
    
    <?php include 'templates/header.php'?>

    <main>
        <?php

        $edit_data = 'off';
        if (isset($_POST['agree_to_edit_personal_data'])) $edit_data = $_POST['agree_to_edit_personal_data'];

        echo '<p>Здравствуйте, <b>'.$_POST['FIO'].'</b></p>';
        if ($_POST['Message_type']=='predlozhenie') {
            echo '<p>Спасибо за Ваше предложение</p>';
        } else {
            echo '<p>Мы рассмотрим Вашу жалобу</p>';
        }
        echo '<p class="ta-center"><textarea style="resize: none;" rows="10" cols="50">'.$_POST['Message_text'].'</textarea></p>';

        if (isset($_POST['file']) && $_POST['file']!='') echo '<p>Вы приложили следующий файл: <span class="got_file">'.$_POST['file'].'</span></p>';
                    
        echo '<div class="ta-center"><button><a class="btn" href="feedback.php?FIO='.$_POST['FIO'].
            '&Email='.$_POST['Email'].
            '&otkuda_uznali_o_nas='.$_POST['otkuda_uznali_o_nas'].'">Заполнить снова</a></button></div>'
        ?>
        
    </main>

    <?php include 'templates/footer.php'?>

</body>
</html>