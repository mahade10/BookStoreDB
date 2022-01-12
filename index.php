
<!DOCTYPE html>
<html>
    <head>
        <style>
            a{
                text-decoration: none;
            }
            body{
                background-color:bisque;
            }
        </style>
    </head>
<body>
<?php
    require 'database/connection.php';
    require 'database/CreateDatabase.php';
    require 'database/operation.php';

    $db = connect_db();
    create_table($db);
    
    $data =  show_all_data($db);
?>
<div style="margin-top: 20px;margin-left: 120px;">
    <button style="margin-right: 15px;height: 25px;"> <a href="form.php"> Search</a></button> 
    <button style="margin-right: 15px;height: 25px;"><a href="deleteTouple.php"> Delete</a></button> 
    <button style="margin-right: 15px;height: 25px;"> <a href="addbookform.php"> Add</a></button>
</div>

<table style="margin-top: 10px;" border='2';>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
    </tr>
<?php foreach($data as $book): ?>
    <tr>
       <td> <?php echo ($book['id']); ?> </td>
       <td> <?php echo ($book['title']); ?> </td>
      <td>  <?php echo ($book['author']); ?> </td>
      <td>  <?php echo ($book['available']); ?> </td>
       <td> <?php echo ($book['pages']); ?> </td>
      <td>  <?php echo ($book['isbn']); ?> </td>

    </tr>   
<?php endforeach; ?>
</table>

</body>
</html>
