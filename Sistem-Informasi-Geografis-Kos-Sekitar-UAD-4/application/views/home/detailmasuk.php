<script type="text/javascript">
    var data_kos = {
        latitude: <?php echo $data_kos['latitude']; ?>,
        longitude: <?php echo $data_kos['longitude']; ?>,
        nama: "<?php echo $data_kos['nama']; ?>"
    };

    function initMap() {
        console.log('initMap called');
        console.log('data_kos:', data_kos);
        
        var map = L.map('map').setView([data_kos.latitude, data_kos.longitude], 14); 

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
    <div class="card">
        <div class="card-header">Detail Kos Masuk</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table text-center" style="background-color: #cccccc;">
                        <tr>
                            <td width='200px'>Keterangan</td>
                            <td>Isi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">Nama Kos</td>
                            <td><?php echo $data_kos['nama']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Jenis</td>
                            <td><?php echo $data_kos['jenis']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Alamat</td>
                            <td><?php echo $data_kos['alamat']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Harga</td>
                            <td><?php echo $data_kos['harga']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Jumlah Kamar</td>
                            <td><?php echo $data_kos['jumlah_kamar']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Nama Pemilik</td>
                            <td><?php echo $data_kos['nama_pemilik']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Telepon</td>
                            <td><?php echo $data_kos['telepon']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Email</td>
                            <td><?php echo $data_kos['email']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Latitude</td>
                            <td><?php echo $data_kos['latitude']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Longitude</td>
                            <td><?php echo $data_kos['longitude']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Fasilitas</td>
                            <td><?php echo $data_kos['fasilitas']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Keterangan</td>
                            <td><?php echo $data_kos['keterangan']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-center">Foto Kos</td>
                            <td>
                                <img src="<?php echo base_url() . '/assets/fotokos/' . $data_kos['foto']; ?>" class="card-img-top" alt="kos">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Bukti Bayar</td>
                            <td>
                                <img src="<?php echo base_url() . '/assets/buktibayar/' . $data_kos['bayar']; ?>" class="card-img-top" alt="kos">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Maps</div>
        <div class="card-body">
            <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>
