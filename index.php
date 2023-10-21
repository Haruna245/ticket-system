<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome page</title>
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex" style="height:100vh">
        <div class="" style="width:65%;" >
            <div class=" m-5 " >

                <p style="margin-top: 30%;font-size: 70px;font-weight:bold">
                    Welcome to the <br> Smart ticketing system 
                </p>
                <small class="mt-1">Book your tickets for all upcoming event at an affordable price</small>
                <div class="d-flex mt-4">
                    <!-- <a href="Login.php" class="btn btn-light btn-outline-dark" style="width: 10%;">Login</a> -->
                    <button type="button" class="btn btn-light btn-outline-dark " data-bs-toggle="modal" style="width: 10%;" data-bs-target="#exampleModal1">
                    Login
                        </button>
                    <!-- <a href="SignupUsers.php" class="btn btn-dark ms-2" style="width: 20%;">Signup</a> -->
                    <button type="button" class="btn btn-dark ms-2" data-bs-toggle="modal" style="width: 20%;" data-bs-target="#exampleModal">
                        Signup
                        </button>
                </div>
            </div>
    
            <!-- login Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">login Options</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center">
       <a href="Login.php" class="btn btn-primary" >login as user</a>
       <a href="LoginAdmin.php" class="btn btn-dark ms-2" >login as organizer</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Signup Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Signup Options</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center">
       <a href="SignupUsers.php" class="btn btn-primary" >Signup as user</a>
       <a href="SignupAdmin.php" class="btn btn-dark ms-2" >Signup as organizer</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="" style="height:100%">
            <img src="./assets/images/tickets.jpg" style="width: 100%;height:100%" alt="">
        </div>
    </div>

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html