<!Doctype html>
<html>
<body style="background-color:cornsilk;">

<?php    
    require 'database/connection.php';
    require 'database/CreateDatabase.php';
    require 'database/operation.php';

    $db = connect_db();
    create_table($db);

    $query = isset($_GET['query']) ? $_GET['query'] : '';
    $size_of_query = strlen($query);
    if ($size_of_query != 0) {
        $books = search_data($db,$query);
    }
    else{
        $books =  show_all_data($db);
    }
    $books = $books->fetchAll(PDO::FETCH_ASSOC);
    $x = 1; 
?>

            <table border ='3'>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                    <th>Pages</th>
                    <th>Isbn</th>
                </tr>
                <?php foreach($books as $book): ?>
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
<?php if ($x == 0):?>
       <h3> <?php echo 'books not found!';?></h3>
    <?php endif;?>
</body>
</html>