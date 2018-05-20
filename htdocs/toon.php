<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
include_once 'cdbh.inc.php';
include_once 'dbh.inc.php';
session_start();

?>

                <?php
//Error handlers
//Check if inputs are empty
if (empty($uid)) {
    echo 'you dont exsist yet!';
    exit();
} else {
                    include 'dbh.inc.php';
                    include 'cdbh.inc.php';
                $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                $result1 = $conn;
                $resultCheck = mysqli_num_rows($result1);
                $sql = "SELECT * FROM characters WHERE user_uid='$uid'";
                $result2 = $cdbh;
                $resultCheck2 = mysqli_num_rows($result2);
                if ($resultCheck1 = $resultCheck2) {
                   echo $_SESSION['F_Name'] = $row['char_name_first'];
                   echo $_SESSION['L_Name'] = $row['char_name_last'];
                   echo $_SESSION['str'] = $row['char_str'];
                   echo $_SESSION['end'] = $row['char_end'];
                   echo $_SESSION['agi'] = $row['char_agi'];
                   echo $_SESSION['dex'] = $row['char_dex'];
                   echo $_SESSION['tec'] = $row['char_tec'];
                   echo $_SESSION['int'] = $row['char_int'];
                   echo $_SESSION['wil'] = $row['char_wil'];
                   echo $_SESSION['per'] = $row['char_per'];
                   echo $_SESSION['cha'] = $row['char_cha'];
                   echo $_SESSION['mag'] = $row['char_mag'];
                    exit();
                } else {

                }
                }
                ?>