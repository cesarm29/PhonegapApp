<?php
header("access-control-allow-origin: *"); 
require_once '/db_connect.php';

$usuario = $_GET['usuario'];
// connecting to db
$db = new DB_CONNECT();
$data=array();
$q=mysql_query("select  * from `usuarios` INNER JOIN temas ON usuarios.Documento=temas.idTutor  where usuarios.Email='$usuario' ");
while ($row=mysql_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>