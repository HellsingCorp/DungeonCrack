<?php
session_start();
if($_POST) {
    require_once 'dbh.inc.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass)
    or die ('Error connecting to mysql');
    mysqli_select_db($dbname);
    $query = sprintf("SELECT COUNT(id) FROM users WHERE UPPER(username) = UPPER('%s') AND password='%s'",
        mysqli_real_escape_string($username),
        mysqli_real_escape_string(md5($password)));
    $result = mysqli_query($query);
    list($count) = mysqli_fetch_row($result);
    if($count == 1) {
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
        $query = sprintf("UPDATE users SET last_login = NOW() WHERE UPPER(username) = UPPER('%s') AND password = '%s'",
            mysqli_real_escape_string($username),
            mysqli_real_escape_string(md5($password)));
        mysqli_query($query);
        $query = sprintf("SELECT is_admin FROM users WHERE UPPER(username) = UPPER('%s') AND password='%s'",
            mysqli_real_escape_string($username),
            mysqli_real_escape_string(md5($password)));
        $result = mysqli_query($query);
        list($is_admin) = mysqli_fetch_row($result);
        if($is_admin == 1) {
            header('Location:admin.php');
        } else {
            header('Location:index.php');
        }
    } else {	?>
        <span style='color:red'>Error: that username and password combination does not match any currently within our database.</span>
    <?php	}
}
?>