<?php
  $testMas=[13210,962,743,450,503,601,967,148,849,1000,101,100000,1,0,13];
  $i=0;
  while($testMas[$i]>0 || $testMas[$i]<0 || $testMas[$i]===0)
  {
    $count++;
    echo "$testMas[$i] | ";
    $i++;
  }
  echo "<br>$count";
?>
