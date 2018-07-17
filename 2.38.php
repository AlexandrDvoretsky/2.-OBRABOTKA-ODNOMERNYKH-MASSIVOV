<?php
  // 2.38 В массиве А(N) все отрицательные элементы переставить в начало массива, расположив их по возрастанию,
  // а положительные - в конец, расположив их по убыванию.

  $mas=[1,-2,-3,-34,-56,6,7,9,8,-10,31,23,-56,-4,-7,-68,0];

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
    if($mas[$i]<0)
    {
      $masOtr[]=$mas[$i];
      $countOtr++;
    }
    else {
      $masPol[]=$mas[$i];
      $countPol++;
    }
  }

  for($k=1;$k<$countPol;$k++)
  {
    for($r=0;$r<$countPol-1;$r++)
    {
      if($masPol[$r]<$masPol[$r+1])
      {
        $hold=$masPol[$r];
        $masPol[$r]=$masPol[$r+1];
        $masPol[$r+1]=$hold;
      }
    }
  }

  for($k=1;$k<$countOtr;$k++)
  {
    for($r=0;$r<$countOtr-1;$r++)
    {
      if($masOtr[$r]>$masOtr[$r+1])
      {
        $hold=$masOtr[$r];
        $masOtr[$r]=$masOtr[$r+1];
        $masOtr[$r+1]=$hold;
      }
    }
  }

  for($i=0;$i<$count;$i++)
  {
    $mas[$i]="";
  }

  for($i=0;$i<$countOtr;$i++)
  {
    $mas[$i]=$masOtr[$i];
  }
  for($i=0;$i<$countPol;$i++)
  {
    $mas[$countOtr]=$masPol[$i];
    $countOtr++;
  }
  echo "<br>Измененный массив: ";
  for($i=0;$i<$count;$i++)
  {
    echo "$mas[$i] | ";
  }
?>
