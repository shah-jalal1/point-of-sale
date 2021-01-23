<?php

    if (isset($_POST['editClient'])) {

        include 'connection.php';

        $id = $_POST['id'];
        $editClientName = $_POST['editClientName'];
        $editClientDocument = $_POST['editClientDocument'];
        $editClientEmail = $_POST['editClientEmail'];
        $editClientPhone = $_POST['editClientPhone'];
        $editClientAddress = $_POST['editClientAddress'];
        $editClientBirthDate = $_POST['editClientBirthDate'];


        $query= "UPDATE `clients` SET `name`='$editClientName',`document`='$editClientDocument',`email`='$editClientEmail',`phone`='$editClientPhone',`address`='$editClientAddress' WHERE  `id`='$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            ?>

            <script>

                // swal({
                //     title: "Add User Successfully",
                //     icon: "success",
                // });


                swal({title: "Update Client Successfully",
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
                    title: "Can't Update Client",
                    icon: "error",
                });
            </script>

            <?php
        }

    }

?>

