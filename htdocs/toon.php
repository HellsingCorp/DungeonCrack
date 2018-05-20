<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
include_once 'cdbh.inc.php';
include_once 'dbh.inc.php';
session_start();
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>Super Awesome Title!</title>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
    <script src="/floatbox_752/floatbox.js"></script>
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="main.php">Home</a></li>
            </ul>
            <div class="nav-login">
                <?php
                if (isset($_SESSION['u_id'])) {
                $sql = "SELECT * FROM characters WHERE user_uid='$uid'";
                $result = $toon;
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > null) {
                    echo '';
                    exit();
                }
                }
                ?>
            </div>
            <div class="nav-uname">
                <?php
                if (isset($_SESSION['u_id']))
                {
                    echo "---Logged in to---";
                    echo $_SESSION['u_email'];
                }
                ?>
            </div>
        </div>
    </nav>
</header>
</body>




$sql = "SELECT * FROM users WHERE user_uid='$uid'";
$result = $conn;
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
header("Location: ../signup.php?signup=NameNotUnique");
exit();