<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>function</title>
    <style>
        table{
          border: solid 2px red;  
          width: 50%;
          height: 20rem;
        }
        tr{
            border: double 1px blue;
            height: 10rem;
            width: 10%;
        }
        td{
            border: outset 2px yellow;
            height:5rem;
            width:5%;
        }
    </style>
</head>
<body>
    <?php 
    /**
     * 函数
     * 
     * 完成特定的要求的功能
     * 函数的定义、调用
     * 通过include调用 
     * 
     * 函数传递
     * 
     * $GLOBALS 超全局变量
     * global 全局变量
     * 
     * 嵌套调用
     * 一个函数调用另外一个函数
     */
    include "./3.1_sumCont.php";
    
    addSum(3,5);

    echo "<br>";

    sanJiaoXing(3,4,5);

    echo generte_table(2,2)."<br>";
    
    ?>
    <?php 
    
    ?>
</body>
</html>