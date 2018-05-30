<?php
/**
 * Created by GuiltyCode
 * Date: 5/19/2018
 * Time: 4:45 AM
 */
session_start();
include_once 'includes/dbh.inc.php';
?>

<head>
    <title>DungeonCrack</title>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
    <script src="/floatbox_752/floatbox.js"></script>
</head>
<section class="main-container">





    <?php

    if (isset($_SESSION['u_id'])) {
        echo 'Welcome Back';
        echo 'Player';
    }
    else {echo '<form action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username/e-mail">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Login</button>
    </form>
    <a href="signup.php">Sign up</a>';}
    ?>

</section>

<?php
	include_once 'footer.php';
?>