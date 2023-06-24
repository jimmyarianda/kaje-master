<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/easing/easing.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/wow/wow.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/waypoints/waypoints.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/counterup/counterup.min.js"></script>
<script src="<?= site_url() ?>assets/assets_home/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="<?= site_url() ?>assets/assets_home/js/main.js"></script>

<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js">
</script>

<script>
var planes = [
    ["7C6B07", 0.5055512487420951, 101.44632124377394],
    ["7C6B38", -0.9455645832591079, 100.42215038582772]
];

var map = L.map('map').setView([-0.15583894199596982, 101.09586042536841], 7);
mapLink =
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; ' + mapLink + ' Contributors',
        maxZoom: 18,
    }).addTo(map);

for (var i = 0; i < planes.length; i++) {
    marker = new L.marker([planes[i][1], planes[i][2]])
        .bindPopup(planes[i][0])
        .addTo(map);
}
</script>