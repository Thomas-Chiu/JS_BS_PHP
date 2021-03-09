<?php
function test1() {
  static $num = 10; // static 關鍵字保留區域變數 $num
  echo $num;
  $num++;
}

for ($i=0; $i<=10; $i++) {
  // 印出 $num 10～20
  test1();
  echo "<br>";
}
?>