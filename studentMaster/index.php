<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="title">学生信息管理</div>
    <div class="titleOfLine">
        <a href="index.php">主页</a>
        <a href="login.php">登陆</a>
        <a href="register.php">注册</a>
        <a href="logined.php">信息</a>
        <a href="select.php">查询</a>
        <a href="signOut.php">登出</a>
    </div>
    <div class="middle">
        <br>
        <h1 style="text-align: center;font-size:40px">Welcome to here</h1>
        <h1 style="text-align: center;font-size:40px">
        <?php 
        if(isset($_SESSION['studentName'])) {
            echo '<p>'.$_SESSION['studentName'].'</p>';
            echo "<img src='".$_SESSION['imgFile']."' height='250px'>";
            
        }
        
        ?>
        </h1>
    </div>
    <div class="bottom">
        <h5>©️南阳职业学院计算机与信息工程学院2019</h5>
    </div>

</body>

</html>