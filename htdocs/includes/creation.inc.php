<?php
/**
 * Created by GuiltyCode
 * Date: 5/31/2018
 * Time: 12:29 PM
 */




if($_POST) {
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    if($password != $confirm) {
        <span style='color:red'>Error: Passwords do not match!</span>
    	}
}

$conn = mysqli_connect($dbhost,$dbuser,$dbpass)
or die ('Error connecting to mysql');
mysqli_select_db($dbname);

$query = sprintf("SELECT COUNT(id) FROM users WHERE UPPER(username) = UPPER('%s')",
    mysqli_real_escape_string($_POST['username']));


?>

