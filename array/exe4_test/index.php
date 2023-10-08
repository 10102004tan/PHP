<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="get">
        <select name="select[]" id=""  multiple>
            <option value="1">Value 1</option>
            <option value="2">Value 2</option>
            <option value="3">Value 3</option>
        </select>

        <button type="submit">Submit</button>
    </form>

    <?php
    $array = $_GET["select"];
    ?>
    <div class="result">
        <?php foreach ($array as $value) : ?>
            <h5>Option : <?php echo $value ?></h5>
        <?php endforeach ?>

    </div>
</body>

</html>