<?php
require( '/xampp/htdocs/btl/config.php');
    $id=$_GET['id'];

    $sql="delete from hocvan where id='$id'";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('0');
    }