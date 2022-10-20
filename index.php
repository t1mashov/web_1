<?php

$current_page = 'index.php';
$title = 'Тимашов Петр, 211-362, ЛР-3';

date_default_timezone_set("Europe/Moscow");
$date = date('d.m.y');
$time = date('H:i:s');

$ingridients_1 = [
    '<li>Тесто для пельменей: <b>800г</b></li>',
    '<li>Говяжья грудинка: <b>800г</b></li>',
    '<li>Репчатый лук: <b>150г</b></li>',
    '<li>Петрушка: <b>20г</b></li>',
    '<li>Сливочное масло: <b>70г</b></li>',
    '<li>Укроп: <b>3 стебля</b></li>',
    '<li>Лавровый лист: <b>3 штуки</b></li>',
    '<li>Черный перец горошком: <b>4г</b></li>',
    '<li>Соль: <b>по вкусу</b></li>',
    '<li>Молотый черный перец: <b>по вкусу</b></li>'
];

$ingridients_2 = [
    '<li>Пшеничная мука: <b>600г</b></li>',
    '<li>Вода: <b>400мл</b></li>',
    '<li>Куриное яйцо: <b>1 штука</b></li>',
    '<li>Говядина: <b>400г</b></li>',
    '<li>Свинина: <b>460г</b></li>',
    '<li>Репчатый лук: <b>1 головка</b></li>',
    '<li>Соль: <b>по вкусу</b></li>',
    '<li>Молотый черный перец: <b>по вкусу</b></li>',
];

$current_page = '#0';

$s = date('s');
$os = (int)$s % 2;


// работа с БД

include 'db.php';
$sql = mysqli_query($mysql, 'select src from imgs');

$img_links = [];
while ($name = mysqli_fetch_assoc($sql)) {
    array_push($img_links, $name['src']);
}

if ($os == 0) {
    $photo_1 = $img_links[0];
    $photo_2 = $img_links[1];
}
else {
    $photo_1 = $img_links[2];
    $photo_2 = $img_links[3];
}

$mysql->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/head.php'?>
    <link rel="stylesheet" href="css/index_style.css">
    <title><?php echo $title?></title>
</head>
<body id="0">
    
    <?php include 'templates/header.php'?>

    <main>
        <div id="1" class="recipe">
            <h2 class="title_pelm">Пельмени с говядиной</h2>
            <p class="img_pelm">
                <img width="300" height="300" src="<?php echo $photo_1?>"/>
            </p>
            
            <div class="block_ingridients">
                <h4 class="title_ingridients">Ингредиенты</h4>
                <ul>
                    <?php 
                    for ($i=0; $i < count($ingridients_1); $i++) { 
                        echo $ingridients_1[$i];
                    }
                    ?>
                </ul>
            </div>
            
            <div class="recipe_text">
                <p>
                    Для фарша не очень жирную грудинку прокрутить вместе со сливочным маслом через мясорубку. Добавить мелко измельченную петрушку и пассерованный лук, посолить и поперчить по вкусу, хорошо перемешать и убрать в холодильник ровно на час, чтобы фарш окреп и стал эластичным.
                </p>
                <p>
                    Тесто раскатать скалкой до толщины 1 мм и вырезать из него кружки диаметром 4,5 см. Выложить на каждый по 5 грамм начинки, свернуть пополам, защипнуть края и соединить уголки.
                </p>
                <p>
                    Подготовить бульон: налить в кастрюлю пять литров воды, посолить, положить лавровый лист, черный перец горошком и веточки укропа целиком. В кипящую воду бросить пельмени и варить 5–6 минут до готов­ности.
                </p>
            </div>
        </div>

        <div id="2" class="recipe">
            <h2 class="title_pelm">Пельмени Сибирские</h2>
            <p class="img_pelm">
                <img class="img_pelm" width="300" height="300" src="<?php echo $photo_2?>"/>
            </p>

            <div class="block_ingridients">
                <p>Ингредиенты</p>
                <ul>
                <?php 
                    for ($i=0; $i < count($ingridients_2); $i++) { 
                        echo $ingridients_2[$i];
                    }
                    ?>
                </ul>
            </div>

            <div class="recipe_text">
                <p>
                    Приготовить фарш. Говядину и свинину нарезать на куски и пропустить через мясорубку. Добавить соль, перец, немного воды, пропущенный через мясорубку лук и все перемешать.
                </p>
                <p>
                    Просеянную муку насыпать на стол и сделать воронкообразное углубление. Налить 330 грамм воды, смешанной с яйцом и солью (12 г), и замесить крутое однородное тесто. Дать полежать 20–30 минут для набухания клейковины.
                </p>
                <p>
                    Тесто раскатать в жгут, нарезать кусочками и раскатать сочни. На сочни выложить фарш, сформировать пельмени и отварить их в подсоленной воде в течение 8–10 минут.
                </p>
                <p>
                    К пельменям подать сливочное масло, сметану, столовый уксус.
                </p>
            </div>
        </div>

        <div class="sravnenie" id="3">
            <h2 class="title_pelm">Сравнение пельменей</h2>
            <table>
                <tr>
                    <th></th>
                    <th>Пельмени с говядиной</th>
                    <th>Пельмени Сибирские</th>
                </tr>
                <tr>
                    <th>кол-во ингредиентов</th>
                    <td>10</td>
                    <td>8</td>
                </tr>
                <tr>
                    <th>вкус</th>
                    <td>4</td>
                    <td>5</td>
                </tr>
            </table>
        </div>
    </main>

    <?php include 'templates/footer.php'?>

</body>
</html>

