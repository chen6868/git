<?php 
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];

function get($arr_A,$arr_B){
    $arr = [$arr_A,$arr_B];
    foreach ($arr as $key => $value) {
    	foreach ($value as $k => $v) {
    		$array[] = $v;
    	}
    }

    for ($i=1; $i <count($array) ; $i++) { 
    	for ($j=0; $j <count($array); $j++) { 
    		if ($array[$i] < $array[$j]) {
    			$cen = $array[$j];
    			$array[$j] = $array[$i];
    			$array[$i] = $cen;
    		}
    		
    	}
    }


    
    return $array;
}
print_r(get($arr_A,$arr_B));
 ?>