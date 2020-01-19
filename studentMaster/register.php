<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {
        if (isset($_FILES['upload'])) {
                if ($_FILES['upload']['error']!== UPLOAD_ERR_OK) {
                    exit('失败');
                }
                $save='./images/'.time().'.jpg';
                if (!move_uploaded_file($_FILES['upload']['tmp_name'],$save)) {
                    exit('无法保存');
                }
                echo "成功";
        }
        $studentName = $_POST["studentName"];
        $studentNumber = $_POST["studentNumber"];
        $passWord = $_POST["passWord"];
        $gander = $_POST["gander"];
        $classNumber = $_POST["classNumber"];
        $tellOfPhone = $_POST["tellOfPhone"];
        $email = $_POST["email"];
        $images=$_POST['upload'].$save;
        $link = @mysqli_connect('localhost', 'root', 'root', 's1805', 8889);
        if (!$link) {
            exit("link error");
        }
        $sql = "insert into student(studentName,studentNumber,passWord,gander,classNumber,tellOfPhone,email,imgFile) values('$studentName','$studentNumber','$passWord','$gander','$classNumber','$tellOfPhone','$email','$images')";
        $result = mysqli_query($link, $sql);
        if ($result) {
            header("Location:login.php");
        } else {
            header("Location:register.php");
        }
    }
    ?>
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
        <form action="" method="post" enctype="multipart/form-data">
            名字: <input type="text" name="studentName" id=""> <br>
            学号: <input type="text" name="studentNumber" id=""> <br>
            密码: <input type="password" name="passWord" id=""> <br>
            性别: <input type="radio" name="gander" id="" value="Man">男
            <input type="radio" name="gander" id="" value="Woman">女 <br>
            班级: <input type="text" name="classNumber" id=""><br>
            手机: <input type="text" name="tellOfPhone" id=""><br>
            邮箱: <input type="text" name="email" id=""><br>
            选择文件<input type="file" name="upload" id=""><br>

            <input type="submit" value="注册" name="submit"><br>

        </form>
    </div>
    <div class="bottom">
        <h5>©️南阳职业学院计算机与信息工程学院2019</h5>
    </div>


</body>

</html>