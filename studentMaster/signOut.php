<?php 

    session_start();  //开启
 
    $_SESSION=[];  //赋空值

    session_destroy(); //销毁

    header("Location:login.php"); //定向

?>