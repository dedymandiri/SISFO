-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2020 pada 19.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo-master`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(7) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_waktu` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal_waktu`, `isi`) VALUES
(10, 'Mayat Perempuan Bertato \'Burung Hantu\' di Lembang, Anggota Geng Motor?', '06 March 2020 10:02', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/b0f51944-277a-45fc-af5e-be7b86f7e20a\" width=\"7360\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>- Penemuan mayat perempuan di selokan depan Hotel Novena, Jalan Raya Lembang-Bandung, membuat heboh pengendara yang melintas, Kamis (5/3/2020) sekitar pukul 08.00 WIB. Mayat perempuan tersebut pertama kali ditemukan oleh seorang pedagang asongan yang melintas, lalu dilaporkan ke security hotel dekat TKP penemuan mayat. Pihak kepolisian langsung terjun ke lokasi untuk melakukan evakuasi dan olah TKP. Mayat tersebut ditemukan tanpa mengantongi satupun identitas. Untuk mengungkap identitas korban, pihak kepolisian hanya berbekal tanda berupa tato di lengan korban, salah satunya tato &#39;burung hantLembang u&#39;</p>\r\n\r\n<p>atupun identitas. Untuk mengungkap identitas korban, pihak kepolisian hanya berbekal tanda berupa tato di lengan korban, salah satunya tato &#39;burung hantatupun identitas. Untuk mengungkap identitas korban, pihak kepolisian hanya berbekal tanda berupa tato di lengan korban, salah satunya tato &#39;burung hant. ckdsnckdsnc</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_bukutamu` int(7) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_bukutamu`, `nama`, `email`, `komentar`) VALUES
(1, 'Johan', 'johan123@gmail.com', 'Selain itu, perintah rollback ini juga dapat digunakan untuk menghapus beberapa tabel database yang telah dibuat sekaligus menggunakan opsi --step sesuai kolom batch, misalnya saya ingin menghapus tabel yang dibuat 3 kali migrasi sebelumnya, maka saya akan menjalankan perintah.'),
(2, 'Rezha agascha p.', 'rezha123@gmail.com', 'jika saya ingin menghapus seluruh tabel yang telah dibuat dengan fungsi migrasi, maka saya tinggal menjalankan perintah:'),
(3, 'Dedi Maulana', 'dedymandiri992@gmail.com', 'Mudah bukan menggunakan menghapus tabel database dengan fitur migrate rollback di laravel, selamat mencoba ya :-)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id_ekskul` int(7) NOT NULL,
  `deskripsi_osis` text NOT NULL,
  `deskripsi_pramuka` text NOT NULL,
  `deskripsi_karate` text NOT NULL,
  `deskripsi_hadroh` text NOT NULL,
  `deskripsi_paskibra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `deskripsi_osis`, `deskripsi_pramuka`, `deskripsi_karate`, `deskripsi_hadroh`, `deskripsi_paskibra`) VALUES
(1, '<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS</li>\r\n</ol>', '<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>', '<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS\r\n	<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/652cc125-c489-4d00-9c6a-359e79c155f1\" width=\"50\" />\r\n	<figcaption></figcaption>\r\n	</figure>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', '<header>\r\n<h1>Menambah Field / Kolom Baru ke Dalam Tabel MySQL dengan phpMyAdmin</h1>\r\n\r\n<p><a href=\"https://www.bunafitkomputer.com/menambah-field-kolom-baru-ke-dalam-tabel-mysql-dengan-phpmyadmin.html#respond\">Leave a reply</a></p>\r\n</header>\r\n\r\n<p>Dalam pengembangan program aplikasi dan website, biasanya selain fasilitas program yang dikembengkan, Kita juga akan mengembangkan databasenya, yaitu dengan membuat tabel baru untuk menyimpan data pada fasilitas baru, atau hanya menambahkan beberapa field/kolom baru ke dalam tabel MySQL.</p>\r\n\r\n<p>Dengan fasilitas phpMyAdmin pekerjaan menambah Field/Kolom baru menjadi lebih mudah, karena Kita tinggal klik jumlah kolom yang akan ditambahkan dan diletakkan di bagian mana. Sebagai contoh, Kami akan menambahkan 1 kolom di dalam tabel&nbsp;<strong>siswa</strong>, nama kolomnya adalah<strong>&nbsp;kd_jurusan</strong>, kolom ini asalnya dari tabel&nbsp;<strong>jurusan</strong>. Caranya:</p>\r\n\r\n<ol>\r\n	<li>Klik nama tabel yang akan diperbaiki (misalnya&nbsp;<strong>siswa</strong>).</li>\r\n	<li>Masukkan jumlah kolom baru yang akan dibuat, misalnya 1.</li>\r\n	<li>Tentukan lokasi kolom baru tersebut nanti dibuat, misalnya&nbsp;<strong>After telepon</strong>, lalu klik tombol&nbsp;<strong>Go</strong>.</li>\r\n	<li>Akan muncul form untuk membuat kolom baru. Silahkan masukkan nama kolom, tipe data dan panjang datanya.</li>\r\n	<li>Klik tombol&nbsp;<strong>Save</strong>.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/aad84155-179e-4596-98df-09b55dde6848\" width=\"512\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fas` int(11) NOT NULL,
  `nama_ruang` varchar(225) NOT NULL,
  `kuantitas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fas`, `nama_ruang`, `kuantitas`) VALUES
(1, 'Ruang Kelas', 25),
(3, 'Ruang Guru', 2),
(4, 'Ruang Bk', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id_galery` int(7) NOT NULL,
  `file` text NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id_galery`, `file`, `keterangan`) VALUES
(12, 'Gambar_proyek3.jpg', 'jgvhbdsbchjscscse'),
(23, 'Bus ATJ.jpg', 'hjgyujhvyvj'),
(28, 'Islamic-Center-imy.jpg', 'jbchjdsbc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_seleksi`
--

CREATE TABLE `hasil_seleksi` (
  `id_seleksi` int(7) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_seleksi`
--

INSERT INTO `hasil_seleksi` (`id_seleksi`, `keterangan`, `file`) VALUES
(2, 'Hasil Seleksi PPDB', 'SISTEM_INFORMASI_PENGOLAHAN_DATA_NILAI_SISWA_BERBA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id_jadwal` int(7) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id_jadwal`, `keterangan`, `file`) VALUES
(13, 'Jadwal Pelajaran Tahun 2020/2021', 'SISTEM_INFORMASI_PENGOLAHAN_DATA_NILAI_SISWA_BERBA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_sekolah`
--

CREATE TABLE `kalender_sekolah` (
  `id_kalender` int(7) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kalender_sekolah`
--

INSERT INTO `kalender_sekolah` (`id_kalender`, `keterangan`, `file`) VALUES
(2, 'Kalender Sekolah 2020/2021', 'SISTEM_INFORMASI_PENGOLAHAN_DATA_NILAI_SISWA_BERBA.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(7) NOT NULL,
  `pel_1` varchar(225) NOT NULL,
  `pel_2` varchar(225) NOT NULL,
  `pel_3` varchar(225) NOT NULL,
  `pel_4` varchar(225) NOT NULL,
  `pel_5` varchar(225) NOT NULL,
  `pel_6` varchar(225) NOT NULL,
  `pel_7` varchar(225) NOT NULL,
  `pel_8` varchar(225) NOT NULL,
  `pel_9` varchar(225) NOT NULL,
  `pel_10` varchar(225) NOT NULL,
  `pel_11` varchar(255) NOT NULL,
  `pel_12` varchar(225) NOT NULL,
  `pel_13` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `pel_1`, `pel_2`, `pel_3`, `pel_4`, `pel_5`, `pel_6`, `pel_7`, `pel_8`, `pel_9`, `pel_10`, `pel_11`, `pel_12`, `pel_13`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'Sistem Terdistribusi', 'Pengolahan Citra', 'Sistem Komputer', 'Algoritma', 'Desing Grafis', 'Mutimedia', 'Proyek 3', 'Bhs Indonesia', 'Bhs Inggris', 'Bhs Daerah', 'Seni Budaya', 'Agama Islam'),
(6, 'bahasa inggris', 'agama islam', 'budi pekerti', 'bahasa arab', 'akidah akhlak', 'tarikh', 'quran hadist', 'bahasa indonesia', 'Ppkn', 'Keterampilan', '-', '-', '-'),
(7, 'Bhs Indonesia', 'Bhs Inggris', 'Multimedia', 'Design Grafis', 'Jaringan Komputer', 'Pemrogramman Web', 'Kewirausahaan', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `multimedia`
--

CREATE TABLE `multimedia` (
  `id_multimedia` int(7) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `multimedia`
--

INSERT INTO `multimedia` (`id_multimedia`, `deskripsi`) VALUES
(1, '<p><strong>A. Pengertian atau definisi populasi</strong></p>\r\n\r\n<p>Populasi adalah merupakan wilayah generalisasi yang terdiri dari obyek/subyek yang memiliki kuantitas dan karakteristik tertentu yang ditetapkan oleh peneliti untuk dipelajari dan kemudian ditarik kesimpulannya. Itulah definisi populasi dalam penelitian.</p>\r\n\r\n<p>Populasi di sini maksudnya bukan hanya orang atau makhluk hidup, akan tetapi juga benda-benda alam yang lainnya. Populasi juga bukan hanya sekedar jumlah yang ada pada obyek atau subyek yang dipelajari, akan tetapi meliputi semua karakteristik, sifat-sifat yang dimiliki oleh obyek atau subyek tersebut. Bahkan satu orangpun bisa digunakan sebagai populasi, karena satu orang tersebut memiliki berbagai karakteristik, misalnya seperti gaya bicara, disiplin, pribadi, hobi, dan lain sebagainya.</p>\r\n\r\n<p>Di bawah ini beberapa pengertian populasi menurut para ahli:</p>\r\n\r\n<ul>\r\n	<li>Menurut, Ismiyanto &ndash; populasi adalah keseluruhan subjek atau totalitas subjek penelitian yang dapat berupa; orang, benda, / suatu hal yang di dalamnya dapat diperoleh dan atau dapat memberikan informasi (data) penelitian.</li>\r\n	<li>Sedangkan Arikunto &ndash; Populasi adalah keseluruhan objek penelitian. Apabila seseorang ingin meneliti semua elemen yang ada dalam wilayah penelitian, maka penelitiannya merupakan penelitian populasi.</li>\r\n	<li>Dan menurut Sugiyono &ndash; Populasi adalah wilayah generalisasi yang terdiri atas, obyek/subjek yang mempunyai kuantitas &amp; karakteristik tertentu yang ditetapkan oleh peneliti untuk dipelajari dan kemudian ditarik kesimpulannya.</li>\r\n</ul>\r\n\r\n<p><strong>B. Pengertian Sampel</strong></p>\r\n\r\n<p>Sampel adalah sebagian dari jumlah dan karakteristik yang dimiliki oleh populasi tersebut, ataupun bagian kecil dari anggota populasi yang diambil menurut prosedur tertentu sehingga dapat mewakili populasinya. Jika populasi besar, dan peneliti tidak mungkin mempelajari seluruh yang ada di populasi, hal seperti ini dikarenakan adanya keterbatasan dana atau biaya, tenaga dan waktu, maka oleh sebab itu peneliti dapat memakai sampel yang diambil dari populasi. Sampel yang akan diambil dari populasi tersebut harus betul-betul representatif atau dapat mewakili.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_tk1`
--

CREATE TABLE `nilai_tk1` (
  `id_rekap` int(7) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `mapel_1` varchar(100) NOT NULL,
  `mapel_2` varchar(100) NOT NULL,
  `mapel_3` varchar(100) NOT NULL,
  `mapel_4` varchar(100) NOT NULL,
  `mapel_5` varchar(100) NOT NULL,
  `mapel_6` varchar(100) NOT NULL,
  `mapel_7` varchar(100) NOT NULL,
  `mapel_8` varchar(100) NOT NULL,
  `mapel_9` varchar(225) NOT NULL,
  `mapel_10` varchar(225) NOT NULL,
  `mapel_11` varchar(255) NOT NULL,
  `mapel_12` varchar(225) NOT NULL,
  `mapel_13` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_tk1`
--

INSERT INTO `nilai_tk1` (`id_rekap`, `nama`, `kelas`, `jurusan`, `mapel_1`, `mapel_2`, `mapel_3`, `mapel_4`, `mapel_5`, `mapel_6`, `mapel_7`, `mapel_8`, `mapel_9`, `mapel_10`, `mapel_11`, `mapel_12`, `mapel_13`) VALUES
(1, 'Dedi Maulana', 'D4RPL.3', '', '80', '80', '80', '80', '80', '80', '80', '80', '87', '87', '79', '08', '86'),
(3, 'Joko', 'D4RPL.4', '', '78', '87', '87', '87', '97', '87', '67', '78', '80', '76', '87', '96', '87'),
(4, 'Mahmud', 'D4RPL.4', '', '76', '89', '76', '85', '68', '98', '98', '87', '07', '98', '80', '90', '79'),
(6, 'Sholeh', 'D4RPL.4', '', '98', '76', '78', '98', '68', '79', '68', '97', '60', '78', '08', '97', '86');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_tk2`
--

CREATE TABLE `nilai_tk2` (
  `id_rekap` int(7) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `mapel_1` varchar(100) NOT NULL,
  `mapel_2` varchar(100) NOT NULL,
  `mapel_3` varchar(100) NOT NULL,
  `mapel_4` varchar(100) NOT NULL,
  `mapel_5` varchar(100) NOT NULL,
  `mapel_6` varchar(100) NOT NULL,
  `mapel_7` varchar(100) NOT NULL,
  `mapel_8` varchar(100) NOT NULL,
  `mapel_9` varchar(225) NOT NULL,
  `mapel_10` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_tk2`
--

INSERT INTO `nilai_tk2` (`id_rekap`, `nama`, `kelas`, `jurusan`, `mapel_1`, `mapel_2`, `mapel_3`, `mapel_4`, `mapel_5`, `mapel_6`, `mapel_7`, `mapel_8`, `mapel_9`, `mapel_10`) VALUES
(1, 'Dedi Maulana', 'D4RPL.3', '', '100', '80', '80', '80', '80', '80', '80', '80', '87', '87'),
(3, 'Joko', 'D4RPL.4', '', '78', '87', '87', '87', '97', '87', '67', '78', '80', '76'),
(4, 'Mahmud', 'D4RPL.4', '', '76', '89', '76', '85', '68', '98', '98', '87', '07', '98');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_tk3`
--

CREATE TABLE `nilai_tk3` (
  `id_rekap` int(7) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jurusan` varchar(225) NOT NULL,
  `mapel_1` varchar(100) NOT NULL,
  `mapel_2` varchar(100) NOT NULL,
  `mapel_3` varchar(100) NOT NULL,
  `mapel_4` varchar(100) NOT NULL,
  `mapel_5` varchar(100) NOT NULL,
  `mapel_6` varchar(100) NOT NULL,
  `mapel_7` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_tk3`
--

INSERT INTO `nilai_tk3` (`id_rekap`, `nama`, `kelas`, `jurusan`, `mapel_1`, `mapel_2`, `mapel_3`, `mapel_4`, `mapel_5`, `mapel_6`, `mapel_7`) VALUES
(1, 'Dedi Maulana', 'D4RPL.3', '', '80', '80', '80', '80', '80', '80', '80'),
(3, 'Joko', 'D4RPL.4', '', '78', '100', '87', '87', '97', '87', '67'),
(4, 'Mahmud', 'D4RPL.4', '', '76', '89', '76', '85', '68', '98', '98'),
(6, 'Sholeh', 'D4RPL.4', '', '98', '76', '78', '98', '68', '79', '68');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(7) NOT NULL,
  `tgl_masuk` varchar(100) NOT NULL,
  `nama_calon_siswa` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nisn` int(100) NOT NULL,
  `asal_sklh` varchar(100) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anak_ke` int(15) NOT NULL,
  `keahlian` varchar(150) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `tgl_masuk`, `nama_calon_siswa`, `tmpt_lahir`, `tgl_lahir`, `nama_ibu`, `nama_ayah`, `alamat`, `nisn`, `asal_sklh`, `no_hp`, `agama`, `anak_ke`, `keahlian`, `alasan`) VALUES
(2, '20 January 2020', 'Solihin', 'Bangka Belitung', '15 January 2004', 'Markona', 'Siswanto', 'Bangkaloa', 123456789, 'SMPN 1 Prapatan', 123456789, 'Islam', 5, 'Mulitmedia', 'Ya pengen masuk aja emang gak boleh ya!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(7) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `email`, `password`) VALUES
(1, 'Dedi Maulana', 'dedymaniri992@gmail.com', 'user123'),
(2, 'Rezha agascha p.', 'maemunahajah@gmail.com', 'rz123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_info` int(7) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tanggal_waktu` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_info`, `judul`, `tanggal_waktu`, `isi`) VALUES
(2, 'Politik Indonesia', '19 March 2020 10:09', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/7307111a-2d35-4ba9-8243-b88182c8ab72\" width=\"1080\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Ada beberapa konsep politik dasar yang bersumber dari para ahli, yaitu:</p>\r\n\r\n<ol>\r\n	<li>Klasik. Pada pandangan klasik (Aristoteles) mengemukakan bahwa politik digunakan masyarakat untuk mencapai suatu kebaikan bersama yang dianggap memilki nilai moral yang lebih tinggi daripada kepentingan swasta. Kepentingan umum sering diartikan sebagai tujuan-tujuan moral atau nilai-nilai ideal yang bersifat abstrak seperti keadilan, kebenaran dan kebahagiaan. Pandangan klasik dianggap kabur seiring banyaknya penafsiran tentang kepentingan umum itu sendiri. kepentingan umum dapat diartikan pula sebagai general will, will of all atau kepentingan mayoritas.</li>\r\n	<li>Kelembagaan. Menurut Max Weber, politik adalah segala sesuatu yang berkaitan dengan penyelenggaraan negara. Max Weber melihat negara dari sudut pandang yuridis formal yang statis. Negara dianggap memiliki hak memonopoli kekuasaan fisik yang utama. Namun konsep ini hanya berlaku bagi negara modern yaitu negara yang sudah ada differensiasi dan spesialisasi peranan, negara yang memiliki batas wilayah yang pasti dan penduduknya tidak nomaden.</li>\r\n	<li>Kekuasaan. Robson mengemukakan politik adalah kegiatan mencari dan mempertahankan kekuasaan ataupun menentang pelaksanaan kekuasaan. Kekuasaan sendiri adalah kemampuan seseorang untuk mempengaruhi orang lain, baik pikiran maupun perbuatan agar orang tersebut berpikir dan bertindak sesuai dengan orang yang mempengaruhi. Kelemahan dari konsep ini adalah tidak dapat dibedakannya konsep beraspek politik dan yang non politik dan juga kekuasaan hanya salah satu konsep dalam ilmu politik, masih ada konsep ideologi, legitimasi dan konflik.</li>\r\n	<li>Fungsionalisme. David Easton berpendapat bahwa politik adalah alokasi nilai-nilai secara otoritatif berdasarkan kewenangan dan mengikat suatu masyarakat. Sedangkan menurut Harold Lasswell, politik merupakan who gets, what gets, when gets dan how gets nilai. Dapat diketahui bahwa politik sebagai perumusan dan pelaksanaan kebijakan umum. Kelemahan dari konsep ini adalah ditempatkannya pemerintah sebagai sarana dan wasit terhadap persaingan diantara pelbagai kekuatan politik untuk mendapatkan nilai-nilai terbanyak dari kebijakan umum tanpa memperhatikan kepentingan pemerintah itu sendiri.</li>\r\n	<li>Konflik. Pandangan konflik mendeskripsikan bahwa politik merupakan kegiatan untuk memengaruhi perumusan dan kebijaksanaan umum dalam rangka usaha untuk memengaruhi, mendapatkan dan mempertahankan nilai. Oleh karena itu sering terjadi perdebatan dan pertentangan antara pihak yang memperjuangkan dan pihak yang mempertahankan nilai. Kelemahan konsep ini adalah tidak semua konflik berdimensi politik.</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(7) NOT NULL,
  `sejarah` text NOT NULL,
  `visi_misi_tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `sejarah`, `visi_misi_tujuan`) VALUES
(1, '<p>Ada beberapa konsep politik dasar yang bersumber dari para ahli, yaitu:</p>\r\n\r\n<ol>\r\n	<li>Klasik. Pada pandangan klasik (Aristoteles) mengemukakan bahwa politik digunakan masyarakat untuk mencapai suatu kebaikan bersama yang dianggap memilki nilai moral yang lebih tinggi daripada kepentingan swasta. Kepentingan umum sering diartikan sebagai tujuan-tujuan moral atau nilai-nilai ideal yang bersifat abstrak seperti keadilan, kebenaran dan kebahagiaan. Pandangan klasik dianggap kabur seiring banyaknya penafsiran tentang kepentingan umum itu sendiri. kepentingan umum dapat diartikan pula sebagai general will, will of all atau kepentingan mayoritas.</li>\r\n	<li>Kelembagaan. Menurut Max Weber, politik adalah segala sesuatu yang berkaitan dengan penyelenggaraan negara. Max Weber melihat negara dari sudut pandang yuridis formal yang statis. Negara dianggap memiliki hak memonopoli kekuasaan fisik yang utama. Namun konsep ini hanya berlaku bagi negara modern yaitu negara yang sudah ada differensiasi dan spesialisasi peranan, negara yang memiliki batas wilayah yang pasti dan penduduknya tidak nomaden.</li>\r\n	<li>Kekuasaan. Robson mengemukakan politik adalah kegiatan mencari dan mempertahankan kekuasaan ataupun menentang pelaksanaan kekuasaan. Kekuasaan sendiri adalah kemampuan seseorang untuk mempengaruhi orang lain, baik pikiran maupun perbuatan agar orang tersebut berpikir dan bertindak sesuai dengan orang yang mempengaruhi. Kelemahan dari konsep ini adalah tidak dapat dibedakannya konsep beraspek politik dan yang non politik dan juga kekuasaan hanya salah satu konsep dalam ilmu politik, masih ada konsep ideologi, legitimasi dan konflik.\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ol>', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/9c53a712-6044-41c9-81a5-e2c55fa41b0f\" width=\"700\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Ada beberapa konsep politik dasar yang bersumber dari para ahli, yaitu:</p>\r\n\r\n<ol>\r\n	<li>Klasik. Pada pandangan klasik (Aristoteles) mengemukakan bahwa politik digunakan masyarakat untuk mencapai suatu kebaikan bersama yang dianggap memilki nilai moral yang lebih tinggi daripada kepentingan swasta. Kepentingan umum sering diartikan sebagai tujuan-tujuan moral atau nilai-nilai ideal yang bersifat abstrak seperti keadilan, kebenaran dan kebahagiaan. Pandangan klasik dianggap kabur seiring banyaknya penafsiran tentang kepentingan umum itu sendiri. kepentingan umum dapat diartikan pula sebagai general will, will of all atau kepentingan mayoritas.</li>\r\n	<li>Kelembagaan. Menurut Max Weber, politik adalah segala sesuatu yang berkaitan dengan penyelenggaraan negara. Max Weber melihat negara dari sudut pandang yuridis formal yang statis. Negara dianggap memiliki hak memonopoli kekuasaan fisik yang utama. Namun konsep ini hanya berlaku bagi negara modern yaitu negara yang sudah ada differensiasi dan spesialisasi peranan, negara yang memiliki batas wilayah yang pasti dan penduduknya tidak nomaden.</li>\r\n	<li>Kekuasaan. Robson mengemukakan politik adalah kegiatan mencari dan mempertahankan kekuasaan ataupun menentang pelaksanaan kekuasaan. Kekuasaan sendiri adalah kemampuan seseorang untuk mempengaruhi orang lain, baik pikiran maupun perbuatan agar orang tersebut berpikir dan bertindak sesuai dengan orang yang mempengaruhi. Kelemahan dari konsep ini adalah tidak dapat dibedakannya konsep beraspek politik dan yang non politik dan juga kekuasaan hanya salah satu konsep dalam ilmu politik, masih ada konsep ideologi, legitimasi dan konflik.</li>\r\n	<li>Fungsionalisme. David Easton berpendapat bahwa politik adalah alokasi nilai-nilai secara otoritatif berdasarkan kewenangan dan mengikat suatu masyarakat. Sedangkan menurut Harold Lasswell, politik merupakan who gets, what gets, when gets dan how gets nilai. Dapat diketahui bahwa politik sebagai perumusan dan pelaksanaan kebijakan umum. Kelemahan dari konsep ini adalah ditempatkannya pemerintah sebagai sarana dan wasit terhadap persaingan diantara pelbagai kekuatan politik untuk mendapatkan nilai-nilai terbanyak dari kebijakan umum tanpa memperhatikan kepentingan pemerintah itu sendiri.</li>\r\n	<li>Konflik. Pandangan konflik mendeskripsikan bahwa politik merupakan kegiatan untuk memengaruhi perumusan dan kebijaksanaan umum dalam rangka usaha untuk memengaruhi, mendapatkan dan mempertahankan nilai. Oleh karena itu sering terjadi perdebatan dan pertentangan antara pihak yang memperjuangkan dan pihak yang mempertahankan nilai. Kelemahan konsep ini adalah tidak semua konflik berdimensi politik.</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sam` int(7) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id_sam`, `foto`, `nama`, `isi`) VALUES
(1, 'dedi.jpg', 'Dedi Maulana', '<p><em><strong>Bismillahirahmanirahim.</strong></em></p>\r\n\r\n<p><br />\r\nSegala puji bagi Allah SWT tuhan semesta alam yang mengajarkan kita dengan pena pengetahuan. Salawat dan salam semoga selalu tercurah kepada teladan sepanjang zaman, Nabi Muhammad SAW.</p>\r\n\r\n<p>Pendidikan merupakan pilar penting bagi peradaban bangsa. Maju mundurnya suatu bangsa bisa ditentukan dengan perkembangan ilmu pengetahuan yang dimiliki oleh sumber daya manusianya. Dan puncak dari ilmu pengetahuan itu adalah ahlak mulia yang melekat sebagai karakter utama pada diri manusia.</p>\r\n\r\n<p>Sebagai salah satu lembaga pendidikan di Kota Tangerang Selatan, SMP Islam Al Syukro sejak mulai beroperasi enam belas tahun lalu terus berupaya meningkatkan kualitas dan kuantitasnya sebagai bagian dari pilar penting yang membangun kualitas sumber daya manusia. Menjadi lembaga yang turut ambil bagian dalam pembentukan generasi hari ini untuk menjadi pemimpin di masa yang akan datang.</p>\r\n\r\n<p>Dengan penuh kesadaran bahwa sepuluh hingga dua puluh tahun kedepan, para pemimpin bangsa ditentukan dari generasi saat ini, maka SMP Islam Al Syukro Universal diharapkan melahirkan generasi yang salih, kuat ilmu pengetahuan dan bermoral islami.</p>\r\n\r\n<p>Akhirnya, hanya kepada Allah SWT kita bertawakal. Semoga kita semua sukses dan diberkahi dalam menjalankan semua aktivitas.</p>\r\n\r\n<table border=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Tangerang Selatan<br />\r\n			Kepala Sekolah,<br />\r\n			&nbsp;\r\n			<p><strong>Siti Umro, S. Ag</strong></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_guru`
--

CREATE TABLE `struktur_guru` (
  `id_struktur_guru` int(7) NOT NULL,
  `nama_guru` varchar(225) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur_guru`
--

INSERT INTO `struktur_guru` (`id_struktur_guru`, `nama_guru`, `jabatan`) VALUES
(1, 'Dedi Maulana, S.ST', 'Kepala Sekolah'),
(3, 'Rezha Agascha Permana,S.ST', 'Wakil Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_bukutamu`);

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fas`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indeks untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  ADD PRIMARY KEY (`id_seleksi`);

--
-- Indeks untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kalender_sekolah`
--
ALTER TABLE `kalender_sekolah`
  ADD PRIMARY KEY (`id_kalender`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id_multimedia`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sam`);

--
-- Indeks untuk tabel `struktur_guru`
--
ALTER TABLE `struktur_guru`
  ADD PRIMARY KEY (`id_struktur_guru`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_bukutamu` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id_galery` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `hasil_seleksi`
--
ALTER TABLE `hasil_seleksi`
  MODIFY `id_seleksi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id_jadwal` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kalender_sekolah`
--
ALTER TABLE `kalender_sekolah`
  MODIFY `id_kalender` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id_multimedia` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_info` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sam` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `struktur_guru`
--
ALTER TABLE `struktur_guru`
  MODIFY `id_struktur_guru` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
