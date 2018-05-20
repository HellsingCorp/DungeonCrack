<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "werty123";
$dbName = "game";

$toon = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



$_SESSION['uid'] = $row['user_id'];
$_SESSION['F_Name'] = $row['char_name_first'];
$_SESSION['L_Name'] = $row['char_name_last'];
$_SESSION['str'] = $row['char_str'];
$_SESSION['end'] = $row['char_end'];
$_SESSION['agi'] = $row['char_agi'];
$_SESSION['dex'] = $row['char_dex'];
$_SESSION['tec'] = $row['char_tec'];
$_SESSION['int'] = $row['char_int'];
$_SESSION['wil'] = $row['char_wil'];
$_SESSION['per'] = $row['char_per'];
$_SESSION['cha'] = $row['char_cha'];
$_SESSION['mag'] = $row['char_mag'];

$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$FName = mysqli_real_escape_string($conn, $_POST['F_Name']);
$LName = mysqli_real_escape_string($conn, $_POST['L_Name']);
$str = mysqli_real_escape_string($conn, $_POST['str']);
$end = mysqli_real_escape_string($conn, $_POST['end']);
$agi = mysqli_real_escape_string($conn, $_POST['agi']);
$dex = mysqli_real_escape_string($conn, $_POST['dex']);
$tec = mysqli_real_escape_string($conn, $_POST['tec']);
$int = mysqli_real_escape_string($conn, $_POST['int']);
$wil = mysqli_real_escape_string($conn, $_POST['wil']);
$per = mysqli_real_escape_string($conn, $_POST['per']);
$cha = mysqli_real_escape_string($conn, $_POST['cha']);
$mag = mysqli_real_escape_string($conn, $_POST['mag']);

?>


