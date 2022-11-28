<?php //session_start();?>
<?php require_once ("includes/functions.php"); ?>
<?php require_once ("includes/functions.php");?>
<?php
    $id=$_GET['page'];

    if($page=get_page_by_id($id)){
        $query="DELETE FROM pages WHERE id = " . $id;
        $result=mysqli_query($connection,$query);
        if(mysqli_affected_rows($connection)==1){
            header("location: content.php");

                exit;
            }
        else{
            echo "<p> Delete failed</p>";
            echo "<a href=\"content.php\"> Return to main Page";
        }
    }
    else{
        header("location: content.php");
        exit;
    }
?>
<?php mysqli_close($connection); ?>