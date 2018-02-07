<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #85A0FB;
	background-image: url(../img/Transport-Innovation.jpg);
}
</style>
</head>
<body>
<?php
$host="localhost";
$username="root";
$password="12345678";
$dbname="driver_license";

$link=mysql_connect($host,$username,$password) or die("ไม่สามารถติดต่อฐานข้อมูลได้ในขณะนึ้");
mysql_select_db($dbname,$link) or die("ไม่สามารถติดต่อฐานข้อมูลได้ในขณะนึ้");
?>
<div align="center">
<label><font size="35">แบบทดสอบใบขับขี่</font></label>

  <table width="1270" height="465" border="1">
    <tbody>
      <tr>
        <th colspan="4" bgcolor="#FDFBFB" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td width="323" bgcolor="#FFFFFF"><p>
          <label>
            <input type="radio" name="RadioGroup1" value="radio" id="Choice1_1">
            Choice</label>
          <br>
        </p></td>
        <td width="313" bgcolor="#FFFFFF"><label>
          <input type="radio" name="RadioGroup1" value="radio" id="Choice1_2">
        Choice</label></td>
        <td width="299" bgcolor="#FFFFFF"><label>
          <input type="radio" name="RadioGroup1" value="radio" id="Choice1_3">
        Choice</label></td>
        <td width="307" bgcolor="#FFFFFF"><label>
          <input type="radio" name="RadioGroup1" value="radio" id="Choice1_4">
        Choice</label></td>
      </tr>
      <tr>
        <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><p>
          <label>
            <input type="radio" name="RadioGroup2" value="radio" id="Choice2_1">
            Radio</label>
          <br>
        </p></td>
        <td bgcolor="#FFFFFF"><label>
          <input type="radio" name="RadioGroup2" value="radio" id="Choice2_2">
        Radio</label></td>
        <td bgcolor="#FFFFFF"><label>
          <input type="radio" name="RadioGroup2" value="radio" id="Choice2_3">
        Radio</label></td>
        <td bgcolor="#FFFFFF"><label>
          <input type="radio" name="RadioGroup2" value="radio" id="Choice2_4">
        Radio</label></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>