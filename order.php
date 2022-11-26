<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/style/styles.css">
        <title>Ngumbah App -- Pesan Jasa Laundry</title>
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
                <h1 id="order_title">Pemesanan Layanan Laundry</h1>
                <form>
                    <h2 class="order_instruction">Pilih Jenis Layanan : </h2>
                    <button  class="option" value="Complete_Express">
                        <h2>Complete + Express</h2>
                        <p>Paket Cuci Kiloan + Setrika + Pemesanan Prioritas</p>
                        <p>Harga: Rp15.000/kg (Harga tidak Termasuk Pengiriman)</p>
                    </button>
                    <button  class="option" value="Cuci_Express">
                        <h2>Complete + Express</h2>
                        <p>Paket Cuci Kiloan + Pemesanan Prioritas</p>
                        <p>Harga: Rp10.000/kg (Harga tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Setrika_Express">
                        <h2>Setrika + Express</h2>
                        <p>Paket Setrika Kiloan + Pemesanan Prioritas</p>
                        <p>Harga: Rp7.000/kg (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Complete">
                        <h2>Complete</h2>
                        <p>Paket Cuci Kiloan + Setrika</p>
                        <p>Harga: Rp10.000/kg (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Cuci">
                        <h2>Cuci</h2>
                        <p>Paket Cuci Kiloan</p>
                        <p>Harga: Rp7.000/kg (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Setrika">
                        <h2>Setrika</h2>
                        <p>Paket Setrika Kiloan</p>
                        <p>Harga: Rp5.000/kg (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Dry_Clean">
                        <h2>Dry Clean</h2>
                        <p>Paket Dry Clean Kiloan + Setrika</p>
                        <p>Harga: Rp8.000/kg (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Complete_Satuan">
                        <h2>Complete (Satuan)</h2>
                        <p>Paket Cuci + Setrika Satuan</p>
                        <p>Harga: Rp3.000/satuan (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Cuci_Satuan"">
                        <h2>Cuci (Satuan)</h2>
                        <p>Paket cuci satuan</p>
                        <p>Harga: Rp2.000/satuan (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
                    <button class="option" value="Setrika_Satuan">
                        <h2>Setrika (Satuan)</h2>
                        <p>Paket Setrika Satuan</p>
                        <p>Harga: Rp1.000/kg (Harga Tidak Termasuk Pengiriman)</p>
                    </button>
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