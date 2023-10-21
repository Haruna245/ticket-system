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
    <title>Edit Events</title>

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
            <a class="nav-link active" aria-current="page" href="EventAdminPage.php">Home</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>


    <div class="d-flex justify-content-center my-3">
    <h1>Edit Events</h1>
    </div>
    

    <div class=" container d-flex justify-content-end w-100">
        <a href="AddEventPage.php" class="btn btn-primary">Add Event</a>
        <a href="ViewTickets.php" class="btn btn-dark text-light ms-2">View all Bought Tickets</a>
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
            <th scope="col">update</th>
            <th scope="col">delete</th>
          </tr>
          </thead>
          
          <tbody>
          <?php 
    
    $sql = " SELECT * FROM event ";

 $result = mysqli_query($con,$sql);

 if ($result) {
    //echo "Data received successfully";

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
        <td>
      <a class="btn btn-secondary" href="update.php?updateid='.$EventID.'">update</a>
      <td><a class="btn btn-danger" href="delete.php?deleteid='.$EventID.'">delete</a>
      
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