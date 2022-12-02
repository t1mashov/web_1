<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/shop.css">
    <title>Торты</title>
</head>
<body>
    <?php 
    include "php/header.php";
    require("db.php");
    
    $result = mysqli_query($connect, "
    select * from products;
    ");
    ?>

    <main>
        <div class="block">
            <h1>Наша продукция</h1>
            <p>На этой странице Вы можете выбрать себе торт по душе, и купить его по низкой цене</p>
            <div class="products">
                <?php
                while($el = @mysqli_fetch_assoc($result)) {
                    echo '
<a href="product.php?id='.$el['id'].'">
<div class="wrap-el">
<table class="el">
<tr>
    <td class="td-img">
        <img src="'.$el['img_link'].'">
    </td>
    <td class="td-desc">
        <div class="content">
            <h3>'.$el['name'].'</h3>
            <p></p>
        </div>
    </td>
    <td class="td-price">
        <p class="price">'.$el['price'].' руб.</p>
    </td>
</tr>
</table>
</div>
</a>
                    ';    
                }
                ?>
            </div>
        </div>
    </main>

    <?php include "php/footer.php"?>
</body>
</html>