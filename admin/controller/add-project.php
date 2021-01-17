<?php
require( '/xampp/htdocs/btl/config.php');
    $name=$_POST['name'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $role=$_POST['role'];

    $sql="insert into duan (name,description,location,role) values ('$name','$description','$location','$role')";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('Error');
    }