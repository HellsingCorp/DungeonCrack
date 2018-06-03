<?php
/**
 * Created by GuiltyCode
 * Date: 5/19/2018
 * Time: 4:45 AM
 */
session_start();
?>

<head>
    <title>DungeonCrack</title>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
    <script src="/floatbox_752/floatbox.js"></script>
</head>



<?php
if($_POST) {
    require_once 'includes/dbh.inc.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass)
    or die ('Error connecting to mysql');
    mysqli_select_db($dbname);
    $query = sprintf("SELECT COUNT(id) FROM users WHERE UPPER(username) = UPPER('%s') AND password='%s'",
        mysqli_real_escape_string($conn, $username),
        mysqli_real_escape_string($conn,$password));
    $result = mysqli_query($conn, $query);
    list($count) = mysqli_fetch_row($result);
    if($count == 1) {
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
        header('Location:changepass.php');
    } else {
        $query = sprintf("SELECT COUNT(id) FROM users WHERE UPPER(username) = UPPER('%s') AND password='%s'",
            mysqli_real_escape_string($conn,$username),
            mysqli_real_escape_string($conn,$password));
        $result = mysqli_query($conn,$query);
        list($count) = mysqli_fetch_row($result);
        if($count == 1) {
            $_SESSION['authenticated'] = true;
            $_SESSION['username'] = $username;
            $query = sprintf("UPDATE users SET last_login = NOW() WHERE UPPER(username) = UPPER('%s') AND password = '%s'",
                mysqli_real_escape_string($conn,$username),
                mysqli_real_escape_string($conn,$password));
            mysqli_query($conn,$query);
            $query = sprintf("SELECT is_admin FROM users WHERE UPPER(username) = UPPER('%s') AND password='%s'",
                mysqli_real_escape_string($conn,$username),
                mysqli_real_escape_string($conn,$password));
            $result = mysqli_query($conn,$query);
            list($is_admin) = mysqli_fetch_row($result);
            if($is_admin == 1) {
                header('Location:admin.php');
            } else {
                header('Location:user.php');
            }
        } else {
            $error = 'There is no username/password combination like that in the database.';
        }
    }
}
?>

    <form method='post' action='includes/register.inc.php'>
        Character name: <input type='text' name='username' /><br />
        Password: <input type='password' name='password' /><br />
        Confirm Password: <input type='password' name='confirm' /><br />
        <input type='submit' value='Register!' />
    </form>

    <form action='includes/login.inc.php' method='post'>
        Username: <input type='text' name='username' /><br />
        Password: <input type='password' name='password' /><br />
        <input type='submit' value='Login' />
    </form>

<?php
	include_once 'footer.php';
?>