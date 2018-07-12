<?php
  // 2.25 В массив А(N) вставить после первого максимального элемента k минимальных элементов массива

  $mas=[12,5,4,35,3,6,5,7,635,7,1,54,-10,2,0,6005,9,8,9,7];
  $k=3;
  for($i=0;$i<9999;$i++)
  {
    if($mas[$i]>$num)
    {
      $num=$mas[$i];
      $posMax=$i;
    }
    if($mas[$i]>0 || $mas[$i]===0 || $mas[$i]<0)
    {
      echo "$mas[$i] | ";
      $count++;
    }
    else break;
  }
  $max=$num;$min=$num;

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]<$min)
    {
      $min=$mas[$i];
      $posMin=$i;
    }
  }

  for($i=0;$i<=$posMax;$i++)
  {
    $masNew[$i]=$mas[$i];
    $cnt++;
  }
  for($i=0;$i<$k;$i++)
  {
    $masNew[]=$min;
    $cnt++;
  }
  for($i=$posMax+1;$i<$count;$i++)
  {
    $masNew[]=$mas[$i];
    $cnt++;
  }
  echo "<br>Максимальный элемент = $max.<br>Минимальный элемент = $min.<br>Добавить $k элемента, после $max.<br>";

  for($i=0;$i<$cnt;$i++)
  {
    echo "$masNew[$i] | ";
  }
?>
