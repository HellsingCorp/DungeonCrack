<?php

/**
 * Created by GuiltyCode
 * Date: 5/19/2018
 * Time: 1:57 AM
 */

session_start();
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
    <title>DungeonCrack</title>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
    <script src="/floatbox_752/floatbox.js"></script>
</head>
<body>
<header>
    <nav>
        <input type="button" id="clicker" value="get ajax" />
        <div id="contents"></div> <p>last update at:
            <span id="time"></span></p>

        <script>s
            function updateTime () {
                fb.setInnerHTML( 'time', new Date().toTimeString() );
            }

                function clickHandler () {
                fb.ajax({
                    source: 'play.php',
                    $: 'contents',
                    success: updateTime
                } );
            }
            fb.addEvent( '#clicker', 'click', clickHandler );
        </script>

    </nav>
</header>