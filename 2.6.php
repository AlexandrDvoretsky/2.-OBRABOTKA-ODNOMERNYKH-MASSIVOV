<?php
  // 2.6 В массиве А(N) максимальные элементы, являющиеся четными числами, заменить значениями их индексов.

  $mas=[1,2,3,4,5,6,7,8,9,10,741,79,52,123,741,1,85,44];

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$mas[$i] | ";
    $count++;
    if($mas[$i+1]=="") break;
  }

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]%2==0)
    {
      $mas[$i] = $i;
    }
  }
  echo "<br>Измененный массив: ";
  for($j=0;$j<$count;$j++)
  {
    echo "$mas[$j] | ";
  }
?>
