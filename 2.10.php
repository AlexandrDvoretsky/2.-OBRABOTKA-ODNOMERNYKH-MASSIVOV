<?php
  // 2.10 В массиве А(N) все четные элементы заменить максимальным элементом, а нечетные - минимальным.

  $mas=[1,2,3,4,5,6,7,8,9,10];
  echo "Исходный массив: ";
  $min=10;$max=0;
  for($i=0;$i<10;$i++)
  {
    echo "$mas[$i] | ";
    if($i%2==0)
    {
      if($mas[$i]>$max) $max = $mas[$i];
      $mas[$i] = $max;
    }
    else {
      if($min>$mas[$i]) $min = $mas[$i];
      $mas[$i] = $min;
    }
  }
  echo "<br>Измененный массив: ";
  for($j=0;$j<10;$j++)
  {
    if($j%2==0) $mas[$j] = $max;
    echo "$mas[$j] | ";
  }
?>