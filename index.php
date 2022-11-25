<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ngumbah App -- Homepage</title>
        <link rel="stylesheet" href="./src/style/styles.css">
    </head>
    <body>
        <header>
            <img src="./src/public/images/Ngumbah_icon1.png" id="header_logo" alt="Ngumbah App's Header Logo">
            <button id="more_navigation_list" aria-label="more_navigation_list">&#9776</button>
            <nav id="navigation_list">
                <a href="#">Riwayat Pemesanan</a>
                <a href="#" id="username_button">Pengguna_01</a>
                <a href="#">Keluar</a>
            </nav>
        </header>
        <main>
            <div class="hero_container">
                <img src="./src/public/images/Ngumbah_Icon4.png" id="hero_logo" alt="Ngumbah App's Hero Logo">
                <div class="hero_description">
                    <h1 id="hero_description_title">Ngumbah</h1>
                    <h2 id="hero_description_about">Laundry mudah, nyaman, dan terpercaya</h2>
                    <a href="#" id="hero_description_link">Temukan Penawaran Kami</a>
                </div>
            </div>
            <div class="history_container">
                <h2 id="history_title">Riwayat Pemesanan</h2>
                <h3 id="empty_history_text">Tidak ada Riwayat Pemesanan</h3>
                <div class="list_of_histories">
                    <div class="history">
                        <div class="header_history">
                            <h3 class="history_status" id="ongoing_status">Sedang di Proses</h3>
                            <a href="#" class="link_to_status">Lihat Status Pemesanan</a>
                        </div>
                        <table class="history_detail">
                            <tr>
                                <td>ID Pemesanan</td>
                                <td>:</td>
                                <td>NH0001</td>
                            </tr>
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td>:</td>
                                <td>01-01-2000</td>
                            </tr>
                            <tr>
                                <td>Waktu Pemesanan</td>
                                <td>:</td>
                                <td>09:00 WIB</td>
                            </tr>
                        </table>
                    </div>
                    <div class="history">
                        <div class="header_history">
                            <h3 class="history_status" id="done_status">Selesai</h3>
                            <a href="#" class="delete_icon"><img src="./src/public/images/delete.png" alt="delete's icon"></a>
                        </div>
                        <table class="history_detail">
                            <tr>
                                <td>ID Pemesanan</td>
                                <td>:</td>
                                <td>NH0001</td>
                            </tr>
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td>:</td>
                                <td>01-01-2000</td>
                            </tr>
                            <tr>
                                <td>Waktu Pemesanan</td>
                                <td>:</td>
                                <td>09:00 WIB</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="offers_container">
                <h2 id="offers_title">Yang Kami Tawarkan</h2>
                <div class="offer_odd">
                    <img src="./src/public/images/order.png" class="offer_logo" alt="Order's Logo">
                    <div class="offer_description">
                        <h3>Pemesanan Dimana Saja dan Kapan Saja</h3>
                        <p>Kami menyediakan jasa layanan laundry melalui website untuk mempermudah pengguna dalam menggunakan jasa ini</p>
                    </div>
                </div>
                <div class="offer_even">
                    <div class="offer_description">
                        <h3>Pengantaran Langsung</h3>
                        <p>Kami menyediakan jasa pengantaran secara langsung dari dan ke lokasi anda</p>
                    </div>
                    <img src="./src/public/images/Delivery_icon.png" class="offer_logo" alt="Delivery's logo">
                </div>
                <div class="offer_odd">
                    <img src="./src/public/images/information.png" class="offer_logo" alt="Information's logo">
                    <div class="offer_description">
                        <h3>Lacak Status Pemesanan dengan Praktis</h3>
                        <p>Kami menyediakan jasa layanan update status pemesanan secara live sehingga pengguna dapat mengetahui proses dari laundry yang dipesan</p>
                    </div>
                </div>
                <a href="#" id="order_button">Pesan Laundry Sekarang</a>
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