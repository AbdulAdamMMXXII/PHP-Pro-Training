<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="MacBook.png" method="post" enctype="multipart/form-data"> Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</body>
</html>

<?php require_once("includes/functions.php");?>
<?php include("includes/header.php");?>
    <table id="structure">
                <tr>
                    <td id="navigation">
                        &nbsp;
                        </td>
                        <td id="page">
                        <h2>Staff Menu</h2>
                       <p>Welcome to the staff area.</p>
                        <ul>
                          <li><a href="content.php">Manage website content</a></li>
                          <li><a href="new_user.php">Add staff user</a></li>
                          <li><a href="register.php">Create an account</a></li>
                          <li><a href="logout.php">logout</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        <?php include("includes/footer.php");?>