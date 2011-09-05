

<?php
$ZIP = $_GET['ZIP'];
$limit = 5;
$page=0;
$start=0;

$sql="SELECT ttMDM_SDI4.MSTR_ID as  id, NAME_1, ADD_1, CITY,STATE,ZIP FROM dbo.ttMDM_SDI4 INNER JOIN  dbo.ttMDM_SDI2 ON dbo.ttMDM_SDI4.MSTR_ID = dbo.ttMDM_SDI2.MSTR_ID AND dbo.ttMDM_SDI4.BUS_TYPE = dbo.ttMDM_SDI2.BUS_TYPE WHERE  (dbo.ttMDM_SDI2.IS_PRIMARY = N'Y')";

$sql .= " AND ADD_TYPE = 'P' AND ZIP ='" ;
$sql .=  $ZIP;
$sql .=  "' ORDER by ttMDM_SDI4.MSTR_ID";

$sql2="SELECT COUNT(*) as count FROM dbo.ttMDM_SDI4  INNER JOIN  dbo.ttMDM_SDI2 ON dbo.ttMDM_SDI4.MSTR_ID = dbo.ttMDM_SDI2.MSTR_ID AND dbo.ttMDM_SDI4.BUS_TYPE = dbo.ttMDM_SDI2.BUS_TYPE WHERE  (dbo.ttMDM_SDI2.IS_PRIMARY = N'Y')";
$sql2 .= " AND ADD_TYPE = 'P' AND ZIP ='" ;
$sql2 .=  $ZIP;
$sql2 .=  "'";

$conn=odbc_connect('PROD06','cransoft','Cr@nAdm!n');
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$rs=odbc_exec($conn,$sql2);
if (!$rs)
  {exit("Error in SQL");}
  $count=odbc_result($rs,1);
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("Error in SQL");}

    if( $count >0 ) {
        $total_pages = ceil($count/$limit);
	} else {
		$total_pages = 0;
	}
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit; // do not put $limit*($page - 1)
$response = new stdClass();
error_reporting(0);
if ($start<0) $start = 0;

    $responce->reccords = $count;
    $responce->total = $total_pages;
    $responce->page = $page;

$id= '';
$NAME_1 = '';
$ADD_1 = '';
$CITY = '';
$STATE = '';
$ZIP = '';

$i=0;
while ($row=odbc_fetch_array($rs))
  {
   $id=$row[id];
   $NAME_1=$row[NAME_1];
   $ADD_1=$row[ADD_1];
   $CITY=$row[CITY];
   $STATE=$row[STATE];
   $ZIP1 = $row[ZIP];
   //$responce->key[$i]=$row;
   //$responce->key[$i]['id']=$id;
////////////$response->rows[$i]=$row;
   $response->rows[$i]['id']=$id;
   //$responce->rows[$i]=array("id",$id,"NAME_1",$NAME_1,"ADD_1",$ADD_1,"CITY",$CITY,"STATE",$STATE,"ZIP",$ZIP1);
   $responce->rows[$i]=array($id,$NAME_1,$ADD_1,$CITY,$STATE,$ZIP1);
  //$response->rows[$i]['cell']=array($row[id],$row[NAME_1],$row[ADD_1],$row[CITY],$row[STATE],$row[ZIP]);
   //$responce->key[$i]['cell']=$row;//array($row);
    $i++;
//break;
  }
odbc_close($conn);

echo json_encode($responce); // coment if php 5 
?>

