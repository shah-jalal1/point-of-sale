<?php

require_once "../connection.php";

$id = base64_decode($_GET['id']);
$query = "UPDATE users SET status = '1' WHERE id = '$id'";
mysqli_query($conn, $query);
header('location: ../users.php');

?>