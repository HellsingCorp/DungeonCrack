<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/charcrea.inc.php';
?>


<?php
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT user_id FROM users";

if ($result=mysqli_query($conn,$sql))
{
    // Fetch one and one row
    while ($row=mysqli_fetch_row($result))
    {
        printf ("%a (%a)\n",$row[1],$row[0]);
    }
    // Free result set
    mysqli_free_result($result);
}

mysqli_close($conn);
?>