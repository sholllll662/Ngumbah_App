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
                            <label for="fullname">Nama Lengkap</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="input_fullname_registration" class="input_fullname" name="fullname" placeholder="Masukan Nama Lengkap">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="phone">Nomor Telepon</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="input_phone_registration" class="input_phone" name="phone" placeholder="Masukan Nomor Telepon">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="email" id="input_email_registration" class="input_email" name="email" placeholder="Masukan Email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Nama Pengguna</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="input_username_registration" class="input_username" name="username" placeholder="Masukan Nama Pengguna">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password1">Kata Sandi</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" id="input_password1_registration" class="input_password" name="password1" placeholder="Masukan Kata Sandi">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="passowrd2">Konfirmasi Kata Sandi</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" id="input_password2_registration" class="input_password" name="password2" placeholder="Masukan Konfirmasi Kata Sandi">
                        </td>
                    </tr>
                </table>
                <button type="submit" id="registration_button">Daftar Akun</button>
            </form>
        </div>
        <div class="alternative_login">
            <p class="alternative_login_item">Sudah mempunyai akun?</p>
            <a href="./login.php" class="alternative_login_item" id="login_link">Masuk Sekarang</a>
        </div>
    </body>
</html>