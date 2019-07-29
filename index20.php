<?php 

function CountSteps($x,$y){
	if ($x == 0 && $y == 0) return 0;
	if ($x == 0 || $y == 0) return 1;
	return CountSteps($x-1,$y)+CountSteps($x,$y-1);
}
print_r(CountSteps(1,1));

 ?>