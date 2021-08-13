<?php
  class Student {

    function avg($math, $english) {
      echo (($math + $english) / 2)."\n";
    }
  }

  $a001 = new Student();
  $a001->avg(30, 70);
