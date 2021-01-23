<?php

if (isset($_POST['updatetUser'])) {

    include "connection.php";

    $id = $_POST['id'];
    $name = $_POST['editName'];
    $user = $_POST['editUser'];
    $password = $_POST['editPassword'];
    $editPassword = password_hash($password, PASSWORD_DEFAULT);    // Encoding

    $profile = $_POST['editProfile'];
    $picture = $_POST['editPicture'];



    $route = $_POST["currentPicture"];

    if (isset($_FILES["editPicture"]["tmp_name"])  && !empty($_FILES["editPicture"]["tmp_name"])) {
        list($width, $height) = getimagesize($_FILES["editPicture"]["tmp_name"]);

        $newHeight = 500;
        $newWidth = 500;

        $directori = "dist/img/users/" . $_POST["editUser"];

        $current_directori = "dist/img/users/" . $_POST["currentPicture"];

        if(!empty("dist/img/users/")) {
//            unlink($_POST['currentPicture']);
            unlink("dist/img/users/" . $_POST["currentPicture"]);

        }


        else{
            mkdir($directori, 0755);
        }



        if ($_FILES["editPicture"]["type"] == "image/jpeg") {

            $random = mt_rand(100, 999);

            $route = "dist/img/users/" . $_POST["editUser"]. "/" . $random . ".jpg";

            $origin = imagecreatefromjpeg($_FILES["editPicture"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagejpeg($destiny, $route);

        }

        if ($_FILES["editPicture"]["type"] == "image/png") {

            $random = mt_rand(100, 999);

            $route = "dist/img/users/" . $_POST["editUser"]. "/" . $random . ".png";    // Image is here

            $origin = imagecreatefrompng($_FILES["editPicture"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagepng($destiny, $route);

        }
    }

    $query= "UPDATE `users` SET `name`= '$name',`user`='$user',`password`='$editPassword', `profile`='$profile', `picture`='$route' WHERE `id`='$id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        ?>

        <script>

            // swal({
            //     title: "Add User Successfully",
            //     icon: "success",
            // });


            swal({title: "Update User Successfully",
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
                title: "Can't Update User",
                icon: "error",
            });
        </script>

        <?php
    }

}


?>
