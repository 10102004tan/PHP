<?php
$listSinhVien = array(

    'sv1' => array('Tinhoc' => 10, 'KTLT' => 8, 'MMT' => 10),
    'sv2' => array('Tinhoc' => 10, 'KTLT' => 8, 'MMT' => 10),
    'sv3' => array('Tinhoc' => 10, 'KTLT' => 8, 'MMT' => 10)
);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr,
        td {
            border: 1px solid #000;
            font-size: 20px;
            text-align: center;
            
        }

        thead {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            
            <tr>
                <td>Name</td>
                <?php foreach ($listSinhVien as $itemSinhVien): ?>
                    <?php foreach ($itemSinhVien as $keyItem => $valueItem): ?>
                        <td>
                            <?php echo $keyItem ?>
                        </td>
                    <?php endforeach;
                    break;
                    ?>

                <?php endforeach ?>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($listSinhVien as $keySinhVien => $valueSinhVien): ?>
                <tr>
                    <td><?php echo $keySinhVien ?></td>
                    <?php foreach ($valueSinhVien as $keyItem => $valueItem): ?>
                        <td>
                            <?php echo $valueItem ?>
                        </td>
                    <?php endforeach;
                    ?>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>