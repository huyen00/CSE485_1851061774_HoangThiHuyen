<?php
require( '/xampp/htdocs/btl/config.php');
    $name=$_POST['name'];
    $level=$_POST['level'];
    $id=$_POST['id'];
    
    if(!empty($name)&&!empty($level)){
    $sql="update kynang set name='$name', level='$level' where id='$id'";
    if(mysqli_query($conn,$sql)){
        die('1');
    }
    else
    {
        die('0');
    }}else{
        die('Chưa nhập thông tin');
    }
