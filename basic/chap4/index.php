<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .combobox {
            display: flex;
            
        }
    </style>
</head>
<body>
    <div class="combobox">
        <div class="combobox_date">
            <label for="date">Date</label>
            <select name="date" id="date" class="date">
                <?php
                    for ($i=1; $i<= 31 ; $i++) {
                        echo "<option value=$i>$i</option>";                        # code...
                    }
                ?>
            </select>
        </div>

        <div class="combobox_month">
            <label for="month">Month</label>
            <select name="month" id="month" class="month">
                <?php
                    for ($i=1; $i<= 12 ; $i++) {
                        echo "<option value=$i>$i</option>";                        # code...
                    }
                ?>
            </select>
        </div>

        <div class="combobox_year">
            <label for="year">Year</label>
            <select name="year" id="year" class="year">
                <?php
                    for ($i=1990; $i<= 2023 ; $i++) {
                        echo "<option value=$i>$i</option>";                        # code...
                    }
                ?>
            </select>
        </div>
    </div>
</body>
</html>