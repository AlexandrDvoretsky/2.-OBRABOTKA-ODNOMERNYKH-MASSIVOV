<?php
  // 2.36 В массиве А(N) положительные элементы переставить в конец массива и расположить в порядке убывания

  $mas=[1,5,-20,46,75,8,9,2,0,-9,3,4,-4,-3,-5,0];

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
    if($mas[$i]>0)
    {
      $masPol[]=$mas[$i];
      $countPol++;
    }
    else {
      $masOst[]=$mas[$i];
      $countOst++;
    }
  }

  for($k=1;$k<$countPol;$k++)
  {
    for($r=0;$r<$countPol-1;$r++)
    {
      if($masPol[$r]<$masPol[$r+1])
      {
        $hold=$masPol[$r];
        $masPol[$r] = $masPol[$r+1];
        $masPol[$r+1]=$hold;
      }
    }
  }

  for($i=0;$i<$count;$i++)
  {
    $mas[$i]="";
  }

  for($i=0;$i<$countOst;$i++)
  {
    $mas[$i]=$masOst[$i];
  }
  for($i=0;$i<$countPol;$i++)
  {
    $mas[$countOst]=$masPol[$i];
    $countOst++;
  }
  echo "<br>Измененный массив: ";
  for($i=0;$i<$count;$i++)
  {
    echo "$mas[$i] | ";
  }
?>
