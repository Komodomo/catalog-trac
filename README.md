#TRAC Astra Rent A Car - Banjarmasin
Website katalog TRAC Astra Rent A Car cabang Banjarmasin. Website ini dibuat untuk membantu pengguna melihat daftar mobil yang tersedia untuk disewa di wilayah Kalimantan Tengah dan Kalimantan Selatan. Dengan tampilan yang mudah digunakan, pengguna dapat dengan cepat menelusuri dan menemukan mobil yang sesuai dengan kebutuhan mereka.

Fitur
Katalog Mobil: Tampilkan daftar mobil yang tersedia untuk disewa, lengkap dengan informasi tipe mobil, harga, dan ketersediaan.
Filter dan Pencarian: Pengguna dapat memfilter mobil berdasarkan kategori, seperti jenis kendaraan, harga, dan kapasitas.
Halaman Detail: Informasi lengkap tentang setiap mobil, termasuk foto, deskripsi, dan fitur spesifik mobil.
Halaman Kontak: Informasi kontak cabang Banjarmasin, dengan detail alamat, nomor telepon, dan email untuk pemesanan dan pertanyaan.
Responsive Design: Tampilan yang optimal di berbagai perangkat, baik desktop maupun mobile.
Teknologi yang Digunakan
Frontend: HTML, CSS, JavaScript, dan Tailwind CSS untuk desain responsif.
Backend: Laravel sebagai framework utama.
Database: SQLite/MySQL untuk penyimpanan data mobil dan pengguna.
Autentikasi: Laravel Breeze untuk login dan registrasi pengguna.
API Integration: API internal untuk pencarian dan pemfilteran data mobil.
Instalasi
Persyaratan
PHP >= 8.0
Composer
Node.js & npm
Langkah Instalasi
Clone repositori ini:

git clone https://github.com/username/trac-astra-catalog.git
Masuk ke direktori proyek:

cd trac-astra-catalog
Install dependencies backend dengan Composer:

composer install
Install dependencies frontend dengan npm:

npm install && npm run dev
Salin file .env.example menjadi .env dan sesuaikan konfigurasi database:

cp .env.example .env
Generate aplikasi key:

php artisan key:generate
Jalankan migrasi untuk membuat tabel database:

php artisan migrate
Jalankan server lokal:

php artisan serve
Buka http://localhost:8000 di browser Anda untuk melihat website katalog.

Penggunaan
Setelah website aktif, pengguna dapat langsung melihat daftar mobil yang tersedia.
Melalui halaman pencarian, pengguna dapat menggunakan filter untuk menemukan mobil sesuai keinginan.
Informasi lebih detail tersedia di halaman kontak untuk menyewa atau menghubungi cabang.
Kontribusi
Kontribusi terbuka untuk siapa saja yang ingin membantu pengembangan lebih lanjut dari proyek ini. Harap buat pull request dengan deskripsi yang jelas mengenai perubahan yang diajukan.

Lisensi
Proyek ini dilisensikan di bawah MIT License.

Kontak
Untuk pertanyaan lebih lanjut, silakan hubungi cabang TRAC Astra Rent A Car Banjarmasin melalui:

Alamat: [Alamat Cabang]
Telepon: [+62-xxx-xxxx-xxxx]
Email: [email@trac-astra.co.id]

