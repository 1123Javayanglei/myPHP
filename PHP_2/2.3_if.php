<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if,else</title>
    <style type="text/css">
        h1{
            color: blue;
            border: 10px solid #98b80f;
            margin-bottom;: 20px;

        }
        table{
            
        }
    </style>
</head>
<body>
    <h1>5.自增自减</h1>
    
    <?php 
        $sum=1;

        $sum++;

        echo "$sum";

        echo '<br>';

        echo "$sum";

    ?>



    <h1>6.位运算符</h1>
    <?php

    /**
     *  
     * 
     */
    
    ?>

    <h1>8.错误控制运算符号</h1>
    <?php
       echo @(4/0); 

    ?>

    <h1>9.流程控制</h1>

    <?php
    /**
     * 三目运算符号
     * 1 ? 2 : 3
     *    true false
     *  */ 

     $chengji =101;

     if ($chengji>0 && $chengji<60) {
         # code...
         echo "不及格";
     }elseif ($chengji>=60 && $chengji<90) {
         # code...
         echo "你及格了";
     }elseif ($chengji>=90 && $chengji<=100) {
         # code...
         echo "你优秀了";
     }else{
         echo "你完蛋了";
     }

     echo "<br>";

     switch ($chengji) {
         case $chengji>0 && $chengji<60:
             # code...
             echo "你不及格，回家竹笋炒肉";
             break;
         case $chengji>=60 && $chengji<90:
             # code...
             echo "你竟然及格了";
             break;
        case $chengji>=90 && $chengji<=100:
            # code...
            echo "你优秀了";
            break;
         default:
             # code...
            echo "你骗我，你完了";
             break;
     }

    ?>
    <br>

    <h1>九九乘法表</h1>


    <?php


    echo "<table>";


    for ($i=1; $i <=9 ; $i++) { 
        # code...
        echo "<tr>";

        for ($j=1; $j <=$i ; $j++) { 
            # code...
            echo "$i*$j=".$i*$j.' ';
            
        }

        echo "</tr>";

    }

    echo "</table>"
    
    ?>

</body>
</html>