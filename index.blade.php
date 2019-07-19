<?php 
$str = "5";

function Sum_Solution($n){
     for ($i=1; $i <=$n ; $i++) { 
     	$arr[] = $i;
     }
     return array_sum($arr);
}

print_r(Sum_Solution($str));

 ?>