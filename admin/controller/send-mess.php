<?php
require( '/xampp/htdocs/BTL/config.php');
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $sub=$_POST['subject'];
    $mess=$_POST['message'];

    if(!empty($email)&&!empty($name)&&!empty($sub)&&!empty($mess)){
        $sql="Insert into lienhe(name,email,subject,message) values ('$name','$email','$sub','$mess')";
        if(mysqli_query($conn,$sql)){
            die('1');
        }
        else{
            die('0');
        }
    }
    else{
        die('Error');
    }
    
}
?>