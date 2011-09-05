<html>
<body>

<?php
$conn=pg_connect("host=localhost dbname=ETLConfiguration user=postgres password=Summer03");
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$sql="SELECT * FROM etlconfiguration";

$rs=pg_query($sql);
if (!$rs)
  {exit("Error in SQL");}
echo "<table><tr>";
echo "<th>ConfigurationFilter</th>";
echo "<th>ConfiguredValue</th>";
echo "<th>PackagePath</th>";
echo "<th>ConfiguredValueType</th>";
echo "<th>Description</th></tr>";
$i=-1;
while (pg_fetch_row($rs))
  {

$i=$i+1;
  $ConfigurationFilter=pg_result($rs,$i,0);
  $ConfiguredValue=pg_result($rs,$i,1);
  $PackagePath=pg_result($rs,$i,2);
  $ConfiguredValueType=pg_result($rs,$i,3);
  $Description=pg_result($rs,$i,4);
  echo "<tr><td>$ConfigurationFilter</td>";
  echo "<td>$ConfiguredValue</td>";
  echo "<td>$PackagePath</td>";
  echo "<td>$ConfiguredValueType</td>";
  echo "<td>$Description</td></tr>";
  }
pg_close($conn);
echo "</table>";
?>

</body>
</html> 