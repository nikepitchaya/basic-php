<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shikimori-san</title>
    <style>
        h1{
            text-align:center;
        }
        .container{
            background-color:#688;
            width: 100vw;
            height: 100vh;
            display:"flex";
            justify-content:"center";
        }
        .logo{
            height: 350px;
            width: 600px;
        }
        .logo img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
    <img class="logo"src="shikimorisan.jpg" alt="shikimori">
    <h1>SHIKIMORISAN KAWAII</h1>
    <?php 
    echo"<h2>การเขียน HTML ร่วมกับ PHP</h2>"
    ?>
    <form action="">
        <label for="">First : </label>
        <input type="text" value="<?php echo"ไน" ?>">
        <label for="">Last : </label>
        <input type="text" value="<?php echo"กี้" ?>"> 
    </form>
    <?php 
        include "variable.php";
        require "variable.php";
    ?>
    </div>
</body>
</html>