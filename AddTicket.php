<?php 

include 'connect.php';
//echo "php";
if(isset($_POST['submit'])){
    
    //echo "received";
    $EventID = $_POST['EventID'];
    //echo $EventID;
    $Name = $_POST['Name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    //echo $date;
    $phonenumber =  $_POST['phonenumber'];
    
    $sql = "INSERT INTO `tickets` (EventID, Amount, Date, TicketOwner, phoneNumber)
            VALUES ('$EventID', '$amount', '$date', '$Name', '$phonenumber')";
    $result = mysqli_query($con,$sql);

    if(!$result){
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
    <title>Ticket</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="height:100%">
    
<?php 
    
    $sql = " SELECT * FROM event where EventID = '$EventID' ";

 $result = mysqli_query($con,$sql);

 if ($result) {
    //echo "Data received successfully";

    while ($row = mysqli_fetch_assoc($result)) {
       // echo $row['EventName'];
        $EventID = $row['EventID'];
        $EventName = $row['EventName'];
        $Location = $row['Location'];
        $EventDate = $row['EventDate'];
        $TicketPrice = $row['TicketPrice'];
        $Time = $row['Time'];

        echo '<div class=" d-flex align-items-center justify-content-center " style="height:50vh;width:100%">
        <div class=" justify-content-center my-5 ">
            <h5>Congratulation Ticket bought successfully</h5>
            <p>find below the details to the event and the ticket</p>
            <div class="">
            <div class="">
            <div class="card shadow" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Event Name: '.$EventName.'</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Location: '.$Location.'</h6>
            <p class="card-text">EventDate: '.$EventDate.'</p>
            <h6 class="card-subtitle mb-2 text-body-secondary">TicketPrice: Ghs'.$TicketPrice.'</h6>
            <!-- <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a> -->
            </div>
            </div>
            </div>
            
            </div>
        </div>
        </div>';

    }
}
    ?>

<!-- <p>'.$EventName.'</p> 
        <p>'.$Location.'</p> 
        <p>'.$EventDate.'</p> 
        <p>'.$TicketPrice.'</p>  -->
</body>
</html>