<?php
//session_start();
include 'connection.php';
//Define the query
$sql = "DELETE FROM movies WHERE m_id={$_GET['m_id']}";

if ($con->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    header("location:index.php");
} else {
    echo "Error deleting record: " . $con->error;
}

$con->close();
?>