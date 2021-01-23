<?php

if (isset($_POST['updateProduct'])) {

    include "connection.php";

    $id = $_POST['id'];
    $editProductDesc = $_POST['editProductDesc'];
    $editProductCode = $_POST['editProductCode'];
    $editProductStock = $_POST['editProductStock'];
    $editProductCategory = $_POST['editProductCategory'];
    $editSellingPrice = $_POST['editSellingPrice'];
    $editBuyingPrice = $_POST['editBuyingPrice'];

    $picture = $_POST['newPicture'];



    $route = $_POST["currentPicture"];

    if (isset($_FILES["editPicture"]["tmp_name"])  && !empty($_FILES["editPicture"]["tmp_name"])) {
        list($width, $height) = getimagesize($_FILES["editPicture"]["tmp_name"]);

        $newHeight = 500;
        $newWidth = 500;

        $directori = "dist/img/products/" . $_POST["editProductCode"];

        $current_directori = "dist/img/products/" . $_POST["currentPicture"];

//        if(!empty($_POST['currentPicture'])) {
//            unlink($_POST['currentPicture']);
//        }


//        if(!empty($_POST["currentImage"]) && $_POST["currentImage"] != "views/img/products/default/anonymous.png"){

//            unlink($_POST["currentImage"]);
//
//        }else{
//
//            mkdir($folder, 0755);
//
//        }



        if(!empty($_POST['currentPicture'])) {
            unlink($_POST['currentPicture']);
        }

        else{
            mkdir($directori, 0755);
        }



        if ($_FILES["editPicture"]["type"] == "image/jpeg") {

            $random = mt_rand(100, 999);

            $route = "dist/img/products/" . $_POST['editProductCode']. "/" . $random . ".jpg";

            $origin = imagecreatefromjpeg($_FILES["editPicture"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagejpeg($destiny, $route);

        }

        if ($_FILES["editPicture"]["type"] == "image/png") {

            $random = mt_rand(100, 999);

            $route = "dist/img/products/" . $_POST['editProductCode']. "/" . $random . ".jpg";    // Image is here

            $origin = imagecreatefrompng($_FILES["editPicture"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagepng($destiny, $route);

        }
    }

    $query= "UPDATE `products` SET `id_category`='$editProductCategory',`code`='$editProductCode',`description`='$editProductDesc', `stock`='$editProductStock',`buying_price`='$editBuyingPrice',`selling_price`='$editSellingPrice',`image`='$route'  WHERE `id`='$id'";


    $result = mysqli_query($conn, $query);

    if ($result) {
        ?>

        <script>

            // swal({
            //     title: "Add User Successfully",
            //     icon: "success",
            // });


            swal({title: "Update Product Successfully",
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
                title: "Can't Update Product",
                icon: "error",
            });
        </script>

        <?php
    }

}


?>
