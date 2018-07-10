<?php
  // 2.13 В массиве А(N) найти два наименьших элемента и два наибольших элемента.

  $testMas=[13210,962,743,450,503,601,967,148,849,1000,101,100000,1];
  $mas = $testMas;

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$testMas[$i] | ";
    $count++;
    if($testMas[$i]>$num)
    {
      $num=$testMas[$i];
    }
    if($testMas[$i+1]=="") break;
  }
  $max=0;$min=$num;$min2=$num;

  echo "<br>MIN: ";
  for($i=0;$i<$count;$i++)
  {
    if($min>$mas[$i])
    {
      $min2 = $min;
      $min=$mas[$i];
      $pos = $i;
    }
    elseif($min2>$mas[$i]) $min2=$mas[$i];
  }
  echo "$min - $min2";

  echo "<br>MAX: ";
  while ($k!=2) {
    for($i=0;$i<$count;$i++)
    {
      if($mas[$i]>$max)
      {
        $max=$mas[$i];
        $pos = $i;
      }
    }
    $mas[$pos] = 0;
    echo "$max -";
    $max=0;
    $k++;
  }
?>
