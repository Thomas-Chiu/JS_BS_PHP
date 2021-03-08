<?php
// string 字串
$str = "Hello Thomas!";
$str2 = 'Hello Thomas!';
$str3 = `Hello Thomas`; // php 字串不支援 ``
echo "$str <br> $str2 <br> $str3 <hr>";

// integer 整數
$num = 6000;
var_dump($num); // var_dump() 印出變數相關訊息
echo "<hr>";

// float 小數
$num2 = 6000.666;
var_dump($num2);
echo "<hr>";

// array 陣列 
$fruits = array("apple", "banana", "coconut", "durian"); // 注意 php 是用 ()，非 js []
var_dump($fruits);
echo "<hr>";

// null 空值
$color = "blue";
$color = null;
var_dump($color);
echo "<hr>";

// boolean 布林值
$isTrue = true;
$isFalse = false;
var_dump($isTrue, $isFalse);

/*
  boolean = false 情況
    1. 整數 0 
    2. 小數 0.0
    3. 空字串 "" & 字串零 "0"
    4. 空陣列 ()
    5. NULL 
*/
?>