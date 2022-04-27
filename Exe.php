<?php
//mengambil data dari parameter input halaman form
$nama = $_POST['nama'];
$email = $_POST['email'];
include "menyimpandata.php";

//cek kelengkapan input dari halaman form
if (empty($nama) || empty($email)) {
    header('Location: salah.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo "--------------------------------------------------"."<br>";
    echo "Terakhir Login : $waktu  $tanggal";
}
?>
