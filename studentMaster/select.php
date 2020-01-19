<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查询</title>
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
        <form action="" method="post">

            学号: <input type="text" name="studentNumber" id="">
            <input type="submit" value="提交">

        </form>
        <br>
        <?php
        $studentNumber = $_POST['studentNumber'];

        $conn = mysqli_connect('localhost', 'root', 'root', 's1805', 8889);
        
        $sql = "SELECT * FROM student WHERE studentNumber='$studentNumber'";
        $result = mysqli_query($conn, $sql);
        echo "<table width='600px' cellpadding='5' cellspacing='3' border='1'>";
        echo "<tr bgcolor='#efefef'><th>🆔</th><th>姓名</th><th>学号</th><th>性别</th><th>班级</th><th>电话</th><th>📮</th><th>头像</th></tr>";
        if (mysqli_num_rows($result) > 0) {
            // 输出数据
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr bgcolor='#cccccc'><td>" . $row["Id"] . "</td>";
                echo "<td>" . $row["studentName"] . "</td>";
                echo "<td>" . $row["studentNumber"] . "</td>";
                echo "<td>" . $row["gander"] . "</td>";
                echo "<td>" . $row["classNumber"] . "</td>";
                echo "<td>" . $row["tellOfPhone"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" ;
                echo "<img src='".$row['imgFile']."'>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr>查无此人</tr>";
        }
        echo '</table>';
        mysqli_close($conn);
        ?>
    </div>
    <div class="bottom">
        
        <h5>©️南阳职业学院计算机与信息工程学院2019</h5>
    </div>


</body>

</html>