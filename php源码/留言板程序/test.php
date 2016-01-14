<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
<!-- 我是中国人 -->

<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("xpc_liuyanban", $con);

mysql_query("set names GBK");
$result = mysql_query("SELECT * FROM lyb");


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['biaoti'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>