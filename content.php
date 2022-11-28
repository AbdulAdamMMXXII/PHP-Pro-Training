<?php require_once("includes/functions.php") ?>
<?php include("includes/header.php");?>
<?php
find_selected_page();
?>
    <table id="structure">
                <tr>
                    <td id="navigation">
                        <?php navigation(); ?>
                        </td>
                        <td id="page">
                        <h2>Content area</h2>
                       <p>Welcome to the content area.</p>
                        <?php 
                        if(!is_null($sel_page)){
                            echo "<h2>".$sel_page['Menu_name']."</h2>";
                            echo "<div class=\"page-content\">";
                            echo $sel_page['content'];
                            echo "</div>";
                            echo "<a href=\"edit_page.php?page={$sel_page['id']}\">Edit the page</a>"; echo "&nbsp;&nbsp";
                            echo "<a href=\"delete_page.php?page=". $sel_page['id']."\"> Delete page</a>"; }else{echo "<h2> select a page to edit</h2>";}
                        ?>
                        <ul>
                        </ul>
                        <!-- code to be added -->
                        <br/> 
                        <a href="new_page.php">Add a new page</a>
                        <br/>
                    </td>
                </tr>
            </table>
        <?php include("includes/footer.php");?>