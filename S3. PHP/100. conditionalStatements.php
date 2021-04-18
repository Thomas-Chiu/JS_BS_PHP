<?php
$condition = 10;
$grade = 90;
$motorBike = "Harley-Davidson";

// if
if ($condition < 100) {
  echo "達成條件";
} else {
  echo "未達成條件";
}

echo "<hr>";

// else if 
if ($grade < 50) {
  echo "成績：F";
} else if ($grade >= 50 && $grade < 60) {
  echo "成績：D";
} else if ($grade >= 60 && $grade < 70) {
  echo "成績：C";
} else if ($grade >= 70 && $grade < 80) {
  echo "成績：B";
} else if ($grade >= 80 && $grade < 90) {
  echo "成績：A";
} else {
  echo "成績：A+";
}

echo "<hr>";

// switch
switch ($motorBike) {
  case "Harley-Davidson":
    echo "$motorBike 是美式重機";
    break;
  case "Triumph":
    echo "$motorBike 是英倫重機";
    break;
  case "Honda":
    echo "$motorBike 是日系重機";
    break;
  default: // 預設值
    echo "Gogoro 不是重機";
}
