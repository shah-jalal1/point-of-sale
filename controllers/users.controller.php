<?php

//<!--====================================================================================================-->
//            <!--                                        Add User          --
//--==================================================================================================== -->


if (isset($_POST['saveUser'])) {

    include "connection.php";

    $newName = $_POST['newName'];
    $newUser = $_POST['newUser'];
    $newProfile = $_POST['newProfile'];

    $newPassword = $_POST['newPassword'];
//    $newPassword = crypt($newPassword, '$2a$07$usesomesillystringforsalt$');
//    $newPassword = base64_encode($newPassword);
    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);    // Encoding


    $route = "";

    if (isset($_FILES["newPicture"]["tmp_name"])) {
        list($width, $height) = getimagesize($_FILES["newPicture"]["tmp_name"]);

        $newHeight = 500;
        $newWidth = 500;

        $directori = "dist/img/users/" . $_POST["newUser"];




        if (!file_exists($directori)) {
            mkdir($directori, 0755, true);
        }

        if ($_FILES["newPicture"]["type"] == "image/jpeg") {

            $random = mt_rand(100, 999);

            $route = "dist/img/users/" . $_POST["newUser"]. "/" . $random . ".jpg";

            $origin = imagecreatefromjpeg($_FILES["newPicture"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagejpeg($destiny, $route);

        }

        if ($_FILES["newPicture"]["type"] == "image/png") {

            $random = mt_rand(100, 999);

            $route = "dist/img/users/" . $_POST["newUser"]. "/" . $random . ".png";    // Image is here

            $origin = imagecreatefrompng($_FILES["newPicture"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagepng($destiny, $route);

        }
    }





    $query = "INSERT INTO `users`(`name`, `user`, `password`, `profile`, `picture`) VALUES('$newName', '$newUser', '$newPassword', '$newProfile', '$route')";

    $result = mysqli_query($conn, $query);

    if ($result) {

        ?>

        <script>

            // swal({
            //     title: "Add User Successfully",
            //     icon: "success",
            // });

            swal({title: "Create User Successfully",
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
                title: "Can't Add User",
                icon: "error",
            });
        </script>

        <?php
    }

}


//<!--====================================================================================================-->
//            <!--                                        Update User          --
//--==================================================================================================== -->
//





?>
