<?php
  //2.23 В массиве А(N) найти минимальное из чисел, встречающихся более одного раза.

  $masA=[3,5,-6,9,7,6,5,4,3,0];

  for($i=0;$i<10;$i++)
  {
    echo "$masA[$i] | ";
    if($masA[$i]>$num)
    {
      $num=$masA[$i];
    }
  }

  $min = $num;
  for($i=0;$i<10;$i++)
  {
    $masB[$i] = $masA[$i];
  }
  for($i=0;$i<10;$i++)
  {
      for($j=0;$j<10;$j++)
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
