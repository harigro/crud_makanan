# Aplikasi CRUD Data Makanan

Aplikasi CRUD (Create, Read, Update, Delete) untuk mengelola data makanan, yang terdiri dari ID, nama makanan, dan harga.

## Struktur Direktori

```arduino
project_root/
│
├── bs.5.3./
│   ├── bootstrap.min.css
│   ├── bootstrap.bundle.min.js
│   ├── js/
│   │   └── script.js
│
├── api/
│   ├── create.php
│   ├── read.php
│   ├── delete.php
│   └── update.php
│
├── index.php
├── config.php
└── README.md
```

## Deskripsi File

1. **bs.5.3.3/**: Folder ini berisi file terkait Bootstrap untuk desain dan interaksi frontend:
   
   - `bootstrap.min.css`: File CSS untuk styling halaman.
   - `bootstrap.bundle.min.js`: File JavaScript untuk fungsionalitas interaktif Bootstrap.
   - `js/script.js`: File JavaScript untuk interaksi khusus di aplikasi ini.

2. **api/**: Folder ini berisi file PHP untuk operasi CRUD di backend:
   
   - `create.php`: File untuk menambahkan data makanan baru ke database.
   - `read.php`: File untuk membaca (menampilkan) data makanan dari database.
   - `delete.php`: File untuk menghapus data makanan dari database.
   - `update.php`: File untuk memperbarui data makanan di database.

3. **index.php**: Halaman utama aplikasi untuk menampilkan data makanan dan formulir untuk menambah, memperbarui, atau menghapus data.

4. **config.php**: File konfigurasi untuk menghubungkan aplikasi dengan database MySQL.

## Cara Menjalankan Aplikasi

1. **Persyaratan**:
   
   - PHP 7.0 atau lebih tinggi.
   - Server web seperti Apache.
   - MySQL untuk database.

2. **Langkah-langkah**:
   
   - Salin seluruh folder aplikasi ke dalam direktori root server web kamu.
   - Pastikan server web (misalnya XAMPP atau WAMP) berjalan dengan baik.
   - Sesuaikan konfigurasi database di file `config.php` dengan kredensial database kamu.
   - Akses aplikasi melalui browser di `http://localhost/nama_folder_aplikasi/`.

## Fitur

- Menambah data makanan baru (Create).
- Melihat data makanan yang ada (Read).
- Memperbarui data makanan yang ada (Update).
- Menghapus data makanan (Delete).

## Kontribusi

Jika kamu ingin berkontribusi pada aplikasi ini, silakan buat Pull Request atau buka Issue untuk diskusi.

## Lisensi

Aplikasi ini dirilis di bawah lisensi MIT. Lihat file `LICENSE` untuk informasi lebih lanjut.

```

Sesuaikan dengan kebutuhanmu, terutama bagian konfigurasi atau instruksi lebih lanjut jika ada.