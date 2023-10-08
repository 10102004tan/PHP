<?php
    $id = $_GET["id"];
    $name = $_GET["name"];
    $price = $_GET["price"];
    $description = $_GET["description"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <ul class="detail">
    <li>id : <?php echo $id?></li>
    <li>Ten san pham : <?php echo $name?></li>
    <li>Gia : <?php echo $price?></li>
    <li>Thong tin chi tiet : <?php echo $description?></li>
   </ul>
</body>
</html>