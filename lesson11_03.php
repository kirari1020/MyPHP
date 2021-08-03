<?php
 $arr = [2,4,6,8,10];
 $sum = 0;

for($i = 0; $i <= 4; $i ++) {
  $sum += $arr[$i];  //$sum = $sum + $arr[$i]
}
echo $sum."\n";

//0+2,2+4,6+6,12+8,20+10になる。