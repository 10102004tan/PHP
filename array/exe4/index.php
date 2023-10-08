

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 20px;
        }

        .menu {
            margin: 0 auto;
            width: 40%;
            display: flex;
            justify-content: space-between;
            /* text-align: center; */
        }

        h2 {
            /* margin: 0 auto;
             */
            text-align: center;
        }
        button {
            margin: 20px auto;
            display: block;
        }
    </style>
</head>

<body>

    <form action="choose.php" method="get">

        <h2 class="title">Thuc don</h2>
        <div class="menu">
            <div class="list-menu">
                <h5 class="item-title">Mon khai vi</h5>
                <select name="appetizer[]" id="appetizer" multiple>
                    <option value="1">Bo ham</option>
                    <option value="2">Ca hem sot ca</option>
                    <option value="3">Tom rang muoi</option>
                    <option value="4">Cua sot me</option>
                </select>
            </div>

            <div class="list-menu">
                <h5 class="item-title">Mon chinh</h5>
                <select name="main_dishes[]" id="main-dishes" multiple>
                    <option value="1">Bo ham</option>
                    <option value="2">Ca hem sot ca</option>
                    <option value="3">Tom rang muoi</option>
                    <option value="4">Cua sot me</option>
                </select>
            </div>

            <div class="list-menu">
                <h5 class="item-title">Mon trang mieng</h5>
                <select name="desserts[]" id="desserts" multiple>
                    <option value="1">Goi ngo sen</option>
                    <option value="2">Salat ca ngu</option>
                    <option value="3">Bo tron rau thom</option>
                    <option value="4">Thit nguoi</option>
                </select>
            </div>
            
        </div>
        <button type="submit" name="submit">Đặt</button>

        
    </form>

    </div>
</body>

</html>