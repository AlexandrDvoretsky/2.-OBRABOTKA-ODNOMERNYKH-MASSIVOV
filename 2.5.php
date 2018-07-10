<?php
  // 2.5 В массиве А(N) найти максимальный и минимальный элементы и переставить их местами

  $mas=[100,20,510,430,-5998,6,7,8,9,1011,12,741,789,19999,2123213,33213,20,10000];

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$mas[$i] | ";
    $count++;
    if($mas[$i+1]=="") break;
  }

  $min=$count; $max=0;
  for($i=0;$i<$count;$i++)
  {
    if($max<$mas[$i])
    {
      $max=$mas[$i];
      $positionMax = $i;
    }
    if($min>$mas[$i])
    {
      $min = $mas[$i];
      $positionMin=$i;
    }
  }
  echo "<br>Измененный массив: ";
  $mas[$positionMin] = $max;
  $mas[$positionMax] = $min;
  for($j=0;$j<$count;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
