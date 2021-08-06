<?php
//引数が一つ
  function cal($x) {
    echo ($x * 3)."\n";
  };

  cal(6);

//引数が二つ
  function cl($x, $y) {
    echo ($x / $y)."\n";
  };

  cl(6,3);

  //戻り値を受け取って表示させる
  function cul($x, $y) {
    return $x / $y;
  };

  $result = cul(6,3);
  echo $result."\n";

  //returnなし→関数内で表示
  //returnあり→関数内で計算したものを表示させて、さらに別の計算をすることができる