<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
function pass(&$val){
	$val+=10;
	return $val;
}

$value =100;
echo "ตัวแปรมีค่าเท่ากับ $value<BR>";
echo "ตัวแปรก่อนที่จะส่งผ่านค่าไปยังฟังก์ชัน มีค่าเท่ากับ $value <BR>";

pass($value);
echo "ตัวแปรหลังจากการคืนค่ากลับจากฟังก์ชัน มีค่าเท่ากับ $value";
?>
</body>
</html>