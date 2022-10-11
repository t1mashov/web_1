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

if ($os == 0) {
    $photo_1 = "data:image/jpeg;base64,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";
    $photo_2 = "https://img.povar.ru/main/13/39/da/db/pelmeni_sibirskie_domashnie-414462.jpg";
}
else {
    $photo_1 = 'https://pigmine.ru/wp-content/uploads/3/e/b/3ebd3df83d49c4b1ad629aeced8fc057.jpeg';
    $photo_2 = 'https://ideireceptov.ru/wp-content/uploads/2017/10/pkelmeni_po-domashnemu_s_govyadinoy.jpg';
}


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

