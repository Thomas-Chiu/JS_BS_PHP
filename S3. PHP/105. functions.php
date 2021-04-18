<?php
// basic function
function basicFunction()
{
  echo "我是基礎函式 <hr>";
}

basicFunction();

// function argument 
function functionArgument($motorBrand, $type, $year) // 定義函式(參數)
{
  echo "我是引數函式：$motorBrand, $type, $year <br>";
}

functionArgument("Honda", "CB-350", 2020); // 呼叫函式(引數)
functionArgument("Yamaha", "XSR-700", 2019);
functionArgument("Suziki", "TU-250", 2016);
echo "<hr>";

// default function argument
function defaultArgument($myAge = 26)
{
  echo "I am $myAge years old. <br>";
}

defaultArgument(); // 引數使用預設值 26
defaultArgument(30);
defaultArgument(18);
echo "<hr>";

// returning values
function returnValue($num1, $num2)
{
  $sum = $num1 + $num2;
  return $sum;
}

echo "1 + 2 = " . returnValue(1, 2) . "<br>";
echo "3 + 4 = " . returnValue(3, 4) . "<br>";
echo "5 + (-6) = " . returnValue(5, -6);
