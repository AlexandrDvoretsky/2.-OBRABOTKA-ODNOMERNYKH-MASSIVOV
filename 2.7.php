<?php
  /*2.7 В массиве А(N) найти номер элемента, сумма которого со следующим
  за ним элементом максимальна, и номер элемента, сумма которого с
  предыдущим элементом минимальна*/
  $mas=[11123,2123789,3123,4123,5123,6123,7123,8123,9123,10123,5231232,741231,912312363,79,654,1111111113,7411];

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    echo "$mas[$i] | ";
    $count++;
    if($mas[$i]>$num)
    {
      $num=$mas[$i];
    }
    if($mas[$i+1]=="") break;
  }

  $max=0;$min=$num;
  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]+$mas[$i+1]>$max)
    {
      $max = $mas[$i]+$mas[$i+1];
      $positionMax = $i;
    }
    if($mas[$i]+$mas[$i-1]<$min)
    {
      $min = $mas[$i]+$mas[$i-1];
      $positionMin = $i;
    }
  }
  echo "<br>Номер максимального элемента - $positionMax. Сумма = $max";
  echo "<br>Номер минимального элемента - $positionMin. Сумма = $min";
?>
