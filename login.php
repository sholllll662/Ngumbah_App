<?php

include 'conection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Ngumbah App -- Masuk</title>
    <link rel="stylesheet" href="./src/style/styles.css">
</head>

<body>
    <img src="./src/public/images/Ngumbah_icon2.png" class="logo" alt="Logo Ngumbah App">
    <div class="login_content">
        <form action="" method="post" id="login_form">
            <h1 class="form_title">Masuk Akun</h1>
            <table id="login_table">
                <tr>
                    <td>
                        <label for="username">Email Pengguna</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="input_username_login" name="email" placeholder="Masukan Email anda" value="<?php echo $email; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=" password">Kata Sandi</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="input_password_login" name="password" placeholder="Masukan Kata Sandi" value="<?php echo $_POST['password']; ?>" required>
                    </td>
                </tr>
            </table>
            <button type=" submit" id="login_button" name="submit">Masuk Akun</button>
        </form>
        <div class="alternative_registration">
            <p class="alternative_registration_item">Belum punya akun?</p>
            <a href="./signup.php" class="alternative_registration_item" id="registration_link">Daftar sekarang</a>
        </div>
    </div>
</body>

</html>