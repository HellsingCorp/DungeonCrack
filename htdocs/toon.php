<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
include_once 'toon.inc.php';
session_start();
?>

<head>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<div class="nav-uname">
    <?php
    if (isset($_SESSION['u_id']))
    {
        echo "---Logged in to---";
        echo $_SESSION['u_email'];
    }


    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
    $result = $conn;
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
    echo $_SESSION['u_character'];
    exit();






    ?>
</div>

</section>







