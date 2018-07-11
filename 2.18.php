<?php
  // 2.18 В массиве А(N) подсчитать количество различных элементов.

  $masA=[10,2,3,4,12,6,7,8,9,10,101,12,13];

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    if($masA[$i]=="") break;
    else{
      echo "$masA[$i] | ";
      $count++;
    }
  }

  for($i=0;$i<$count;$i++)
  {
    $masB[$i] = $masA[$i];
  }
  for($i=0;$i<$count;$i++)
  {
      for($j=0;$j<$count;$j++)
      {
        if($masB[$j]==$masA[$i]) $k++;
      }
      if($k>=2) $cnt++;
      $k=0;
  }
  $dif = $count-$cnt;
  echo "<br>Количество различных элементов: $dif - $count<br>";
?>
