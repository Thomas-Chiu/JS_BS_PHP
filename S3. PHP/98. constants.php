<?php
// 常數不用加 $，兩種寫法
define("car", "VOLVO");
const carArr = ["HINO", "FUSO", "ISUZU"];

echo car . "<hr>";
for ($i=0; $i<=count(carArr) - 1; $i++) { 
  // PHP 的 count(array) = JS 的 array.length
  if ($i == count(carArr) - 1) {
    echo carArr[$i];
  } else
  echo carArr[$i] . ", ";
}
?>