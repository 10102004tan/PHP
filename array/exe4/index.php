<?php
$menu = [
    "appetizer" => [
        [
            "id" => 1,
            "name" => "Goi ngo sen"
        ],
        [
            "id" => 2,
            "name" => "Salat ca ngu"
        ],
        [
            "id" => 3,
            "name" => "Bo tron rau thom"
        ]

    ],
    "main_dishes" => [
        [
            "id" => 1,
            "name" => "Bo ham"
        ],
        [
            "id" => 2,
            "name" => "Ca chem sot ca"
        ],
        [
            "id" => 3,
            "name" => "Tom rang muoi"
        ]
    ],
    "desserts" => [
        [
            "id" => 1,
            "name" => "Che hat sen"
        ],
        [
            "id" => 2,
            "name" => "banh flan"
        ],
        [
            "id" => 3,
            "name" => "Rau cau"
        ]
    ]
];

// echo "<pre>" .
// print_r($menu) 
// . "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="menu">
        <h2 class="title">Thuc don</h2>
       
        <div class="list-menu">
            <h5 class="item-title">Mon chinh</h5>
            <select name="appetizer" id="appetizer" multiple>
                <option value="1">Bo ham</option>
                <option value="2">Ca hem sot ca</option>
                <option value="3">Tom rang muoi</option>
                <option value="4">Cua sot me</option>
            </select>
        </div>

        <div class="list-menu">
            <h5 class="item-title">Mon chinh</h5>
            <select name="main_dishes" id="main-dishes" multiple>
                <option value="1">Bo ham</option>
                <option value="2">Ca hem sot ca</option>
                <option value="3">Tom rang muoi</option>
                <option value="4">Cua sot me</option>
            </select>
        </div>

        <div class="list-menu">
            <h5 class="item-title">Mon khai vi</h5>
            <select name="desserts" id="desserts" multiple>
                <option value="1">Goi ngo sen</option>
                <option value="2">Salat ca ngu</option>
                <option value="3">Bo tron rau thom</option>
                <option value="4">Thit nguoi</option>
            </select>
        </div>
    </div>
</body>

</html>