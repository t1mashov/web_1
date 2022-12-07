<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/product.css">
    <title>Торты</title>
</head>
<body>
    <?php 
    include "php/header.php";
    //require("db.php");
    include "data_from_db.php";
    ?>
    <script src="js/script.js"></script>

    <main>
        <?php

        // $result = mysqli_query($connect, "
        // select * from products
        // where id=".$_GET['id']."
        // ");

        
            echo '
<div class="block">
    <h1>'.$data['name'][$_GET['id']].'</h1>
    <div class="img">
        <img src="'.$data['img_link'][$_GET['id']].'">
    </div>
    <div class="desc">'.$data['desc'][$_GET['id']].'</div>
</div>

<div class="block">
    <div>
        <h3>Состав:</h3>
        <div class="struct" id="id_struct" onclick="show_hide_struct(\''.$data['struct'][$_GET['id']].'\')">
        нажмите для просмотра
        </div>
    </div>
</div>

<div class="block price">
    <div>
        <b>Поторопитесь! Осталось: '.$data['real_count'][$_GET['id']].' шт.</b>
    </div>
    <div>
        <b>Цена: </b><span class="price-num">'.$data['price'][$_GET['id']].' руб.</span>
    </div>

    <div class="buy"><b>ДОБАВИТЬ В КОРЗИНУ</b></div>
</div>
            ';
        
        
            
        ?>
    </main>

    <?php include "php/footer.php"?>
</body>
</html>