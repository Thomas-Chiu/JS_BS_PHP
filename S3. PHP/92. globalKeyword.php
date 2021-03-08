<?php
$num1 = 30;
$num2 = 20;

function test1() {
  global $num1, $num2; // global 關鍵字取得全域變數 $num1 & $num2
  $num2 = $num1 + $num2;
  echo "$num2 <br>"; // = 50
  
  // 上面可改寫成 $GLOBALS[變數名稱]
  $GLOBALS['num2'] = $GLOBALS['num1'] + $GLOBALS['num2'];
}
test1();
echo $num2 // = 80
?>