<?php
require('/xampp/htdocs/btl/config.php');
$date = $_POST['date'];
$experience = $_POST['experience'];

if (!empty($date) && !empty($experience)) {
    $sql = "insert into kinhnghiem (date,experience) values ('$date','$experience')";
    if (mysqli_query($conn, $sql)) {
        die('1');
    } else {
        die('0');
    }
} else {
    die('Chưa điền thông tin!');
}
