<?php

  function cal($x, $y, $z) {
    echo (($x + $y + $z) / 3)."\n";
  };

  cal(9,4,2);

  function cul($x, $y, $z) {
    return ($x + $y + $z) / 3;
  };

  $result = cul(9,4,2);
  echo $result."\n";


