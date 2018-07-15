<?php
  // 2.5 В массиве А(N) найти максимальный и минимальный элементы и переставить их местами

  $mas=[-10,-5,-10,10,20,30,40,50,-60,-70,0,100,12];

  $i=0;
  echo "Исходный массив:";
  while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
  {
    $count++;
    echo "$mas[$i] | ";
    $i++;
    if($mas[$i]>$num)
    {
      $num = $mas[$i];
      $posMax=$i;
    }
  }

  $min=$num; $max=0;
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
