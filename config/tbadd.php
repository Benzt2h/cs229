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
      <td><label for="tbQuestion">ตั้งคำถาม:</label>
        <input name="tbQuestion" type="text" id="tbQuestion" size="200"></td>
    </tr>
      <tr>
        <td><label for="tbAnswer">คำตอบที่ถูกต้อง:</label>
        <input name="tbAnswer" type="text" id="tbAnswer" size="35">
        <label for="tbWronganswer1">คำตอบที่ผิด1:</label>
        <input name="tbWronganswer1" type="text" id="tbWronganswer1" size="35">
        <label for="tbWronganswer2">คำตอบที่ผิด2:</label>
        <input name="tbWronganswer2" type="text" id="tbWronganswer2" size="35">
        <label for="tbWronganswer3">คำตอบที่ผิด3:</label>
        <input name="tbWronganswer3" type="text" id="tbWronganswer3" size="35"></td>
      </tr>
  </tbody>
</table>
<input type="Submit" name="Submit" value="เพิ่มข้อมูล">
</body>
</html>