<?php
  // 2.13 В массиве А(N) найти два наименьших элемента и два наибольших элемента.

  $testMas=[1321,962,743,45,503,601,967,148,849,1000,101];
  $mas = $testMas;
  echo "Исходный массив: ";
  for($i=0;$i<11;$i++)
  {
    echo "$testMas[$i] | ";
    if($testMas[$i]>$num)
    {
      $num=$testMas[$i];
    }
  }

  echo "<br>MIN: ";
  $min=$num; $min2=$num;
  for($i=0;$i<11;$i++)
  {
    if($min>$mas[$i])
    {
      $min2 = $min;
      $min=$mas[$i];
      $pos = $i;
    }
    elseif($min2>$mas[$i]) $min2=$mas[$i];
  }
  echo "$min - $min2";

  echo "<br>MAX: ";
  while ($count!=2) {
    for($i=0;$i<11;$i++)
    {
      if($mas[$i]>$max)
      {
        $max=$mas[$i];
        $pos = $i;
      }
    }
    $mas[$pos] = 0;
    echo "$max -";
    $max=0;
    $count++;
  }
?>
