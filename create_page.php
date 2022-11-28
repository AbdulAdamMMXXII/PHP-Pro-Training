<?php 
require_once("includes/connection.php");
require_once("includes/functions.php");
?>
<?php
    $menu_name=$_POST["menu_name"];
    $content=$_POST["content"];

    $query="INSERT INTO pages(Menu_name, content)VALUES('{$menu_name}','{$content}')";
    if(mysqli_query($connection,$query)){
        header("location:content.php");
    }else{
        echo "error";
    }
    if(isset($connection)){
        mysqli_close($connection);
    }
?>