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
<nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">SmartTicket</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ViewEvents.php">Home</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>
 
  
  <!-- <div class="m-2">
    <a href="ViewEvents.php" class="btn btn-primary" >Back</a>
  </div> -->
<?php 
    
    $sql = " SELECT * FROM event where EventID = '$EventID' ";

 $result = mysqli_query($con,$sql);

 if ($result) {
    

    while ($row = mysqli_fetch_assoc($result)) {
       
        $EventID = $row['EventID'];
        $EventName = $row['EventName'];
        $Location = $row['Location'];
        $EventDate = $row['EventDate'];
        $TicketPrice = $row['TicketPrice'];
        $Time = $row['Time'];

        echo '<div class="" >
  <div style="height: 50dvh;" class="d-flex justify-content-center align-items-center">
    <div class="w-50 text-center shadow">
    <img src="./assets/images/icon-success.png" style="width: 100px;height:100px;margin-top:20px" alt="">
    <div class="m-5">
    <h5>Congratulations tickets bought successfully</h5>
    <p>Below are the details to your ticket</p>

    
    <table class="table table-striped">
          <thead>
          <tr>
            
            <th scope="col">User</th>
            <th scope="col">EventName</th>
            <th scope="col">Location</th>
            <th scope="col">EventDate</th>
            <th scope="col">TicketPrice</th>
            <th scope="col">Time</th>
            
          </tr>
          <tr>
            <td>Seidu</td>
            <td>'.$EventName.'</td>
            <td>'.$Location.'</td>
            <td>'.$EventDate.'</td>
            <td>Ghs'.$TicketPrice.'</td>
            <td>'.$Time.'</td>
          </tr>
          </thead>
          
          

    </table>
    <a href="ViewEvents.php" class="btn btn-primary w-25">Done</a>
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