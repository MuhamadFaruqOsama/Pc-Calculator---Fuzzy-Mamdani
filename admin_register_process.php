<?php
session_start();
include "connection.php";

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $query = mysqli_query($connect, "SELECT * FROM car_adminlogin WHERE username = '$username'");
    $cek = mysqli_num_rows($query);
    if($cek > 0) {
        ?>
            <script>
                alert("Username already used!");
                document.location = "admin_register.php";
            </script>
        <?php
    } else {
        if($password == $password2) {
            $newPassword = password_hash($password, PASSWORD_DEFAULT);
            $input = mysqli_query($connect, "INSERT INTO car_adminlogin (username, password) VALUES ('$username','$newPassword')");
            if($input) {
                $query = mysqli_query($connect, "SELECT * FROM car_adminlogin WHERE username = '$username'");
                $data = mysqli_fetch_array($query);
                $_SESSION['login'] = true;
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $username;
                ?>
                    <script>
                        alert("Register Success!");
                        document.location = "index.php";
                    </script>
                <?php
            }
        } else {
            ?>
                <script>
                    alert("Confirmation Password does'nt match!");
                    document.location = "admin_register.php";
                </script>
            <?php
        }
    }
}
