<?php
session_start();

if(!isset($_SESSION['login'])) {
    ?>
        <script>
            alert("It looks like you haven't logged in yet, please login first!");
            document.location = "admin_login.php";
        </script>
    <?php
} else {
    include "connection.php";
    if(isset($_POST['submit'])) {
        $id = $_SESSION['id'];
        $nama = $_POST['nama'];
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('l, d M Y - h:i:s A');
        $kondisi = $_POST['kondisi'];
        $detailKondisi = [
            'mobo' => $_POST['mobo'],
            'pcr' => $_POST['pcr'],
            'psu' => $_POST['psu'],
            'ram' => $_POST['ram'],
            'ssd' => $_POST['ssd'],
            'fan' => $_POST['fan'],
            'hdd' => $_POST['hdd'],
            'vga' => $_POST['vga'],
            'kabelP' => $_POST['kabelP'],
            'case' => $_POST['case'],
            'kabelS' => $_POST['kabelS'],
            'fanC' => $_POST['fanC'],
            'keyMo' => $_POST['keyMo'],
            'moni' => $_POST['moni'],
            'kvga' => $_POST['kvga'],
        ];
        $akhirDetailKondisi = json_encode($detailKondisi);
        $hpp = $_POST['hpp'];
        $usia = $_POST['usia'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $input = mysqli_query($connect, "INSERT INTO history (id_admin, nama, deskripsi, tanggal, kondisiAkhir, detail_kondisi, hppAkhir, usia, harga) VALUES ('$id','$nama','$deskripsi','$tanggal','$kondisi','$akhirDetailKondisi','$hpp','$usia','$harga')");
        if($input) {
            ?>
                <script>
                    alert("Input Success!");
                    document.location = "input_beginner.html";
                </script>
            <?php
        } else {
            ?>
                <script>
                    alert("Input Failed!");
                    document.location = "input_beginner.html";
                </script>
            <?php
        }
    }
}
?>