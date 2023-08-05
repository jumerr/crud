<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $idcrud = $_GET['deleteid'];

    $sql = "DELETE FROM `crud.` WHERE idcrud = $idcrud";
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo "Delete successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>