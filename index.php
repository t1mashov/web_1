<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Торты</title>
</head>
<body>
    <?php 
    include "php/header.php";
    // require("db.php");
    include "data_from_db.php";
    ?>

    <main>
        <div class="block">
        <h1>Магазин "Торты.ру"</h1>
        <p>
            Мы представляем широкий ассортимент 
            кондитерских изделий на любой вкус и цвет
        </p>
        <p>
            В нашем магазине одни из самых низких цен
        </p>
        </div>
    </main>

    <?php include "php/footer.php"?>
</body>
</html>