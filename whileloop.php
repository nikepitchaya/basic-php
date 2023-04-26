<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>While Loop</h1>
    <hr>
    <?php
    $count = 1;
    $limit = 10;
    ?>
    <h2>เลือกรายการอาหาร</h2>
    <select>
    <?php while($count<=$limit){?>
        <option value=""><?php echo "รายการอาหาร :".$count."<br>" ?></option>
    <?php
    $count++;
}
    ?>
    </select>
</body>
</html>