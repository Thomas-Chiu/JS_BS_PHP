<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
    echo "Hello Thomas <hr>"; // echo 印出字串，字串可夾 HTML
    
    // 單行註解 
    # 單行註解

    /*
    多行註解 
    */

    $var = 10 /* + 10 */  + 10; // 行內註解 
    echo $var; 
    echo "<hr>";

    // echo 大小寫皆可
    echo "範例 1 <br>";
    ECHO "範例 2 <hr>";

    // 變數大小寫有差
    $car = "HINO";
    $CAR = "FUSO";
    // . 用來連結字串 & 變數
    echo "My car is a " . $car . "<br>";
    echo "My car is a " . $CAR . "<br>";

    // 變數 error
    echo "My car is a " . $Car;
  ?>

</body>
</html>