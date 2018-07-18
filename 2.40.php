<?php
  /*2.40 Получить упорядоченный по возрастанию массив С(К) путем
  слияния двух упорядоченных по возрастанию массивов А(N) и В(М), где
  К=М+N.*/

  function countElem($m)
  {
    $mas=$m;
    $i=0;
    while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
    {
      $count++;
      $i++;
    }
    return $count;
  }

  function sortAsc($m,$c)
  {
    $mas=$m;
    $count=$c;
    for($k=1;$k<$count;$k++)
   {
     for($r=0;$r<$count-1;$r++)
     {
       if($mas[$r]>$mas[$r+1])
       {
         $hold=$mas[$r];
         $mas[$r]=$mas[$r+1];
         $mas[$r+1]=$hold;
       }
     }
   }
   return $mas;
  }

  $masA=[1,2,-3,4,5,0,6,-7,-8,1,90,31,88];
  $masB=[0,98,-6,76,5,-4,3,2,0];

  $countA=countElem($masA);
  $countB=countElem($masB);

  $masNewA=sortAsc($masA,$countA);
  $masNewB=sortAsc($masB,$countB);

  $countAll=$countA+$countB;
  for($i=0;$i<$countA;$i++)
  {
    $masNewC[$i]=$masNewA[$i];
  }
  for($i=0;$i<$countB;$i++)
  {
    $masNewC[$countA]=$masNewB[$i];
    $countA++;
  }

  $masC=sortAsc($masNewC,$countAll);

  echo "Массив C:";
  for($i=0;$i<$countAll;$i++)
  {
    echo "$masC[$i] | ";
  }
?>
