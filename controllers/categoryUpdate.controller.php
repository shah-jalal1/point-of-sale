<?php

    if (isset($_POST['editCategory'])) {

        include 'connection.php';

        $id = $_POST['id'];
        $category = $_POST['newCategoryName'];

        $query= "UPDATE `category` SET `category`= '$category' WHERE `id`='$id'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            ?>

            <script>

                // swal({
                //     title: "Add User Successfully",
                //     icon: "success",
                // });


                swal({title: "Update Category Successfully",
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
                    title: "Can't Update Category",
                    icon: "error",
                });
            </script>

            <?php
        }

    }

?>

