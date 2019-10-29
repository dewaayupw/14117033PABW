<?php
   function swap(&$a,&$b){
     $a=$a+$b;
     $b= $a-$b;
     $a= $a-$b;
   }
   $x=20;
   $y=10;
   swap($x,$y);
   echo "Nilai Swap : <br/> X : $x <br/> Y: $y" ;
   
?>