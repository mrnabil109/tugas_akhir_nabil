-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2024 pada 09.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep_makanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bahan_baku`
--

CREATE TABLE `tb_bahan_baku` (
  `id_bahan` int(11) NOT NULL,
  `jenis_bahan_baku` varchar(200) NOT NULL,
  `nama_bahan_baku` text NOT NULL,
  `penyimpanan_bahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bahan_baku`
--

INSERT INTO `tb_bahan_baku` (`id_bahan`, `jenis_bahan_baku`, `nama_bahan_baku`, `penyimpanan_bahan`) VALUES
(1, 'Nabati', 'Wortel', 'frezeer'),
(2, 'hewani', 'daging sapi', 'freezer'),
(3, 'protein', 'telur ayam', 'freezer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu_makanan`
--

CREATE TABLE `tb_menu_makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` text NOT NULL,
  `jenis_makanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_menu_makanan`
--

INSERT INTO `tb_menu_makanan` (`id_makanan`, `nama_makanan`, `jenis_makanan`) VALUES
(4, 'Pizza  us', 'Fast Food'),
(5, 'Rendang', 'Semi basah'),
(6, 'Maccaron', 'Dessert'),
(7, 'soto ayam', 'appetizer'),
(8, 'pisang goreng madu', 'appetizer'),
(13, 'pudding', 'dessert'),
(17, 'ayam goreng', 'Tradisional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_resep_makanan`
--

CREATE TABLE `tb_resep_makanan` (
  `id_resep_makanan` int(200) NOT NULL,
  `id_menu_makanan` int(11) NOT NULL,
  `nama_resep_makanan` text NOT NULL,
  `dekripsi` text NOT NULL,
  `bahan_bahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_resep_makanan`
--

INSERT INTO `tb_resep_makanan` (`id_resep_makanan`, `id_menu_makanan`, `nama_resep_makanan`, `dekripsi`, `bahan_bahan`) VALUES
(1, 1, 'cordon blue', '1.Belah 2 fillet dada ayam, belah mendatar setiap bagian sehingga terdapat 8 potong ayam.\r\n2.Pipihkan setiap potong ayam dengan cara dipukul-pukul menggunakan meat hammer.\r\n3.Lumuri setiap potong ayam dengan garam dan merica. Taruh sepotong keju mozzarella dan smoked beef. Gulung ayam hingga isi tertutup.\r\n4.Lumuri gulungan ayam dengan tepung bumbu, celupkan dalam telur kocok dan gulingkan dalam tepung roti.\r\n5.Goreng ayam dengan minyak panas banyak dalam wajan datar hingga matang dan berwarna kuning keemasan. Angkat, tiriskan.\r\n6.Sajikan chicken cordon bleu dengan saus bbq, mayones, kentang goreng dan salad sayuran.', '1.400 g fillet dada ayam\r\n2.½ sdt garam\r\n3.½ sdt merica bubuk\r\n4.8 potong keju mozzarella \r\n5.8 lembar smoked beef\r\n6.100 g tepung bumbu\r\n7.2 butir telur, kocok lepas\r\n8.200 g tepung roti kasar\r\n9.minyak goreng'),
(2, 2, 'pizza italian style', '1. Campurkan ragi dan gula ke dalam air hangat. Aduk menggunakan garpu. Diamkan di tempat yang hangat selama kurang lebih 10 menit. 2. Campurkan tepung serbaguna yang sudah diayak dengan garam di sebuah mangkuk besar. Campurkan dengan minyak zaitun dan aduk selama dua menit. 3. Tuang adonan ragi ke dalam telur kocok. Aduk-aduk hingga adonan menjadi kaku. Campurkan dengan adonan tepung serbaguna. 4. Siapkan meja dengan permukaan yang sudah ditaburi dengan tepung. Uleni sampai kenyal. Menguleni adonan kira-kira membutuhkan waktu sampai delapan menit. 5. Taruh adonan pizza ke dalam mangkuk yang sudah diolesi dengan minyak zaitun. Tutup dengan plastic wrap. 6. Biarkan adonan mengembang hingga dua kali lipat atau selama satu jam. 7. Kalau sudah mengembang pukul dan gulung, kemudian sesuaikan dengan bentuk yang diinginkan.\r\n', '1.1 ½ sdt ragi aktif\r\n2.½ sdt gula\r\n3.118 ml air hangat\r\n4.272 gram tepung serbaguna, ayak sebelum dipakai\r\n5.½ sdt garam\r\n6.2 sdm minyak zaitun\r\n7.1 butir telur, kocok\r\n\r\n'),
(3, 0, 'pizza american style', '1.Untuk membuat adonan, masukkan air ke dalam mangkuk mixer dan tambahkan ragi. Aduk hingga larut dengan jari sebelum memasang pengaduk adonan dan menyetelnya ke kecepatan terendah.\r\n2.Tambahkan tepung sedikit demi sedikit ke dalam mangkuk, tambahkan garam sekitar setengah waktu penambahan tepung. Terus aduk dengan kecepatan paling rendah selama 3-4 menit.\r\n4.Matikan mixer, tambahkan minyak zaitun ke mangkuk dan diamkan adonan selama 10 menit.\r\n5.Olesi meja kerja dengan minyak zaitun sebelum membagi adonan menjadi potongan-potongan seberat 240g dan letakkan di atas permukaan yang sudah diolesi minyak. Bentuk setiap potongan menjadi bola adonan, pindahkan bola-bola adonan ke dalam baki atau wadah kedap udara dan simpan dalam lemari es selama 24 jam.\r\n6.Diamkan bola adonan pada suhu ruangan selama sekitar 1-2 jam sebelum membukanya menjadi pizza (penting untuk memberi waktu pada gluten untuk beristirahat, tetapi lamanya waktu yang dibutuhkan akan bergantung pada seberapa panas atau dingin lingkungan tersebut!).\r\n7.oven harus benar-benar jenuh dengan panas dengan api yang dikecilkan – Anda mungkin perlu menaikkannya sedikit di antara pemanggangan untuk memastikan lantai batu berada pada suhu yang diinginkan (sekitar 350 pada dial 400-420 derajat pada lantai batu).\r\n8.Dalam mangkuk, campurkan segenggam tepung 00 dan segenggam semolina sebelum dengan hati-hati memasukkan bola adonan ke dalam mangkuk dan melapisinya dengan campuran tepung\r\n9.buka adonan menjadi kulit pizza sebelum menambahkan topping dan memindahkannya ke kulit pizza oven Anda. Masukkan pizza ke dalam oven  Anda dan panggang selama sekitar 4 1/2 menit, putar dan balik secara teratur.', '1.3,25 cangkir (360 gram) tepung roti\r\n2.2 sdt ragi kering aktif\r\n3.1 cangkir ditambah 2 sdm (256 ml) air hangat dalam botol\r\n4.3 sdm minyak zaitun\r\n5.2 sdt garam dapur\r\n6.1 sdm gula\r\n7.2 sdm minyak zaitun\r\n8.1,5 cangkir tomat yang dihancurkan\r\n9.3 sdm pasta tomat\r\n10.1 sdt bumbu Italia\r\n11.3 siung bawang putih, cincang\r\n12.16 ons keju mozzarella, diiris\r\n13.3 sdm keju parmesan parut\r\n14.3 sdm keju Romano parut'),
(4, 0, 'burger', '1.Langkah pertama tumis bawang bombay dan iris tipis, lalu sisihkan.\r\n2.Siapkan mentega, saus tiram, dan tumisan bawang bombay. Masak sebentar, sisihkan lalu dinginkan.\r\n3.Kemudian ambil adonan daging cincang, bentuk bulat, lalu sisihkan.\r\n4.Panggang di atas teflon lalu bolak-balik hingga matang.\r\n5.Tata roti burger dengan selada daging, mentimun, serta tomat. Lalu tambahkan mayonnaise, campur dengan saus sambal pada lapisan beef burger, tutup dengan roti.\r\n6.Beef burger sudah siap disajikan selagi dingin.\r\n', '1.2 sdm minyak goreng.\r\n2.1 siung bawang bombay.\r\n3.2 sdm mentega.\r\n4.4 sdm saus tiram.\r\n5.200 gr daging cincang.\r\n6.1 butir telur.\r\n7.1 bungkus tepung terigu.\r\n8.1 buah roti burger.\r\n9.Selada secukupnya.\r\n10.Mentimun secukupnya.\r\n11.Tomat secukupnya.\r\n12.Mayonnaise secukupnya.'),
(5, 0, 'rendang', '1.Gunakan bagian daging sapi yang memang cocok untuk dimasak lama. Bagian ini biasanya banyak mengandung otot sehingga teksturnya keras dan butuh waktu lama untuk empuk.\r\n2.Pilih wajan yang dasarnya tebal supaya rendang tidak mudah gosong di bagian dasar panci. Pilih wajan tradisional yang terbuat dari material aluminum atau kamu juga bisa memilih wajan atau panci berbahan cast iron atau besi cor\r\n3.Saat bumbu rendang mulai mengental, kecilkan api dan kembali masak rendang hingga kandungan airnya habis. Dengan begitu daging empuk bersamaan dengan rendang mulai mengering.\r\n4.Hindari mengaduk terlalu sering supaya potongan daging tidak mudah hancur. Saat bumbu rendang daging mulai mengental, aduk perlahan dengan cara bumbu disiram-siramkan ke daging.', '1.600g daging sapi bagian sengkel, potong kotak 5 cm\r\n2.3 lembar daun jeruk\r\n3.2 batang serai, memarkan\r\n4.2 lembar daun salam\r\n5.2.5 Liter air\r\n6.130 ml santan instan\r\n7.1 sdm Royco Kaldu Sapi\r\n8.2.5 sdm garam\r\n9.5 sdm minyak, untuk menumis\r\nBumbu halus\r\n1.120 g cabai merah keriting\r\n2.15 butir bawang merah\r\n3.10 siung bawang putih\r\n4.3 lengkuas\r\n5.2 cm kunyit\r\n6.1 cm jahe\r\n'),
(6, 0, 'soto ayam', '1.Didihkan air, rebus ayam dengan api kecil hingga daging ayam hampir lunak.\r\n2.Tumis bumbu halus bersama daun jeruk, daun salam, serai dan aduk hingga matang dan harum. Angkat.\r\n3.Masukkan ke dalam rebusan ayam.\r\n4.Rebus dengan api kecil hingga daging ayam lunak.\r\n5.Angkat ayam, tiriskan hingga agak kering.\r\n6.Goreng ayam sebentar hingga bagian luarnya kering. Tiriska\r\n7.Suwir daging ayam kasar-kasar.\r\n8.Susun ayam, suun, tauge dalam mangkuk saji.\r\n9.Tuangi kaldu panas.\r\n10.Sajikan dengan daun bawang, bawang goreng, sambal rawit dan jeruk nipis.\r\n\r\n', '1.1/2 ekor ayam kampung, potong dua\r\n2.1.5 liter air\r\n3.3 sdm minyak sayur\r\n4.1 batang serai, memarkan\r\n5.2 lembar daun jeruk\r\nBumbu Halus:\r\n6.5 butir bawang putih\r\n7.3 siung bawang merah\r\n8.4 butir kemiri\r\n9.3 cm kunyit\r\n10.1 cm jahe\r\n11.1/2 sdt merica butiran\r\n12.2 sdt garam\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`) VALUES
(3, 'anto', '7447', NULL),
(4, 'budi', '9875', NULL),
(5, 'admin', '$2y$10$.2XekXtCKb6DImW7xdxBOegXBhCfC8gCY5MBoPqMSRFCCARObgLhq', 'user'),
(6, 'jajang', '$2y$10$rGuG6ibmOl9DyS2H0x4d/uvHPO9d2jgUUG/40ljyRerPYDY9HiMAG', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bahan_baku`
--
ALTER TABLE `tb_bahan_baku`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indeks untuk tabel `tb_menu_makanan`
--
ALTER TABLE `tb_menu_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `tb_resep_makanan`
--
ALTER TABLE `tb_resep_makanan`
  ADD PRIMARY KEY (`id_resep_makanan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bahan_baku`
--
ALTER TABLE `tb_bahan_baku`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_menu_makanan`
--
ALTER TABLE `tb_menu_makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_resep_makanan`
--
ALTER TABLE `tb_resep_makanan`
  MODIFY `id_resep_makanan` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
