    <?php

    /**
     * 数组
     * 一组数据的集合，没有数据类型的要求
     * 
     * 1.索引数组
     * 2.关联数组
     * 
     * php中数组中的元素，是一对键(key)和值(value)
     */

    #索引数组
    //  key(0~arrLong-1)
    $arr_1 = array("aa", "bb", 23, true);

    #关联数组       key => value
    $arr_2 = array("xing" => "zhangsan", "lisi", "wangerbazi", "migzi" => "fugui", "age" => 18, "sek" => "Man", "Woman",);

    $arr_2_1 = array("ID" => 10, "Name" => "Tom", "Gender" => "Man", "Tel" => "12345678");

    //  数组的访问
    // 通过 数组名[key]

    echo "arr_1[3]=" . $arr_1[3] . "<br>";

    echo "arr_2_1[Name]=" . $arr_2_1["Name"] . "<br>";

    echo $arr_2["xing"] . "<br>";

    // 混合数组

    $arr_3 = array("aa", "bb", "xing" => "nigu", "aa", "ming" => "lasi", "liungeng", "bb", "zhuqui" => "zhaosi",);

    //索引访问方式，非键(0~arrLong-1)
    echo $arr_3[3] . "<br>";

    $arr_4 = array("xing" => "nigu", "ming" => "lasi", "300" => "lineng", "zhuiqui" => "zhaosi", "bb", "cc", "dd",);

    echo $arr_4[300] . "<br>" . $arr_4[301] . "<br>"; //"300" = 300 ,后面从300数 

    $arr_5 = array("<img src='./双拼.png'>");

    echo $arr_5[0] . "<br>";

    $arr_6 = array(
        "img" => array("hello"),
        "img_2" => array("<h1>nih</h1>"),
    );

    echo $arr_6["img_2"][0] . "<br>", "<img src='./hejp.png'>" . "<br>";

    $arr_7 = array($arr_5);

    echo "<h1>二维数组</h1>" . $arr_7[0][0] . "<br>";

    /**
     * 定义多维数组和访问
     */
    $data = array(
        0 => array('Name' => 'Tom', 'Gender' => "Man"),
        1 => array('Name' => 'Lucy', 'Gender' => "Woman"),
        2 => array('Name' => 'Jimmy', 'Gender' => "Man"),
    );
    echo "date[0]['Name']=" . $data[0]['Name'] . "<br>";

    ?>
