<?php
  // 2.8 В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом

  $mas=[1,2,-3,4,-5,-6,7,8,-9,10];
  echo "Исходный массив: ";
  for($i=0;$i<10;$i++)
  {
    echo "$mas[$i] | ";
    if($mas[$i]<0)
    {
      $elementOtr = $mas[$i];
      $positionOtr = $i;
    }
    if($mas[$i]>$max)
    {
      $max=$mas[$i];
      $positionMax = $i;
    }
  }
  $mas[$positionOtr] = $max;
  $mas[$positionMax] = $elementOtr;
  echo "<br>Измененный массив: ";
  for($j=0;$j<10;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
