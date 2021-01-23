<?php

    include "connection.php";

    if (isset($_POST['saveCategory'])) {

        $category = $_POST['newCategory'];

        $query = "INSERT INTO `category`(`category`) VALUES ('$category')";
        $result = mysqli_query($conn, $query);

        if ($result) {

            ?>

            <script>

                swal({title: "Category add Successfully",
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
                    title: "Can't Add Category",
                    icon: "error",
                });
            </script>

            <?php
        }

    }

?>