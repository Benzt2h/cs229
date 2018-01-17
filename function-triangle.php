<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
function triangle($base,$height){
	$area =0.5*$base*$height;
	return $area;
}

echo "รูปแบบสามเหลี่ยนทีฐานเท่ากับ 5 และสู่งเท่ากับ 10 มีพื้นที่เท่ากับ ".triangle(5,10)." หน่วย";
?>
</body>
</html>