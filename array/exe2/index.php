<?php 
$search_result = "";


if (!empty($_GET["contentSearch"]))
{
    $search_result  = "Kết quả tìm kiếm với từ khoá  " . $_GET["contentSearch"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <div class="search">
            <input type="text" name="contentSearch" placeholder="Tu khoa">
            <button type="submit">Tim</button>
        </div>
        
    </form>

    <h5 class="search-result"><?php echo $search_result?></h5>
</body>
</html>