    <?php
    /**
     * 1.打印九九乘法表
     */
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i . '*' . $j . '=' . $i * $j . ' ';
        }
        echo '<br>';
    }
    /**
     * 2.写出交换两个变量的值
     * 交换a和b的值
     */
    $a;
    $b;
    $c;
    $c = $a;
    $a = $b;
    $b = $c;
    /**
     * 3.求$a, $b, $c 三个数中的最大值和最小值
     */
    $a;
    $b;
    $c;
    $Max;
    $Min;
    if ($a>$b && $a>$c) {
        $Max=$a;
    }
    if ($b>$c && $b>$a) {
        $Max=$b;
    }
    if ($c>$b && $c>$a) {
        $Max=$c;
    }
    if ($a<$b && $a<$c) {
        $Min=$a;
    }
    if ($b<$c && $b<$a) {
        $Min=$b;
    }
    if ($c<$a && $c<$b) {
        $Min=$c;
    }

    echo date('Y-m-d H:i:s',time()-86400);
    
    ?>