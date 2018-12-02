<?php
// $arr = ['html', 'css', 'php', 'js', 'jq'];
// foreach ($arr as $x) {
// 	echo $x,"<br>\n";
// }
$arr = [1,2,3,4,5];
// $result = 0;
// foreach ($arr as $key) {
// 	$result = $result + $key;
// 	echo $result, "<br>";
// }
// echo $result;
$result = 0;
foreach($arr as $value) {
	$result+=$value * $value;
	echo $value * $value, "<br>";
}
echo $result;