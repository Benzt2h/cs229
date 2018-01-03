<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$english_Day=date("l");
switch($english_Day)
{
	case "Monday";
			$th_day = "จันทร์";
			break;
	case "Tuesday";
			$th_day = "อังคาร";
			break;
	case "Wednesday";
			$th_day = "พธุ";
			break;
	case "Thursday";
			$th_day = "พฤหัส";
			break;
	case "Friday";
			$th_day = "ศุกร์";
			break;
	case "Saturday";
			$th_day = "เสาร์";
			break;
	default;
		$th_day = "อาทิตย์";
	}
	printf("In English : ".date("l")."<BR>");
    printf("In thai : $th_day <BR>");
?>
</body>
</html>