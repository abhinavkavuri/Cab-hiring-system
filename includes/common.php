<?php
$con = mysqli_connect("localhost", "root", "tiger", "cab_hiring")or die($mysqli_error($con));
mysqli_select_db($con,'cab_hiring');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
