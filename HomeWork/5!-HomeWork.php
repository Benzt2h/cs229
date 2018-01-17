<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
function factorial(){
	$num =1;
	for($i=2;$i<=5;$i++){
		$num*=$i;
	}
	return $num;
}
$sum = factorial();
echo "5! = ".$sum;
?>
</body>
</html>