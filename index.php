<?php
require_once "connect.php";
require_once "functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header-menu">
        <a href='index.php' class="header-btn">Каталог</a>
        <a href='basket.php' class="header-btn">Корзина</a>
    </div>
    <h1 class="title">Каталог товаров</h1>
        <div class="container">
            <?php
                filler($conn);
            ?>
        </div>
</body>
</html>