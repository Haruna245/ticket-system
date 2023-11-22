
<?php 

include 'connect.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = md5($password);

    $sql = "SELECT * FROM user where Email='$email' and Password='$hashed_password' ";
    $result = mysqli_query($con,$sql);

    if($result){
        while ($row = mysqli_fetch_assoc($result) > 0) {
            //echo "login Successful";
            header('Location: ViewEvents.php');
        }
        
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
    <title>Login</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);">

    
    <div>

        <div class="d-flex justify-content-center align-items-center " style="height:70vh">
            
            
            <div class="shadow rounded p-5" style="width: 25%;background-color:white">
    
                <form action="" method="post">
                <div class="d-flex justify-content-center mb-3"><h1>Login</h1></div>
                <div>
                    <label for="email">email:</label>
                <input type="text" class="form-control w-100" name="email"> 
                <label for="password">password:</label> 
                <input type="password" class="form-control" name="password"> <br>
                <div class="w-100">
                <input type="submit" value="Login" class="btn btn-primary mt-1 form-control" name="submit">
                </div>
                
                </div>
                    
                </form>
            </div>
        </div>
    </div>


    <!-- <div class="container">
    <div class="card shadow" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Event Name</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Location</h6>
    <p class="card-text">EventDate</p>
    <h6 class="card-subtitle mb-2 text-body-secondary">TicketPrice</h6>
    
  </div>
</div>
    </div> -->
    <!-- <div class=" d-flex align-items-center justify-content-center " style="height:100vh;width:100%">
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
        <h6 class="card-subtitle mb-2 text-body-secondary">TicketPrice: '.$TicketPrice.'</h6>
        
        </div>
        </div>
        </div>
        
        </div>
    </div>
    </div> -->

    <!-- <div class="d-flex justify-content-center">
        <p>hello</p>
    </div> -->
</body>
</html>