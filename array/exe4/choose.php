<?php
$appetizer = [];
$main_dishes = [];
$desserts = [];


if (isset($_GET["submit"])) {
    $appetizer = $_GET["appetizer"];
    $main_dishes = $_GET["main_dishes"];
    $desserts = $_GET["desserts"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .choose {
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
        .menu-choosed {
            display: flex;
            /* flex-direction: ; */
            justify-content: space-between;
            border: 1px solid #000;
           
        }
        .list-menu-choosed:not(:first-child){
            border-left: 1px solid #000;
            padding: 10px;
        }

        h5 {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="choose">
        <h2 class="title">Thuc don da chon</h2>
        <div class="menu-choosed">

            <div class="list-menu-choosed">
                <h5>Mon khai vi : </h5>
                <ul>
                    <?php foreach ($appetizer as $value): ?>
                        <li>Món :
                            <?php echo $value ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>



            <div class="list-menu-choosed">
                <h5>Mon chinh : </h5>
                <ul>
                    <?php foreach ($main_dishes as $value): ?>
                        <li>Món :
                            <?php echo $value ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>

            <div class="list-menu-choosed">
                <h5>Mon trang mieng : </h5>
                <ul>
                    <?php foreach ($desserts as $value): ?>
                        <li>Món :
                            <?php echo $value ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>