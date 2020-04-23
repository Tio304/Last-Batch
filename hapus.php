<?php
// include database connection file
include_once("index.php");

// Get id from URL to delete that user
$id = $_GET[''];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM pasien WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>