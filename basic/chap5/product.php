<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>
    <nav>
        <ul class="nav__list">
            <li class="nav__item"><a href="index.php">Trang chu</a></li>
            <li class="nav__item"><a href="product.php">San pham</a></li>
            <li class="nav__item"><a href="#">Gioi thieu</a></li>
            <li class="nav__item"><a href="#">Dich vu</a></li>
            <li class="nav__item"><a href="#">Lien he</a></li>
        </ul>
    </nav>

    <div class="product">
        <ul class="product__list">

        <?php
            $soLuong = 10;
            for ($i=1; $i <= $soLuong ; $i++) { 
                # code...
                echo " <li class='product__item' ><a href='intro_product.php?product=$i'>San pham $i</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>