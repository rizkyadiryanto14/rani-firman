##########################
Sistem Informasi Bawaslu
##########################

Sistem Informasi Bawaslu adalah sebuah aplikasi berbasis web yang dirancang untuk mengelola dan mengunggah file-file penting di lingkungan Bawaslu. Aplikasi ini memiliki fitur pengelolaan file yang dapat diatur oleh admin untuk diakses publik atau hanya oleh pengguna terdaftar.

Fitur Utama
-----------
- **Unggah File Penting**: Admin dapat mengunggah file penting dan menentukan aksesibilitasnya.
- **Akses Publik atau Login**: Jika file diberi tanda centang oleh admin, file dapat diunduh oleh publik. Jika tidak, pengguna diarahkan ke halaman login.
- **Manajemen Pengguna**: Admin dapat mengelola data petugas.

Teknologi yang Digunakan
------------------------
- **Framework**: CodeIgniter 3
- **Bahasa Pemrograman**: PHP 7.4
- **Web Server**: XAMPP versi 8.0
- **Dependency Manager**: Composer

Unduh perangkat yang dibutuhkan:
- `XAMPP <https://www.apachefriends.org/download.html>`_
- `Composer <https://getcomposer.org/download/>`_

Server Requirements
-------------------
- PHP 7.4 atau yang lebih baru
- XAMPP versi 8.0

Panduan Penggunaan
------------------
1. **Admin**:
- **Kelola Files**: Admin dapat menambahkan file baru dan menentukan apakah file dapat diakses publik atau memerlukan login.
- **Kelola Petugas**: Admin dapat menambah, mengedit, dan menghapus data petugas.

2. **Petugas**:
- **Kelola File (Read Only)**: Petugas hanya memiliki akses baca terhadap file yang ada.

3. **Publik**:
- File yang diunggah dan diatur untuk publik dapat diakses dan diunduh melalui halaman informasi publik.
- Jika file tidak diizinkan untuk publik, pengguna akan diarahkan ke halaman login.


Installation
------------
Ikuti langkah-langkah berikut untuk menginstal dan menjalankan aplikasi:

1. **Clone Repository**:
   Clone proyek ini ke direktori `c:/xampp/htdocs`:

2. **Nyalakan XAMPP**:
		Buka aplikasi XAMPP dan jalankan layanan **Apache** dan **MySQL**.

3. **Akses phpMyAdmin**:
		Buka phpMyAdmin melalui browser di `http://localhost/phpmyadmin`.

4. **Import Database**:
		- Buat database baru dengan nama sesuai konfigurasi Anda.
		- Import file database `.sql` yang disertakan dalam proyek ini.

5. **Konfigurasi Database**:
   Edit file konfigurasi database pada `application/config/database.php`:

   .. code-block:: php

       $db['default'] = array(
           'dsn'      => '',
           'hostname' => 'localhost',
           'username' => 'root',
           'password' => '',
           'database' => 'bawaslu_sumbawa',
           'dbdriver' => 'mysqli',
           'dbprefix' => '',
           'pconnect' => FALSE,
           'db_debug' => (ENVIRONMENT !== 'production'),
           'cache_on' => FALSE,
           'cachedir' => '',
           'char_set' => 'utf8',
           'dbcollat' => 'utf8_general_ci',
           'swap_pre' => '',
           'encrypt'  => FALSE,
           'compress' => FALSE,
           'stricton' => FALSE,
           'failover' => array(),
           'save_queries' => TRUE
       );

6. **Jalankan Composer Install**:
   Pastikan Composer telah diinstal di sistem Anda. Jika belum, unduh dan instal melalui `Composer <https://getcomposer.org/download/>`_. Setelah itu, jalankan perintah berikut di direktori proyek:



Project Folder Structure
------------------------
Berikut adalah struktur direktori proyek:

.. code-block:: text

   Sistem Informasi Bawaslu/
   ├── admin
   │   ├── Kelola Files
   │   ├── Kelola Petugas
   │
   ├── petugas
   │   ├── Kelola File (Read Only)
   │
   ├── file
   │   └── [File yang diunggah akan disimpan di sini]




