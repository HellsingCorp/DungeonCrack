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

    <a href="Stats.php" class="floatbox" data-fb-options="instanceName:stats overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('stats'); ">
        Stats</a>
    <script>
        var play = fb.getInstance( 'stats' );
    </script>

    <a href="toon.php" class="floatbox" data-fb-options="instanceName:toon overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('toon'); ">
        Character</a>

    <script>
        var toon = fb.getInstance( 'toon' );
    </script>

    <a href="charcreate.php" class="floatbox" data-fb-options="instanceName:charcrea overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('charcreate'); ">
        charcreate</a>

    <script>
        var toon = fb.getInstance( 'charcreate' );
    </script>

    <a href="thetube.php" class="floatbox" data-fb-options="instanceName:tube overlayOpacity:0
    closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('tube'); ">
        thetube</a>

    <script>
        var toon = fb.getInstance( 'tube' );
    </script>
   </dev>

    <form action="includes/logout.inc.php" method="POST">
        <button type="submit" name="submit">Logout</button>
    </form>

</footer>
</body>





