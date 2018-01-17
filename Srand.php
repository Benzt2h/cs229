<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
srand(date("s"));
for($i=0;$i<10;$i++){
	$x = rand()%10;
	echo $x." ";
}
?>
</body>
</html>