<?php
session_start();
require_once("connection.php");

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($connect,"SELECT * FROM car_adminlogin WHERE username = '$username'");
    $cek = mysqli_num_rows($sql);

    if($cek > 0) {
        $data = mysqli_fetch_array($sql); 
        $passwordVerify = password_verify($password, $data['password']);
        if($passwordVerify) {
            $query = mysqli_query($connect, "SELECT * FROM car_adminlogin WHERE username = '$username'");
            $data = mysqli_fetch_array($query);
            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $username;
            ?>
                <script>
                    alert("Login Success!");
                    document.location = "index.php";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Wrong Password!");
                    document.location = "admin_login.php";
                </script>
            <?php
        }
    } else {
        ?>
            <script>
                alert("Wrong Username!");
                document.location = "admin_login.php";
            </script>
        <?php
    }
}
?>
