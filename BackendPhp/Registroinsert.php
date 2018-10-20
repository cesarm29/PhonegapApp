<?php
 require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
 if(isset($_POST['insert']))
 {
 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $documentoidentidad=$_POST['documentoidentidad'];
 $direccion=$_POST['dirp'];
 $telfijo=$_POST['telfijo'];
 $telcel=$_POST['telcel'];
 $email=$_POST['correop'];
 $ciudad=$_POST['ciudad'];
 $contrasena=$_POST['contrasena'];
 $q=mysql_query("INSERT INTO `usuarios` (`PrimerNombre`,`PrimerApellido`,`Documento`,`Direccion`,`TelefonoFijo`,`TelefonoMovil`,`Email`,`Ciudad`,`password`) VALUES ('$nombres','$apellidos','$documentoidentidad','$direccion','$telfijo','$telcel','$email','$ciudad','$contrasena')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>