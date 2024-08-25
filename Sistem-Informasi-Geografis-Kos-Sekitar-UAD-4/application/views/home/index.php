<script type="text/javascript">
    function initMap() {
        var map = L.map('map').setView([-7.832773938770656, 110.38297796241218], 14); // Koordinat Yogyakarta

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-7.832773938770656, 110.38297796241218])
            .addTo(map)
            .bindPopup('Universitas Ahmad Dahlan Kampus 4').openPopup();

        // Tambahkan data GeoJSON dari file batas.geojson
        fetch('<?php echo base_url("assets/geojson/batas.geojson"); ?>')
            .then(response => response.json())
            .then(data => {
                L.geoJSON(data).addTo(map);
            })
            .catch(error => console.error('Error loading the GeoJSON file:', error));

        var data_kos = <?php echo json_encode($data_kos); ?>;

        data_kos.forEach(function(kos) {
            var popupContent = '<b>' + kos.nama + '</b><br>' + kos.jenis + 
                '<br><a href="<?php echo base_url(); ?>home/detail/' + kos.id + '" class="btn btn-light btn-sm mt-2">Detail dan Lokasi</a>';

            L.marker([kos.latitude, kos.longitude])
                .addTo(map)
                .bindPopup(popupContent);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('map')) {
            initMap();
        }
    });
</script>

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
            Maps
        </div>
        <div class="card-body">
            <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
    <br>
    <?php echo form_open('home/cariindex', ['class' => 'd-flex']); ?>
        <input class="form-control me-2" name="cari" type="search" placeholder="Cari" aria-label="Search">
        <button class="btn btn-primary" type="submit">Cari</button>
    <?php echo form_close(); ?>
    <br>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php if (isset($data_kos) && !empty($data_kos)): ?>
            <?php foreach($data_kos as $data1): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="<?php echo base_url() . '/assets/fotokos/' . $data1->foto; ?>" class="card-img-top" style="width: auto; height: 150px;" alt="kos">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data1->nama; ?></h5>
                            <p style="font-size: 14px; color: #3399ff;"><?php echo $data1->jenis; ?> (Rp. <?php echo $data1->harga; ?>)</p>
                        </div>
                        <div class="card-footer text-end">
                            <small class="text-muted">
                                <a href="<?php echo base_url() . 'home/detail/' . $data1->id; ?>" class="btn btn-success"><i class="bi bi-geo-alt-fill"></i> Detail dan Lokasi</a>
                            </small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Tidak ada data yang ditemukan</p>
        <?php endif; ?>
    </div>
</div>
