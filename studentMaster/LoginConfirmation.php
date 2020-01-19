<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登陆确认</title>
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
        <?php
        $stuNo = $_POST["studentNumber"];
        $pwd = $_POST["passWord"];
        $link = mysqli_connect('localhost', 'root', 'root', 's1805', '8889'); //ip,username,pwd,dateName,port
        $sql = "select * from student where studentNumber='$stuNo' and passWord='$pwd'";
        // echo $sql;  //测试用ffcf
        $result = mysqli_query($link, $sql); //query(link,query) 成功返回true 失败返回false

        $_SESSION=mysqli_fetch_assoc($result);

        

        $num = mysqli_num_rows($result); //选中结果中行的数量

        mysqli_free_result($result);  //释放
        mysqli_close($link);     //关闭数据库链接
        // echo "$num"."<br>";
        if ($num > 0) {
            // header("location:");
            header("Location:index.php");
        } else {

            echo "少侠，请重新来过";
            // header("Location:login.php");
        }
        ?>
    </div>
    <div class="bottom">
        <h5>©️南阳职业学院计算机与信息工程学院2019</h5>
    </div>

</body>

</html>