<?php
  // 2.18 В массиве А(N) подсчитать количество различных элементов.

  $masA=[1,2,3,4,5,1,2,3,0,-4];

  $i=0;
  echo "Исходный массив:";
  while($masA[$i]>0 || $masA[$i]<0 || $masA[$i]===0)
  {
    $count++;
    echo "$masA[$i] | ";
    $i++;
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
  echo "<br>Количество различных элементов: $dif<br>";
?>
