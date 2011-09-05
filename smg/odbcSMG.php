<html>
<body>

<?php
$ZIP = $_GET['ZIP'];


$sql="SELECT ttMDM_SDI4.MSTR_ID, NAME_1, ADD_1, CITY,STATE,ZIP FROM dbo.ttMDM_SDI4 INNER JOIN  dbo.ttMDM_SDI2 ON dbo.ttMDM_SDI4.MSTR_ID = dbo.ttMDM_SDI2.MSTR_ID AND dbo.ttMDM_SDI4.BUS_TYPE = dbo.ttMDM_SDI2.BUS_TYPE WHERE  (dbo.ttMDM_SDI2.IS_PRIMARY = N'Y')";

$sql .= " AND ZIP ='" ;
$sql .=  $ZIP;
$sql .=  "'";

$conn=odbc_connect('PROD06','cransoft','Cr@nAdm!n');
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("Error in SQL");}
echo "<table><tr><th>MSTR_ID";
echo "<th>NAME_1</th>";
echo "<th>ADD_1</th>";
echo "<th>CITY</th>";
echo "<th>STATE</th>";
echo "<th>ZIP</th></tr>";
while (odbc_fetch_row($rs))
  {
  $MSTR_ID=odbc_result($rs,1);
  $NAME_1=odbc_result($rs,2);
  $ADD_1=odbc_result($rs,3);
  $CITY=odbc_result($rs,4);
  $STATE=odbc_result($rs,5);
  $ZIP=odbc_result($rs,6);
  echo "<tr><td>$MSTR_ID</td>";
  echo "<td>$NAME_1</td>";
  echo "<td>$ADD_1</td>";
  echo "<td>$CITY</td>";
  echo "<td>$STATE</td>";
  echo "<td>$ZIP</td></tr>";
  }
odbc_close($conn);
odbc_close($conn);
echo "</table>";
?>

</body>
</html> 