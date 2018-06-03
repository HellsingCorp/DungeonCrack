<?php

include 'dbh.inc.php';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

function getStatDRY($type,$statName,$trackingID) {
	createIfNotExistsDRY($type,$statName,$trackingID);
	$query = sprintf("SELECT value FROM entity_stats WHERE stat_id = (SELECT id FROM stats WHERE display_name = '%s' OR short_name = '%s') AND entity_id = '%s' AND entity_type = '%s'",
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$trackingID),
		mysqli_real_escape_string($conn,$type));
	$result = mysqli_query($conn,$query);
	list($value) = mysqli_fetch_row($result);
	return $value;		
}

function setStatDRY($type,$statName,$trackingID,$value) {
	createIfNotExistsDRY($type,$statName,$trackingID);
	$query = sprintf("UPDATE entity_stats SET value = '%s' WHERE stat_id = (SELECT id FROM stats WHERE display_name = '%s' OR short_name = '%s') AND entity_id = '%s' AND entity_type = '%s'",
		mysqli_real_escape_string($conn,$value),
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$trackingID),
		mysqli_real_escape_string($conn,$type));
	$result = mysqli_query($conn,$query);
}

function createIfNotExistsDRY($type,$statName,$trackingID) {
	$query = sprintf("SELECT count(value) FROM entity_stats WHERE stat_id = (SELECT id FROM stats WHERE display_name = '%s' OR short_name = '%s') AND entity_id = '%s' AND entity_type ='%s'",
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$trackingID),
		mysqli_real_escape_string($conn,$type));
	$result = mysqli_query($conn,$query);
	list($count) = mysqli_fetch_row($result);
	if($count == 0) {
		// the stat doesn't exist; insert it into the database
		$query = sprintf("INSERT INTO entity_stats(stat_id,entity_id,value,entity_type) VALUES ((SELECT id FROM stats WHERE display_name = '%s' OR short_name = '%s'),'%s','%s','%s')",
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$statName),
		mysqli_real_escape_string($conn,$trackingID),
		'0',
		mysqli_real_escape_string($conn,$type));
		mysqli_query($conn,$query);
	}	
}

?>