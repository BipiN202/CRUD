<?php
include 'connection.php';

if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `crud_data` WHERE id =$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "deleted successfully";
    }
    else{
        die(mysqli_error($conn));
    }
}
?>
