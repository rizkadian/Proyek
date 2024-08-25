<div class="container">
    <br><br><br><br>
    <?php if ($this->session->flashdata('message')): ?>
        <?= $this->session->flashdata('message'); ?>
    <?php endif; ?>
    <div class="card">
        <div class="card-header">
            Edit Data Kos
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('home/edit_masuk', ['class' => 'row g-2 needs-validation', 'novalidate' => 'novalidate']); ?>
                <input type="text" class="form-control" name="id" value="<?php echo $data_kos->id?>" hidden>
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
                                    <input type="text" class="form-control" name="nama" value="<?php echo $data_kos->nama ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="jenis" class="form-label">Jenis Kos</label><br>
                                    <input type="radio" id="jenis_putri" name="jenis" value="Putri" <?php echo ($data_kos->jenis == 'Putri') ? 'checked' : ''; ?> required>
                                    <label for="jenis_putri">Putri</label>
                                    <input type="radio" id="jenis_putra" name="jenis" value="Putra" <?php echo ($data_kos->jenis == 'Putra') ? 'checked' : ''; ?> required>
                                    <label for="jenis_putra">Putra</label>
                                    <input type="radio" id="jenis_putri_putra" name="jenis" value="Putri / Putra" <?php echo ($data_kos->jenis == 'Putri / Putra') ? 'checked' : ''; ?> required>
                                    <label for="jenis_putri_putra">Putri / Putra</label>
                                    <div class="valid-feedback">
                                        Pilihan sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Pilihan belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $data_kos->alamat ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                                    <input type="text" class="form-control" name="jumlah_kamar" value="<?php echo $data_kos->jumlah_kamar ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="<?php echo $data_kos->harga ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" value="<?php echo $data_kos->keterangan ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="latitude" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" name="latitude" value="<?php echo $data_kos->latitude ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="longitude" class="form-label">Longitude</label>
                                    <input type="text" class="form-control" name="longitude" value="<?php echo $data_kos->longitude ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="fasilitas" class="form-label">Fasilitas</label>
                                    <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3" required><?php echo $data_kos->fasilitas; ?></textarea>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="foto" class="form-label">Foto Kos</label>
                                    <input type="text" class="form-control" name="foto" value="<?php echo $data_kos->foto ?>" required>
                                    <div class="valid-feedback">Data sudah terisi!</div>
                                    <div class="invalid-feedback">Data belum terisi!</div>
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
                                    <input type="text" class="form-control" name="nama_pemilik" value="<?php echo $data_kos->nama_pemilik ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="<?php echo $data_kos->telepon ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $data_kos->email ?>" required>
                                    <div class="valid-feedback">
                                        Data sudah terisi!
                                    </div>
                                    <div class="invalid-feedback">
                                        Data belum terisi!
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="bayar" class="form-label">Foto Bukti Pembayaran</label>
                                    <input type="text" class="form-control" name="bayar" value="<?php echo $data_kos->bayar ?>" required>
                                    <div class="valid-feedback">Data sudah terisi!</div>
                                    <div class="invalid-feedback">Data belum terisi!</div>
                                </div>
                                <div class="col-12 text-end"><br>
                                    <button type="submit" class="btn btn-primary" name="upload">Edit</button>
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
