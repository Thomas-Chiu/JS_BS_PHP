<?php
$string = "Hello, I am Thomas!";

// 計算字串單字
echo str_word_count($string) . "<hr>";

// 計算字串長度
echo strlen($string) . "<hr>";

// 反轉字串
echo strrev($string) . "<hr>";

// 查詢目標字位置
echo strpos($string, "a") . "<hr>";

// 替換字串文字
$search = "Thomas";
$replace = "Vina";
echo str_replace($search, $replace, $string);
?>