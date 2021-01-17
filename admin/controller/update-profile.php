<?php
require( '/xampp/htdocs/btl/config.php');
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $job=$_POST['job'];

    $sql="Update thongtincanhan set address='$city', age='$age',phone='$phone',email='$email',job='$job' ";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('Error');
    }