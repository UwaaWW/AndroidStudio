<!DOCTYPE html>
<html>

    <head>
        <title>CRUD PHP dan MySQLi </title>
    </head>
    <body>

        <h2>CRUD DATA SISWA - SMK 4 KENDAL</h2><br/>
        <a href="tampil.php">KEMBALI</a><br/><br/>
        <h3>EDIT DATA SISWA</h3>

        <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from tb_siswa where id='$id'");
        while (
            $d = mysqli_fetch_array($data)
        ) {
            ?>
            <form method="POST" action="update.php">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>NIPD</td>
                        <td><input type="number" name="nipd" value="<?php echo $d['nipd']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>
                            <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Program Keahlian</td>
                        <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit"  value="SIMPAN">
                        </td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>

    </body>

</html>