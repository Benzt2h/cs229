<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$english_Day=date("l");
if($english_Day=="Monday"){
	$th_day = "จันทร์";
}else if($english_Day=="Tuesday"){
	$th_day = "อังคาร";
}else if($english_Day=="Wednesday"){
	$th_day = "พธุ";
}else if($english_Day=="Thursday"){
	$th_day = "พฤหัส";
}else if($english_Day=="Friday"){
	$th_day = "ศุกร์";
}else if($english_Day=="Saturday"){
	$th_day = "เสาร์";
}else {
	$th_day = "อาทิตย์";
}
printf("In English : ".date("l")."<BR>");
printf("In thai : $th_day <BR>");
?>
</body>
</html>