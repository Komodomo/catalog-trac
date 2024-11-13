# TRAC Astra Rent A Car - Banjarmasin

Website katalog TRAC Astra Rent A Car cabang Banjarmasin. Website ini dibuat untuk membantu pengguna melihat daftar mobil yang tersedia untuk disewa di wilayah Kalimantan Tengah dan Kalimantan Selatan. Dengan tampilan yang mudah digunakan, pengguna dapat dengan cepat menelusuri dan menemukan mobil yang sesuai dengan kebutuhan mereka.

## Fitur

- **Katalog Mobil**: Tampilkan daftar mobil yang tersedia untuk disewa, lengkap dengan informasi tipe mobil, harga, dan ketersediaan.
- **Filter dan Pencarian**: Pengguna dapat memfilter mobil berdasarkan kategori, seperti jenis kendaraan, harga, dan kapasitas.
- **Halaman Detail**: Informasi lengkap tentang setiap mobil, termasuk foto, deskripsi, dan fitur spesifik mobil.
- **Halaman Kontak**: Informasi kontak cabang Banjarmasin, dengan detail alamat, nomor telepon, dan email untuk pemesanan dan pertanyaan.
- **Responsive Design**: Tampilan yang optimal di berbagai perangkat, baik desktop maupun mobile.

## Teknologi yang Digunakan

- **Frontend**: HTML, CSS, JavaScript, dan [Tailwind CSS](https://tailwindcss.com/) untuk desain responsif.
- **Backend**: [Laravel](https://laravel.com/) sebagai framework utama.
- **Database**: MySQL untuk penyimpanan data mobil dan pengguna.
- **Autentikasi**: Laravel Breeze untuk login dan registrasi pengguna.
- **API Integration**: API internal untuk pencarian dan pemfilteran data mobil.

## Instalasi

### Persyaratan

- PHP >= 8.0
- Composer
- Node.js & npm

### Langkah Instalasi

1. Clone repositori ini:

   ```bash
   git clone https://github.com/username/trac-astra-catalog.git
   ```

2. Masuk ke direktori proyek:

   ```bash
   cd trac-astra-catalog
   ```

3. Install dependencies backend dengan Composer:

   ```bash
   composer install
   ```

4. Install dependencies frontend dengan npm:

   ```bash
   npm install && npm run dev
   ```

5. Salin file .env.example menjadi .env dan sesuaikan konfigurasi database:

   ```bash
   cp .env.example .env
   ```

6. Generate aplikasi key:

   ```bash
   php artisan key:generate
   ```

7. Jalankan migrasi dan run server lokal

   ```bash
   php artisan migrate
   php artisan serve
   ```
## Kontak

Untuk pertanyaan lebih lanjut, silakan hubungi cabang TRAC Astra Rent A Car Banjarmasin melalui:

- **Alamat**:  
  Jl. A. Yani, Km. 17, 9 RT 11 / RW 03 Kel. Landasan Ulin Barat Kec. Liang Anggang, Kayu Bawang, Kec. Gambut, Kabupaten Banjar, Kalimantan Selatan 70722

- **Telepon**:  
  (0511)4280000

- **Email**:  
  email@trac-astra.co.id


