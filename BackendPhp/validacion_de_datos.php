<?php
header("access-control-allow-origin: *"); 
//require
require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();

session_start();

/* Extrae los valores enviados desde la aplicacion movil */
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];
//paso el get a session
$_SESSION['userapp'] = $_GET['usuario'];
//query your MySQL server for whatever information you want
$result = mysql_query("SELECT * FROM usuarios where Email='$usuarioEnviado' and password='$passwordEnviado'") or die(mysql_error());

while($row = mysql_fetch_array($result))
       {
            $user = $row["Email"];
      }
/* crea un array con datos arbitrarios que seran enviados de vuelta a la aplicacion */
$resultados = array();
/* verifica que el usuario y password concuerden correctamente */
if($user != ""){
	/*esta informacion se envia solo si la validacion es correcta */
	$resultados["mensaje"] = $_GET['usuario'];
	$resultados["validacion"] = "ok";

}else{
	/*esta informacion se envia si la validacion falla */
	$resultados["mensaje"] = "Usuario y password incorrectos";
	$resultados["validacion"] = "error";
	
}
/*convierte los resultados a formato json*/
$resultadosJson = json_encode($resultados);
/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
?>