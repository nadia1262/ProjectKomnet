# Simple E-Learning using CRUD

This project is used as a portfolio to fulfill tasks at the selection stage for the Komputasi.net open recruitment

Disclaimer: Project ini hanya berjalan di local computer, belum dinaikkan secara online/public sehingga dalam pengumpulan tugas, saya sertakan export database yang saya gunakan. Terima kasih sebelumnya.

## Sourcecode

- You also can access the sourcecode with this following github link [ProjectKomnet](https://github.com/nadia1262/ProjectKomnet.git)

## Demo

http://localhost:80

Running XAMPP

![App Screenshot](../README/xampp%20running.jpg)

Running on local port 80
![App Screenshot](../README/localhost80.jpg)

Login Page
![App Screenshot](../README/loginpage.jpg)

Jika login sebagai user, maka akan redirecting ke user-page
![App Screenshot](../README/userlogin.jpg)

![App Screenshot](../README/userpageclass.jpg)

![App Screenshot](../README/userpageclassA.jpg)

Jika login sebagai admin, maka akan redirecting ke admin-page
![App Screenshot](../README/adminlogin.jpg)

![App Screenshot](../README/adminpage.jpg)

## Features

- Create (Buat)

  Jalankan program dengan pilih button "Tambah Data Siswa" pada admin-page
  ![App Screenshot](../README/create1.jpg)

  Redirecting ke halaman tambah.php
  ![App Screenshot](../README/create2.jpg)

  Tambahkan data siswa baru kemudian submit dan muncul alert "Data Berhasil Ditambahkan"
  ![App Screenshot](../README/create3.jpg)

  ![App Screenshot](../README/create4.jpg)

  ![App Screenshot](../README/create5.jpg)

- Read (Baca)

  Menampilkan informasi semua siswa terdaftar dengan detail informasi siswa berdasarkan id

  Data ditampilkan di admin-page dan user-page sesuai dengan data yang terinput di database

  ![App Screenshot](../README/database_student.png)

  ![App Screenshot](../README/read1.png)

  ![App Screenshot](../README/read2.png)

- Update (Perbarui)

  Program dijalankan dengan memilih button "Ubah" pada admin-page

  ![App Screenshot](../README/update1.png)

  Redirecting ke halaman ubah.php

  ![App Screenshot](../README/update2.png)

  Mengubah informasi siswa berdasarkan id kemudian submit perubahan, akan muncul alert "Data Berhasil Diubah" dan database otomatis berubah sesuai request

  ![App Screenshot](../README/update3.png)

  ![App Screenshot](../README/update4.png)

- Delete (Hapus)

  Program dijalankan dengan memilih button "Hapus" pada admin-page
  ![App Screenshot](../README/delete1.png)

  Menghapus data siswa berdasakan id dan muncul alert "Data Berhasil Dihapus" dan data siswa terkait akan hilang dari tabel database

  ![App Screenshot](../README/delete2.png)

  ![App Screenshot](../README/delete3.png)

- Search (Cari)
  Program dijalankan dengan mengisikan keyword pencarian pada form pencarian
  ![App Screenshot](../README/search1.png)

  Keyword dapat berupa apa saja yang terkait nama, nisn, ttl, dan email pada dataset dan page akan merespon sesuai request

  ![App Screenshot](../README/search2.png)

  ![App Screenshot](../README/search3.png)
