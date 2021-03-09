<?php
// 建立類別
class Motorbike {
  // 定義屬性
  public $brand;
  private $model;
  protected $style;

  // 建構物件中屬性值的函式 (把參數傳進物件中的變數)
  public function __construct($sourceBrand, $sourceModel, $sourceStyle) {
    // $this (這個物件) -> (裡面的) brand (變數) = $sourceBrand (建立新物件傳入的參數)
    // 因為物件內不能直接使用物件外傳入的參數，內外不共通，一定要透過 -> 語法才能變更
    $this->brand = $sourceBrand; 
    $this->model = $sourceModel;
    $this->style = $sourceStyle;
  }

  // 定義方法
  public function showMotorbike() {
    return "我的摩托車是 " . $this->brand . " 的 " . $this->model . "&nbsp" . $this->style;
  } 

  // 解構 (腳本結束時) 物件的函式
  function __destruct()  {
    echo "<hr>" . $this->brand . " 解構中......";
  }
}

// 建立新物件
$myMotorbike = new Motorbike("YAMAHA", "XSR700", "Neo-retro");
$myMotorbike2 = new Motorbike("HONDA", "CB350", "Scrambler");

// 印出新物件的資料
echo $myMotorbike->showMotorbike() . "<br>"; 
echo $myMotorbike2->showMotorbike(); 
?>