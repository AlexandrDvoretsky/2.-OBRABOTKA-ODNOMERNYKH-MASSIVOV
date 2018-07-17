<?php
  // 2.37 В массиве А(N) нулевые элементы переставить в начало массива, а остальные расположить в порядке возрастания.

  $mas=[0,1,2,3,4,50,0,0,6,7,8,9,-10,-1,12,0,-4,67,-8,0];

  echo "Исходный массив: ";
  $i=0;
  while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
  {
    $count++;
    echo "$mas[$i] | ";
    $i++;
  }

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]==0)
    {
      $masZero[]=$mas[$i];
      $countZero++;
    }
    else {
      $masOst[]=$mas[$i];
      $countOst++;
    }
  }

  for($k=1;$k<$countOst;$k++)
  {
    for($r=0;$r<$countOst-1;$r++)
    {
      if($masOst[$r]>$masOst[$r+1])
      {
        $hold=$masOst[$r];
        $masOst[$r]=$masOst[$r+1];
        $masOst[$r+1]=$hold;
      }
    }
  }

  for($i=0;$i<$count;$i++)
  {
    $mas[$i]="";
  }

  for($i=0;$i<$countZero;$i++)
  {
    $mas[$i]=$masZero[$i];
  }
  for($i=0;$i<$countOst;$i++)
  {
    $mas[$countZero]=$masOst[$i];
    $countZero++;
  }
  echo "<br>Тзмененный массив: ";
  for($i=0;$i<$count;$i++)
  {
    echo "$mas[$i] | ";
  }
?>
