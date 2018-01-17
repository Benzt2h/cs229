<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
function random_password($len){

	srand((double)microtime()*10000000);
	$chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$ret_str="";
	$num = strlen($chars);
	for($i=0;$i<$len;$i++){
		$ret_str.=$chars[rand()%$num];
		$ret_str.="";
	}
	return $ret_str;
}
$password = random_password(7);
echo $password;
?>
</body>
</html>