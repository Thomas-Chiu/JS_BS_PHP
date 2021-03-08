<?php
// Global Example 全域範例

$global = "我是全域變數";

function test1() {
  echo "<p>print $global</p>"; // error 不認識 $global 
}
test1();

echo "<p>print $global</p>";



// Local Example 區域範例

function test2 () {
  $local = "我是區域變數";
  echo "<p>print $local</p>";
}
test2();

echo "<p>print $local</p>"; // error 不認識 $local
?>