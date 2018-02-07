<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
$host="localhost";
$username="root";
$password="12345678";
$dbname="driver_license";

$link=mysql_connect($host,$username,$password) or die("ไม่สามารถติดต่อฐานข้อมูลได้ในขณะนึ้");
mysql_select_db($dbname,$link) or die("ไม่สามารถติดต่อฐานข้อมูลได้ในขณะนึ้");

$tbQuestion = $_POST['tbQuestion'];
$tbAnswer = $_POST['tbAnswer'];
$tbWronganswer1 = $_POST['tbWronganswer1'];
$tbWronganswer2 = $_POST['tbWronganswer2'];
$tbWronganswer3 = $_POST['tbWronganswer3'];

$sql_Insert = "INSERT INTO question (question,answer,wrong_answer1,wrong_answer2,wrong_answer3) VALUES ('$tbQuestion','$tbAnswer','$tbWronganswer1','$tbWronganswer2','$tbWronganswer3')";
$result_Insert = mysql_query($sql_Insert);

$sql_Select ="SELECT * FROM question WHERE 1";
$result_Select = mysql_query($sql_Select);

echo "เพิ่มข้อมูล";

echo "<BR>";
echo "<BR>";
?>

<table width="1270" border="1">
  <tbody>
    <tr>
      <th scope="col">จำนวนข้อ&nbsp;</th>
      <th scope="col">คำถาม&nbsp;</th>
      <th scope="col">คำตอบ&nbsp;</th>
      <th scope="col">คำตอบผิด1&nbsp;</th>
      <th scope="col">คำตอบผิด2&nbsp;</th>
      <th scope="col">คำตอบผิด3&nbsp;</th>
    </tr>
    <?php
	while($data = mysql_fetch_array($result_Select))
	{
	?>
    <tr align="center">
      <td><?php echo $data["number"] ?>&nbsp;</td>
      <td><?php echo $data["question"] ?>&nbsp;</td>
      <td><?php echo $data["answer"] ?>&nbsp;</td>
      <td><?php echo $data["wrong_answer1"] ?>&nbsp;</td>
      <td><?php echo $data["wrong_answer2"] ?>&nbsp;</td>
      <td><?php echo $data["wrong_answer3"] ?>&nbsp;</td>
    </tr>
   <?php
	}
   ?>
  </tbody>
</table>
<?
mysql_close($link);
?>
</body>
</html>