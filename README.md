
# Aceh Explore 🌍
Aceh Explore adalah platform berbasis web yang dirancang untuk membantu wisatawan menjelajahi keindahan alam, budaya, dan destinasi menarik di Aceh. Website ini dilengkapi dengan fitur pencarian lokasi wisata, blog perjalanan, ulasan pengguna, dan lainnya untuk memberikan pengalaman terbaik bagi pengguna.

## Fitur Utama 🚀
- **Destinasi Wisata:** Jelajahi berbagai destinasi wisata populer di Aceh.
- **Peta Interaktif:** Temukan lokasi wisata terdekat dengan peta interaktif.
- **Blog Travel:** Baca cerita perjalanan dan tips wisata dari para traveler.
- **Testimonial:** Ulasan dari pengguna yang telah menggunakan layanan Aceh Explore.
- **FAQ:** Jawaban atas pertanyaan umum seputar layanan dan destinasi wisata.

---

## Instalasi 🛠️
Berikut langkah-langkah untuk menginstal dan menjalankan proyek ini di lokal Anda:

### Prasyarat
Pastikan Anda telah menginstal software berikut di komputer Anda:
1. PHP versi 8.2 atau lebih baru
2. Composer
3. Node.js dan npm
4. MySQL atau database lain yang didukung oleh Laravel
5. Server lokal seperti XAMPP, Laragon, atau Valet

### Langkah Instalasi
1. **Clone Repository**
   ```bash
   git clone https://github.com/username/AcehExplore.git
   cd AcehExplore
   ```

2. **Instal Dependency Laravel**
   Jalankan perintah berikut untuk menginstal dependency backend:
   ```bash
   composer install
   ```

3. **Instal Dependency Frontend**
   Jalankan perintah berikut untuk menginstal dependency frontend:
   ```bash
   npm install && npm run dev
   ```

4. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Edit file `.env` dan tambahkan konfigurasi berikut:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=aceh_explore
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Key Aplikasi**
   ```bash
   php artisan key:generate
   ```

6. **Migrasi Database**
   Buat database baru dengan nama `aceh_explore`, kemudian jalankan migrasi:
   ```bash
   php artisan migrate --seed
   ```

7. **Menjalankan Server Lokal**
   Jalankan perintah berikut untuk memulai server Laravel:
   ```bash
   php artisan serve
   ```

   Website dapat diakses melalui [http://localhost:8000](http://localhost:8000).

---

## Struktur Direktori Proyek 📁
- **app/Models:** Model Laravel untuk data seperti destinasi dan blog.
- **resources/views:** Tampilan halaman utama, blog, dan lainnya.
- **public/storage:** Direktori untuk menyimpan file gambar seperti destinasi dan blog.
- **routes/web.php:** File konfigurasi rute aplikasi.

---

## Teknologi yang Digunakan 🧰
- **Backend:** Laravel 11
- **Frontend:** Blade, Bootstrap 5, Leaflet.js (untuk peta interaktif)
- **Database:** MySQL
- **Tools:** Composer, npm

---

## Cara Kontribusi 🤝
Kami terbuka untuk kontribusi! Jika Anda ingin membantu, ikuti langkah berikut:
1. Fork repository ini.
2. Buat branch baru: `git checkout -b fitur-baru`.
3. Commit perubahan Anda: `git commit -m 'Menambahkan fitur baru'`.
4. Push ke branch: `git push origin fitur-baru`.
5. Ajukan pull request.

---

## Lisensi 📄
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---