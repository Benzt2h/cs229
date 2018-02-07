<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form name="form1" method="post" action="select-db2.php">
<?
echo "เพิ่มข้อมูล";
?>
<table width="1270" border="1">
  <tbody>
      <tr>
      <td><label for="textfield">ตั้งคำถาม:</label>
        <input name="textfield" type="text" id="tbQuestion" size="200"></td>
    </tr>
      <tr>
        <td><label for="textfield2">คำตอบที่ถูกต้อง:</label>
        <input name="textfield2" type="text" id="tbAnswer" size="35">
        <label for="textfield3">คำตอบที่ผิด1:</label>
        <input name="textfield3" type="text" id="tbWronganswer1" size="35">
        <label for="textfield4">คำตอบที่ผิด2:</label>
        <input name="textfield4" type="text" id="tbWronganswer2" size="35">
        <label for="textfield5">คำตอบที่ผิด3:</label>
        <input name="textfield5" type="text" id="tbWronganswer3" size="35"></td>
      </tr>
  </tbody>
</table>
<input type="submit" name="Submit" id="button" value="เพิ่มข้อมูล">
</body>
</html>