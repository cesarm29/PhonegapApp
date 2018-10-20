<?php
 require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
 if(isset($_POST['insert']))
 {
 $title=$_POST['title'];
 $duration=$_POST['duration'];
 $price=$_POST['price'];
 $q=mysql_query("INSERT INTO `course_details` (`title`,`duration`,`price`) VALUES ('$title','$duration','$price')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>