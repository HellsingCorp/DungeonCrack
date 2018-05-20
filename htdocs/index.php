<?php
/**
 * Created by GuiltyCode
 * Date: 5/19/2018
 * Time: 4:45 AM
 */

session_start();
include_once 'header.php';
?>

    <head>
        <title>DungeonCrack</title>
        <meta charset = "UTF-8"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
        <script src="/floatbox_752/floatbox.js"></script>
    </head>

<?php
if (isset($_SESSION['u_id'])) {

    echo '<section class="main-container" >
<div align="center">
        <a href="main.php" class="floatbox" data-fb-options="instanceName:game autoFit:true enableDragResize:false enableDragMove:false width:100% height:100% showClose:false overlayOpacity:0 closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start(\'game\'); "><img src="/img/play1.png"/></a>

        <script>
            var toon = fb.getInstance( \'game\' );
        </script>
</div>
    </section>';
}
?>






