<?php
for($i = 0; $i <= 4; $i++) {
  if($i == 3) {
    continue; //if文の条件が当てはまった時のみスキップする
  }
  echo $i."\n";

}