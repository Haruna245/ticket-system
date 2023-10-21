<?php 

include "connect.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    echo $id;

    $sql = " DELETE FROM tickets where id='$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "item deleted successfully";
        header('location:ViewTickets.php');
    }else{
        die(mysqli_error($con)); 
    }
}


?>