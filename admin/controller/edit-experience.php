<?php
require( '/xampp/htdocs/btl/config.php');
    $date=$_POST['date'];
    $experience=$_POST['experience'];
    $id=$_POST['id'];
    
    if(!empty($date)&&!empty($experience)){
    $sql="update kinhnghiem set date='$date', experience='$experience' where id='$id'";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('0');
    }}else{
        die('Chưa nhập thông tin');
    }
