<?php
require_once "../connection.php";
if (isset($_GET['client_delete'])) {
    $id = base64_decode($_GET['client_delete']);

    $query = "DELETE FROM `clients` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    header("location: ../clients.php");


}
?>