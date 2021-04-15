<?php
$while = 0;
$doWhile = 10;
$cars = array(
  "VOLVO" => "太古",
  "BMW" => "寶馬",
  "BENZ" => "賓士",
  "FORD" => "福特"
);

// while 先檢查條件，再判斷是否跑迴圈
while ($while < 10) {
  echo "我是 while $while <br>";
  $while++;
}

echo "<hr>";

// do-while 先執行一次，再檢查條件，才判斷是否跑迴圈
do {
  echo "我是 do-while $doWhile <br>";
  $doWhile++;
} while ($doWhile < 11);


echo "<hr>";

// for
for ($i = 0; $i < count($cars); $i++) {
  echo "我是 index $i <br>";
}

echo "<hr>";

// foreach 類似 JS for of
foreach ($cars as $value) { // 寫法一
  echo "我是陣列 value $value <br>";
}

echo "<hr>";

foreach ($cars as $key => $value) { // 寫法二
  echo "我是陣列 key $key => value $value <br>";
}
