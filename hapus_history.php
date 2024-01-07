<?php
include "connection.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = mysqli_query($connect, "DELETE FROM history WHERE id = '$id'");
    if($hapus) {
        ?>
            <script>
                alert('success to delete!');
                document.location = "info.php";
            </script>
        <?php
    } else {
        ?>
            <script>
                alert('Failed to delete!');
                document.location = "info.php";
            </script>
        <?php
    }
}