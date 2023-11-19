-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 03:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-mynovel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Romance'),
(2, 'Fantasy'),
(3, 'History'),
(4, 'Thriller'),
(5, 'Horror');

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id_novel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ket` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id_novel`, `id_kategori`, `id_penulis`, `judul`, `ket`, `harga`) VALUES
(2, 1, 3, 'Claires', 'Claire tidak pernah tahu bahwa pertemuan singkatnya dengan sosok pria tampan yang tinggi semampai dengan kulit putih pucat itu akan berujung pada perang perasaan dengan hatinya sendiri. Ya, Ares Nota. Dia tidak akan pernah berhenti mengekori seorang Claire Paveitria. Awalnya, si kasanova hanya berniat untuk bermain-main dengan Claire. Lucu juga isengin cewek orang, pikirnya. Tahu betapa sempurnanya hubungan yang dimiliki Claire dan kekasihnya Kai semakin membuat Ares gatal untuk menguji sesempurna apa hubungan yang mereka punya. Seperti menyiram minyak tanah pada api yang menyala, Ares seakan membuat api itu berkobar. Ares jatuh pada permainannya sendiri.', 79000),
(3, 1, 2, 'Metropop: Resign!', 'Kompetisi sengit terjadi di sebuah kantor konsultan di Jakarta. Empat anggota The Cungpret, alias kacung kampret, tak ada yang mengincar penghargaan pegawai terbaik, jabatan tertinggi, atau bonus terbesar. Namun mereka bertaruh dan saling sikut untuk resign! Cungpret #1: Alranita Pegawai termuda tapi paling lama bertahan di sebuah tim yang dipimpin Bos Galak. Cungpret #2: Carlo Pegawai yang baru menikah dan ingin mencari pekerjaan dengan gaji lebih tinggi. Cungpret #3: Karenina Pegawai senior yang selalu dianggap tidak becus tapi terus-menerus dijejali proyek baru. Cungpret #4: Andre Pegawai senior kesayangan si bos yang berniat resign demi dapat menikmati kehidupan keluarga yang lebih normal dan seimbang. Sang Bos: Tigran Genius, misterius, dan galak, tapi sukses dipercaya untuk memimpin timnya sendiri di usianya yang masih cukup muda. Resign harusnya tidak sulit dilakukan, kecuali kamu memiliki bos yang punya radar kelas kakap dan mampu menjegal setiap usaha The Cungpret untuk segera hengkang dari kepemimpinannya. Pertanyaannya, siapakah yang akan memenangkan taruhan dan terbebas dari hukuman yang sudah ditentukan?', 79000),
(4, 1, 1, 'City Lite: Requisition', 'KALAU TIDAK DILANDASI KEPERCAYAAN, APA LAGI YANG BISA DIHARAPKAN DARI SEBUAH HUBUNGAN? Awalnya hanya pertemuan bisnis biasa. Namun, sikap atraktif Fanny membuat Ryan menaruh perhatian, dan perasaannya bersambut. Dimulai dengan pertemuan pertama kemudian lanjut pertemuan lain yang lebih mendebarkan. Sejauh itu, Ryan merasa nyaman dengan hubungan mereka. Sampai kemudian dia mengambil langkah yang sebelumnya tak terpikirkan bahkan oleh dirinya sendiri. Sementara itu, Fanny mengira bahwa statusnya dengan Ryan hanya sebatas hubungan kasual seperti yang pernah dia jalani sebelumnya. Tetapi pertemuan mereka yang cukup intens membuat dia bisa melihat sisi Ryan yang di luar dugaan. Kendati begitu, Fanny masih melihat Ryan sebagai sosok womanizer yang sudah sangat lihai berurusan dengan perempuan, sehingga pernyataan cinta laki-laki itu hanya dianggapnya angin lalu. Lantas, kalau hanya sebatas itu penilaiannya, akhir seperti apa yang diharapkan Fanny atas hubungan mereka?', 88000),
(10, 1, 2, 'MetroPop: Ganjil Genap', 'Gimana rasanya diputusin setelah berpacaran selama tiga belas tahun? Hidup Gala yang mendadak jomblo semakin runyam ketika adiknya kebelet nikah! Gala bertekad pantang lajang menjelang umur kepala tiga. Bersama ketiga sahabatnya, Nandi, Sydney, dan Detira, strategi pencarian jodoh pun disusun. Darat, udara, bahkan laut “disisir” demi menemukan pria idaman. Akankah Gala berhasil menemukan pasangan untuk menggenapi hari-hari ganjilnya?', 79000),
(14, 2, 6, 'Bulan', 'Petualangan Raib, Seli, dan Ali berlanjut.Beberapa bulan setelah peristiwa klan bulan, Miss Selena akhirnya muncul di sekolah. Ia membawa kabar menggembirakan untuk anak-anak yang berjiwa petualang seperti Raib, Seli, dan Ali. Miss Selena bersama dengan Av akan mengajak mereka untuk mengunjungi klan matahari selama dua minggu. Av berencana akan bertemu dengan ketua konsil klan matahari, yang menguasai klan matahari sepenuhnya untuk mencari sekutu dalam menghadapi Tamus yang diperkirakan akan bebas dan juga membebaskan raja tanpa mahkota. Sesampainya mereka di Klan matahari, mereka disambut oleh festival bunga matahari. Hal yang tidak pernah disangka oleh Av dan Miss Selena adalah ketua konsil klan matahari yang meminta Raib, Seli, Ali, dan Ily untuk menjadi peserta ke-10 dari festival bunga matahari. Setelah perdebatan yang amat panjang, akhirnya rombongan Raib menerima tawaran itu.', 84000),
(17, 3, 4, 'Laut Bercerita', 'Novel terbagi menjadi dua bagian dan dua sudut pandang. Menceritakan sosok Biru Laut, bagian pertama menunjukkan segala kepedihan dan ketakutan sebagai aktivis kritis yang berani menyuarakan isu sosial pada medio 1991 sampai 1998. Kelompoknya dianggap berbahaya, mereka pun ditangkap, dihukum secara fisik dan mental. Bagian kedua bercerita mengenai sosok keluarga yang kehilangan saudara, Asmara Jati, dimulai dengan tahun 2000 sampai 2007.', 92000),
(22, 1, 2, 'Home Sweet Loan', 'Novel Home Sweet Loan mengangkat genre yang sama dengan karya Almira sebelumnya yang berjudul “Ganjil Genap”, yaitu metropop. Namun, novel Home Sweet Loan ini akan menyajikan cerita yang ditulis menjadi lebih serius.\r\n\r\nLayaknya novel-novel karya Almira sebelumnya, Home Sweet Loan menggunakan latar cerita di Kota Jakarta. Namun, cerita kali ini lebih menyoroti kaum menengah dengan mengisahkan perjuangan dari sudut pandang mereka.', 79000),
(23, 2, 6, 'Bumi', 'Tere Liye kembali mengkreasikan imajinasinya kedalam kedalam beberapa rangkaian novel. Bumi, merupakan rangkaian awal dari kisah sekelompok anak remaja berkemampuan istimewa. Mereka yang istimewa, mampu pergi ke dunia pararel bumi, bertemu dengan klan lain dan berhadapan dengan Tamus yang memiliki ambisi membebaskan si Tanpa Mahkota dan kemudian, menguasai bumi. Perkenalkan, Raib, seorang gadis belia berusia lima belas tahun yang tidak biasa. Dia bisa menghilang. Jangan beritahu siapapun, Itu adalah rahasia terbesar yang tak pernah ia ceritakan pada siapapun, termasuk kedua orangtuanya. Kehidupannya tetap berjalan normal, meskipun untuk dirinya sendiri. tidak jarang Raib menjahili orangtuanya dengan tiba-tiba menghilang, lalu muncul kembali secara tiba-tiba membuat kaget kedua orangtuanya. Tere Liye memberikan banyak kejutan ditiap halaman yang direpresentasikan oleh Raib, membuat pembaca dapat menikmati cerita yang seolah tidak akan ada habisnya. Tere Liye berhasil meracik buku ini sebagai bahan baca para pecinta novel sastra maupun fantasi.', 87000);

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`) VALUES
(1, 'Ayunita Kuraisy'),
(2, 'Almira Bastari'),
(3, 'Valerie Patkar'),
(4, 'Leila S. Chudori'),
(5, 'Risa Saraswati'),
(6, 'Tere Liye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id_novel`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_penulis` (`id_penulis`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id_novel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `novel`
--
ALTER TABLE `novel`
  ADD CONSTRAINT `novel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `novel_ibfk_2` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
