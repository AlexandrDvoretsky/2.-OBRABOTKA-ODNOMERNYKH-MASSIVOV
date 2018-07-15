<?php
  // 2.13 В массиве А(N) найти два наименьших элемента и два наибольших элемента.

  $testMas=[10,20,-30,40,50,-60,70,80,90,100,-110,0,3];
  $mas = $testMas;

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
  $max=0;$min=$num;$min2=$num;

  echo "<br>MIN: ";
  for($i=0;$i<$count;$i++)
  {
    if($min>$mas[$i])
    {
      $min2 = $min;
      $min=$mas[$i];
      $pos = $i;
    }
    elseif($min2>$mas[$i]) $min2=$mas[$i];
  }
  echo "$min  $min2";
  echo "<br>MAX: ";
  while ($k!=2) {
    for($i=0;$i<$count;$i++)
    {
      if($mas[$i]>$max)
      {
        $max=$mas[$i];
        $pos = $i;
      }
    }
    $mas[$pos] = 0;
    echo "$max  ";
    $max=0;
    $k++;
  }
?>
