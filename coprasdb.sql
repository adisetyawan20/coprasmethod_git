-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2020 pada 16.49
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `coprasdb`
--
CREATE DATABASE IF NOT EXISTS `coprasdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coprasdb`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_alternatif`
--

CREATE TABLE IF NOT EXISTS `nilai_alternatif` (
  `id_barang` varchar(100) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `tekstur` int(5) NOT NULL,
  `warna` int(5) NOT NULL,
  `bahan` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `nilai_harga` varchar(100) NOT NULL,
  `jarak` int(10) NOT NULL,
  `nilai_jarak` int(15) NOT NULL,
  `created_time` datetime NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id_barang`, `nm_barang`, `tekstur`, `warna`, `bahan`, `harga`, `nilai_harga`, `jarak`, `nilai_jarak`, `created_time`) VALUES
('5', 'kain mori ', 3, 4, 2, 36000, '1', 47, 0, '2020-05-30 22:31:15'),
('5ed27a8d405aa', 'kain dolby ', 2, 4, 1, 12000, '1', 21, 0, '2020-05-30 22:35:15'),
('5ed27de7991b6', 'kain paris ', 4, 4, 5, 69000, '2', 89, 0, '2020-05-30 22:38:15'),
('5ed2a2f379bc0', 'kain sutra', 4, 4, 3, 39000, '1', 80, 0, '2020-05-31 01:16:19'),
('5ed90d0d0b91b', 'kain merah ', 3, 2, 4, 12000, '1', 20, 5, '2020-06-04 22:02:37'),
('7812', 'Kain Katun', 2, 1, 3, 78000, '0', 89, 0, '2020-05-30 22:28:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alternatif`
--

CREATE TABLE IF NOT EXISTS `tbl_alternatif` (
  `id_alter` int(7) NOT NULL AUTO_INCREMENT,
  `nm_alter` varchar(30) NOT NULL,
  PRIMARY KEY (`id_alter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alter`, `nm_alter`) VALUES
(5, 'Kain Mori '),
(6, 'Kain Paris ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE IF NOT EXISTS `tbl_kriteria` (
  `id_kriteria` int(10) NOT NULL AUTO_INCREMENT,
  `kriteria` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  `bobot` float NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kriteria`, `type`, `bobot`) VALUES
(1, 'tekstur', 'benefit', 0.1),
(2, 'kualitas warna', 'benefit', 0.2),
(3, 'kualitas bahan', 'benefit', 0.3),
(6, 'harga', 'cost', 0.2),
(7, 'jarak suppliyer', 'cost', 0.2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
