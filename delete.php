<?php 

include "connect.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    echo $id;

    $sql = " DELETE FROM event where EventID='$id'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "item deleted successfully";
        header('location:EventAdminPage.php');
    }else{
        die(mysqli_error($con)); 
    }
}


?>