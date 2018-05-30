<?php
/**
 * Created by PhpStorm.
 * User: GuiltyCode
 * Date: 5/30/2018
 * Time: 6:25 AM
 */


<a href="main.php" class="floatbox" data-fb-options="instanceName:game autoFit:true
        enableDragResize:false enableDragMove:false width:100% height:100% showClose:false overlayOpacity:0
        closeOnNewWindow:false outsideClickCloses:false contentClickCloses:false" onclick="fb.start('game'); ">
            <img src="/img/play1.png"/></a>

        <script>
            var toon = fb.getInstance( 'game' );
        </script>