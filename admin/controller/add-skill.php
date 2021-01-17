<?php
require( '/xampp/htdocs/btl/config.php');
    $name=$_POST['name'];
    $level=$_POST['level'];
    
    if(!empty($name)&&!empty($level)){
    $sql="insert into  kynang(name,level) values ('$name','$level')";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('0');
    }}else{
        die('Chưa nhập thông tin');
    }