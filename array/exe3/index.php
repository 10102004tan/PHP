<?php

session_start(); // Khởi tạo phiên (session)

if (isset($_POST['submit'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['website'] = $_POST['email'];
    $_SESSION['comment'] = $_POST['email'];
    $_SESSION['gender'] = $_POST['email'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .input-list {
            display: flex;
            flex-direction: column;
        }

        .input-item {
            margin: 10px;
            display: flex;
            align-items: flex-start;
        }

        label {
            margin-right: 10px;
        }

        .result {
            display: flex;
        }
    </style>
</head>

<body>
    <form action="index.php" method="get" class="input-list">
        <div class="input-item">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-item">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input-item">
            <label for="website">Website</label>
            <input type="text" name="website" id="website">
        </div>
        <div class="input-item">
            <label for="comment">Commnent</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        </div>
        <div class="input-item">
            <span class="gender-title">Gender : </span>
            <div class="input-radio">
                <label for="gender">Male</label>
                <input type="radio" name="gender" id="gender" value="male">
            </div>

            <div class="input-radio">
                <label for="gender">Female</label>
                <input type="radio" name="gender" id="gender" value="female">
            </div>
        </div>

        <div class="input-item">
            <button type="submit">Submit</button>
        </div>
    </form>

    <div id="displayInfo">
        <?php
        if (isset($_POST['submit'])) {
            echo "<p>Tên: " . $_SESSION['name'] . "</p>";
            echo "<p>Email: " . $_SESSION['email'] . "</p>";
        }
        ?>
    </div>
</body>

</html>

<!-- 

$sinhvien = array(
    '1'=> array('Tinhoc'=>10,'KTLT'=>8,'MMT'=>10),
    '2'=> array('Tinhoc'=>8,'KTLT'=>8,'MMT'=>9),
'sv3'=> array('Tinhoc'=>9,'KTLT'=>7,'MMT'=>8),
);



 -->