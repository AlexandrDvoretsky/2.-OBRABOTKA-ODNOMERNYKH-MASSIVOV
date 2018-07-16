<?php
  // 2.29 Из массива А(N) удалить все элементы, стоящие между первым минимальным и последним максимальным элементами.

  $mas=[235,2356,0,585,1,5453,567,1232,0,078,6857,63,54,32,3456,75];

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

  $max=$num;
  $min=$num;
  $posMin = $num;

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]<$min)
    {
      $min=$mas[$i];
      $posMin=$i;
    }
  }
  for($i=0;$i<=$posMin;$i++)
  {
    $masNew[]=$mas[$i];
    $cnt++;
  }
  for($i=$posMax;$i<$count;$i++)
  {
    $masNew[]=$mas[$i];
    $cnt++;
  }
  echo "<br>После удаления:";
  for($i=0;$i<$cnt;$i++)
  {
    echo "$masNew[$i] | ";
  }


?>
