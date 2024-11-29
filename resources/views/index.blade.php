@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center py-n4" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold mb-4">
                    Jelajahi Keindahan Alam dan <span class="text-warning">Budaya Aceh</span> yang Memukau.
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Destination Section -->
<?php
$destinations = \App\Models\Destination::latest()->take(4)->get();
?>

<section class="py-5" id="destination">
    <div class="container">
        <h2 class="mb-4">Destinations</h2>
        <div class="row" id="destination-container">
            @foreach ($destinations as $destination)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('storage/' . $destination->image) }}" class="card-img-top" alt="{{ $destination->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="card-text">{{ $destination->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <button id="loadMoreDestinations" class="btn btn-primary">Load More</button>
        </div>
    </div>
</section>



<!-- Map Section -->
<section class="map-section py-5 bg-light">
    <div class="container">
        <p class="text-center mb-2 fs-6 fw-bold text-primary" style="font-family: 'ivystyle-sans', sans-serif;">CARI TEMPAT WISATA</p>
        <p class="text-center mb-5 fs-2 fw-bold" style="font-family: 'ivystyle-sans', sans-serif;">📍 Cari Tempat Wisata Disekitarmu</p>

        <!-- Peta -->
        <div class="row">
            <div class="col-12">
                <div id="map" style="height: 500px;" class="rounded shadow-sm"></div>
            </div>
        </div>

        <!-- Tombol Pencarian -->
        <div class="row justify-content-center mt-4">
            <div class="col-auto">
                <a class="btn btn-primary btn-lg" style="font-family: 'ivystyle-sans', sans-serif;" target="_blank" href="https://www.google.co.id/maps/place/Aceh/@4.042069,94.0052097,7z/data=!3m1!4b1!4m6!3m5!1s0x30399bdf507cc4bd:0x1039d80b220ca60!8m2!3d4.695135!4d96.7493993!16zL20vMDE2d2pf?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D">Temukan Tempat Wisata Lainnya</a>
            </div>
        </div>
    </div>
</section>


<!-- Blog Section -->
<section class="py-5" id='blog'>
    <div class="container">
        <h4 class="mb-4">📝 Galeri Pariwisata & Blog Travel</h4>
        <div class="row" id="blog-container">
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="blog-card shadow-sm">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                    <div class="card-body p-3">
                        <h5>{{ $blog->title }}</h5>
                        <p class="text-muted">{{ Str::limit($blog->content, 100) }}</p>
                        <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <button id="loadMoreBlogs" class="btn btn-primary">Load More</button>
        </div>
    </div>
</section>


<!-- Testimonials Section -->
<section class="py-5 bg-light" id="testimonial">
    <div class="container">
        <p class="text-center mb-2 fs-6 fw-bold text-primary" style="font-family: 'ivystyle-sans', sans-serif; font-weight: 200;">TESTIMONIAL EXPLOREACEH</p>
        <p class="text-center mb-2 fs-2 fw-bold" style="font-family: 'ivystyle-sans', sans-serif; font-weight: 700;">💬 Apa Kata Mereka Tentang Kami</p>
        <p class="text-center mb-4 fs-5" style="font-family: 'ivystyle-sans', sans-serif; font-weight: 300;">
            Penasaran apa saja review dari pengguna yang memakai layanan AcehExplore? Yuk cek di bawah!
        </p>
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="testimonial-card text-center p-4 shadow-sm rounded bg-white">
                    <img src="{{ asset('storage/image/ica_mi.jpg') }}" alt="ica_mi" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="fw-bold">Nashwa</h5>
                    <p class="text-muted">Traveler</p>
                    <p class="fst-italic">"Pengalaman yang luar biasa menggunakan layanan AcehExplore!"</p>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="testimonial-card text-center p-4 shadow-sm rounded bg-white">
                    <img src="{{ asset('storage/image/ica_mi.jpg') }}" alt="ica_mi" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="fw-bold">Ibnu Sina</h5>
                    <p class="text-muted">Traveler</p>
                    <p class="fst-italic">"Tim yang sangat profesional dan responsif. Liburan jadi lebih mudah!"</p>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="testimonial-card text-center p-4 shadow-sm rounded bg-white">
                    <img src="{{ asset('storage/image/ica_mi.jpg') }}" alt="ica_mi" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="fw-bold">Chairunnisa</h5>
                    <p class="text-muted">Traveler</p>
                    <p class="fst-italic">"Pelayanan terbaik dan sangat membantu menentukan destinasi impian saya."</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-light" id="faq">
    <div class="container my-5">
        <h3 class="text-primary mb-4">🤔 Pertanyaan yang Sering Diajukan</h3>
        <div class="accordion" id="faqAccordion">
            <!-- Pertanyaan 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Info penginapan terdekat, bang! 😄
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tentu saja, kami memiliki daftar penginapan terbaik yang dekat dengan destinasi pilihan Anda. Selain itu, akses ke lokasi sangat mudah. Anda bisa menghubungi kami untuk informasi lebih lanjut!
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Kenapa harus memilih AcehExplore?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        AcehExplore menawarkan pengalaman yang otentik, layanan terbaik, dan panduan lokal yang siap membantu Anda. Kami juga memiliki berbagai pilihan destinasi yang cocok untuk semua kebutuhan perjalanan Anda.
                    </div>
                </div>
            </div>
            <!-- Pertanyaan 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Ada rekomendasi tempat buat yang jomblo? 😜
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Pastinya! Kami punya beberapa tempat seru yang cocok untuk "me-time" sambil healing. Mulai dari pantai yang tenang, café instagenic, hingga spot wisata yang bisa bikin Anda lupa status, eh maksudnya menikmati waktu sendiri. 😉
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h3>Masih bingung cari tempat yang cocok?</h3>
                <p>Kami siap membantu Anda menemukan destinasi impian!</p>
            </div>
            <div class="col-md-4 text-end">
                <a href="https://wa.me/6282277391925?text=Halo%20saya%20butuh%20bantuan%20untuk%20memilih%20destinasi" target="_blank">
                    <button class="btn btn-light btn-lg">Hubungi Kami</button>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h5>AcehExplore</h5>
                <p>Jelajahi keindahan Aceh bersama kami</p>
            </div>
            <div class="col-md-3">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">About</a></li>
                    <li><a href="#" class="text-decoration-none">Career</a></li>
                    <li><a href="#" class="text-decoration-none">Mobile</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Help</a></li>
                    <li><a href="#" class="text-decoration-none">Press</a></li>
                    <li><a href="#" class="text-decoration-none">Affiliates</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>More</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Airlinefees</a></li>
                    <li><a href="#" class="text-decoration-none">Airline</a></li>
                    <li><a href="#" class="text-decoration-none">Low fare tips</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let destinationOffset = {
            {
                count($destinations)
            }
        };
        let blogOffset = {
            {
                count($blogs)
            }
        };

        // Fungsi untuk melakukan AJAX request
        function fetchMoreData(url, offset, containerId, buttonId) {
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        offset: offset
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.data.length > 0) {
                        const container = document.getElementById(containerId);
                        data.data.forEach(item => {
                            // Sesuaikan elemen yang akan dimasukkan (Destination atau Blog)
                            const card = document.createElement('div');
                            card.className = containerId === 'destination-container' ? 'col-md-3' : 'col-md-4';
                            card.innerHTML = `
                            <div class="card">
                                <img src="/storage/${item.image}" class="card-img-top" alt="${item.name || item.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${item.name || item.title}</h5>
                                    <p class="card-text">${item.description || (item.content || '').substring(0, 100)}</p>
                                    ${
                                        containerId === 'blog-container'
                                            ? `<a href="/blog/${item.id}" class="btn btn-primary btn-sm">Baca Selengkapnya</a>`
                                            : ''
                                    }
                                </div>
                            </div>
                        `;
                            container.appendChild(card);
                        });
                        if (containerId === 'destination-container') {
                            destinationOffset += data.data.length;
                        } else {
                            blogOffset += data.data.length;
                        }
                    } else {
                        // Disable button jika tidak ada data lagi
                        const button = document.getElementById(buttonId);
                        button.textContent = 'No More Items';
                        button.disabled = true;
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // Event Listener untuk tombol Load More Destinations
        document.getElementById('loadMoreDestinations').addEventListener('click', function() {
            fetchMoreData(
                "{{ route('destinations.loadMore') }}",
                destinationOffset,
                'destination-container',
                'loadMoreDestinations'
            );
        });

        // Event Listener untuk tombol Load More Blogs
        document.getElementById('loadMoreBlogs').addEventListener('click', function() {
            fetchMoreData(
                "{{ route('blogs.loadMore') }}",
                blogOffset,
                'blog-container',
                'loadMoreBlogs'
            );
        });
    });
</script>

<!-- Load Leaflet.js -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    // Inisialisasi peta
    var map = L.map('map').setView([5.54806, 95.323906], 13); // Koordinat Aceh (sesuaikan dengan lokasi Anda)

    // Menambahkan lapisan peta menggunakan OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Menambahkan marker ke peta
    var marker = L.marker([5.54806, 95.323906]).addTo(map)
        .bindPopup("<b>Destinasi Wisata</b><br>Tempat ini adalah tujuan wisata yang menarik!")
        .openPopup();

    // Fitur Zoom dan Pencarian
    map.zoomControl.setPosition('bottomright'); // Mengatur kontrol zoom di pojok kanan bawah
    map.on('click', function(e) {
        var latlng = e.latlng;
        marker.setLatLng(latlng).bindPopup("Lokasi baru: " + latlng.toString()).openPopup();
    });

    // Menambahkan kontrol pencarian lokasi
    var searchControl = L.control({
        position: 'topright'
    });
    searchControl.onAdd = function(map) {
        var div = L.DomUtil.create('div', 'search-control');
        div.innerHTML = '<input type="text" id="search" placeholder="Cari lokasi..." class="form-control">';
        L.DomEvent.addListener(div, 'click', function() {
            var searchText = document.getElementById('search').value;
            // Implementasikan logika pencarian berdasarkan text di input
        });
        return div;
    };
    searchControl.addTo(map);
</script>

<!-- Styling untuk search box -->
<style>
    .leaflet-container {
        font-family: 'ivystyle-sans', sans-serif;
    }

    .search-control {
        background: white;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    #search {
        width: 200px;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ddd;
    }

    .btn-primary {
        font-family: 'ivystyle-sans', sans-serif;
    }
</style>

@endsection