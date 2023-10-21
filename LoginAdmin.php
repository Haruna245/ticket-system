
<?php 

include 'connect.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = md5($password);

    $sql = "SELECT * FROM user where Email='$email' and Password='$hashed_password' and admin='1' ";
    $result = mysqli_query($con,$sql);

    if($result){
        while ($row = mysqli_fetch_assoc($result) > 0) {
            //echo "login Successful";
            header('Location: EventAdminPage.php');
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
<body>

    
    <div>

        <div class="d-flex justify-content-center align-items-center " style="height:70vh">
            
            
            <div class="shadow w-30 rounded p-5">
    
                <form action="" method="post">
                <div><h1>Login</h1></div>
                <div>
                    <label for="email">email:</label>
                <input type="text" class="form-control w-100" name="email"> 
                <label for="password">password:</label> 
                <input type="password" class="form-control" name="password"> <br>
                <div class="w-100">
                <input type="submit" value="submit" class="btn btn-primary mt-1 form-control" name="submit">
                </div>
                
                </div>
                    
                </form>
            </div>
        </div>
    </div>


</body>
</html>