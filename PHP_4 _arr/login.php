<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
   
    <?php 
     $userName=$_POST['userName'];  //$_POST 获取表单数据
     $password=$_POST['passWord'];
     if (($userName=="admin")&&($password=="123")) {
         header('Location:loginSucceed.php?usr='.$userName);
        
     } else {
        header('Location:loginFailure.php?usr='.$userName); //向XX.php传入usr的值为$userName
        
     }
          
    ?>
</body>
</html>