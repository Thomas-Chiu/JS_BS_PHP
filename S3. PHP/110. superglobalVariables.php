<?php
// $GLOBALS
function add($num1, $num2)
{
  $GLOBALS["sum"] = $num1 + $num2;
}

add(75, 25);
echo "75 + 25 = $sum <hr>";

// $_SERVER
function serverInfo()
{
  echo $_SERVER["SERVER_PORT"] . "<br>";
  echo $_SERVER["SERVER_NAME"] . "<br>";
  echo $_SERVER["HTTP_HOST"] . "<br>";
  echo $_SERVER["PHP_SELF"] . "<br>";
  echo $_SERVER["DOCUMENT_ROOT"] . "<br>";
  echo $_SERVER["SCRIPT_FILENAME"] . "<br>";
}

serverInfo();
