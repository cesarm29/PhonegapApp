<?php
require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
 if(isset($_GET['id']))
 {
 $id=$_GET['id'];
 $q=mysql_query("delete from `course_details` where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>