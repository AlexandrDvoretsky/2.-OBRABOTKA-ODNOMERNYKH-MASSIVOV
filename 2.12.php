<?php
  // 2.12 В массиве А(N) найти наибольший из всех отрицательных элементов и наименьший из всех положительных.

  $mas=[1,2,-10,-4,-5,6,7,8,-9,-3,11];
  $max=-100;
  for($i=0;$i<11;$i++)
  {
    echo "$mas[$i] | ";
    if($mas[$i]<0)
    {
      $element = $mas[$i];
      if($element>$max)
      {
        $max = $element;
      }
    }
  }
  echo "<br>$max";
?>