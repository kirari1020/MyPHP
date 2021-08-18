<?php
 class Student {

  public $name;

  public function __construct() { //コンストラクタ（初期化メソッド）
    $this->name = "tanaka"; //プロパティ = $name
  }

  function avg($math, $english) {
    echo (($math + $english) / 2)."\n";
  }
 }

 $a001 = new Student(); //インスタンス = クラス
 $a001->name = "sato";
 echo $a001->name."\n"; //メソッド

 $a002 = new Student();
 echo $a002->name."\n";