<!DOCTYPE html>
<html>

    <head>
        <title>Halaman Login</title>
    </head>
    <body>
        <h2>Login - SMKN 4 KENDAL</h2><br/>
        <?php 
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "Login gagal! username dan password salah!";
            }elseif ($_GET['pesan'] == "logout") {
                echo "Anda telah berhasil logout";
            }elseif ($_GET['pesan'] == "belum_login") {
                echo "Anda harus login untuk mengakses halaman admin";
            }
        }
        ?><br/><br/>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="Insert Username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="Insert password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" placeholder="LOGIN"></td>
                </tr>
            </table>
        </form>
    </body>

</html>