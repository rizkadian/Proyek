<?php  
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@2"></script>
    <title>DEPHOTO STUDIO</title>
    <link rel="stylesheet" href="css/style7.css" />
  </head>
  <body>
    <script src="js/script2.js"></script>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="galeri/foto1.png"/></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home" class="tomboll">Home</a></li>
            <li><a href="#aboutus" class="tomboll">About Us</a></li>
            <li><a href="#pricelist" class="tomboll">Our Pricelist</a></li>
            <li><a href="#gallery" class="tomboll">Gallery</a></li>
            <li><a href="#contact" class="tomboll">Contact</a></li>
            <li><a href="#booking" class="tombol">BOOKING</a></li>
            <li><a href="login.PHP" class="tombol">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="galeri/video2.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>DEPHOTO STUDIO</h3>
          <br>
          <p>
            Penyedia layanan yang disediakan oleh fotografer atau studio fotografi profesional untuk mengambil gambar dan menciptakan hasil foto berkualitas tinggi.
          </p><br>
          <p>
            <a href="" class="tombol">BOOKING</a>
          </p>
        </div>
      </header>

      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <p class="ringkasan">
              DEPHOTO STUDIO
            </p>
            <div class="konten-isi">
              <p>
                DEPHOTO STUDIO adalah layanan yang disediakan oleh fotografer atau studio fotografi profesional untuk mengambil gambar dan menciptakan hasil foto berkualitas tinggi. Jasa foto studio sering digunakan untuk berbagai tujuan, termasuk foto keluarga, foto pernikahan, potret pribadi, foto produk, dan kebutuhan komersial lainnya. Tujuan utamanya adalah untuk mengabadikan momen berharga atau menghasilkan gambar yang memenuhi kebutuhan visual atau promosi klien.
              </p>
            </div>
          </div>
        </section>

        <section class="abuabu" id="pricelist">
          <div class="layar-dalam">
            <h3>Our Pricelist</h3>
            <p class="ringkasan">
              Tipe foto studio yang tersedia.
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('galeri/foto2.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4>Basic Session</h4>
                    <p>
                      1 - 2 orang, 15 menit sesi foto, 10 menit pemilihan foto untuk dicetak, dan 2 cetak foto ukuran 4R (4x6). 
                    </p>
                    <h4>Rp. 90.000</h4>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('galeri/foto3.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4>Group Session</h4>
                    <p>
                      3 - 5 orang, 20 menit sesi foto, 10 menit pemilihan foto untuk dicetak, dan 4 cetak foto ukuran 4R (4x6). 
                    </p>
                    <h4>Rp. 120.000</h4>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="gallery">
          <div class="layar-dalam">
            <h3>Gallery</h3>
            <p class="ringkasan">
              Hasil foto dari studio photo kami!
            </p>
            <div class="tim">
              <div>
                <img src="galeri/foto4.jpg" />
              </div>
              <div>
                <img src="galeri/foto5.jpg" />
              </div>
              <div>
                <img src="galeri/foto6.jpg" />
              </div>
              <div>
                <img src="galeri/foto7.jpg" />
              </div>
              <div>
                <img src="galeri/foto8.jpg" />
              </div>
            </div>
            <div class="tim">
              <div>
                <img src="galeri/foto18.jpg" />
              </div>
              <div>
                <img src="galeri/foto19.jpg" />
              </div>
              <div>
                <img src="galeri/foto20.jpg" />
              </div>
              <div>
                <img src="galeri/foto21.jpg" />
              </div>
              <div>
                <img src="galeri/foto22.jpg" />
              </div>
            </div>
          </div>
        </section>
      </main>

      <section class="abuabu" id="booking">
        <div class="layar-dalam">
          <h3>Booking</h3>
          <p class="ringkasan">
            Tulis data dengan benar
          </p>
          <div class="container">
            <form action="abooking/tambah.php" method="POST">
              <div class="main-user-info">
                <div class="user-input-box">
                  <label for="namapelanggan">Nama</label>
                  <input type="text" name="namapelanggan" id="namapelanggan" placeholder="Nama Lengkap" oninput="validasiNama(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" placeholder="Email" oninput="validasiEmail(this)" required />
                </div>

                <div class="user-input-box">
                  <label for="telepon">Telepon</label>
                  <input type="text" name="telepon" id="telepon" placeholder="Nomor Telepon" oninput="validasiNomorTelepon(this)" required />
                </div>
                <div class="user-input-box">
                  <label for="kategori">Kategori</label>
                  <select id="kategori" name="kategori" required oninput="validateKategori()">
                      <option disabled selected value="">Pilih Kategori</option>
                      <?php 
                        $a = "SELECT * FROM kategori";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id_kategori'] . "'>" . $aa['nama'] . "</option>";
                        }
                      ?>
                  </select>
                </div>
                <div class="user-input-box">
                  <label for="tanggal">Tanggal</label>
                  <input class="ddate"type="date" name="tanggal" placeholder="tanggal" required>
                </div>

                <div class="user-input-box">
                  <label for="jadwal">Jadwal</label>
                  <select id="jadwal" name="jadwal" required oninput="validateJadwal()">
                      <option disabled selected value="">Pilih Jadwal</option>
                      <?php 
                        $a = "SELECT * FROM jadwal";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id_jadwal'] . "'>" . $aa['jam_mulai'] . " - " . $aa['jam_berakhir'] . "</option>";
                        }
                      ?>
                  </select>
                </div>
                <div class="user-input-box">
                  <label for="payment">Payment</label>
                  <select id="payment" name="payment" required oninput="validatePayment()">
                      <option disabled selected value="">Pilih Payment</option>
                      <?php 
                        $a = "SELECT * FROM payment";
                        $r = mysqli_query($con, $a);
                        while ($aa = mysqli_fetch_assoc($r)) {
                          echo "<option value='" . $aa['id_payment'] . "'>" . $aa['nama'] . "</option>";
                        }
                      ?>
                  </select>
                </div>  
                <!-- <div class="user-input-box"> </div> -->
              <div class="form-submit-btn">
               <input type="submit" class= "btn" id="submit" name="submit" onclick="konfirmasiBooking()" value="BOOKING">
              </div></div>
            </form>
          </div>
        </div>
      </section>

      <footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Contact</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Help</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
          <div>
            <h5>Sitemap</h5>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam,
            sunt?
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; DEPHOTO STUDIO</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="js/script3.js"></script>
  </body>
</html>
