<!DOCTYPE html>
<html>

<head>
  <title>Ngumbah App -- Masuk Admin</title>
  <link rel="stylesheet" href="./src/style/styles.css" />
</head>

<body>
  <img src="./src/public/images/Ngumbah_icon2.png" class="logo" alt="Logo Ngumbah App" />
  <div class="login_content">
    <form action="" method="post" id="login_form">
      <h1 class="form_title">Masuk Akun Admin</h1>
      <table id="login_table">
        <tr>
          <td>
            <label for="username">Nama Pengguna</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" id="input_username_login" name="username" placeholder="Masukan Nama Pengguna" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Kata Sandi</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="password" id="input_password_login" name="password" placeholder="Masukan Kata Sandi" />
          </td>
        </tr>
      </table>
      <button type="submit" id="login_button">Masuk Akun Admin</button>
    </form>
  </div>
</body>
</html>