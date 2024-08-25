<script type="text/javascript">
    function initMap() {
        var map = L.map('map').setView([-7.832773938770656, 110.38297796241218], 13); // Koordinat Yogyakarta

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
                '<br><a href="<?php echo base_url(); ?>home/detailselesai/' + kos.id + '" class="btn btn-light btn-sm mt-2">Detail dan Lokasi</a>';

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
    <div class="card">
        <div class="card-header">
            Maps
        </div>
        <div class="card-body">
            <div id="map" style="width: 100%; height: 500px;"></div>
        </div>
    </div>
</div>
