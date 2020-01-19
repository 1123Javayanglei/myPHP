<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
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
        <form action="LoginConfirmation.php" method="post">

            <div>
                学号:<input type="text" name="studentNumber" id="">
            </div>
            <div>
                密码: <input type="password" name="passWord" id="">
            </div>
            <div>
                <input type="submit" value="提交">
            </div>
        </form>
    </div>
    <div class="bottom">
        <h5>©️南阳职业学院计算机与信息工程学院2019</h5>
    </div>


</body>

</html>