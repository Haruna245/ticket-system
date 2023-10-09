<?php

$con = new mysqli('localhost','root','','ticketingsystem');
if(!$con){
    die(mysqli_error($con));
}
?>