<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    /*giu lai fu lieu khi nguoi dung nhan  submit :

    */
</head>
<body>
<form method="post" action="index.php">
    <label for="ten">Tên:</label>
    <input type="text" id="ten" name="ten" value="<?php echo isset($_POST['ten']) ? $_POST['ten'] : ''; ?>" />
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" />
    
    <!-- Thêm các trường dữ liệu khác vào form -->
    
    <input type="submit" name="submit" value="Gửi" />
</form>
</body>
</html>
