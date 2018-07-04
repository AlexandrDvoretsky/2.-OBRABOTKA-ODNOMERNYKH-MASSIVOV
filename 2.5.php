<?php
  // 2.5 В массиве А(N) найти максимальный и минимальный элементы и переставить их местами

  $mas=[1,2,3,4,5,6,7,8,9,10,1,2,3];
  $min=13; $max=0;
  echo "Исходный массив: ";
  for($i=0;$i<13;$i++)
  {
    echo "$mas[$i] | ";

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
  for($j=0;$j<13;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
