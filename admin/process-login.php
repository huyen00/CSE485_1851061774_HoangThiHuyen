<?php
require('../config.php');
session_start();
if (isset($_POST['login'])) 
{
    
    $email = $_POST['email'];
    if (empty($email)) {
        $errors[] = 'You forgot to enter your email address!';
    }
    $password = $_POST['pass'];
    if (empty($password)) {
        $errors[] = 'You forgot to enter your password!';
    }

    if (empty($errors)) {
        $sql = "SELECT email,password FROM thongtincanhan WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
        if (mysqli_num_rows($result) == 1) {
           
            if (password_verify($password, $row[1])) {
                $_SESSION['email'] = $row[0];
                header('Location: index.php');
                
            }
            else {
                $errors[] = 'E-mail / Password is incorrect! ';
            }
            }
            else {
                $errors[] = 'E-mail / Password is incorrect! ';
            }
        } else {
            $errors[] = 'E-mail / Password is incorrect!';
        }
        if (!empty($errors)) {
            $errorstring = 'Error! ';
            foreach ($errors as $msg) {
                $errorstring = $errorstring .$msg.'';
            }
            $errorstring .= 'Try again';
            echo "    <div class='alert alert-primary' role='alert'>
                        <strong>$errorstring</strong> 
                        </div>";
        }
    }

