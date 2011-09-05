<html>
<body>

<?php
$conn=mysql_connect('127.0.0.1','root','');
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$sql="SELECT * FROM ETLConfiguration";
if (!mysql_select_db('data_mart')) {
    die('Could not select database: ' . mysql_error());
}
$rs=mysql_query($sql);
if (!$rs)
  {exit("Error in SQL");}
echo "<table><tr>";
echo "<th>ConfigurationFilter</th>";
echo "<th>ConfiguredValue</th>";
echo "<th>PackagePath</th>";
echo "<th>ConfiguredValueType</th>";
echo "<th>Description</th></tr>";
$i=-1;
while (mysql_fetch_row($rs))
  {

$i=$i+1;
  $ConfigurationFilter=mysql_result($rs,$i,0);
  $ConfiguredValue=mysql_result($rs,$i,1);
  $PackagePath=mysql_result($rs,$i,2);
  $ConfiguredValueType=mysql_result($rs,$i,3);
  $Description=mysql_result($rs,$i,4);
  echo "<tr><td>$ConfigurationFilter</td>";
  echo "<td>$ConfiguredValue</td>";
  echo "<td>$PackagePath</td>";
  echo "<td>$ConfiguredValueType</td>";
  echo "<td>$Description</td></tr>";
  }
mysql_close($conn);
echo "</table>";
?>

</body>
</html> 