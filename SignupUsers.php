<?php 

include 'connect.php';
//echo "php";
if(isset($_POST['submit'])){
    
    //echo "post";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    $email =    $_POST['email'];
    $admin = false;
    $phonenumber =  $_POST['phonenumber'];


    if($password==$password1){
      $hashed_password = md5($password);
      echo $hashed_password; 
      $sql = "INSERT INTO `user` (Firstname, Lastname, Email, Password, phoneNumber, admin)
            VALUES ('$firstname', '$lastname', '$email', '$hashed_password', '$phonenumber', '$admin')";
    $result = mysqli_query($con,$sql);

    if(!$result){
      echo "error occured";
      die(mysqli_error($con));
    }
    }
    else{
      echo "passwords donot match";
    }
    
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

    <!-- <div class="container">

        <form action="users.php" method="post">
            firstname: <input type="text" class="form-control" name='firstname'> <br>
            lastname: <input type="text" name="lastname" > <br>
            password: <input type="text" name="password">  <br>
            email: <input type="text" name="email"> <br>
            phonenumber: <input type="text" name="phonenumber"> <br>
    
    
            <input type="submit" value="submit" name="submit">
        </form>
    </div> -->

    <div class="container mt-5">

    <h1>Sign Up</h1>

        <form class="row g-3 mt-5" method="post">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Firstname</label>
        <input type="text" class="form-control" id="inputEmail4" name='firstname'>
      </div>
      <div class="col-md-6">
        <label for="input2" class="form-label">Lastname</label>
        <input type="text" class="form-control" id="input2" name='lastname'>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputAddress" name="email"  placeholder="email">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password1" placeholder="">
      </div>
      <div class="col-md-6">
        <label for="phoneNumber" class="form-label">phoneNumber</label>
        <input type="text" class="form-control" id="phoneNumber" name="phonenumber">
      </div>
      
      <div class="col-12">
      <input type="submit" class="btn btn-primary" value="submit" name="submit">
        <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
      </div>
    </form>
    </div>

</body>
</html>