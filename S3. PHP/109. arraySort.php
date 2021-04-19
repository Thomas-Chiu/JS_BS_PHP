<?php
$names = array("John", "Alex", "Tom", "Vina", "Zeus");
$scores = array(100, 50, 70, 45, 66);
$testScores = array(
  "John" => 100,
  "Alex" => 50,
  "Tom" => 70,
  "Vina" => 45,
  "Zeus" => 66
);

// array sort
sort($names); // 正排序 (由小到大)
rsort($scores); // 反排序 (由大到小)

for ($i = 0; $i < count($names); $i++) {
  echo "$names[$i] <br>";
}
echo "<hr>";

for ($i = 0; $i < count($scores); $i++) {
  echo "$scores[$i] <br>";
}
echo "<hr>";

// associative array sort 
asort($testScores); // 正排序 (依據 value)
arsort($testScores); // 反排序 (依據 value)

foreach ($testScores as $key => $value) {
  echo "$key 考 $value 分 <br>";
}
echo "<hr>";

ksort($testScores); // 正排序 (依據 key)
krsort($testScores); // 反排序 (依據 key)

foreach ($testScores as $key => $value) {
  echo "$key 考 $value 分 <br>";
}
