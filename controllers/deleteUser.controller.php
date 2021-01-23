<?php
require_once "../connection.php";
if (isset($_GET['user_delete'])) {
    $id = base64_decode($_GET['user_delete']);

    $query = "DELETE FROM `users` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    header("location: ../users.php");
//    if ($result){
//
//        ?>
<!--        <script>-->
<!---->
<!--            swal({title: "Delete User Successfully",-->
<!--                icon: "success"}).then(function(){-->
<!--                    javascript:history.go(-1)-->
<!--                }-->
<!--            );-->
<!---->
<!--        </script>-->
<!---->
<!--        --><?php
//
//    } else{
//
//
//        ?>
<!---->
<!--        <script>-->
<!--            swal({-->
<!--                title: "Can't Delete User",-->
<!--                icon: "error",-->
<!--            });-->
<!--        </script>-->
<!---->
<!--        --><?php
//
//    }

}
?>