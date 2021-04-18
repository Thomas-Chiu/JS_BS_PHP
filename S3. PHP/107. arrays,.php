<?php
$indexArrays = array("Harley-Davidson", "Triumph", "Honda");
$assocArrays = array(
  "哈雷" => 1903,
  "凱旋" => 1902,
  "本田" => 1955,
);
$multiArrays = array(
  array("Harley-Davidson", "哈雷", 1903),
  array("Triumph", "凱旋", 1902),
  array("Honda", "本田", 1955)
);

// indexed array 索引陣列
echo "我的重機有 $indexArrays[0]、$indexArrays[1] 和 $indexArrays[2] <hr>";
// array length
echo "indexArrays 陣列長度 = " . count($indexArrays) . "<hr>";
// 用 for 印出
for ($i = 0; $i < count($indexArrays); $i++) {
  echo "我是 index $i 的值 $indexArrays[$i] <br>";
}
echo "<hr>";

// associative array 關聯陣列
echo "Harley-Davidson Est. " . $assocArrays["哈雷"] . "<hr>";
// 用 foreach 印出
foreach ($assocArrays as $key => $value) {
  echo "key: $key, value: $value <br>";
}
echo "<hr>";

// multidimensional array 多維陣列
foreach ($multiArrays as $key => $value) {
  echo $key + 1 . " 號重機：";
  foreach ($value as $value2) {
    echo "$value2, ";
  }
  echo "<br>";
}
