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
      <td><label for="tbDelete">ข้อที่ต้องการลบ:</label>
        <input name="tbDelete" type="text" id="tbDelete" size="200"></td>
  </tbody>
</table>
<input name="submit" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก')" type="submit" value="Delete" />
</body>
</html>