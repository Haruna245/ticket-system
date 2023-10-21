<?php 
include "connect.php";

$id = $_GET['updateid'];
//echo $id;

$sql = "select * from event where EventID='$id'";
$result = mysqli_query($con,$sql);
//echo $result['EventName'];
$row = mysqli_fetch_assoc($result);
//echo $row['EventName'];
$eventname = $row['EventName'];
$eventlocation = $row['Location'];
$eventdate = $row['EventDate'];
$eventprice = $row['TicketPrice'];
$eventtime = $row['Time'];

if(isset($_POST['submit'])){
    
    $eventID = $id;
    $eventName = $_POST['eventName'];
    $eventLocation = $_POST['eventLocation'];
    $date = $_POST['date'];
    $price =    $_POST['price'];
    $time =  $_POST['eventTime'];
    echo($time);
    /* echo( $eventName);echo($eventLocation);
    echo($date);echo($price);echo($time); */
    
        $sql = "UPDATE event set EventID='$eventID', EventName='$eventName', Location= '$eventLocation', EventDate='$date', TicketPrice='$price',
                Time='$time' where EventID='$eventID' ";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
        header('location:EventAdminPage.php');
    }else{
        echo "error occured";
        die(mysqli_error($con));
         

    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex justify-content-center my-5" style="">
    <h1>Update Events</h1>
    </div>

    <div class="container my-5">
        
        
    <form action="" method="post">
        event Name: <input type="text" class="form-control" name="eventName" id="" value="<?php echo $eventname ?>"> <br>
        event Location: <input type="text" class="form-control" name="eventLocation" id="" value="<?php echo $eventlocation ?>" > <br>
        event date: <input type="date" class="form-control" name="date" id="" value="<?php echo $eventdate ?>"> <br>
        ticket price: <input type="text" class="form-control" name="price" id="" value="<?php echo $eventprice ?>"> <br>
        time: <input type="time" name="eventTime" class="form-control" id="" value="<?php echo $eventtime ?>"> <br><br>
        <input type="submit" value="submit" class="form-control btn btn-primary" name="submit">
    </form>
    </div>

    


</body>
</html>