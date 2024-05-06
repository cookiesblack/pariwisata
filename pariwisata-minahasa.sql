-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 06 Bulan Mei 2024 pada 19.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata-minahasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'tes', '', '2023-08-30', '2023-08-30', '2023-08-30 05:30:44', '2023-08-30 05:30:44'),
(2, 'Tarian Maengket', '', '1970-01-01', '1970-01-01', '2023-09-04 04:47:25', '2023-09-04 04:47:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galery`
--

CREATE TABLE `galery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galery`
--

INSERT INTO `galery` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tarian Maengket', 'upload_manual/1693828091.jpg', '2023-09-04 04:48:11', '2023-09-04 04:48:11'),
(2, 'Tarian Kabasaran', 'upload_manual/1693829973.jpg', '2023-09-04 05:19:33', '2023-09-04 05:19:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2023_08_23_112641_create_tb_user', 1),
(3, '2023_08_23_112644_create_tb_post', 1),
(4, '2023_08_23_112646_create__post_view', 1),
(5, '2023_08_23_112648_create_events', 1),
(6, '2023_08_23_112650_create_tb_visitors', 1),
(7, '2023_08_23_112652_create_tb_lokasi', 1),
(8, '2023_02_25_184810_create_users', 2),
(10, '2023_09_04_114022_galeri', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garis_lintang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `garis_bujur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objek_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id`, `nama_lokasi`, `garis_lintang`, `garis_bujur`, `informasi`, `gambar`, `post_link`, `objek_wisata`, `post_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Pesona Wilayah Dataran Tinggi Bukit Kasih Kanonang', '1.164232', '124.756756', '<p>Bukit Kasih Kawangkoan, yang terletak di Kabupaten Minahasa, adalah salah satu tempat wisata yang memukau di Sulawesi Utara. Dikenal sebagai \"Bukit Cinta\", tempat ini mempersembahkan pemandangan alam yang menakjubkan sekaligus menyediakan tempat ziarah yang tenang bagi para pengunjungnya. Dikelilingi oleh pepohonan hijau dan terletak di dataran tinggi, Bukit Kasih menawarkan udara segar dan suasana yang menyegarkan, menjadikannya tempat ideal untuk bersantai dan menikmati keindahan alam sambil memperkuat spiritualitas.</p><p>\n\nSelain keindahan alamnya, Bukit Kasih juga memiliki keunikan yang memikat. Salah satu daya tariknya adalah monumen Yesus Kristus yang berdiri kokoh di atas bukit, memberikan panorama yang memukau bagi para pengunjung. Di sekitar monumen, terdapat patung-patung yang menggambarkan kisah-kisah dalam Alkitab, menambah nuansa religius tempat ini. Para pengunjung juga dapat menikmati berjalan-jalan di taman yang rapi dan indah, sambil menghayati pesan damai dan kasih yang disampaikan melalui seni patung dan lanskap.</p><p>\n\nTidak hanya sebagai tempat wisata, Bukit Kasih Kawangkoan juga sering digunakan sebagai lokasi untuk berbagai acara dan festival. Festival seni dan budaya, konser musik, serta upacara keagamaan sering diadakan di sini, menambah warna dan keberagaman bagi pengunjung yang datang. Dengan infrastruktur yang memadai dan fasilitas yang disediakan, tempat ini menjadi destinasi yang menarik bagi wisatawan lokal maupun mancanegara yang ingin\nSelain keindahan alamnya, Bukit Kasih juga memiliki keunikan yang memikat. Salah satu daya tariknya adalah monumen Yesus Kristus yang berdiri kokoh di atas bukit, memberikan panorama yang memukau bagi para pengunjung. Di sekitar monumen, terdapat patung-patung yang menggambarkan kisah-kisah dalam Alkitab, menambah nuansa religius tempat ini. Para pengunjung juga dapat menikmati berjalan-jalan di taman yang rapi dan indah, sambil menghayati pesan damai dan kasih yang disampaikan melalui seni patung dan lanskap.\n</p><p>\nTidak hanya sebagai tempat wisata, Bukit Kasih Kawangkoan juga sering digunakan sebagai lokasi untuk berbagai acara dan festival. Festival seni dan budaya, konser musik, serta upacara keagamaan sering diadakan di sini, menambah warna dan keberagaman bagi pengunjung yang datang. Dengan infrastruktur yang memadai dan fasilitas yang disediakan, tempat ini menjadi destinasi yang menarik bagi wisatawan lokal maupun mancanegara yang ingin</p>', 'upload_manual/bukit.jpeg', '-', '-', '-', 1, '2023-08-30 05:02:54', '2023-08-30 05:02:54'),
(2, 'Menyelami Keindahan Alam: Pantai Triple-M, Destinasi Wisata Eksotis', '1.174521', '125.028051', '<p>Pantai Triple M di Kabupaten Minahasa adalah sebuah surga tropis yang menawarkan kombinasi sempurna antara keindahan alam, kegiatan rekreasi, dan kemewahan. Dikelilingi oleh panorama alam yang memesona, pantai ini menawarkan pasir putih yang lembut, air laut yang jernih, dan keindahan alam bawah laut yang menakjubkan untuk para pengunjung yang ingin mengeksplorasi dunia bawah laut. Selain itu, Pantai Triple M juga menawarkan berbagai fasilitas seperti restoran yang menyajikan hidangan lezat khas lokal, area piknik yang nyaman, dan fasilitas olahraga air seperti snorkeling, diving, dan jet ski, menjadikannya destinasi ideal untuk liburan bersama keluarga atau bersantai dengan teman-teman.</p><p>\n\nDengan promosi yang sedang berlangsung, Pantai Triple M menawarkan paket liburan yang menarik bagi para wisatawan yang mencari pengalaman yang tak terlupakan di Kabupaten Minahasa. Dengan harga terjangkau, para pengunjung dapat menikmati akomodasi yang nyaman, akses mudah ke fasilitas pantai yang lengkap, serta berbagai kegiatan seru yang tersedia. Pantai Triple M juga menawarkan pengalaman budaya yang unik melalui pertunjukan seni lokal dan kegiatan wisata kuliner, sehingga para wisatawan dapat merasakan kekayaan budaya dan tradisi daerah ini. Dengan berbagai penawaran menarik dan keindahan alamnya yang memesona, Pantai Triple M di Kabupaten Minahasa adalah destinasi liburan yang sempurna bagi siapa saja yang ingin merasakan pesona eksotis Pulau Sulawesi.</p>', 'upload_manual/1693397354.jpg', '', '', '', 1, '2023-08-30 05:09:14', '2023-08-30 05:09:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_last_update` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id`, `post_title`, `post_content`, `post_images`, `post_date`, `post_last_update`, `post_link`, `post_status`, `post_view`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Peranan Aparatur Dinas Pariwisata dan Kebudayaan Kabupaten Minahasa dalam Mengembangkan Objek Wisata Budaya Watu Pinabetengan.', 'Dinas Pariwisata dan Kebudayaan Kabupaten Minahasa merupakanunsur pelaksana teknis kegiatan dibidang Pariwisata dan Kebudayaan yangharus menjalankan tugas dan fungsi sebagaimana diatur dalam Peraturan BupatiNo. 13 Tahun 2008 Tentang Penjabaran Tugas Pokok', 'upload_manual/1693397618.jpg', '2023-08-30', '', '', '', '', 1, '2023-08-30 05:13:38', '2023-08-30 05:13:38'),
(4, 'Pameran Discover North Sulawesi, Minahasa Tampilkan Pentas Seni Budaya dan Kuliner Khas Daerah.', 'Minahasa-Bupati Minahasa Dr.Ir.Royke Octavian Roring, M.Si, IPU Asean, Eng menghadiri acara Discover North Sulawesi ke- 59, yang di buka Gubernur Sulawesi Utara Olly Dondokambey, di rangkaikan dengan HUT Emas Ke-50 Hotel Borobudur Jakarta, Jumat (01/09/20', 'upload_manual/1693834365.jpg', '2023-09-04', '', '', '', '', 1, '2023-09-04 06:32:45', '2023-09-04 06:32:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post_view`
--

CREATE TABLE `tb_post_view` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `view_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `user_photo`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', 'ADMIN', 'aktif', '', '2023-08-30 01:17:24', '2023-08-30 01:17:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visitors`
--

CREATE TABLE `tb_visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visit_date` date NOT NULL,
  `visit_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('ADMIN','PIMPINAN','INSTANSI') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_lokasi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_post_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `tb_post_view`
--
ALTER TABLE `tb_post_view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_post_view_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_user_user_name_unique` (`user_name`);

--
-- Indeks untuk tabel `tb_visitors`
--
ALTER TABLE `tb_visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galery`
--
ALTER TABLE `galery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_post_view`
--
ALTER TABLE `tb_post_view`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_visitors`
--
ALTER TABLE `tb_visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD CONSTRAINT `tb_lokasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_post_view`
--
ALTER TABLE `tb_post_view`
  ADD CONSTRAINT `tb_post_view_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `tb_post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
