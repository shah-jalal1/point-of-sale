<?php

include "connection.php";

if (isset($_POST['saveProducts'])) {

    $productDescription = $_POST['productDescription'];
    $productCode = $_POST['productCode'];
    $productCategory = $_POST['productCategory'];


    $productStock = $_POST['productStock'];
    $buyingPrice = $_POST['buyingPrice'];
    $sellingPrice = $_POST['sellingPrice'];

    $route = "";

    if (isset($_FILES["newImage"]["tmp_name"])) {
        list($width, $height) = getimagesize($_FILES["newImage"]["tmp_name"]);

        $newHeight = 500;
        $newWidth = 500;

        $directori = "dist/img/products/" . $_POST['productCode'];


        if (!file_exists($directori)) {
            mkdir($directori, 0755);
        }

        if ($_FILES["newImage"]["type"] == "image/jpeg") {

            $random = mt_rand(100, 999);

            $route = "dist/img/products/" . $_POST['productCode']. "/" . $random . ".jpg";

            $origin = imagecreatefromjpeg($_FILES["newImage"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagejpeg($destiny, $route);

        }

        if ($_FILES["newImage"]["type"] == "image/png") {

            $random = mt_rand(100, 999);

            $route = "dist/img/products/" . $_POST['productCode']. "/" . $random . ".png";    // Image is here

            $origin = imagecreatefrompng($_FILES["newImage"]["tmp_name"]);

            $destiny = imagecreatetruecolor($newWidth, $newHeight);

            imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $height, $width);

            imagepng($destiny, $route);

        }
    }


    $query = "INSERT INTO `products`(`id_category`, `code`, `description`,  `stock`, `buying_price`, `selling_price`, `image`) 
              VALUES ('$productCategory', '$productCode', '$productDescription', '$productStock', '$buyingPrice', '$sellingPrice', '$route')";
    $result = mysqli_query($conn, $query);

    if ($result) {

        ?>

        <script>

            swal({title: "Product add Successfully",
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
                title: "Can't Add Product",
                icon: "error",
            });
        </script>

        <?php
    }

}

?>