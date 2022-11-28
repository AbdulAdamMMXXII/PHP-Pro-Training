<?php require("constants.php");

// 1. Select a database connection 
$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
    die("database connection failed: ".mysqli_error());
}
// 2. Select a database to use
$db_select= mysqli_select_db($connection, "access2022");
if(!$db_select){
    die("database selectionfailed: ".mysqli_error());
}

?>