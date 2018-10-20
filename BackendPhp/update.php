<?php
require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $title=$_POST['title'];
 $duration=$_POST['duration'];
 $price=$_POST['price'];
 $q=mysql_query("UPDATE `course_details` SET `title`='$title',`duration`='$duration',`price`='$price' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>