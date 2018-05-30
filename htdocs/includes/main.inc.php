<?php
/**
 * Created by PhpStorm.
 * User: GuiltyCode
 * Date: 5/21/2018
 * Time: 9:04 AM
 */

include 'dbh.inc.php';



if (isset($_SESSION['u_id'])) {



    $sql = "SELECT * FROM chatacters WHERE user_id='$cuid'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 1) {include 'charcrea.php';};
}
else
    {
        echo 'Welcome Back';
        echo 'Player';

}

?>