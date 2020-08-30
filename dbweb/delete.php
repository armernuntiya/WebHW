<?php

session_start();
$delete_ID  = $_SESSION['userid'];
$delete_Subject  = $_GET['Subject'];
$delete_Mission  = $_GET['Mission'];


require('connect.php');

$sql = "DELETE FROM homework WHERE UserID = '$delete_ID' AND Subject = '$delete_Subject' AND Mission = '$delete_Mission' ";

mysqli_query($conn, $sql);

header('location: Index.php');



?>
