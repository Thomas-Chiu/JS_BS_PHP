<?php
// 測試 echo & print 速度的差異
// 使用內建函式 microtime()

$before = microtime(true);
for ($i = 0; $i < 100000; $i++){
  echo "&nbsp"; // echo 100000 個空格
}
$after = microtime(true);
echo "<br>echo 花: ".($after - $before)."毫秒<br>";
 

$before = microtime(true);
for ($i = 0; $i < 100000; $i++){
  print "&nbsp"; // print 100000 個空格
}
$after = microtime(true);
echo "<br>print 花: ".($after - $before)."毫秒";
?>