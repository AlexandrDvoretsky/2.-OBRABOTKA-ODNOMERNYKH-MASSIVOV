<?php
/* 2.1 В массиве А(N) найти:
     а) число элементов, предшествующих первому отрицательному элементу;
     б) сумму нечетных элементов массива, следующих за последним отрицательным элементом. */

  $mas=[1,2,3,4,5,-2,6,7,8,9];

  for($i=0;$i<10;$i++)
  {
    if($mas[$i]>0) $count++;
    if($mas[$i]<0)
    {
      $position = $i;
      for($k=$position;$k<10;$k++)
      {
        if($mas[$k]%2!=0) $sum+=$mas[$k];
        $count-=1;
      }
    }
  }
  echo "A) - $count<br>";
  echo "Б) - $sum";
?>