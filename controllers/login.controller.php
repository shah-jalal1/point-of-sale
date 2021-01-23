<?php


session_start();
if (isset($_SESSION['librarian_login'])) {
    header('location: index.php');
}

if (isset($_POST['login'])) {
    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['user']) &&                    //alpha numeric sign. dont allow sql injection
        preg_match('/^[a-zA-Z0-9]+$/', $_POST['user'])) {

        require_once "connection.php";

        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE `user` = '$user';";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

//            if ($row['password'] == $password) {
            if (password_verify($password, $row['password'])) {       // Password decoding

                if ($row['status'] == 1) {

                        $_SESSION['user'] = $user;
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['profile'] = $row['profile'];
                        $_SESSION['picture'] = $row['picture'];
                        $_SESSION['beginSession'] = "ok";



//                          echo '<script>
//                              window.location = "start";
//                          </script>';

                        header('location: home.php');
                }  else {
                    echo '<br><div class="alert alert-danger">User is Not Activated</div>';
                }
            } else {
                    echo '<br><div class="alert alert-danger">Password Error</div>';
            }
            } else {
                echo '<br><div class="alert alert-danger">User name Error</div>';
            }

    }
}


?>




