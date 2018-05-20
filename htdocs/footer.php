<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
    <meta charset = "UTF-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
    <script src="/floatbox_752/floatbox.js"></script>
</head>
<body>




<footer>
<dev id="footer">

    <a href="play.php" class="floatbox" data-fb-options="instanceName:play overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('play'); ">
        Play</a>
    <script>
        var play = fb.getInstance( 'play' );
    </script>

    <a href="toon.php" class="floatbox" data-fb-options="instanceName:toon overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('toon'); ">
        Character</a>

    <script>
        var toon = fb.getInstance( 'toon' );
    </script>

    <a href="thetube.php" class="floatbox" data-fb-options="instanceName:tube overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('tube'); ">
        thetube</a>

    <script>
        var toon = fb.getInstance( 'tube' );
    </script>
   </dev>
</footer>
</body>