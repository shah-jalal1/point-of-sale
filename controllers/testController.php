<?php


include "connection.php";

if (isset($_POST['saveSale'])) {

    $newClient = $_POST['newClient'];
    $newDocumentId = $_POST['newDocumentId'];
    $newEmail = $_POST['newEmail'];
    $newPhone = $_POST['newPhone'];
    $newAddress = $_POST['newAddress'];
    $newBithDate = $_POST['newBithDate'];

    $query = "INSERT INTO `clients`(`name`, `document`, `email`, `phe`, `address`) VALUES('$newClient','$newDocumentId', '$newEmail', '$newPhone', '$newAddress')";
    $result = mysqli_query($conn, $query);

    if ($result) {

        ?>

        <script>

            swal({title: "Clien add Successfully",
                icon: "success"}).then(function(){
                    javascript:history.go(-1)
                }
            );


        </script>

        <?php

    }
    else {
        ?>

        <script>
            swal({
                title: "Client Add Category",
                icon: "error",
            });
        </script>

        <?php
    }

}

?>

