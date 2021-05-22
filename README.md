# Sistem Informasi Arsip Surat - developed by Skuy Ngoding
# -- Versi PHP 7.2.3

## Instalasi dan Konfigurasi

1. Ekstrak source code
2. Simpan folder sipas ke dalam folder htdocs
3. Buat database baru dengan nama ci3_sipas
4. Import semua.sql yang ada di folder backup/database ke database baru yang sudah dibuat

5. Login:
   - Admin : username => admin123 | password => admin123
   - User : username => user1234 | password => user1234
   
6. Konfigurasi Email
   - Buka File Auth.php di Folder Controller
   - Cari method_sendMail() => ganti email dan password sesuai dengan email yang anda miliki.
   - Login gmail anda, lalu klik menu _Manage Your Google Account_ ,
   - Pilih Security , Lalu Turn On Less secure app access
   - Kemudian cari file sendmail.ini di folder _xampp > sendmail > sendmail.ini_ lanjutkan konfigurasi seperti pada gambar1.png

### Lisensi dan Hak Cipta
# Personal Use :

Saya memberikan izin kepada anda untuk memodifikasi baik untuk menggunakan aplikasi ataupun untuk mempelajari basis kode yang ada. saya tidak memberikan izin untuk menyebarluaskan karya baik itu secara commercial maupun non-commercial.

# Royalty :

Anda boleh menjual kembali karya baik itu sudah ataupun belum dimodifikasi dengan syarat : Anda harus melakukan konfirmasi dan pembayaran kepada developer sesuai kesepakatan yang di tentukan.
Silahkan kontak email => ngodingskuy@gmail.com

!! Pelanggaran Hak Cipta : https://www.hukum-hukum.com/2016/05/pelanggaran-hak-cipta-dengan-ancaman.html