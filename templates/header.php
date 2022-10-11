
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
                    ?>" class="<?php
                        if ($current_page == $link) echo ' selected'
                    ?>">Аутентификация</a>
                </td>
                <td class="ta-center"><a href="<?php 
                        $link = 'feedback.php';
                        echo $link
                    ?>" class="<?php
                        if ($current_page == $link) echo ' selected'
                    ?>">Обратная связь</a></td>
            </tr>
        </table>
    </nav>
</header>
