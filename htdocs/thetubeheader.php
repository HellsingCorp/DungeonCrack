<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
?>


<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>Super Awesome Title!</title>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <nav>
        <div class="tube-wrapper">
            <?php
            if (isset($_SESSION['u_id']))
            {
                echo "whatch your favorite YouTube Videos in here";
                echo $_SESSION['u_email'];
            }
            ?>
        </div>
    </nav>
</header>
</body>

