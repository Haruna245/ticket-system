<?php 
 include 'connect.php';
 $currentDate = date('Y-m-d');
 //echo '<br />'.$currentDate;
 



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Events</title>

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
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

<div class="d-flex justify-content-center my-2">
<h1>View All Events</h1>
</div>
    


    <div class="bd-example-snippet bd-code-snippet m-5"><div class="bd-example m-0 border-0">
        <table class="table table-striped">
          <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">EventName</th>
            <th scope="col">Location</th>
            <th scope="col">EventDate</th>
            <th scope="col">TicketPrice</th>
            <th scope="col">Time</th>
            <th scope="col">Buy Ticket</th>
          </tr>
          </thead>
          
          <tbody>
          <?php 
    
    $sql = " SELECT * FROM event ";

 $result = mysqli_query($con,$sql);

 if ($result) {
    

    while ($row = mysqli_fetch_assoc($result)) {
        //echo $row['EventName'];
        $EventID = $row['EventID'];
        $EventName = $row['EventName'];
        $Location = $row['Location'];
        $EventDate = $row['EventDate'];
        $TicketPrice = $row['TicketPrice'];
        $Time = $row['Time'];

        
        echo '<tr>
        <th scope="row"></th>
        <td>' . $EventName . '</td>
        <td>' . $Location . '</td>
        <td>' . $EventDate . '</td>
        <td>' . $TicketPrice . '</td>
        <td>' . $Time . '</td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop_' . $EventID . '">
        Buy ticket
      </button>
      <div class="modal fade" id="staticBackdrop_' . $EventID . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">fill in your details</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

          <form action="AddTicket.php" method="post">

          Event ID: ' . $EventID . '
          <input type="text" name="EventID" class="d-none" value='. $EventID .'>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="Name">
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">phonenumber</label>
            <input type="text" class="form-control" id="inputEmail4" name="phonenumber">
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Price</label>
            <input type="text" class="form-control" id="inputEmail4" name="amount" value='.$TicketPrice.' >
          </div>
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Date</label>
            <input type="text" class="form-control" id="inputEmail4" name="date" value='.$currentDate.' >
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="submit" name="submit">
            
          </div>

          </form>
            <!-- Other modal content goes here -->
            
          </div>
          
        </div>
      </div>
    </div>
      </td>
      </tr>';
    }
}


    
    
    
    
    ?>
    
    <!-- Button trigger modal -->


<!-- Modal -->



    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>