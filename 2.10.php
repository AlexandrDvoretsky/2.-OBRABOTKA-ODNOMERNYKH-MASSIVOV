<?php
  // 2.10 В массиве А(N) все четные элементы заменить максимальным элементом, а нечетные - минимальным.

  $mas=[0,1,2,3,4,5,6,7,8,9,10,11,12,-9,13,55];

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$mas[$i] | ";
    $count++;
    if($mas[$i]>$num)
    {
      $num=$mas[$i];
    }
    if($mas[$i+1]=="") break;
  }
  $max=0;$min=$num;

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]>$max) $max = $mas[$i];
    if($min>$mas[$i]) $min = $mas[$i];
  }
  echo "<br>Измененный массив: ";
  for($j=0;$j<$count;$j++)
  {
    if($j%2==0) $mas[$j] = $max;
    else $mas[$j] = $min;
    echo "$mas[$j] | ";
  }
?>
