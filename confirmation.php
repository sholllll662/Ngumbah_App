<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/style/styles.css">
        <title>Ngumbah App -- Konfirmasi Pemesanan</title>
    </head>
    <body>
        <header>
            <img src="./src/public/images/Ngumbah_icon1.png" id="header_logo" alt="Ngumbah App's Header Logo">
            <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
            <nav id="navigation_list">
                <a href="./detail.php">Riwayat Pemesanan</a>
                <a href="#" id="username_button">Pengguna_01</a>
                <a href="#">Keluar</a>
            </nav>
        </header>
        <main>
            <div class="order_container">
                <h1>Konfirmasi Data Pemesanan</h1>
                <form class="confirmation_form">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>Pengguna 01</td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon/Hp</td>
                            <td>:</td>
                            <td>0811234567890</td>
                        </tr>
                        <tr>
                            <td>Alamat Lengkap</td>
                            <td>:</td>
                            <td>Jalan Lorem ipsum dolor, No. 01, Indonesia</td>
                        </tr>
                        <tr>
                            <td>Pilihan Layanan</td>
                            <td>:</td>
                            <td>Complete + Express</td>
                        </tr>
                        <tr>
                            <td>Estimasi Berat</td>
                            <td>:</td>
                            <td>20kg</td>
                        </tr>
                        <tr>
                            <td>Catatan :</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <textarea id="user_notes" readonly>Penggunaan deterjen anti alergi disarankan</textarea>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" id="confirmation_button">Konfirmasi Pemesanan</button>
                </form>
            </div>
        </main>
        <footer>
            <img src="./src/public/images/Ngumbah_icon2.png" id="footer_logo" alt="Ngumbah App's Footer Logo">
            <div class="footer_description">
                <h2>Kontak Kami</h2>
                <div class="footer_information">
                    <img src="./src/public/images/location.png" id="location_icon" alt="location's icon">
                    <p>Jalan Lorem ipsum dolor, No. 0001, Indonesia</p>
                </div>
                <div class="footer_information">
                    <img src="./src/public/images/phone.png" id="phone_icon" alt="phone's icon">
                    <p>0811234567890</p>
                </div>
                <div class="footer_information">
                    <img src="./src/public/images/instagram.png" id="instagram_icon" alt="instagram's icon">
                    <p>Ngumbah_App</p>
                </div>
            </div>
            <p class="copyright">Ngumbah App Inc 2022</p>
        </footer>
    </body>
</html>