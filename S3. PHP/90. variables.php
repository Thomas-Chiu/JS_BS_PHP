<?php
// 變數可存字串或數字
$string = "我是字串";
$num1 = 1.1;
$num2 = 1.2;

// 分開印出
echo $string;
echo "<br>";
// 用 . 連接印出
echo $num1 . $string . "<br>";
// "變數放字串裡印出"
echo "$num2 $string <hr>";

$num1 = 1.3;
$num2 = 2.2;
$sum = $num1 + $num2;

echo "num1 + num2 = $sum" // = 3.5
?>