
<?php
//if (isset($_GET['id'])) {
    require 'database/connection.php';
    require 'database/operation.php';
    $id = $_GET['id'];

    //echo $id;
    $db = connect_db();
    $books =  show_all_data($db);

    $ss = 0;
    foreach($books as $key => $book){
        if($book['id'] == $id){
           // echo "fgghjkjg";
           // $xy = $book['id'];
           //echo $xy;
           //$key = array_search($xy,$book);
           // echo $key;
            $ss =1;
            drop_data($db, $id);
            break;
        }
    }
    if($ss == 1){
        header('Location: index.php');
    }else{
        header('Location: 404.php');
    }
?>