<div class="container">
    <br><br><br>
    <?php if (isset($_GET['message'])) : ?>
        <?= urldecode($_GET['message']) ?>
        <script>
            if (history.pushState) {
                var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                window.history.pushState({path:newUrl}, '', newUrl);
            }
        </script>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            Tambah Daftar Kos
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('home/aksitambah', ['class' => 'row g-2 needs-validation', 'novalidate' => 'novalidate']); ?>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Detail Kos
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body row g-2">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">Nama Kos</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenis" class="form-label">Jenis Kos</label><br>
                                    <input type="radio" id="jenis" name="jenis" value="Putri" required>
                                    <label for="jenis">Putri</label>
                                    <input type="radio" id="jenis" name="jenis" value="Putra" required>
                                    <label for="jenis">Putra</label>
                                    <input type="radio" id="jenis" name="jenis" value="Putri / Putra" required>
                                    <label for="jenis">Putri / Putra</label>
                                    <div class="valid-feedback">
                                        Pilihan sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Pilihan belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                                    <input type="text" class="form-control" id="jumlah_kamar" name="jumlah_kamar" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="fasilitas" class="form-label">Fasilitas</label>
                                    <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required></textarea>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="latitude" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                    <div class="form-text">Buka google maps, salin lokasi kos.</div>
                                    <div class="form-text">Contoh Latitude = -7.832930954028335, Longitude = 110.38321798773683</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="longitude" class="form-label">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="foto" class="form-label">Foto Kos</label>
                                    <input class="form-control" type="file" id="foto" name="foto" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Detail Pemilik
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body row g-2">
                                <div class="col-md-6">
                                    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
                                    <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="bayar" class="form-label">Foto Bukti Pembayaran</label>
                                    <input class="form-control" type="file" id="bayar" name="bayar" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                    <div class="form-text">Rp. 20.000</div>
                                    <div class="form-text">Rekening BRI : 874878787889389 (An. XXXX XXXX)</div>
                                </div>
                                <div class="col-12 text-end"><br>
                                    <button type="submit" class="btn btn-primary" name="upload">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form.needs-validation');
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
</script>
