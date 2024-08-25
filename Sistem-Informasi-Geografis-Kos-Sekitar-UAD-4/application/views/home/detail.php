<script type="text/javascript">
    var data_kos = {
        latitude: <?php echo $data_kos['latitude']; ?>,
        longitude: <?php echo $data_kos['longitude']; ?>,
        nama: "<?php echo $data_kos['nama']; ?>"
    };

    function initMap() {
        console.log('initMap called');
        console.log('data_kos:', data_kos);
        
        var map = L.map('map').setView([data_kos.latitude, data_kos.longitude], 15); 

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-7.832773938770656, 110.38297796241218])
            .addTo(map)
            .bindPopup('Universitas Ahmad Dahlan Kampus 4').closePopup();

        L.marker([data_kos.latitude, data_kos.longitude])
            .addTo(map)
            .bindPopup(data_kos.nama).openPopup();
    }

    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('map')) {
            initMap();
        }
    });
</script>

<div class="container">
    <br><br><br><br>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">Foto</div>
                <div class="card-body">
                    <img src="<?php echo base_url() . '/assets/fotokos/' . $data_kos['foto']; ?>" class="card-img-top" alt="kos">
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Detail Pemilik</div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered" style="overflow-y: hidden">
                        <tbody>
                            <tr>
                                <td width='150px'>Nama</td>
                                <td><?php echo $data_kos['nama_pemilik']; ?></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><?php echo $data_kos['telepon']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Maps</div>
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 250px;"></div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">Detail Kos</div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered" style="overflow-y: hidden">
                        <tbody>
                            <tr>
                                <td width='150px'>Nama</td>
                                <td><?php echo $data_kos['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td><?php echo $data_kos['jenis']; ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?php echo $data_kos['harga']; ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Kamar</td>
                                <td><?php echo $data_kos['jumlah_kamar']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $data_kos['alamat']; ?></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><?php echo $data_kos['keterangan']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Fasilitas</div>
                <div class="card-body">
                    <?php echo $data_kos['fasilitas']; ?>
                </div>
            </div>
        </div>
    </div>
</div>
