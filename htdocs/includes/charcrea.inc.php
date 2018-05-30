<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';
    include_once 'cdbh.inc.php';


    $uid = mysqli_real_escape_string($conn, $_POST['uid']);


    //Error handlers
    //check for empty fields
    if (empty($first) || (empty($last)) || (empty($str)) || (empty($end)) || (empty($agi)) || (empty($dex)) || (empty($tec)) || (empty($int)) || (empty($wil)) || (empty($per)) || (empty($cha)) || (empty($mag)) ) {
        header("Location: ../charcrea.php?charcrea=empty");
        exit();
    } else {
        //Check if input charactrers are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || (!preg_match("/^[a-zA-Z]*$/", $last)) ) {
            header("Location: ../charcrea.php?charcrea=invalid");
            exit();
        } else {
            //Check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../charcrea.php?charcrea=invalidemail");
                exit();
            } else {
                $sql = "SELECT * FROM characters WHERE user_uid='$uid'";
                mysqli_connect("127.0.0.1","root","werty", "game");
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    header("Location: ../charcrea.php?charcrea=NameNotUnique");
                    exit();
                } else {
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the character into the database
                    $sql = "INSERT INTO charactrers (user_id, char_first, char_last, str, end, agi, dex, tec, int, wil, per, cha, mag) VALUES ('$uid', '$last', '$str', '$end', '$agi', '$dex', '$tec', '$int', '$wil', '$per', '$cha', '$mag');";
                    mysqli_connect("127.0.0.1","root","werty", "game");
                    header("Location: ../charcrea.php?charcrea=Success!");
                    exit();
                }
            }
        }
    }

} else {
    header("Location: ../charcrea.php");
    exit();
}