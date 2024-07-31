<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

## To-Do App

To-Do App adalah aplikasi web berbasis Laravel yang dirancang untuk membantu Anda mengelola dan melacak tugas-tugas harian dengan mudah dan efisien. Dengan antarmuka yang bersih dan responsif, aplikasi ini memungkinkan pengguna untuk menambah, mengedit, menghapus, dan mencari tugas mereka.

### Fitur Utama

- **Autentikasi Pengguna**: Pendaftaran dan login pengguna dengan sistem autentikasi yang aman.
- **Manajemen Tugas**: Tambah, hapus, dan perbarui tugas dengan status "selesai" atau "belum selesai".
- **Pencarian dan Filter**: Cari tugas berdasarkan kata kunci.
- **Notifikasi dan Pesan**: Tampilkan umpan balik yang jelas untuk operasi berhasil atau gagal.
- **Antarmuka Responsif**: Desain antarmuka yang dapat diakses dari berbagai perangkat.

### Teknologi yang Digunakan

- **Laravel**: Framework PHP untuk pengembangan aplikasi web yang efisien.
- **Bootstrap**: Framework CSS untuk antarmuka pengguna yang modern dan responsif.
- **MySQL**: Sistem manajemen basis data untuk menyimpan data tugas dan pengguna.

### Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi ini di lingkungan lokal Anda:

1. **Clone Repository**:
    ```bash
    git clone https://github.com/wayhyou/todo-app-laravel.git
    cd repository
    ```

2. **Instal Dependensi**:
    ```bash
    composer install
    ```

3. **Konfigurasi .env**:
    Salin file `.env.example` ke `.env` dan sesuaikan pengaturan database dan aplikasi:
    ```bash
    cp .env.example .env
    ```

4. **Generate Key**:
    Jalankan perintah berikut untuk menghasilkan kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

5. **Migrasi Database**:
    Jalankan migrasi untuk membuat tabel yang diperlukan di database:
    ```bash
    php artisan migrate
    ```

6. **Mulai Server**:
    Jalankan server lokal dan buka aplikasi di browser:
    ```bash
    php artisan serve
    ```
    Akses aplikasi di [http://localhost:8000](http://localhost:8000).

### Penggunaan

- **Login**: Gunakan fitur login untuk mengakses aplikasi.
- **Manajemen Tugas**: Setelah login, Anda dapat menambah, mengedit, dan menghapus tugas. Gunakan fitur pencarian untuk menemukan tugas dengan cepat.
- **Profil Pengguna**: Anda dapat mengubah nama dan password melalui pengaturan profil.

### Kontribusi

Kontribusi sangat diterima! Jika Anda memiliki saran atau perbaikan, buka issue atau kirimkan pull request.

**Cara Berkontribusi**:
1. Fork repositori ini.
2. Buat cabang (branch) baru untuk fitur atau perbaikan yang Anda usulkan.
3. Kirimkan pull request dengan deskripsi perubahan yang Anda buat.

### Lisensi

Proyek ini dilisensikan di bawah MIT License.

### Kontak

Jika Anda memiliki pertanyaan atau masukan, silakan hubungi saya di [ekow60006@gmail.com](mailto:ekow60006@gmail.com).
