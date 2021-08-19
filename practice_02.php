<?php
 for($i = 1; $i <= 10; $i++) {
   if($i == 3) {
    continue; //条件一致したらこの項目だけ表示しない（飛ばす）
   } else if($i == 7) {
     break; //条件が一致したら終了
   } else {
    echo $i."\n";
   }
 }
