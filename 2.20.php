<?php
  //2.20 В массиве А(N) выбрать все элементы, встречающиеся только один раз.

  $masA=[3,5,6,1,6,3,8,5,9,123,123,4,5,5,4,65,4,645,7,67];

  $i=0;
  echo "Исходный массив:";
  while($masA[$i]>0 || $masA[$i]<0 || $masA[$i]===0)
  {
    $cnt++;
    echo "$masA[$i] | ";
    $i++;
  }

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
      if($k==1)
      {
        $masC[]= $masA[$i];
        $count++;
      }
      $k=0;
  }
  echo "<br>Элементы, встречающиеся только один раз:";
  for($i=0;$i<$count;$i++)
  {
    echo "$masC[$i] | ";
  }
?>
