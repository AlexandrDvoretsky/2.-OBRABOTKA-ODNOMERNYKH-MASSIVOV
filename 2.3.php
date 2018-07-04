<?php
  // 2.3 В массиве А(N) первый положительный элемент и последний от-
  // рицательный элемент переставить местами

  $mas=[1,2,-3,4,-5,6,7,-8,9];
  $positionPol=9;
  echo "Исходный массив : ";
  for($i=0;$i<9;$i++)
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
    echo "$mas[$i] | ";
  }
  $mas[$positionPol] = $elementOtr;
  $mas[$positionOtr] = $elementPol;
  echo "<br>Измененный массив : ";
  for($j=0;$j<9;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
