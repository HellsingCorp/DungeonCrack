<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
include_once 'includes/cdbh.inc.php';

?>

                <?php

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($cdbh,"SELECT * FROM characters");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['char_name_first'] . "</td>";
echo "<td>" . $row['char_name_last'] . "</td>";
echo "</tr>";
}
echo "</table>";

                ?>
<br>
<br>
<br>
<BR>
<?php

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($cdbh,"SELECT * FROM characters");

echo "<table border='1'>
<tr>
<th>Strength</th>
<th>Endurance</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['char_str'] . "</td>";
    echo "<td>" . $row['char_end'] . "</td>";

    echo "</tr>";
}
echo "</table>";

?>

<?php

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($cdbh,"SELECT * FROM characters");

echo "<table border='1'>
<tr>
<th>Agility</th>
<th>Dexterity</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['char_agi'] . "</td>";
    echo "<td>" . $row['char_dex'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<?php

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($cdbh,"SELECT * FROM characters");

echo "<table border='1'>
<tr>
<th>Technical</th>
<th>Intelligence</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['char_tec'] . "</td>";
    echo "<td>" . $row['char_int'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<?php

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($cdbh,"SELECT * FROM characters");

echo "<table border='1'>
<tr>
<th>Willpower</th>
<th>Perception</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['char_wil'] . "</td>";
    echo "<td>" . $row['char_per'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<?php

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($cdbh,"SELECT * FROM characters");

echo "<table border='1'>
<tr>
<th>Charisma</th>
<th>Magical</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['char_cha'] . "</td>";
    echo "<td>" . $row['char_mag'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>