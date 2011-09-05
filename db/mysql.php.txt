<html>
<body>

<?php
$conn=odbc_connect('PROD04','BO_Reader_Prd','re@der9rd');
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$sql="SELECT * FROM ODS_NORTHSTAR.metadata.ETLConfiguration";
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("Error in SQL");}
echo "<table><tr>";
echo "<th>ConfigurationFilter</th>";
echo "<th>ConfiguredValue</th>";
echo "<th>PackagePath</th>";
echo "<th>ConfiguredValueType</th>";
echo "<th>Description</th></tr>";
while (odbc_fetch_row($rs))
  {
  $ConfigurationFilter=odbc_result($rs,"ConfigurationFilter");
  $ConfiguredValue=odbc_result($rs,"ConfiguredValue");
  $PackagePath=odbc_result($rs,"PackagePath");
  $ConfiguredValueType=odbc_result($rs,"ConfiguredValueType");
  $Description=odbc_result($rs,"Description");
  echo "<tr><td>$ConfigurationFilter</td>";
  echo "<td>$ConfiguredValue</td>";
  echo "<td>$PackagePath</td>";
  echo "<td>$ConfiguredValueType</td>";
  echo "<td>$Description</td></tr>";
  }
odbc_close($conn);
echo "</table>";
?>

</body>
</html> 