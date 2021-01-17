<?php
require('/xampp/htdocs/btl/config.php');
$date = $_POST['date'];
$education = $_POST['education'];
$id = $_POST['id'];

if (!empty($date) && !empty($education)) {
    $sql = "update hocvan set date='$date',text='$education' where id='$id'";
    if (mysqli_query($conn, $sql)) {
        die('1');
    } else {
        die('0');
    }
} else {
    die('Chưa nhập thông tin');
}
