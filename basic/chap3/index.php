<php? 
$col = 100;
$row = 100;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table {
            width: 100%;
        }
        th,tr,td {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <?php
    echo "<table>";
    echo "<tr>";
    for ($i=1; $i <=$col ; $i++) { 
        # code...
        echo "<th>Tieu de $i";
    }
    echo "</tr>";

    for ($i=1; $i <=$col ; $i++) { 
        # code...
        echo "<tr>";

        for ($j=1; $j <=$row ; $j++) { 
            # code...
            echo "<td> cot $j, hang $i </td>";
        }

        echo "</tr>";
    }
    echo "</table>";


?>
    <!-- <table>
        <thead>
            <tr>
                <td>Tieu de</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table> 


    Nen tach giao dien voi xu ly php rieng biet
    Khai bao du lieu nen bo tren cung cua trang
-->
</body>
</html>