<?php 
$str = "sjhdfbsujabaykjdaskjasfkjafp";
function get($str){
      $arr = str_split($str);
      $count = array_count_values($arr);
      $strs = '';
      foreach ($count as $key => $value) {
            if ($value == 1) {
            	$strs.=$key;
            }
      }
      // 因为下标是从0开始的所以让他加1
      return strpos($str,$strs[0])+1;
  }

print_r(get($str));

 ?>