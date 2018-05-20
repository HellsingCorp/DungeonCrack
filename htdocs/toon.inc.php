<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "werty123";
$dbName = "character";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



$_SESSION['u_id'] = $row['uid'];
$_SESSION['u_toon'] = $row['character'];
$_SESSION['u_lvl'] = $row['lvl'];


$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$character = mysqli_real_escape_string($conn, $_POST['character']);
$lvl = mysqli_real_escape_string($conn, $_POST['lvl']);

?>


