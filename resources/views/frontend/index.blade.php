<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcehExplore - Jelajahi Keindahan Aceh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <style>
        .hero-section {
            position: relative;
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                        url("/storage/image/kilometer 0.jpg");
            background-size: cover;
            background-position: center;
            color: white;
        }

        .navbar-custom {
            background-color: white;
            padding: 1rem 2rem;
        }

        .destination-card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .destination-card:hover {
            transform: translateY(-5px);
        }

        .destination-card img {
            height: 200px;
            object-fit: cover;
        }
        
        /* New styles */
        .map-section {
            background-color: #f8f9fa;
            padding: 3rem 0;
        }

        .blog-card {
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .testimonial-card {
            text-align: center;
            padding: 2rem;
            border-radius: 15px;
            background: white;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .testimonial-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 1rem;
        }

        .faq-section {
            background-color: white;
            padding: 3rem 0;
        }

        .faq-card {
            border: none;
            margin-bottom: 1rem;
        }

        .cta-section {
            background-color: #4263EB;
            color: white;
            padding: 3rem 0;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 3rem 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">AcehExplore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                <a class="nav-link" href="#">sign In</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
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
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <span class="me-2">✈️</span>
                <h2 class="mb-0">Temukan Destinasi Favoritmu</h2>
            </div>
            
            <div class="row g-4">
                <!-- Destination Card 1 -->
                <div class="col-md-3">
                    <div class="card destination-card shadow-sm">
                    <img src="{{ asset('storage/image/skcp.jpg') }}" class="card-img-top" alt="skcp">
                        <div class="card-body">
                            <h5 class="card-title">air terjun skcp</h5>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 2 -->
                <div class="col-md-3">
                    <div class="card destination-card shadow-sm">
                        <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd" class="card-img-top" alt="Takengon">
                        <div class="card-body">
                            <h5 class="card-title">Takengon</h5>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 3 -->
                <div class="col-md-3">
                    <div class="card destination-card shadow-sm">
                        <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd" class="card-img-top" alt="Sabang">
                        <div class="card-body">
                            <h5 class="card-title">Sabang</h5>
                        </div>
                    </div>
                </div>

                <!-- Destination Card 4 -->
                <div class="col-md-3">
                    <div class="card destination-card shadow-sm">
                        <img src="https://images.unsplash.com/photo-1596402184320-417e7178b2cd" class="card-img-top" alt="Sabang">
                        <div class="card-body">
                            <h5 class="card-title">Sabang</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
        <p class="text-center mb-2 fs-6 fw-Bold text-primary" style="font-family: ivystyle-sans, sans-serif;font-weight: 200; font-style: normal;">CARI TEMPAT WISATA</p>
            <p class="text-center mb-5 fs-2 fw-Bold" style="font-family:ivystyle-sans, sans-serif;font-weight: 700; font-style: normal;">📍 Cari Tempat Wisata Disekitarmu</p>
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('storage/image/peta.png') }}" class="img-fluid rounded" alt="peta">
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="py-5">
        <div class="container">
            <h4 class="mb-4">📝 Galeri Pariwisata & Blog Travel</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-card shadow-sm">
                        <img src="/api/placeholder/400/300" alt="Blog 1">
                        <div class="card-body">
                            <h5>Keindahan Pantai Aceh</h5>
                            <p class="text-muted">Jelajahi keindahan pantai-pantai tersembunyi di Aceh</p>
                        </div>
                    </div>
                </div>
                <!-- Add more blog cards as needed -->
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <p class="text-center mb-2 fs-6 fw-Bold text-primary" style="font-family: ivystyle-sans, sans-serif;font-weight: 200; font-style: normal;">TESTIMONIAL EXPLOREACEH</p>
            <p class="text-center mb-2 fs-2 fw-Bold" style="font-family: ivystyle-sans, sans-serif;font-weight: 700; font-style: normal;">💬 Apa Kata Mereka Tentang Kami</p>
            <p class="text-center mb-4 fs-7 fw-Bold" style="font-family: ivystyle-sans, sans-serif;font-weight: 200; font-style: normal;">Penasaran apa saja review dari pengguna yang memakai aplikasi dan website Aceh buat <br>nentuin kemana liburan mereka selanjutnya? Yuk cek dibawah!</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                    <img src="{{ asset('storage/image/ica_mi.jpg') }}" alt="ica_mi" class="image-class rounded-circle" width="120" height="120">
                        <h5>Nashwa</h5>
                        <p class="text-muted">Traveler</p>
                        <p>"Pengalaman yang luar biasa menggunakan layanan AcehExplore!"</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                    <img src="{{ asset('storage/image/ica_mi.jpg') }}" alt="ica_mi" class="image-class rounded-circle" width="120" height="120">
                        <h5>Ibnu Sina</h5>
                        <p class="text-muted">Traveler</p>
                        <p>"Pengalaman yang luar biasa menggunakan layanan AcehExplore!"</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                    <img src="{{ asset('storage/image/ica_mi.jpg') }}" alt="ica_mi" class="image-class rounded-circle" width="120" height="120">
                        <h5>Chairunnisa</h5>
                        <p class="text-muted">Traveler</p>
                        <p>"Pengalaman yang luar biasa menggunakan layanan AcehExplore!"</p>
                    </div>
                </div> 
                <!-- Add more testimonial cards as needed -->
            </div>
        </div>
    </section>

    <section class="pu-5 bg-light">
        <div class="container">
        </div>
        <div class="container my-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h5>Bagikan Komentarmu</h5>
    </div>
    <div class="card-body">
      <!-- Form Komentar -->
      <form id="commentForm" class="mb-4">
        <div class="form-group">
          <textarea
            id="commentInput"
            class="form-control"
            rows="3"
            placeholder="Tulis komentar di sini..."
            required
          ></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Kirim Komentar</button>
      </form>
      
      <!-- Daftar Komentar -->
      <div id="commentsList">
        <h6>Komentar:</h6>
        <ul id="commentsContainer" class="list-group"></ul>
      </div>
    </div>
  </div>
</div>
        
    </section>

    <!-- FAQ Section -->
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h3 class="text-primary mb-4">🤔 Pertanyaan yang Sering Diajukan</h3>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Info Penginapan Terdekat nya bang 😄
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Akses ke sana mudah nggak ya bang? 😅😂
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Kenapa harus memilih AcehExplore?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Apa rekomendasi tempat buat orang yang jomblo? 😜
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Afa iyah bang? Gapeduli! 🤣
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Masih bingung cari tempat yang cocok?</h3>
                    <p>Kami siap membantu Anda menemukan destinasi impian!</p>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-light btn-lg">Hubungi Kami</button>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>