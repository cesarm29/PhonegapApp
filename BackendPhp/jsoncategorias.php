<?php
header("access-control-allow-origin: *"); 
require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
$data=array();
$q=mysql_query("select * from `servicios`");
while ($row=mysql_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>