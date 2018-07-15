<?php
  /*2.7 В массиве А(N) найти номер элемента, сумма которого со следующим
  за ним элементом максимальна, и номер элемента, сумма которого с
  предыдущим элементом минимальна*/
  $mas=[-20,-11,10,20,30,50,40,60,-90,70,-100,99];

  $i=0;
  echo "Исходный массив:";
  while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
  {
    $count++;
    echo "$mas[$i] | ";
    $i++;
    if($mas[$i]>$num)
    {
      $num = $mas[$i];
      $posMax=$i;
    }
  }
  $max = 0;$min=$num;

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
