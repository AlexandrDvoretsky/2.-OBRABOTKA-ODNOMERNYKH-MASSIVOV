<?php
/*2.14 Разделить заданный массив А(N) на два массива:
    а) массив положительных и отрицательных элементов;
    б) массив четных и нечетных элементов.*/

    $mas=[-1,-2,-3,4,-5,213,33,123,123,123,234,-234,-6,-7,8,9,-10];

    echo "Исходный массив: ";
    for($i=0;$i<999;$i++)
    {
      echo "$mas[$i] | ";
      $count++;
      if($mas[$i+1]=="") break;
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
