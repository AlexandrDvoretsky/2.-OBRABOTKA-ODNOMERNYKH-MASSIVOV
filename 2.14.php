<?php
/*2.14 Разделить заданный массив А(N) на два массива:
    а) массив положительных и отрицательных элементов;
    б) массив четных и нечетных элементов.*/

    $mas=[-10,-20,30,40,50,60,0,7,8,90,100,-120,-301,13,7];

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
      if($mas[$i]>0)
      {
        $masPol[] = $mas[$i];
        $countPol++;
      }
      else
      {
        $masOtr[] = $mas[$i];
        $countOtr++;
      }

      if($mas[$i]%2==0)
      {
        $masChet[] = $mas[$i];
        $countChet++;
      }
      else
      {
        $masNeсhet[] = $mas[$i];
        $countNechet++;
      }
    }

    $kolA = $countPol+$countOtr;
    for($i=0;$i<$countPol;$i++)
    {
      $masA[]=$masPol[$i];
    }
    for($i=0;$i<$countOtr;$i++)
    {
      $masA[]=$masOtr[$i];
    }

    $kolB = $countChet+$countNechet;
    for($i=0;$i<$countChet;$i++)
    {
      $masB[]=$masChet[$i];
    }
    for($i=0;$i<$countNechet;$i++)
    {
      $masB[]=$masNeсhet[$i];
    }

    echo "<br>а) массив положительных и отрицательных элементов: ";
    for($i=0;$i<$kolA;$i++)
    {
      echo "$masA[$i] | ";
    }
    echo "<br>б) массив четных и нечетных элементов: ";
    for($i=0;$i<$kolB;$i++)
    {
      echo "$masB[$i] | ";
    }
?>
