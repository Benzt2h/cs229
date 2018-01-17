<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>

<?php
star();
echo "My name is Nattapong<BR>";
echo "My name is Wongtakai<BR>";
echo "Hello everybody<BR>";
star();

function star(){
echo "**************************<BR>";
}
?>

<?php
function star2($num){
	$sign ="";
	for($count=1;$count<=$num;$count++){
		$sign = $sign."*";
		}
	echo "$sign<BR>";
}

star2(15);
echo "My name is Nattapong<BR>";
echo "My name is Wongtakai<BR>";
echo "Hello everybody<BR>";
star2(30);
	
?>

</body>
</html>