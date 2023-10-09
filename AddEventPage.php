
<?php 

include 'connect.php';
//echo "php";
if(isset($_POST['submit'])){
    
    $eventName = $_POST['eventName'];
    $eventLocation = $_POST['eventLocation'];
    $date = $_POST['date'];
    $price =    $_POST['price'];
    $time =  $_POST['eventTime'];
    
    echo( $eventName);echo($eventLocation);
    echo($date);echo($price);echo($time);
    $sql = "INSERT INTO `event` (EventName, Location, EventDate, TicketPrice, Time)
            VALUES ('$eventName', '$eventLocation', '$date', '$price', '$time')";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
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

    <div class="container my-5">
        <h1>Add Events</h1>
    <form action="" method="post">
        event Name: <input type="text" class="form-control" name="eventName" id=""> <br>
        event Location: <input type="text" class="form-control" name="eventLocation" id="" > <br>
        event date: <input type="date" class="form-control" name="date" id=""> <br>
        ticket price: <input type="text" class="form-control" name="price" id=""> <br>
        time: <input type="time" name="eventTime" class="form-control" id=""> <br><br>
        <input type="submit" value="submit" class="form-control btn btn-primary" name="submit">
    </form>
    </div>

    


</body>
</html>