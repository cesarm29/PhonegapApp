<?php
//require
require_once '/db_connect.php';
// connecting to db
$db = new DB_CONNECT();
//query your MySQL server for whatever information you want
$result = mysql_query("SELECT * FROM phonegap_login") or die(mysql_error());

//create an output array
$output = array();

//if the MySQL query returned any results
if (mysql_affected_rows() > 0) {


    //iterate through the results of your query
    while ($row = mysql_fetch_assoc($result)) {

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