# ewallet

- E-Wallet ini dibuat dengan PHPMyAdmin dan MySQL. PHPMyAdmin digunakan untuk membuat database yang berkaitan dengan e-wallet tersebut. Sedangkan MySQL digunakan untuk membuat tampilan dan koneksi databasenya.

- Cara Kerjanya adalah sebagai berikut:
1. Buat database dengan nama ewallet dan tabel dengan nama user, user_balance, user_balance_history, balance_bank, dan balance_bank_history
2. Buat script:
a. add.php : untuk menambahkan data 
b. connect.php : untuk mengkoneksikan data yang diinput dari browser agar masuk ke database.
c. daftar.php : untuk registrasi/daftar ewallet
d. delete.php : untuk menghapus data yang sudah diinput
e. edit.php : untuk mengedit data yang telah diinput
f. index.php : berisi menu-login
g. index2.php : berisi menu Go to Mini E-Wallet, Topup Balance dan Logout
h. index3.php : berisi tampilan untuk topup balance
i. login.php : untuk login ke ewalley
j. logout.php : untuk logout dari ewallet
k. prosesdaftar.php : untuk memproses data yang mendaftar
j. proseslogin.php : untuk memproses data yang login
l. update.php : untuk memperbarui data yang diupdate
m. insert.php : untuk memproses data yang diinput agar masuk ke database
3. Untuk login ke ewallet klik localhost/ewallet2/login.php, masukkan username dan password lalu klik tombol Login. Apabila belum mendaftar, klik Register dan daftar terlebih dahulu.
4. Setelah login, terdapat 3 menu yaitu Go to Mini E-Wallet, Topup Balance dan Logout.
5. Go to Mini E-Wallet berisi data-data yang telah diinput. Terdapat pilihan Edit apabila ingin merubah isi data, dan terdapat pilihan Delete apabila ingin menghapus data. Data ini sudah otomatis masuk ke database. Dan apabila diDelete, juga otomatis akan terhapus dari database.
6. Apabila ingin topup balance, maka klik Topup Balance. Disana terdapat Balance sebelumnya dan kita dapat menambah balancenya dengan mengisikan di bagian topup. Dan secara otomatis jumlah balance akan bertambah di bagian balance_achieve.

- ewallet.php berisi database dari ewallet
