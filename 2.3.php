<?php
  // 2.3 В массиве А(N) первый положительный элемент и последний от-
  // рицательный элемент переставить местами

  $mas=[-3,-10,1,2,-3,4,-5,6,-7,-8,9,-30,99,1,-1];
  //$positionPol=9;

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$mas[$i] | ";
    $count++;
    if($mas[$i+1]=="") break;
  }
  $positionPol = $count;

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
