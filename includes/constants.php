<?php
   define("DB_SERVER", "localhost");
   define("DB_USER", "root");
   define("DB_PASS", "");
   define("DB_NAME", "access2022");
?>

<?php
    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"access2022");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>