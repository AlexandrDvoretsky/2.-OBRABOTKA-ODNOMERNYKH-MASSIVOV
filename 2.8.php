<?php
  // 2.8 В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом

  $mas=[-10,-12,0,7,10,1,2,3,-1,2,6,-5];

  $i=0;
  echo "Исходный массив:";
  while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
  {
    $count++;
    echo "$mas[$i] | ";
    $i++;
  }

  for($i=0;$i<$count;$i++)
  {
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
  for($j=0;$j<$count;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
