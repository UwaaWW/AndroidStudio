<?php 

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"Delete from tb_siswa where id='$id'");

header("location:tampil.php");
?>