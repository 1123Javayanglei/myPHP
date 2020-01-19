	<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>Hello world</title>
		<style type="text/css">
			body{
				background: #FFFF;
			}
			h1{
				color: blue;
				text-align: center;
				font-family:;

					}
			h2{
				color: green;
				text-align: center;
			}
		</style>
		<script>
			// alert(<?php print ("996"); ?>)
		</script>
	</head>
	<!-- <h1>Hello World</h1>
	<br>
	<h2><?php echo "Hello world";
	 ?></h2> -->
	<?php
	// //常量的定义
	// //1.define()函数
	// define("pi", 3.1415);
	// echo pi;
	// // define("pi", 4.13); 定义完之后不可更改
	// echo pi;
	//
	// 2.const 关键字
	// const PI=5;
	// printf(PI);

	//预定常量
	// echo(PHP_VERSION);
	// echo("<br>");
	// echo(PHP_OS);

	//变量 $变量名
	// $a=123;
	// echo($a."<br>");
	// $b="南阳职业学院";
	// echo $b."<br>";
	// $c=1.23434;
	// echo $c."<br>";
	//
	//
	//布尔型
	// $a=false;
	// var_dump($a);
	// echo("<br>");


	// 整形
	// $b=012;
	// var_dump($b);
	// echo("<br>");
	// $c=0xca;
	// var_dump($c);


	// 浮点型
	// $f=3.14e5; //*10^5
	// echo("<br>");
	// var_dump($f);
	// echo("<br>");


	// 字符串
	// advd(12)fadsfa
	// advd'12'fadsfa
	// advd"12"fadsfa
	// $g="advb'11'dfad"; //错误：'advb'11'dad';
	// var_dump($g);
	//

	//heredoc 语法结构
	$heredoc=<<<DEF
// fffaadsjfdklsfja
// fjasdfkladsfja
// fasfadsfafsdfdsa
// fjdsa;lfa
// fadjsfklads'fal

DEF;
echo $heredoc;
echo'<br>';
//nowdoc 语法结构

$nowdoc=<<<"END"
// fhdskhfkds;fhjdsaf
// jfa;kjfal;dsjfal;cairo_image_surface_create_for_data(jfadls;jfajk, format, width, height)
// fhdsfkjdsf;afjdas;f
END;
echo $nowdoc;

echo'<br>';
echo'<br>';

$a="abdv\"dfef";  // \" 双引号
echo $a;

	?>
<br>
<br>
<br>
<br>


<?php

//自增自减少
//

$a=1;

$a++   //先赋值，后加一

// ++$a 	//先加一，后赋值



 ?>
