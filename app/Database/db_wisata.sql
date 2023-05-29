-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2023 pada 13.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', '$2y$10$wEy0MH3DzePJr.bpPajg/e5FQzQMYN/zhA2tkNI.4maqodtvAZg9K', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` varchar(150) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_wisata` int(11) DEFAULT NULL,
  `qty_anak` varchar(10) DEFAULT NULL,
  `qty_dewasa` varchar(10) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `tgl_berwisata` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `kelamin` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ponsel` varchar(13) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(225) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `harga`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Curug Badak', 'Curug Badak mengacu pada sepasang air terjun di kawasan Gunung Talaga Bodas. Lokasinya berada di tebing yang dikelilingi area hutan. Air terjun tertinggi bisa mencapai tinggi 40 meter.  Namanya datang dari batu yang berada di tengah aliran salah satu air terjun. Batu tersebut berbentuk agak lonjong. Saat debit air sedang tinggi, batu itu tampak menyembul dari balik aliran air yang deras. Warga setempat menyebutnya mirip cula badak, sehingga air terjun ini dinamakan Curug Badak.', '10.000', 'curug.png', '2023-05-28 16:37:45', '2023-05-29 08:25:36', NULL),
(2, 'Curug Badak', 'qwqwqqwq', '10.000', 'sampulYT.png', '2023-05-28 17:08:50', '2023-05-29 04:26:25', '2023-05-29 04:26:25'),
(3, 'Curug Badak', 'qwqwqqwq', '10.000', 'sampulYT.png', '2023-05-28 17:09:16', '2023-05-29 04:26:23', '2023-05-29 04:26:23'),
(4, 'wwww', 'eeeee', '20.000', 'maliki.png', '2023-05-29 04:03:59', '2023-05-29 04:26:20', '2023-05-29 04:26:20'),
(5, 'aaaaaaaaaaaa', 'eeeee', '20.000', 'sampulYT.png', '2023-05-29 04:04:14', '2023-05-29 04:26:17', '2023-05-29 04:26:17'),
(6, 'Curug Batu Hanoman', 'Curug Hanoman atau Batu Hanoman adalah air terjun lainnya yang bisa ditemukan di sekitar Curug Badak. Bentuknya landai dan menyerupai sungai berarus deras. Dari jauh, bentuknya tampak seperti ekor kera berwarna putih. Inilah alasan pemberian nama “Hanoman” untuk air terjun tersebut.', '10.000', 'batuhanoman1.png', '2023-05-29 08:25:07', '2023-05-29 08:25:07', NULL),
(7, 'Spot-Spot Selfie', 'Keindahan alam kawasan Curug Badak tidak sampai di sana. Area hutan pinus yang asri disulap oleh warga dengan sedikit kreativitas. Kini, pengunjung bisa menemukan banyak spot berfoto yang lucu dan menarik di sini.  Beberapa spot tersebut tidak hanya enak dilihat (dan difoto), tetapi juga dimanfaatkan sebagai tempat istirahat. Lihat saja barisan hammock berwarna-warni yang dipasang di antara pepohonan. Pengunjung bisa menyewanya dan berayun di hammock sambil menikmati sejuknya suasana hutan.  Selain itu, terdapat banyak spot lainnya. Spot seperti dermaga di ketinggian dan terowongan bunga adalah beberapa di antaranya. Asyiknya, pengunjung cukup membayar biaya seikhlasnya untuk berfoto di sini.', '10.000', 'destinasi.png', '2023-05-29 09:50:33', '2023-05-29 09:50:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
