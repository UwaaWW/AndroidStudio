<?php 
// koneksi database
    include 'koneksi.php';

// meanngkap data yang dikirim dari form
$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// menginput data ke database
mysqli_query($koneksi, "insert into tb_siswa SET nama='$nama', nipd='$nipd', kelas='$kelas', jurusan='$jurusan' ");

// mengalihkan halaman kembali ke index.php
header("location:tampil.php");

?>