<?php
  // 2.32 В массиве А(N) расположить все четные элементы в порядке возрастания, а нечетные в порядке убывания.

  $mas=[1,0,5,9,8,12,36,54,879,45,0,112,-8,11,-3,0,199];

  $i=0;
  echo "Исходный массив:";
  while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
  {
    $count++;
    echo "$mas[$i] | ";
    $i++;
  }

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]%2==0)
    {
      $masPol[]=$mas[$i];
      $countPol++;
    }
    else {
      $masOtr[]=$mas[$i];
      $countOtr++;
    }
  }

  for($k=1;$k<$countPol;$k++)
  {
    for($r=0;$r<$countPol-1;$r++)
    {
      if($masPol[$r]>$masPol[$r+1])
      {
        $hold=$masPol[$r];
        $masPol[$r] = $masPol[$r+1];
        $masPol[$r+1]=$hold;
      }
    }
  }

  for($k=1;$k<$countOtr;$k++)
  {
    for($r=0;$r<$countOtr-1;$r++)
    {
      if($masOtr[$r]<$masOtr[$r+1])
      {
        $hold=$masOtr[$r];
        $masOtr[$r] = $masOtr[$r+1];
        $masOtr[$r+1]=$hold;
      }
    }
  }
  echo "<br>";
  for($i=0;$i<$countPol;$i++)
  {
    echo "$masPol[$i] | ";
  }
  echo "<br>";
  for($i=0;$i<$countOtr;$i++)
  {
    echo "$masOtr[$i] | ";
  }

  for($i=0;$i<$count;$i++)
  {
    $mas[$i]="";
  }

  for($i=0;$i<$countPol;$i++)
  {
    $mas[$i]=$masPol[$i];
  }

  for($i=0;$i<$countOtr;$i++)
  {
    $mas[$countPol]=$masOtr[$i];
    $countPol++;
  }

  echo "<br>Измененный массив: ";
  for($i=0;$i<$count;$i++)
  {
  echo "$mas[$i] | ";
  }

?>
