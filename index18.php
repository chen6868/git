<?php 
echo get(10);
function get($n){
   $r = '';
   while ($n != 0) {
    $r++;
    $n &=($n-1);
   }
   return $r;
}

 ?>