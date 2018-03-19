<?php
// 1、多维数组排序
$items = array(
	array('http://www.abc.com/a/', 100, 120),
	array('http://www.abc.com/b/index.php', 50, 80),
	array('http://www.abc.com/a/index.html', 90, 100),
	array('http://www.abc.com/a/?id=12345', 200, 33),
	array('http://www.abc.com/c/index.html', 10, 20),
	array('http://www.abc.com/abc/', 10, 30)
);
foreach ($items as $key => $value) {
	$k=substr($value[0], 0,strrpos($value[0], '/'));
	if(isset($arr[$k])){
		$arr[$k][1]+=$value[1];
		$arr[$k][2]+=$value[2];
	}else{
		$arr[$k]=[$k,$value[1],$value[2]];
	}
}
var_dump($arr);