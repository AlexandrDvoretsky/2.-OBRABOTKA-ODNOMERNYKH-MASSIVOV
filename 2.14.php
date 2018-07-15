<?php
/*2.14 Разделить заданный массив А(N) на два массива:
    а) массив положительных и отрицательных элементов;
    б) массив четных и нечетных элементов.*/

    $mas=[-10,-20,30,40,50,60,0,7,8,90,100,-120,-301];

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

    echo "<br>A):<br>Массив положительных элементов: ";
    for($j=0;$j<$countPol;$j++)
    {
      echo "$masPol[$j] | ";
    }
    echo "<br>Массив отрицательных элементов: ";
    for($j=0;$j<$countOtr;$j++)
    {
      echo "$masOtr[$j] | ";
    }
    echo "<br>Б):<br>Массив четных элементов: ";
    for($j=0;$j<$countChet;$j++)
    {
      echo "$masChet[$j] | ";
    }
    echo "<br>Массив нечетных элементов: ";
    for($j=0;$j<$countNechet;$j++)
    {
      echo "$masNeсhet[$j] | ";
    }

?>
