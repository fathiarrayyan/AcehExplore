import './bootstrap';
import 'leaflet/dist/leaflet.css';
import L from 'leaflet';
import './loadmoreButton.js';


// Fungsi untuk inisialisasi peta
var map = L.map('map').setView([5.54806, 95.323906], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var marker = L.marker([5.54806, 95.323906]).addTo(map)
    .bindPopup("<b>Destinasi Wisata</b><br>Tempat ini adalah tujuan wisata yang menarik!")
    .openPopup();

map.zoomControl.setPosition('bottomright');

map.on('click', function (e) {
    var latlng = e.latlng;
    marker.setLatLng(latlng).bindPopup("Lokasi baru: " + latlng.toString()).openPopup();
});
