<?php 

$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$target = 14;
function find($array,$target){
	// 循环两次把二维转换为一维
   foreach ($array as $key => $value) {
   	     foreach ($value as $k => $v) {
   	     	$arr[] = $v;
   	     }
   	  }
   	  // 判断要查找的值在不在数组中
   	 if (in_array($target,$arr)) {
   	 	return 1;
   	 }else{
   	 	return 0;
   	 }
         
}
print_r(find($array,$target))
 ?>