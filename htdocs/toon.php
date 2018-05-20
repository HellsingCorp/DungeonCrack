<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
session_start();
?>

<head>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>


<section class="main-container">

    <?php
    if (isset($_SESSION['u_id'])) {
        echo "toon info at some time soon!";
    }
    ?>

</section>







