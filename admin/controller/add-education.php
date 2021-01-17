<?php
require( '/xampp/htdocs/btl/config.php');
    $date=$_POST['date'];
    $text=$_POST['text'];
    
    if(!empty($date)&&!empty($text)){
    $sql="insert into  hocvan(date,text) values ('$date','$text')";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('0');
    }}else{
        die('Chưa nhập thông tin');
    }