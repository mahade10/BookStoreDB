<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'database/connection.php';
    require 'database/operation.php';

    $db = connect_db();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        add_data($db,$_POST['title'],$_POST['author'],$_POST['available'],$_POST['pages'],$_POST['isbn']);
        header('Location: index.php');
    }
}
?>



<!DOCTYPE html>
<html>
    <body  style="margin-left: 150px;background-color: burlywood;">
        <h3>For adding touple: </h3>
        <form style="background-color: blanchedalmond; margin-bottom: 20px;" action="" method="post">
        <label  for="">Title:</label>
        <input style="margin-bottom: 20px; margin-left: 40px;" type="text" name="title" required>
        <br>
        <label  for="">Author:</label>
        <input style="margin-bottom: 20px;margin-left: 25px;" type="text" name="author" required>
        <br>
        <label  for="">Available:</label>
        <input style="margin-bottom: 20px;margin-left: 10px;" type="text" name="available" required>
        <br>
        <label for="">Pages:</label>
        <input style="margin-bottom: 20px;margin-left: 30px;" type="text" name="pages" required>
        <br>
        <label for="">ISBN:</label>
        <input style="margin-bottom: 20px;margin-left: 30px;" type="text" name="isbn" required>
        
        <input style="margin-bottom: 10px;" style="width: 100px;margin-top: 10px;" type="submit" value="Submit" required>
        </form>
    </body>
</html>