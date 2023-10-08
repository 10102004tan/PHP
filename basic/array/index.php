<?php
$products = [
    [
        "id" => "1",
        "name" => "San pham 1",
        "price" => 1000,
        "description" => "Thong tin san pham 1"
        ],  

    [
        "id" => "2",
        "name" => "San pham 2",
        "price" => 1000,
        "description" => "Thong tin san pham 2"
        ],
    [
        "id" => "3",
        "name" => "San pham 3",
        "price" => 1000,
        "description" => "Thong tin san pham 3" 
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,th,td {
            border: 1px solid #000;
            font-size: 20px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <td>List san pham</td>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php
        foreach ($products as $product) :
            ?>
            <td>
            <div class="product_item">
            <a href="detail.php?id=<?php echo $product["id"]?>&&name=<?php echo $product["name"]?>&&price=<?php echo $product["price"]?>&&description=<?php echo $product["description"]?>"><?php echo $product["name"]?></a></br>
            <img src="" alt="">
        </div>

            </td>
            <?php endforeach ?>
        </tr>
    </tbody>
   </table>
</body>
</html>