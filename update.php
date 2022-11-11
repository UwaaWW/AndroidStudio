<?php 
// koneksi database
    include 'koneksi.php';

// meanngkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// menginput data ke database
mysqli_query($koneksi, "update tb_siswa set nama='$nama', nipd='$nipd', kelas='$kelas', jurusan='$jurusan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil.php");

?>