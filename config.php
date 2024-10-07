<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regvalid";


$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Conenectin failed".$conn->connect_error);
}
/*Connection using MySQLi Procedural
create connection */
/*$mysqli = new mysqli($server_name, $db_user, $db_pass, $db_name);

/*check connection*/
/*if (!$mysqli){
    die("Connection failed: " . mysqli_connect_error());
}
/*echo "Connected successfully";*/

?>