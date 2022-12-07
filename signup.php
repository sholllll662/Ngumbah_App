<?php

include 'conection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    //nama lengkap dan no telpon masih blm masuk ke database
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_tlp = $_POST['no_tlp'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password1']);
    $password2 = md5($_POST['password2']);

    if ($password == $password2) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (nama_lengkap,no_tlp,username, email, password)
                    VALUES ('$nama_lengkap','$no_tlp','$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $nama_lengkap = "";
                $no_tlp = "";
                $username = "";
                $email = "";
                $_POST['password1'] = "";
                $_POST['password2'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Ngumbah App -- Registrasi</title>
    <link rel="stylesheet" href="./src/style/styles.css">
</head>

<body>
    <img src="./src/public/images/Ngumbah_icon2.png" class="logo" alt="Logo Ngumbah App">
    <div class="registration_content">
        <form action="" method="post" id="registration_form">
            <h1 class="form_title">Daftar Akun</h1>
            <table id="registration_table">
                <tr>
                    <td>
                        <label for="nama_lengkap">Nama Lengkap</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_fullname_registration" class="input_fullname" name="nama_lengkap" placeholder="Masukan Nama Lengkap" value="<?php echo $nama_lengkap; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="no_tlp">Nomor Telepon</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_phone_registration" class="input_phone" name="no_tlp" placeholder="Masukan Nomor Telepon" value="<?php echo $no_tlp; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" id="input_email_registration" class="input_email" name="email" placeholder="Masukan Email" value="<?php echo $email; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Nama Pengguna</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_username_registration" class="input_username" name="username" placeholder="Masukan Nama Pengguna" value="<?php echo $username; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password1">Kata Sandi</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="input_password1_registration" class="input_password" name="password1" placeholder="Masukan Kata Sandi" value="<?php echo $_POST['password1']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="passowrd2">Konfirmasi Kata Sandi</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="input_password2_registration" class="input_password" name="password2" placeholder="Masukan Konfirmasi Kata Sandi" value="<?php echo $_POST['password2']; ?>" required>
                    </td>
                </tr>
            </table>
            <button type="submit" id="registration_button" name="submit">Daftar Akun</button>
        </form>
    </div>
    <div class="alternative_login">
        <p class="alternative_login_item">Sudah mempunyai akun?</p>
        <a href="./login.php" class="alternative_login_item" id="login_link">Masuk Sekarang</a>
    </div>
</body>

</html>