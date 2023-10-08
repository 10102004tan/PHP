<?php

$name = isset($_POST["name"]) ? $_POST['name'] : "";
$email = isset($_POST["email"]) ? $_POST['email'] : "";
$website = isset($_POST["website"]) ? $_POST['website'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$gender = isset($_POST["gender"]) ? $_POST['gender'] : "";
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

        #displayInfo {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post" class="input-list">

        <div class="input-item">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $name ?>">
        </div>
        <div class="input-item">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>"> 
        </div>
        <div class="input-item">
            <label for="website">Website</label>
            <input type="text" name="website" id="website" value="<?php echo $website ?>">
        </div>
        <div class="input-item">
            <label for="comment">Commnent</label>
            <textarea name="comment" id="comment" cols="30" rows="20">
            <?php echo $comment ?>
        </textarea>
        </div>
        <div class="input-item">
            <span class="gender-title">Gender : </span>
            <div class="input-radio">
                <label for="gender">Male</label>
                <input type="radio" name="gender" id="gender" value="male" <?php if ($gender == "male") echo "checked"?>>
            </div>

            <div class="input-radio">
                <label for="gender">Female</label>
                <input type="radio" name="gender" id="gender" value="female" <?php if ($gender == "female") echo "checked"?>>
            </div>
        </div>

        <div class="input-item">
            <button type="submit">Submit</button>
        </div>
    </form>

    <div id="displayInfo">
        <span>Name :
            <?php echo $name ?>
        </span>
        <span>Email :
            <?php echo $email ?>
        </span>
        <span>Website :
            <?php echo $website ?>
        </span>
        <p>Comment :
            <?php echo $comment ?>
        </p>
        <span>Gender :
            <?php echo $gender ?>
        </span>

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