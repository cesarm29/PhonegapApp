<?php

//session_start();
$connection = mysql_connect("localhost", "root", "cesar"); 
$db = mysql_select_db("phonegaplogin", $connection); 

//include your database connection code
// include_once('database-connection.php');

//query your MySQL server for whatever information you want
$query = mysql_query("SELECT * FROM phonegap_login", $db) or trigger_error(mysql_error());

//create an output array
$output = array();

//if the MySQL query returned any results
if (mysql_affected_rows() > 0) {


    //iterate through the results of your query
    while ($row = mysql_fetch_assoc($query)) {

        //add the results of your query to the output variable
        $output[] = $row;
    }


    //send your output to the browser encoded in the JSON format
    echo json_encode(array('status' => 'success', 'items' => $output));

} else {

    //if no records were found in the database then output an error message encoded in the JSON format
    echo json_encode(array('status' => 'error', 'items' => $output));
}
?>