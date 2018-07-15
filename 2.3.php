<?php
  // 2.3 В массиве А(N) первый положительный элемент и последний от-
  // рицательный элемент переставить местами
  $mas=[-3,-2,8,1,2,3,4,5,-6,7,-1,9,10];

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
  $positionPol = $num;

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]>0)
    {
      if($positionPol>$i)
      {
        $positionPol = $i;
        $elementPol = $mas[$i];
      }
    }
    if($mas[$i]<0)
    {
      $elementOtr = $mas[$i];
      $positionOtr = $i;
    }

  }
  $mas[$positionPol] = $elementOtr;
  $mas[$positionOtr] = $elementPol;
  echo "<br>Измененный массив : ";
  for($j=0;$j<$count;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
