<?php
  //2.23 В массиве А(N) найти минимальное из чисел, встречающихся более одного раза.

  $masA=[3,5,-6,9,7,-6,5,4,3,10,123,24,23,5,43,5,4,765,8,-7];

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$masA[$i] | ";
    $cnt++;
    if($masA[$i]>$num)
    {
      $num=$masA[$i];
    }
    if($masA[$i+1]=="") break;
  }

  $min = $num;
  for($i=0;$i<$cnt;$i++)
  {
    $masB[$i] = $masA[$i];
  }
  for($i=0;$i<$cnt;$i++)
  {
      for($j=0;$j<$cnt;$j++)
      {
        if($masB[$j]==$masA[$i]) $k++;
      }
      if($k>=2)
      {
        if($min>$masA[$i]) $min=$masA[$i];
        $masC[]= $masA[$i];
        $count++;
      }
      $k=0;
  }
  echo "<br>Минимальное число, встречающихся более одного раза = $min<br>";
  for($i=0;$i<$count;$i++)
  {
    echo "$masC[$i] | ";
  }
?>
