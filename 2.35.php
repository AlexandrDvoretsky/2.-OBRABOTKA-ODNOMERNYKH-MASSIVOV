<?php
  /*2.35 В массиве А(N) каждый элемент равен 0, 1 или 2. Переставить
  элементы массива так, чтобы сначала расположились все нули, затем все
  двойки и, наконец, все единицы*/

  $mas=[1,1,0,0,2,0,0,2,1,2,2,2,0,0,1,2,1,1];
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
    elseif($mas[$i]==1)
    {
      $masOne[]=$mas[$i];
      $countOne++;
    }
    else
    {
      $masTwo[]=$mas[$i];
      $countTwo++;
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
  for($i=0;$i<$countTwo;$i++)
  {
    $mas[$countZero]=$masTwo[$i];
    $countZero++;
  }

  for($i=0;$i<$countOne;$i++)
  {
    $mas[$countZero]=$masOne[$i];
    $countZero++;
  }
  echo "<br>Измененный массив: ";
  for($i=0;$i<$count;$i++)
  {
    echo "$mas[$i] | ";
  }
?>
