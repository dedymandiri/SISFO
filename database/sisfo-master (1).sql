-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2020 pada 14.23
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(7) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '0c909a141f1f2c0a1cb602b0b2d7d050');

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
(10, 'Mayat Perempuan Bertato \'Burung Hantu\' di Lembang, Anggota Geng Motor?', '06 March 2020 10:02', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/b0f51944-277a-45fc-af5e-be7b86f7e20a\" width=\"7360\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>- Penemuan mayat perempuan di selokan depan Hotel Novena, Jalan Raya Lembang-Bandung, membuat heboh pengendara yang melintas, Kamis (5/3/2020) sekitar pukul 08.00 WIB. Mayat perempuan tersebut pertama kali ditemukan oleh seorang pedagang asongan yang melintas, lalu dilaporkan ke security hotel dekat TKP penemuan mayat. Pihak kepolisian langsung terjun ke lokasi untuk melakukan evakuasi dan olah TKP. Mayat tersebut ditemukan tanpa mengantongi satupun identitas. Untuk mengungkap identitas korban, pihak kepolisian hanya berbekal tanda berupa tato di lengan korban, salah satunya tato &#39;burung hantLembang u&#39;</p>\r\n\r\n<p>atupun identitas. Untuk mengungkap identitas korban, pihak kepolisian hanya berbekal tanda berupa tato di lengan korban, salah satunya tato &#39;burung hantatupun identitas. Untuk mengungkap identitas korban, pihak kepolisian hanya berbekal tanda berupa tato di lengan korban, salah satunya tato &#39;burung hant. ckdsnckdsnc</p>'),
(12, 'Masuk Level 3, Begini Prinsip PSBB Proporsional di Depok Mulai Jumat Besok', '04 June 2020 22:45', '<p>&nbsp;</p>\r\n\r\n<p>DEPOK, KOMPAS.com &ndash;&nbsp;Kota Depok resmi memasuki fase PSBB proporsional mulai Jumat (5/6/2020) besok, sebagai transisi menuju new normal.</p>\r\n\r\n<p>Dalam PSBB proporsional yang didesain di tingkat provinsi, Kota Depok termasuk dalam kategori kewaspadaan level 3 (cukup berat), di mana ketentuan pembatasan akan diterapkan secara parsial/sebagian.</p>\r\n\r\n<p>Beberapa aktivitas di tempat umum mulai dari rumah ibadah hingga pusat perbelanjaan akan dibuka namun secara bertahap.</p>\r\n\r\n<p>Baca juga:&nbsp;<a href=\"https://megapolitan.kompas.com/read/2020/06/04/09380931/psbb-terakhir-cara-jakarta-bogor-depok-dan-bekasi-kendalikan-zona-merah\" target=\"_self\">PSBB Terakhir, Cara Jakarta, Bogor, Depok, dan Bekasi Kendalikan Zona Merah Covid-19</a></p>\r\n\r\n<p>Pembukaan aktivitas sesuai dengan risiko penularan dan tren kasus Covid-19 di Depok.</p>\r\n\r\n<p>Wali Kota Depok, Mohammad Idris menerbitkan beberapa prinsip dasar pelaksanaan PSBB proporsional level 3 di Depok mulai besok.</p>\r\n\r\n<p>Hal itu termuat dalam Peraturan Wali Kota Depok Nomor 37 Tahun 2020 yang ia teken pada Kamis (4/6/2020).</p>\r\n\r\n<p>Dalam PSBB proporsional, setiap penduduk di Depok wajib mengenakan masker ketika bepergian dan mencuci tangan serta menjaga jarak fisik.</p>\r\n\r\n<p>Lalu, mobilitas penduduk tetap dibatasi, baik di dalam Provinsi Jawa Barat maupun antarprovinsi seperti dengan DKI Jakarta.</p>\r\n\r\n<p>&quot;Kedua, aktivitas sekolah melakukan pembelajaran secara online,&quot; tulis Idris.</p>\r\n\r\n<p>Aktivitas ekonomi, mulai dari perkantoran, industri, pasar, dan pertokoan di tempat dapat kembali dibuka.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>');

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
(2, 'Rezha agascha p.', 'rezha123@gmail.com', 'jika saya ingin menghapus seluruh tabel yang telah dibuat dengan fungsi migrasi, maka saya tinggal menjalankan perintah:'),
(4, 'Maemunah', 'maemunahajah@gmail.com', 'Info berita terbaru hari ini baik peristiwa, kecelakaan, kriminal, hukum, berita unik, Politik, dan liputan khusus di Indonesia dan Internasional.'),
(5, 'Dedi Maulana', 'dedymandiri992@gmail.com', 'Hingga tahun 2030, Indonesia disebut membutuhkan 17 juta orang pekerja di bidang ekonomi digital. Hal ini selaras dengan peningkatan jumlah perusahaan yang membuka lowongan pekerjaan di bidang TIK, termasuk startup.');

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
(1, '<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS</li>\r\n</ol>', '<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>', '<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS\r\n	<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/652cc125-c489-4d00-9c6a-359e79c155f1\" width=\"50\" />\r\n	<figcaption></figcaption>\r\n	</figure>\r\n\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', '<header>\r\n<h1>Menambah Field / Kolom Baru ke Dalam Tabel MySQL dengan phpMyAdmin</h1>\r\n\r\n<p><a href=\"https://www.bunafitkomputer.com/menambah-field-kolom-baru-ke-dalam-tabel-mysql-dengan-phpmyadmin.html#respond\">Leave a reply</a></p>\r\n</header>\r\n\r\n<p>Dalam pengembangan program aplikasi dan website, biasanya selain fasilitas program yang dikembengkan, Kita juga akan mengembangkan databasenya, yaitu dengan membuat tabel baru untuk menyimpan data pada fasilitas baru, atau hanya menambahkan beberapa field/kolom baru ke dalam tabel MySQL.</p>\r\n\r\n<p>Dengan fasilitas phpMyAdmin pekerjaan menambah Field/Kolom baru menjadi lebih mudah, karena Kita tinggal klik jumlah kolom yang akan ditambahkan dan diletakkan di bagian mana. Sebagai contoh, Kami akan menambahkan 1 kolom di dalam tabel&nbsp;<strong>siswa</strong>, nama kolomnya adalah<strong>&nbsp;kd_jurusan</strong>, kolom ini asalnya dari tabel&nbsp;<strong>jurusan</strong>. Caranya:</p>\r\n\r\n<ol>\r\n	<li>Klik nama tabel yang akan diperbaiki (misalnya&nbsp;<strong>siswa</strong>).</li>\r\n	<li>Masukkan jumlah kolom baru yang akan dibuat, misalnya 1.</li>\r\n	<li>Tentukan lokasi kolom baru tersebut nanti dibuat, misalnya&nbsp;<strong>After telepon</strong>, lalu klik tombol&nbsp;<strong>Go</strong>.</li>\r\n	<li>Akan muncul form untuk membuat kolom baru. Silahkan masukkan nama kolom, tipe data dan panjang datanya.</li>\r\n	<li>Klik tombol&nbsp;<strong>Save</strong>.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:8000/aad84155-179e-4596-98df-09b55dde6848\" width=\"512\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Organisasi Siswa Intra Sekolah ( OSIS ) merupakan organisasi yang berada disekolah dan dibentuk secara demokrasi melalui pemilihan yang langsung umum bebas dan rahasia yang dilakukan oleh seluruh siswa sebagai anggota Organisasi Siswa Intra Sekolah ( OSIS ).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Program kerja OSIS SMK PGRI Jatibarang Periode 2015/2016 disusun melalui tahap-tahap sebagai berikut :</p>\r\n\r\n<ol>\r\n	<li>Penampungan aspirasi dari siswa (terutama anggota, pengurus, Sub Seksi)</li>\r\n	<li>Penyampaian hasil penampungan aspirasi siwa</li>\r\n	<li>Pembentukan Tim penyusun program kerja OSIS</li>\r\n	<li>Musyawarah pengurus tentang penyusunan program kerja OSIS</li>\r\n	<li>Rapat Kerja (dilaksanakan setiap satu minggu sekali)</li>\r\n	<li>Pengajuan dan pengesahan Program Kerja OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun Program Kerja OSIS terdiri dari 3 bagian yaitu :</p>\r\n\r\n<ol>\r\n	<li>Sasaran Umum Program Kerja 8 (delapan) Seksi Bidang</li>\r\n	<li>Program Kerja 8 Seksi Bidang</li>\r\n	<li>Program kerja Pengurus Harian OSIS</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>');

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
(12, 'smk1.jpg', 'Papan nama sekolah'),
(23, 'smk2.jpg', 'Bangunan sekolah'),
(28, 'smk3.jpg', 'Kegiatan belajar dikelas');

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
(1, '<p><strong>A. VISI</strong></p>\r\n\r\n<p>&quot;Menjadi program studi yang unggul di bidang Software Engineering tingkat nasional dan berdaya saing globa&quot;.</p>\r\n\r\n<p><strong>B. MISI</strong></p>\r\n\r\n<ol>\r\n	<li>Meningkatkan mutu, akses, dan relevansi pendidikan Politeknik di bidang Software Engineering untuk menghasilkan lulusan sesuai kebutuhan pekerjaan</li>\r\n	<li>Melakukan penelitian terapan dan pengabdian masyarakat di bidang Software Engineering untuk mengatasi persoalaan industri dan masyarakat</li>\r\n</ol>\r\n\r\n<p><strong>C. TUJUAN</strong></p>\r\n\r\n<ol>\r\n	<li>Menghasilkan lulusan yang kompeten di bidang Software Engineering dengan ciri keterampilan kerja tinggi yang mampu bersaing secara global</li>\r\n	<li>Memberikan solusi persoalan industri dan masyarakat di bidang Software Engineering tingkat nasional melalui penelitian terapan dan pengabdian masyarakat</li>\r\n</ol>\r\n\r\n<p><strong>D. PROFIL LULUSAN</strong></p>\r\n\r\n<ol>\r\n	<li><em>System Analyst</em>&nbsp;: mampu menganalisis dan menspesifikasikan kebutuhan perangkat lunak berskala besar dengan dokumentasi yang mengacu standar IEEE Std 829-1998 atau standar lain.</li>\r\n	<li><em>Software Developer&nbsp;</em>: mampu mengembangkan perangkat lunak dengan menerapkan metodologi pengembangan perangkat lunak yang sesuai dengan perkembangan terkini agar menghasilkan perangkat lunak yang sesuai dengan kebutuhan pengguna.</li>\r\n	<li><em>Software Tester</em>: mampu melakukan pengujian &nbsp;perangkat lunak menggunakan metode black box dan atau white box sesuai kebutuhan.</li>\r\n	<li><em>Software Maintenance</em>: mampu melakukan perawatan perangkat lunak dari tingkat sederhana sampai dengan kompleks.</li>\r\n	<li><em>Technopreneur&nbsp;</em>: Mempu menginternalisasi semangat kemandirian kejuangan dan kewirausahaan, serta mampu menunjukkan sikap bertanggung jawab, jujur, dan disiplin &nbsp;atas pekerjaan dibidang keahliannya secara mandiri.</li>\r\n</ol>');

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
(1, 'Dedi Maulana', 'D4RPL.3', 'Mulitmedia', '80', '80', '80', '80', '80', '80', '80', '80', '87', '87', '79', '08', '86'),
(3, 'Joko', 'D4RPL.4', 'Mulitmedia', '78', '87', '87', '87', '97', '87', '67', '78', '80', '76', '87', '96', '87'),
(4, 'Mahmud', 'D4RPL.4', 'Mulitmedia', '76', '89', '76', '85', '68', '98', '98', '87', '07', '98', '80', '90', '79'),
(6, 'Sholeh', 'D4RPL.4', 'Mulitmedia', '98', '76', '78', '98', '68', '79', '68', '97', '60', '78', '08', '97', '86');

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
(1, 'Dedi Maulana', 'D4RPL.3', 'Mulitmedia', '100', '80', '80', '80', '80', '80', '80', '80', '87', '87'),
(3, 'Joko', 'D4RPL.4', 'Mulitmedia', '78', '87', '87', '87', '97', '87', '67', '78', '80', '76'),
(4, 'Mahmud', 'D4RPL.4', 'Mulitmedia', '76', '89', '76', '85', '68', '98', '98', '87', '07', '98');

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
(1, 'Dedi Maulana', 'D4RPL.3', 'Mulitmedia', '80', '80', '80', '80', '80', '80', '80'),
(3, 'Joko', 'D4RPL.4', 'Mulitmedia', '78', '100', '87', '87', '97', '87', '67'),
(4, 'Mahmud', 'D4RPL.4', 'Mulitmedia', '76', '89', '76', '85', '68', '98', '98'),
(6, 'Sholeh', 'D4RPL.4', 'Mulitmedia', '98', '76', '78', '98', '68', '79', '68');

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
  `nisn` varchar(15) NOT NULL,
  `asal_sklh` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `anak_ke` int(15) NOT NULL,
  `keahlian` varchar(150) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_daftar`, `tgl_masuk`, `nama_calon_siswa`, `tmpt_lahir`, `tgl_lahir`, `nama_ibu`, `nama_ayah`, `alamat`, `nisn`, `asal_sklh`, `no_hp`, `agama`, `anak_ke`, `keahlian`, `alasan`) VALUES
(4, '03 June 2020', 'Rezha agascha permana', 'majalengka', '03 June 2020', 'hani', 'burhan', 'cirebon', '9998997707', 'SMPN 1 majalengka', '087828843343', 'Islam', 1, 'Mulitmedia', 'Ya dari pada nganggur :v'),
(5, '2020-06-17', 'Willia', 'Terisi', '2020-06-16', 'jubaedah', 'ghofur', 'jakarta', '9998997010', 'SMPN 1 terisi', '089656345175', 'Islam', 3, 'Mulitmedia', 'Mbuh :v');

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
(2, 'Politik Indonesia', '19 March 2020 10:09', '<p>Ukuran satuan&nbsp;<em>cm, mm, pt</em>&nbsp;dan&nbsp;<em>pica</em>&nbsp;berasal dari media cetak seperti koran dan majalah. Satuan ini cocok untuk media yang bersifat pasti (dimana kita bisa menentukan sendiri ukuran kertas yang akan digunakan). Namun satuan ukuran tersebut tidak cocok di dalam media elektronik seperti web. Karena media yang digunakan oleh pengunjung web bisa bermacam-macam mulaari&nbsp;<em>smartphone</em>&nbsp;dengan lebar layar 2 inchi sampai dengan monitor desktop 20 inchi atau lebih. Satuan ukuran&nbsp;<em>cm, mm, pt</em>&nbsp;dan&nbsp;<em>pica</em>&nbsp;menjadi tidak relevan, sehingga jarang digunakan.</p>'),
(3, 'Mengenal Retina Display', '10 June 2020 19:29', '<p>Retina Display&nbsp;adalah fitur yang dibawa oleh&nbsp;Apple&nbsp;keperangkat&nbsp;iPhone. Fitur ini memadatkan ukuran pixel ke dalam layar iPhone agar tampil lebih tajam. Umumnya, layar monitor memiliki kepadatan sebanyak 72-100 pixel dalam setiap inci. Namun&nbsp;<em>retina display</em>&nbsp;memiliki 224 pixel/inchi. Perbedaan ini akan membuat text dengan ukuran 14 pixel menjadi sangat kecil jika ditampilkan di dalam iPhone.</p>\r\n\r\n<p>Pemadatan ukuran pixel per inchi tidak hanya berlaku pada&nbsp;<em>iPhone</em>. Berbagai produsen&nbsp;<em>smartphone</em>&nbsp;saat ini berlomba-lomba untuk membuat layar sedetail mungkin dengan cara menambahkan sebanyak mungkin pixel ke dalam perangkat buatan mereka.</p>\r\n\r\n<p>Karena kita membuat ukuran teks dengan satuan&nbsp;<em>pixel</em>, hal ini mungkin akan menjadi masalah. Namun web browser yang mendukung&nbsp;<em>retina display</em>&nbsp;akan secara otomatis menggandakan ukuran teks. Sehingga teks dengan ukuran 14 pixel akan ditampilkan menjadi 28 pixel pada perangkat-perangkat tersebut.</p>');

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
(1, '<p>Politeknik Indramayu atau dikenal dengan nama&nbsp;POLINDRA, terlahir atas adanya rencana Pemerintah untuk meningkatkan jumlah pendidikan vokasi di Indonesia, pendidikan politeknik baru ini terbuka untuk semua pemerintah daerah namun Pemerintah mensyaratkan dana dari pusat harus di dampingi dana pemerintah daerah dan dilaksanakan dalam bentuk kompetisi proposal yang harus diajukan oleh setiap pemerintah daerah peminat.</p>\r\n\r\n<p>Berita baik ini ditangkap oleh&nbsp;Bupati Indramayu, DR H Irianto MS Syafiuddin, yang pada masa kepemimpinannya sangat punya perhatian di bidang pendidikan, walau secara sadar bahwa pendidikan tinggi adalah tanggung jawab Pemerintah Pusat, namun melihat kondisi di Indramayu belum ada pendidikan vokasi setingkat perguruan tinggi, maka beliau mengambil inisiatif untuk ikut serta dalam kompetisi termaksud.</p>\r\n\r\n<p>Dengan dasar pemikiran di atas pendirian Politeknik Indrmayu ini mengarah pada hal-hal sebagai berikut:</p>\r\n\r\n<p>Memberi kesempatan bagi keluarga yang tidak mampu melanjutkan kuliah di luar kabupaten untuk dapat mengikuti pendidikan, khususnya bagi keluarga kurang mampu meningkatkan kemampuan (skill) angkatan kerja Indramayu untuk dapat bersaing dalam menghadapi persaingan di dunia kerja yang semakin membutuhkan kemampuan khususnya&nbsp; di Industri yang ada di Indramayu maupun luar Indramayu memutus mata rantai kemiskinan yang diakibatkan dari rendahnya pendidikan (perubahan&nbsp; taraf hidup bagi keluarga miskin) Dimulai dengan di bentuknya Task Force melalui Surat Perintah Tugas&nbsp; Bupati&nbsp;No. 450.5/5175/Bawasda, &nbsp;yang mempunyai tugas&nbsp; mencari dan menggali data&nbsp; untuk bahan analisa dalam penyusunan studi kelayakan, menggalang komitmen dengan stakeholder, menyebarkan kuesioner, dan memberikan masukan dalam penyusunan semua dokumen sebagai bahan proposal untuk dikompetisikan. Anggota Task Force terdiri dari 10 (sepuluh) orang yaitu:</p>\r\n\r\n<ol>\r\n	<li>Drs HM Syahri Tohir, SH, MM sebagai pengarah</li>\r\n	<li>Drs H Amir Syarifudin, MM sebagai Ketua</li>\r\n	<li>H Topo Suwarno, SH, MSi sebagai sekretaris</li>\r\n	<li>Ir H Sofyan Effendi, sebagai anggota</li>\r\n	<li>Drs H Suhaeli, sebagai anggota</li>\r\n	<li>Dhans Dada Suhadadi, SE sebagai anggota</li>\r\n	<li>Ir H Asep Adiwijaya sebagai anggota</li>\r\n	<li>Drs Abdul Rozak sebagai anggota</li>\r\n	<li>H Mahpudin, SH sebagai anggota</li>\r\n	<li>Daniel Muttaqien, ST sebagai anggota</li>\r\n</ol>\r\n\r\n<p>Hal-hal lain yang dipersiapkan oleh Task force ini adalah komitmen Pemerintah Daerah untuk pendirian&nbsp;Politeknik baru&nbsp;yaitu, Surat Pernyataan Penyediaan Tanan Pendamping&nbsp; (sebesar 30%&nbsp; dari total anggaran),&nbsp; Surat Pernyataan Penyediaan Lahan, Surat Pernyataan Pendirian Yayasan Pendidikan Politeknik Indramayu, Surat Pernyataan Penyelenggaraan, Dosen dan Staff Pengelolan, Surat Pernyataan Dukungan Pendirian&nbsp; Politeknik Indramayu dari Dewan Perwakilan Rakyat Daerah, yang semuanya di tandatangani Bupati dan Ketua DPRD.<br />\r\nTim Task Force dalam pelaksanaan tugasnya dibantu/dibimbing oleh para ahli dari Politeknik Negeri Bandung, khususnya dalam pengkajian pemilihan program studi yang dianggap layak untuk didirikan di Indramayu. Sesuai dengan hasil kajian dari studi kelayakan dan bimbingan dari Politeknik Negeri Bandung diputuskan program studi yang akan di laksanakan di Polindra adalah jurusan Teknik Mesin, Teknik Informatika, dan Teknik Pendingin, tiga jurusan ini sebagai jumlah jurusan minimal untuk pendirian politeknik baru. Sedangkan proses pelaksanaan kompetisi dilakukan secara ketat dan cepat berproses sejak awal Januari&nbsp;2008.</p>\r\n\r\n<p>Dukungan untuk penyertaan dana pendirian Politeknik, yaitu dengan ditandatangani Nota Kesepahaman antara Bupati Indramayu Irianto MS Syafiuddin dengan Direktur Jendral Pendidikan Tinggi Prof dr Fasli Jalal ; terbitnya Perda No. 5 Tahun 2008 Tentang pendirian Politeknik Indramayu; pendirian Yayasan Cipta Insan Mandiri melalaui Akta Notaris tanggal 15 Pebruari No. 60.</p>\r\n\r\n<p>Peserta yang tercatat ikut serta dalam kompetisi proposal ini berjumlah 54 Kabupaten/Kota dari seluruh Indonesiadan dan hanya 9 Kabupaten/Kota yang berhasil mendapatkan persetujuan dari DIKTI untuk mendirikan Politeknik baru, dan pada tanggal 8 Juli 2008 terbit Keputusan Menteri Pendidikan Nasional Republik Indonesia&nbsp;No: 124/D/O/2008&nbsp;tentang :&nbsp;Pemberrian ijin penyelenggaraan program-program studi dan Pendidikan Politeknik Indramayu di Indramayu diselenggarakan oleh Yayasan Pendidikan Cipta Insan Mandiri di Indramayu Jawa Barat.</p>\r\n\r\n<p>Pada tahun 2014 Politeknik Indramayu berubah status dari Perguruan Tinggi Swasta (PTS) menjadi Perguruan Tinggi Negeri (PTN) yang diresmikan pada tanggal 6 Oktober 2014, oleh Presiden Republik Indonesia Dr. Susilo Bambang Yudhoyono, mengacu pada peraturan menteri pendidikan dan kebudayaan No.101 tahun 2014 tentang pendirian, organisasi dan tata kerja Politeknik Negeri Indramayu.</p>\r\n\r\n<p><strong>Perkembangan Saat Ini</strong></p>\r\n\r\n<p>Pasca Politeknik Indramayu berubah status menjadi perguruan tinggi negeri, pada tahun 2015 memiliki tiga program studi yaitu Teknik Informatika (D3), Teknik Mesin (D3), dan Teknik Pendigin dan Tata Udara (D3), kemudian Politeknik Negeri Indramayu melakukan usulan program studi baru yaitu Rekayasa Perangkat Lunak (D4) dan Perancangan Manufaktur (D4), kemudian pada tahun berikutnya (2016) telah terbit Surat Keputusan Menteri Riset,Teknologi dan Pendidikan Tinggi Pada Tanggal 03 Februari 2016 nomor 67/KPT/I/2016 tentang pembukaan program studi Perancangan Manufaktur (D4), dan Rekayasa Perangkat Lunak (D4) melalui surat keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi pada tanggal 13 September 2016 nomor 325/KPT/I/2019 tentang pembukaan program studi Rekayasa Perangkat Lunak (D4).</p>\r\n\r\n<p>Pada tahun 2019, Bupati Indramayu melalui Keputusan Bupati Indramayu Nomor 431/Kep.67.1.1-BKD/2019 tentang Hibah Barang Milik Pemerintah Kabupaten Indramayu Kepada Kementerian Riset, Teknologi dan Pendidikan Tinggi, dan DPRD Kabupaten Indramayu Provinsi Jawa Barat melalui Keputusan DPRD Kabupaten Indramayu Nomor 170/12/KEP/DPRD/2019 tentang Persetujuan DPRD Kabupaten Indramayu terhadap Permohonan Persetujuan Penyatuan AKPER PEMDA dan Pemindah tanganan barang milik daerah kabupaten Indramayu kepada Kementerian Riset,Teknologi dan Pendidikan Tinggi,&nbsp; dengan dasar tersebut Kementerian Riset, Teknologi dan dilakukan serah terima akper pemda pada tanggal 24 Juli 2019 menghasilkan naskah perjanjian hibah daerah Pemerintah Kabupaten Indramayu dengan Kementerian Riset, Teknologi dan Pendidikan Tinggi Nomor 599/NPHD.9-Tapem/2019 dan Nomor T/133/A.A3/PL.02.02/2019.</p>\r\n\r\n<p>Pasca dilakukan serah terima maka secara resmi Akademi Keperawatan Pemerintah Daerah menyatu dengan Politeknik Negeri Indramayu melalui terbitnya Surat Keputusan Menteri Riset, Teknologi dan Pendidikan Tinggi pada tanggal 19 Agustus 2019 nomor 725/KPT/I/2019 tentang pembukaan program studi keperawatan (D3).</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>&nbsp;</p>\r\n	</li>\r\n</ol>', '<p><strong>Visi</strong></p>\r\n\r\n<p><em>&ldquo;National Leading and Globaly Competitive Polytechnic&rdquo;</em><br />\r\n&ldquo;Politeknik Terdepan Tingkat Nasional Berdaya Saing Global &rdquo;</p>\r\n\r\n<p><strong>Misi</strong></p>\r\n\r\n<ol>\r\n	<li>Meningkatkan mutu, akses, dan relevansi pendidikan politeknik untuk menghasilkan lulusan sesuai kebutuhan pekerjaan;</li>\r\n	<li>Melakukan penelitian terapan dan pengabdian masyarakat untuk mengatasi persoalan industri dan masyarakat.</li>\r\n</ol>\r\n\r\n<p><strong>Tujuan</strong></p>\r\n\r\n<ul>\r\n	<li>Menghasilkan lulusan yang berkualitas, mandiri, dan berdaya juang tinggi</li>\r\n	<li>Menghasilkan produk akademik yang memberikan manfaat bagi masyarakat luas</li>\r\n	<li>Memberikan kontribusi kepada kesejahteraan masyarakat melalui kegiatan pengabdian kepada masyarakat</li>\r\n	<li>Menjalankan program kemitraan dengan industri dan dunia usaha untuk menjamin keberlanjutan penyelenggaraan pendidikan</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sam` int(7) NOT NULL,
  `file` varchar(225) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sambutan`
--

INSERT INTO `sambutan` (`id_sam`, `file`, `nama`, `isi`) VALUES
(3, 'smk2.jpg', 'Dodot Yuliantoro, S.Pd, MT', '<p>Bismillahirohmannirrohim</p>\r\n\r\n<p>Assalamualaikum Warahmatullah Wabarakatuh</p>\r\n\r\n<p>Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat www.smkn1penukal.sch.id dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan Negeri (SMKN) 1 Penukal yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.</p>\r\n\r\n<p>Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim IT yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.</p>\r\n\r\n<p>Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>\r\n\r\n<p>Terima kasih semoga Allah &lsquo;Azza Wa Jalla menyertai doa kita semua&hellip;&hellip;amin.</p>\r\n\r\n<p>Bismillahirohmannirrohim</p>\r\n\r\n<p>Assalamualaikum Warahmatullah Wabarakatuh</p>\r\n\r\n<p>Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat www.smkn1penukal.sch.id dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan Negeri (SMKN) 1 Penukal yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.</p>\r\n\r\n<p>Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim IT yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.</p>\r\n\r\n<p>Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>\r\n\r\n<p>Terima kasih semoga Allah &lsquo;Azza Wa Jalla menyertai doa kita semua&hellip;&hellip;amin.</p>');

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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_bukutamu` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_daftar` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_info` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `id_sam` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
