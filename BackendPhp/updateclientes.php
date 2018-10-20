<?php
header("access-control-allow-origin: *"); 
require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
 if(isset($_POST['update']))
 {
 $PrimerNombre=$_POST['PrimerNombre'];
 $PrimerApellido=$_POST['PrimerApellido'];
 $Direccion=$_POST['Direccion'];
 $Ciudad=$_POST['Ciudad'];
 $Documento=$_POST['Documento'];
 $TelefonoFijo=$_POST['TelefonoFijo'];
 $TelefonoMovil=$_POST['TelefonoMovil'];
 $Email=$_POST['Email'];

 $q=mysql_query("UPDATE `usuarios` SET `PrimerNombre`='$PrimerNombre',`PrimerApellido`='$PrimerApellido',`Direccion`='$Direccion' ,`Ciudad`='$Ciudad',`TelefonoFijo`='$TelefonoFijo',`TelefonoMovil`='$TelefonoMovil',`Email`='$Email'  where `Documento`='$Documento'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>