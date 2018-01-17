<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
function test(){
	global $a;
	$a=20;
	echo "ตัวแปร \$a นึ้อยู่ภายในฟังก์ชัน ทีค่าเท่ากับ $a <BR>";
	}
$a=200;
test();
$a+=2;
echo "ตัวแปร \$a นึ้อยู่ภายนอกฟังก์ชัน มีค่าเท่ากับ $a <BR>";
test();
$a++;
echo "ตัวแปร \$a นึ้อยู่ภายนอกฟังก์ชัน มีค่าเท่ากับ $a <BR>";	
?>
<body>
</body>
</html>