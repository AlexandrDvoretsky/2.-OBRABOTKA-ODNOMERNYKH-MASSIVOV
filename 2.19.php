<?php
  /*2.19 В массиве А(N) найти последний четный положительный элемент,
  кратный заданному числу р, заменить его индексом и поставить в конец массива.*/

  $mas=[3,5,6,1,6,3,2,8,5,9,18,10,7];
  $p=3;

  echo "Исходный массив: ";
  for($i=0;$i<999;$i++)
  {
    if($mas[$i]=="") break;
    else{
      echo "$mas[$i] | ";
      $count++;
    }
  }

  for($i=0;$i<$count;$i++)
  {
    if($mas[$i]>0 && $i%2==0 && $mas[$i]%$p==0)
    {
      $num=$mas[$i];
      $pos=$i;
    }
  }
  echo "<br>Последний четный положительный элемент,кратный заданному числу p = $p это $num, с позицией $pos<br>";
  $mas[$pos]=$pos;
  $num = $mas[$pos];
  for($i=0;$i<$pos;$i++)
  {
    $masA[$i]=$mas[$i];
  }
  for($i=$pos;$i<$count-1;$i++)
  {
    $masA[$i]=$mas[$i+1];
  }
  $masA[]=$num;
  echo "Измененный массив: ";
  for($i=0;$i<$count;$i++)
  {
    echo "$masA[$i] | ";
  }
?>
