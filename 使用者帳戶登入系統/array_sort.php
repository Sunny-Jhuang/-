<?php
function exchange(array &$arr,$a,$b){
	$reg = $arr[$a];
	$arr[$a] = arr[$b];
	$arr[$b] = $reg;
}
function bubble_sort(){
	$length = count($arr);
	for($i = 0;$i < $length;$i++){
		for($j = 1;$j < ($length - $i);$j++){
			if($arr[$j-1] > $arr[$j]){
				exchange($arr,$j-1,$j);
			}
		}
	}
	return $arr;
}
$arr = $_POST['num'];
echo $arr;
?>
<input type="button" value="返回" onclick="location.href='20220317.html'">