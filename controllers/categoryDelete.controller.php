<?php
require_once "../connection.php";
if (isset($_GET['category_delete'])) {
    $id = base64_decode($_GET['category_delete']);

    $query = "DELETE FROM `category` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    header("location: ../categories.php");


}
?>