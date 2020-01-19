<?php 
function addSum($a,$b){
    echo $a+$b;
}
function sanJiaoXing($a,$b,$c)
{
    if (a*a+b*b==c*c) {
        echo "This is Sanjiao";
    }else{
        echo "This is not Sanjiao";
    }
}
function generte_table($row,$col)
{
    $html="<table>";
    for ($i=1; $i <=$row; ++$i) { 
        $html.="<tr>";
        for ($j=1; $j<=$col; ++$j) { 
            $html.="<td></td>";
        }
        $html.="</tr>";
    }
    return $html."</table>";
}


