-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2023 pada 05.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(11) NOT NULL,
  `id_ukm` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `link_ig` varchar(100) DEFAULT '-',
  `link_yt` varchar(100) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `id_ukm`, `email`, `link_ig`, `link_yt`) VALUES
(1, 1, 'ukmolahragapolinela@gmail.com', 'https://instagram.com/ukmolahraga_polinela?igshid=MzRlODBiNWFlZA==', 'https://youtube.com/@UkmOlahragaPolinela'),
(2, 2, 'Ukmbspolinela2@gmail.com', 'https://instagram.com/ukm_bspolinela?igshid=MmU2YjMzNjRlOQ==', 'https://youtube.com/@ukmbspolinela9405');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukm`
--

CREATE TABLE `tb_ukm` (
  `id_ukm` int(11) NOT NULL,
  `nama_ukm` varchar(255) NOT NULL,
  `logo_ukm` varchar(255) DEFAULT NULL,
  `informasi` text DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `foto_satu` varchar(255) DEFAULT NULL,
  `foto_dua` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ukm`
--

INSERT INTO `tb_ukm` (`id_ukm`, `nama_ukm`, `logo_ukm`, `informasi`, `visi`, `misi`, `foto_satu`, `foto_dua`, `created_at`, `updated_at`) VALUES
(1, 'UKM Olahraga', 'UKMO.png', 'UKM Olahraga resmi berdiri sesuai keputusan Sidang Umum Mahasiswa pada tanggal 03 Desember 2011 pukul 20.50 WIB. UKM Olahraga berubah dari Dirjen Olahraga yang berdiri di bawah naungan Badan Eksekutif Mahasiswa Politeknik Negeri Lampung sejak tahun 2001.\r\n\r\nPada Sidang Umum Mahasiswa 2011, diputuskan Dirjen Olahraga menjadi UKM P Olahraga selama masa percobaan selama 6 bulan dan membuat 3 program kerja jangka panjang. Dukungan didapatkan dari semua UKM yang mengutuskan masing-masing delegasinya. Bahkan dukungan didapatkan dari Presiden Mahasiswa 2010, Hasan Basri, Wakil Presiden, dan jajaran stafnya. Juga dari Presiden Mahasiswa 2011, Ahmad Iskandar, Wakil Presiden, dan jajaran staf barunya yang sangat mendukung dan membantu UKM Olahraga dalam Sidang Umum Mahasiswa tersebut.\r\n\r\nPada Sidang Umum tahun 2012, tepatnya pada tanggal 7 Juli, UKM P Olahraga resmi menjadi UKM Olahraga.', 'Menciptakan generasi muda yang berjiwa kreatif dan menjunjung tinggi semangat sportifitas serta menghasilkan atlet-atlet yang berbakat dan berkualitas yang nantinya berguna bagi bangsa dan Negara Indonesia.', 'Mengembangkan bakat dan kreativitas olahraga dari setiap mahasiswa agar memiliki jiwa yang sehat dan selalu menjunjung tinggi sportifitas dalam aspek kehidupannya.', 'dok_ukmo1.jpg', 'dok_ukmo2.jpg', '2023-07-06 02:01:16', '2023-07-15 06:11:16'),
(2, 'UKM Bidang Seni', 'UKMBS.png', 'Unit Kegiatan Mahasiswa Bidang Seni (UKMBS) Politeknik Negeri Lampung sudah ada sejak awal tahun 1990. Ide pembentukan UKMBS Polinela berasal dari UKM POLTAPALA, tetapi pada saat itu belum berbentuk organisasi. UKMBS mulai terstruktur pada tahun 1999. Pada tahun 2000 hingga 2005, UKMBS sempat vakum, namun pada tahun 2006 UKMBS kembali berdiri dengan struktur yang lebih baik dan bergabung dengan Badan Eksekutif Mahasiswa (BEM). Pada saat itu, UKMBS Polinela masih bernama \"Direktorat Jenderal Seni\".\r\nPada tahun 2008, UKMBS Polinela membuat Anggaran Dasar & Anggaran Rumah Tangga yang bertujuan sebagai landasan untuk berorganisasi, status keanggotaan, peraturan, dan sebagainya. Pada awal tahun 2010, UKMBS Polinela mengajukan permohonan untuk menjadi UKM selama 2 tahun berturut-turut dan disetujui menjadi UKM. Kemudian, pada tanggal 23 Juli 2012, melalui Sidang Mahasiswa Direktorat Jenderal Seni, UKMBS resmi menjadi Unit Kegiatan Mahasiswa Bidang Seni (UKMBS).\r\n', 'Menyusun, melaksanakan, dan mengevaluasi setiap program kerja yang telah disusun.\r\nMelaksanakan kegiatan yang dapat meningkatkan kreativitas dan integritas anggota UKMBS.\r\nMembentuk karakter anggota yang beretika.\r\n', 'Menciptakan generasi muda yang berjiwa seni dan berkreativitas tinggi dengan berlandaskan moral dan etika.', '1688706140_13911492b69489ea707c.jpg', '1688706140_6ede6599c695aaa77650.jpg', '2023-07-07 05:02:20', '2023-07-08 04:48:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tb_ukm`
--
ALTER TABLE `tb_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_ukm`
--
ALTER TABLE `tb_ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
