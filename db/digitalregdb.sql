-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 05:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalregdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `CompanyName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `CompanyName`) VALUES
(0, ''),
(1, 'ADIRA'),
(2, 'AKA GROUP'),
(3, 'INDOMOBIL GROUP'),
(4, 'MPM AUTO'),
(5, 'NFSI'),
(6, 'MTF'),
(7, 'IMFI'),
(8, 'MAYBANK FINANCE'),
(9, 'DIPO STAR FINANCE'),
(10, 'OTO'),
(11, 'SHINHAN'),
(12, 'NMI');

-- --------------------------------------------------------

--
-- Table structure for table `jobtitle`
--

CREATE TABLE `jobtitle` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobtitle`
--

INSERT INTO `jobtitle` (`ID`, `Title`) VALUES
(0, NULL),
(1, 'KACAB'),
(2, 'KABENG'),
(3, 'President Director'),
(4, 'Director'),
(5, 'CEO'),
(6, 'EGM'),
(7, 'Vice President'),
(8, 'Marketing'),
(9, 'Sales'),
(10, 'Management'),
(11, 'Korwil Sales'),
(12, 'Korwil After Sales'),
(13, 'Management IMG'),
(14, 'Management MPM'),
(15, 'Management AKA'),
(16, 'Dealer & Network Development');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(10) DEFAULT NULL,
  `UserType` enum('OfficialTeam','BoothRegistration','','') DEFAULT NULL,
  `IsActivated` enum('Yes','No','','') DEFAULT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `NoTelp` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `CompanyID` int(11) DEFAULT NULL,
  `Cabang` varchar(250) DEFAULT NULL,
  `JobTitleID` int(11) DEFAULT NULL,
  `Commitment` varchar(500) DEFAULT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Signature` varchar(500) DEFAULT NULL,
  `Notes` varchar(500) DEFAULT NULL,
  `SubmitedDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `UserID`, `UserType`, `IsActivated`, `UserName`, `NoTelp`, `Email`, `CompanyID`, `Cabang`, `JobTitleID`, `Commitment`, `Image`, `Signature`, `Notes`, `SubmitedDate`) VALUES
(281, 'DIDD05001', 'BoothRegistration', 'Yes', 'Martin Pudjiadi', NULL, NULL, 3, 'MT. HARYONO', 1, 'Komit ya', NULL, NULL, NULL, '2017-08-10 05:08:09'),
(282, 'DIDD05002', 'OfficialTeam', 'Yes', 'Keny Susanto', NULL, NULL, 3, 'BATU CEPER', 1, 'saya akan mencapai 100 unit', NULL, NULL, NULL, '2017-08-08 17:08:32'),
(283, 'DIDD05003', 'OfficialTeam', 'Yes', 'Agus Halim ', NULL, NULL, 3, 'PLUIT', 1, NULL, NULL, NULL, NULL, NULL),
(284, 'DIDD05004', 'OfficialTeam', 'Yes', 'Freddy Tjitra', NULL, NULL, 3, 'PURI INDAH', 1, 'Semoga Tuhan memberkati kita', NULL, NULL, NULL, '2017-08-08 17:08:59'),
(285, 'DIDD05005', 'OfficialTeam', 'Yes', 'Anton Djayaputra', NULL, NULL, 3, 'PANTAI INDAH KAPUK', 1, 'Berikut data per tanggal 8 Agustus 2017 hari ini yah. ', NULL, NULL, NULL, '2017-08-08 17:08:02'),
(286, 'DIDD05006', 'OfficialTeam', 'Yes', 'Surjadi Alam', NULL, NULL, 3, 'GADING SERPONG', 1, 'Mohon info untuk jadwal UAT team kami mulai kapan ', NULL, NULL, NULL, '2017-08-08 17:08:19'),
(287, 'DIDD05007', 'OfficialTeam', 'Yes', 'Made Suastana', NULL, NULL, 3, 'DAAN MOGOT', 1, 'taging untuk AXA POS sudah kami selesaikan, mohon dibantu untuk review dengan mengikuti informasi ', NULL, NULL, NULL, '2017-08-08 17:08:43'),
(288, 'DIDD05008', 'OfficialTeam', 'Yes', 'Leonardy', NULL, NULL, 3, 'KEBON JERUK', 1, NULL, NULL, NULL, NULL, NULL),
(289, 'DIDD05009', 'OfficialTeam', 'No', 'Said Nur Usman', NULL, NULL, 3, 'BINTARO', 1, NULL, NULL, NULL, NULL, NULL),
(290, 'DIDD05010', 'OfficialTeam', 'Yes', 'Irawan Nurisman', NULL, NULL, 3, 'BUMI SERPONG DAMAI', 1, 'oke', NULL, NULL, NULL, '2017-08-09 09:08:15'),
(291, 'DIDD05011', 'OfficialTeam', 'No', 'Aching', NULL, NULL, 3, 'JATAKE', 1, 'test', NULL, NULL, NULL, '2017-08-09 09:08:39'),
(292, 'DIDD05012', 'OfficialTeam', 'Yes', 'Antony', NULL, NULL, 3, 'CIMONE', 1, 'Sya janji', NULL, NULL, NULL, '2017-08-09 10:08:13'),
(293, 'DIDD05013', 'OfficialTeam', 'Yes', 'Frans Hartanto', NULL, NULL, 3, 'SERANG', 1, 'test doc', NULL, NULL, NULL, '2017-08-09 10:08:55'),
(294, 'DIDD05014', 'OfficialTeam', 'No', 'Lim Kheng Mouw', NULL, NULL, 3, 'SUNTER', 1, NULL, NULL, NULL, NULL, NULL),
(295, 'DIDD05015', 'OfficialTeam', 'Yes', 'Linda Novela', NULL, NULL, 3, 'KELAPA GADING', 1, 'test', NULL, NULL, NULL, '2017-08-09 15:08:15'),
(296, 'DIDD05016', 'OfficialTeam', 'Yes', 'Iman Hermansyah', NULL, NULL, 3, 'BEKASI', 1, 'adfafdad', NULL, NULL, NULL, '2017-08-10 05:08:36'),
(297, 'DIDD05017', 'OfficialTeam', 'No', 'Zulfami Indra', NULL, NULL, 3, 'PULO GADUNG', 1, NULL, NULL, NULL, NULL, NULL),
(298, 'DIDD05018', 'OfficialTeam', 'No', 'Augustinus Leonardo', NULL, NULL, 3, 'HARAPAN INDAH', 1, NULL, NULL, NULL, NULL, NULL),
(299, 'DIDD05019', 'OfficialTeam', 'No', 'Raswanto', NULL, NULL, 3, 'RADIN INTEN', 1, NULL, NULL, NULL, NULL, NULL),
(300, 'DIDD05020', 'OfficialTeam', 'No', 'Agung Febrianto', NULL, NULL, 3, 'PONDOK INDAH', 1, NULL, NULL, NULL, NULL, NULL),
(301, 'DIDD05021', 'OfficialTeam', 'No', 'Elvin Karli', NULL, NULL, 3, 'WARUNG BUNCIT', 1, NULL, NULL, NULL, NULL, NULL),
(302, 'DIDD05022', 'OfficialTeam', 'No', 'Steven', NULL, NULL, 3, 'FATMAWATI', 1, NULL, NULL, NULL, NULL, NULL),
(303, 'DIDD05023', 'OfficialTeam', 'No', 'Andry Adam', NULL, NULL, 3, 'TB. SIMATUPANG', 1, NULL, NULL, NULL, NULL, NULL),
(304, 'DIDD05024', 'OfficialTeam', 'No', 'Lucy Suzanne', NULL, NULL, 3, 'CINERE', 1, NULL, NULL, NULL, NULL, NULL),
(305, 'DIDD05025', 'OfficialTeam', 'No', 'Agung Widhitomo', NULL, NULL, 3, 'DEPOK', 1, NULL, NULL, NULL, NULL, NULL),
(306, 'DIDD05026', 'OfficialTeam', 'No', 'Rudy Hartawan', NULL, NULL, 3, 'DEPOK SUKAMAJU', 1, NULL, NULL, NULL, NULL, NULL),
(307, 'DIDD05027', 'OfficialTeam', 'No', 'Ferdinan Hendra', NULL, NULL, 3, 'CIBUBUR', 1, NULL, NULL, NULL, NULL, NULL),
(308, 'DIDD05028', 'OfficialTeam', 'No', 'Sayudi Soebagio', NULL, NULL, 3, 'BOGOR', 1, NULL, NULL, NULL, NULL, NULL),
(309, 'DIDD05029', 'OfficialTeam', 'No', 'Krismono Kunto Wibowo', NULL, NULL, 3, 'SUKABUMI', 1, NULL, NULL, NULL, NULL, NULL),
(310, 'DIDD05030', 'OfficialTeam', 'No', 'Sayudi Soebagyo', NULL, NULL, 3, 'CIANJUR', 1, NULL, NULL, NULL, NULL, NULL),
(311, 'DIDD05031', 'OfficialTeam', 'No', 'Asep Zainal ', NULL, NULL, 3, 'BOGOR YASMIN', 1, NULL, NULL, NULL, NULL, NULL),
(312, 'DIDD05032', 'OfficialTeam', 'No', 'Irsa Setiadi', NULL, NULL, 3, 'CIKARANG', 1, NULL, NULL, NULL, NULL, NULL),
(313, 'DIDD05033', 'OfficialTeam', 'No', 'GUSAL RINALDY', NULL, NULL, 3, 'KARAWANG 3S', 1, NULL, NULL, NULL, NULL, NULL),
(314, 'DIDD05034', 'OfficialTeam', 'No', 'Andrianto Hendrawan', NULL, NULL, 3, 'PURWAKARTA', 1, NULL, NULL, NULL, NULL, NULL),
(315, 'DIDD05035', 'OfficialTeam', 'No', 'Ivan Sofyan', NULL, NULL, 3, 'BANDUNG SOEKARNO HATTA', 1, NULL, NULL, NULL, NULL, NULL),
(316, 'DIDD05036', 'OfficialTeam', 'No', 'Jonatan Lewi', NULL, NULL, 3, 'BANDUNG VETERAN', 1, NULL, NULL, NULL, NULL, NULL),
(317, 'DIDD05037', 'OfficialTeam', 'No', 'Jandi', NULL, NULL, 3, 'CIMAHI', 1, NULL, NULL, NULL, NULL, NULL),
(318, 'DIDD05038', 'OfficialTeam', 'No', ' Edi Suratno ', NULL, NULL, 3, 'CIREBON', 1, NULL, NULL, NULL, NULL, NULL),
(319, 'DIDD05039', 'OfficialTeam', 'No', 'Deky Fauzi', NULL, NULL, 3, 'INDRAMAYU', 1, NULL, NULL, NULL, NULL, NULL),
(320, 'DIDD05040', 'OfficialTeam', 'No', 'Ferry Cahyono Putro', NULL, NULL, 3, 'PEKALONGAN', 1, NULL, NULL, NULL, NULL, NULL),
(321, 'DIDD05041', 'OfficialTeam', 'No', 'EDI GUNADI N', NULL, NULL, 3, 'TASIKMALAYA', 1, NULL, NULL, NULL, NULL, NULL),
(322, 'DIDD05042', 'OfficialTeam', 'No', 'Sahid Ramadhan', NULL, NULL, 3, 'TEGAL', 1, NULL, NULL, NULL, NULL, NULL),
(323, 'DIDD05043', 'OfficialTeam', 'No', 'Ferialdy Nurisman', NULL, NULL, 3, 'KUDUS', 1, NULL, NULL, NULL, NULL, NULL),
(324, 'DIDD05044', 'OfficialTeam', 'No', 'Augus Tjhan', NULL, NULL, 3, 'SOLO JEBRES', 1, NULL, NULL, NULL, NULL, NULL),
(325, 'DIDD05045', 'OfficialTeam', 'No', 'Benny Suparman', NULL, NULL, 3, 'SOLO BARU', 1, NULL, NULL, NULL, NULL, NULL),
(326, 'DIDD05046', 'OfficialTeam', 'No', 'Waryono', NULL, NULL, 3, 'PURWOKERTO', 1, NULL, NULL, NULL, NULL, NULL),
(327, 'DIDD05047', 'OfficialTeam', 'No', 'I Gusti Ngurah Sebudhie Junior', NULL, NULL, 3, 'SEMARANG PURI ANJASMORO', 1, NULL, NULL, NULL, NULL, NULL),
(328, 'DIDD05048', 'OfficialTeam', 'No', 'Arief Prabowo', NULL, NULL, 3, 'SEMARANG MAJAPAHIT', 1, NULL, NULL, NULL, NULL, NULL),
(329, 'DIDD05049', 'OfficialTeam', 'No', 'Rommy Hidayat', NULL, NULL, 3, 'SEMARANG SETIABUDI', 1, NULL, NULL, NULL, NULL, NULL),
(330, 'DIDD05050', 'OfficialTeam', 'No', 'Angga Kristian', NULL, NULL, 3, 'SALATIGA', 1, NULL, NULL, NULL, NULL, NULL),
(331, 'DIDD05051', 'OfficialTeam', 'No', 'Sonny Subuana ', NULL, NULL, 3, 'YOGYA MLATI', 1, NULL, NULL, NULL, NULL, NULL),
(332, 'DIDD05052', 'OfficialTeam', 'No', 'henky Bonardy', NULL, NULL, 3, 'MAGELANG', 1, NULL, NULL, NULL, NULL, NULL),
(333, 'DIDD05053', 'OfficialTeam', 'No', 'Budiman', NULL, NULL, 3, 'BANTUL', 1, NULL, NULL, NULL, NULL, NULL),
(334, 'DIDD05054', 'OfficialTeam', 'No', 'Sadrach Soewargo', NULL, NULL, 3, 'SURABAYA BASUKI RAHMAT', 1, NULL, NULL, NULL, NULL, NULL),
(335, 'DIDD05055', 'OfficialTeam', 'No', 'Johannes', NULL, NULL, 3, 'KEDIRI', 1, NULL, NULL, NULL, NULL, NULL),
(336, 'DIDD05056', 'OfficialTeam', 'No', 'Yusea Kurnia Abadi', NULL, NULL, 3, 'SURABAYA AHMAD YANI', 1, NULL, NULL, NULL, NULL, NULL),
(337, 'DIDD05057', 'OfficialTeam', 'No', 'Yoyok Handoyo', NULL, NULL, 3, 'SURABAYA JEMURSARI', 1, NULL, NULL, NULL, NULL, NULL),
(338, 'DIDD05058', 'OfficialTeam', 'No', 'Johannes Cahyo Yuwono', NULL, NULL, 3, 'SIDOARJO', 1, NULL, NULL, NULL, NULL, NULL),
(339, 'DIDD05059', 'OfficialTeam', 'No', 'Hero Rioda', NULL, NULL, 3, 'MADIUN', 1, NULL, NULL, NULL, NULL, NULL),
(340, 'DIDD05060', 'OfficialTeam', 'No', 'L. Kadarmansyah ', NULL, NULL, 3, 'MALANG', 1, NULL, NULL, NULL, NULL, NULL),
(341, 'DIDD05061', 'OfficialTeam', 'No', 'Ramli Kasidi', NULL, NULL, 3, 'BANYUWANGI', 1, NULL, NULL, NULL, NULL, NULL),
(342, 'DIDD05062', 'OfficialTeam', 'No', 'Jimmy Sahadat Manfaat', NULL, NULL, 3, 'JEMBER', 1, NULL, NULL, NULL, NULL, NULL),
(343, 'DIDD05063', 'OfficialTeam', 'No', 'Luki Yunto', NULL, NULL, 3, 'BALI DENPASAR GATSU', 1, NULL, NULL, NULL, NULL, NULL),
(344, 'DIDD05064', 'OfficialTeam', 'No', 'Stanley Handjojo ', NULL, NULL, 3, 'BALI GIANYAR', 1, NULL, NULL, NULL, NULL, NULL),
(345, 'DIDD05065', 'OfficialTeam', 'No', 'Andi Abdul Rahman ', NULL, NULL, 3, 'BALI NUSA DUA', 1, NULL, NULL, NULL, NULL, NULL),
(346, 'DIDD05066', 'OfficialTeam', 'No', 'Tonny Wu', NULL, NULL, 3, 'LOMBOK', 1, NULL, NULL, NULL, NULL, NULL),
(347, 'DIDD05067', 'OfficialTeam', 'No', 'Lutfi Affandi', NULL, NULL, 3, 'MAKASSAR PETTARANI', 1, NULL, NULL, NULL, NULL, NULL),
(348, 'DIDD05068', 'OfficialTeam', 'No', 'Yesaya Roberto', NULL, NULL, 3, 'MAKASSAR LATIMOJONG', 1, NULL, NULL, NULL, NULL, NULL),
(349, 'DIDD05069', 'OfficialTeam', 'No', 'Agus Nugraha', NULL, NULL, 3, 'PALU', 1, NULL, NULL, NULL, NULL, NULL),
(350, 'DIDD05070', 'OfficialTeam', 'No', 'Doni Lusianto ', NULL, NULL, 3, 'MANADO', 1, NULL, NULL, NULL, NULL, NULL),
(351, 'DIDD05071', 'OfficialTeam', 'No', 'Robertus Ramli Riadi', NULL, NULL, 3, 'GORONTALO', 1, NULL, NULL, NULL, NULL, NULL),
(352, 'DIDD05072', 'OfficialTeam', 'No', 'Parnamian Johannes Nababan', NULL, NULL, 3, 'MEDAN AMIR HAMZAH', 1, NULL, NULL, NULL, NULL, NULL),
(353, 'DIDD05073', 'OfficialTeam', 'No', 'Hamdansyah', NULL, NULL, 3, 'BANDA ACEH', 1, NULL, NULL, NULL, NULL, NULL),
(354, 'DIDD05074', 'OfficialTeam', 'No', 'Ariston Sinuraya', NULL, NULL, 3, 'MEDAN GATOT SOEBROTO', 1, NULL, NULL, NULL, NULL, NULL),
(355, 'DIDD05075', 'OfficialTeam', 'No', 'Oey Denny', NULL, NULL, 3, 'MEDAN AMPLAS', 1, NULL, NULL, NULL, NULL, NULL),
(356, 'DIDD05076', 'OfficialTeam', 'No', 'Samuel Hong Sanyoto', NULL, NULL, 3, 'LAMPUNG', 1, NULL, NULL, NULL, NULL, NULL),
(357, 'DIDD05077', 'OfficialTeam', 'No', 'Daniel Sinaga', NULL, NULL, 3, 'PALEMBANG', 1, NULL, NULL, NULL, NULL, NULL),
(358, 'DIDD05078', 'OfficialTeam', 'No', 'Anwar Soesatyo Tisna', NULL, NULL, 3, 'PANGKAL PINANG', 1, NULL, NULL, NULL, NULL, NULL),
(359, 'DIDD05079', 'OfficialTeam', 'No', 'John Edward Simatupang', NULL, NULL, 3, 'JAMBI', 1, NULL, NULL, NULL, NULL, NULL),
(360, 'DIDD05080', 'OfficialTeam', 'No', 'Edwar', NULL, NULL, 3, 'PADANG', 1, NULL, NULL, NULL, NULL, NULL),
(361, 'DIDD05081', 'OfficialTeam', 'No', 'Zeffry Sany', NULL, NULL, 3, 'PEKANBARU', 1, NULL, NULL, NULL, NULL, NULL),
(362, 'DIDD05082', 'OfficialTeam', 'No', 'Tunggul J L Tobing', NULL, NULL, 3, 'DURI', 1, NULL, NULL, NULL, NULL, NULL),
(363, 'DIDD05083', 'OfficialTeam', 'No', 'Erdy Wijaya', NULL, NULL, 3, 'BATAM', 1, NULL, NULL, NULL, NULL, NULL),
(364, 'DIDD05084', 'OfficialTeam', 'No', 'Go Tji Fong', NULL, NULL, 3, 'PONTIANAK', 1, NULL, NULL, NULL, NULL, NULL),
(365, 'DIDD05085', 'OfficialTeam', 'No', 'David Latif', NULL, NULL, 3, 'PALANGKARAYA', 1, NULL, NULL, NULL, NULL, NULL),
(366, 'DIDD05086', 'OfficialTeam', 'No', 'Tommy Tanzil', NULL, NULL, 3, 'BALIKPAPAN', 1, NULL, NULL, NULL, NULL, NULL),
(367, 'DIDD05087', 'OfficialTeam', 'No', 'Ken Christian Hadiwidjaja', NULL, NULL, 3, 'BANJARMASIN', 1, NULL, NULL, NULL, NULL, NULL),
(368, 'DIDD05088', 'OfficialTeam', 'No', 'Willy Prima', NULL, NULL, 3, 'SAMARINDA', 1, NULL, NULL, NULL, NULL, NULL),
(369, 'DIDD07089', 'OfficialTeam', 'No', 'Bernard Wirawan', NULL, NULL, 4, 'ALAM SUTRA', 1, NULL, NULL, NULL, NULL, NULL),
(370, 'DIDD07090', 'OfficialTeam', 'No', 'Andy Tan', NULL, NULL, 4, 'KENJERAN', 1, NULL, NULL, NULL, NULL, NULL),
(371, 'DIDD07091', 'OfficialTeam', 'No', 'Arinal', NULL, NULL, 4, 'TAMBUN', 1, NULL, NULL, NULL, NULL, NULL),
(372, 'DIDD07092', 'OfficialTeam', 'No', 'Daniel Setiadi', NULL, NULL, 4, 'BALARAJA', 1, NULL, NULL, NULL, NULL, NULL),
(373, 'DIDD07093', 'OfficialTeam', 'No', 'Djong Gumarus', NULL, NULL, 4, 'PRAMUKA', 1, NULL, NULL, NULL, NULL, NULL),
(374, 'DIDD05094', 'OfficialTeam', 'No', 'Asep Dadan Ismail', NULL, NULL, 3, 'D.E Padjajaran', 1, NULL, NULL, NULL, NULL, NULL),
(375, 'DIDD05095', 'OfficialTeam', 'No', 'Indra Kesuma ', NULL, NULL, 3, 'D.E Adam Malik', 1, NULL, NULL, NULL, NULL, NULL),
(376, 'DIDD05096', 'OfficialTeam', 'No', 'Edi Wijaya', NULL, NULL, 3, 'D.E S.Parman', 1, NULL, NULL, NULL, NULL, NULL),
(377, 'DIDD05097', 'OfficialTeam', 'No', '', NULL, NULL, 3, 'D.E.S. SLIPI', 1, NULL, NULL, NULL, NULL, NULL),
(378, 'DIDD05098', 'OfficialTeam', 'No', 'Rachmat Mauludin', NULL, NULL, 3, 'Nissan-Datsun Kendari', 2, NULL, NULL, NULL, NULL, NULL),
(379, 'DIDD05099', 'OfficialTeam', 'No', 'Sharifudin', NULL, NULL, 3, 'Nissan-Datsun Jati', 2, NULL, NULL, NULL, NULL, NULL),
(380, 'DIDD05100', 'OfficialTeam', 'No', 'Faldy Rialdy', NULL, NULL, 3, 'Nissan-Datsun Tb Simatupang', 2, NULL, NULL, NULL, NULL, NULL),
(381, 'DIDD07101', 'OfficialTeam', 'No', 'Don Purnawadewa', NULL, NULL, 4, 'Nissan-Datsun Kenjeran', 2, NULL, NULL, NULL, NULL, NULL),
(382, 'DIDD05102', 'OfficialTeam', 'No', 'Baskoro Adiguna', NULL, NULL, 3, 'Nissan-Datsun Jebres', 2, NULL, NULL, NULL, NULL, NULL),
(383, 'DIDD05103', 'OfficialTeam', 'No', 'Aang Kurniawan', NULL, NULL, 3, 'Nissan-Datsun Palu', 2, NULL, NULL, NULL, NULL, NULL),
(384, 'DIDD07104', 'OfficialTeam', 'No', 'Rudi Hastono', NULL, NULL, 4, 'Nissan-Datsun Pramuka', 2, NULL, NULL, NULL, NULL, NULL),
(385, 'DIDD05105', 'OfficialTeam', 'No', 'Agung Wibowo', NULL, NULL, 3, 'Nissan-Datsun Pangkal Pinang', 2, NULL, NULL, NULL, NULL, NULL),
(386, 'DIDD05106', 'OfficialTeam', 'No', 'Fakhri Maulana', NULL, NULL, 3, 'Nissan-Datsun Probolinggo', 2, NULL, NULL, NULL, NULL, NULL),
(387, 'DIDD05107', 'OfficialTeam', 'No', 'Yoga Prayuda', NULL, NULL, 3, 'Nissan-Datsun P. Hidayat', 2, NULL, NULL, NULL, NULL, NULL),
(388, 'DIDD05108', 'OfficialTeam', 'No', 'Riyanto', NULL, NULL, 3, 'Nissan Amir Hamzah', 2, NULL, NULL, NULL, NULL, NULL),
(389, 'DIDD05109', 'OfficialTeam', 'No', 'Tony Porayouw', NULL, NULL, 3, 'Nissan-Datsun Kombos', 2, NULL, NULL, NULL, NULL, NULL),
(390, 'DIDD05110', 'OfficialTeam', 'No', 'Tri Suprihatin', NULL, NULL, 3, 'Nissan-Datsun Warung Buncit', 2, NULL, NULL, NULL, NULL, NULL),
(391, 'DIDD05111', 'OfficialTeam', 'No', 'Septian Prasetyawan', NULL, NULL, 3, 'Nissan-Datsun', 2, NULL, NULL, NULL, NULL, NULL),
(392, 'DIDD05112', 'OfficialTeam', 'No', 'Gede Satria', NULL, NULL, 3, 'Nissan-Datsun Gianyar', 2, NULL, NULL, NULL, NULL, NULL),
(393, 'DIDD05113', 'OfficialTeam', 'No', 'Rulius Prasongko', NULL, NULL, 3, 'Nissan-Datsun Majapahit', 2, NULL, NULL, NULL, NULL, NULL),
(394, 'DIDD05114', 'OfficialTeam', 'No', 'Roy Purba', NULL, NULL, 3, 'Nissan-Datsun Yos Sudarso', 2, NULL, NULL, NULL, NULL, NULL),
(395, 'DIDD05115', 'OfficialTeam', 'No', 'Issa Handoko', NULL, NULL, 3, 'Nissan-Datsun Sunter', 2, NULL, NULL, NULL, NULL, NULL),
(396, 'DIDD05116', 'OfficialTeam', 'No', 'Dwi Susilo', NULL, NULL, 3, 'Nissan-Datsun Sempaja', 2, NULL, NULL, NULL, NULL, NULL),
(397, 'DIDD05117', 'OfficialTeam', 'No', 'Bogy Saputra', NULL, NULL, 3, 'Nissan-Datsun Gatot Subroto Bali', 2, NULL, NULL, NULL, NULL, NULL),
(398, 'DIDD09118', 'OfficialTeam', 'No', 'Rahul Sinha', NULL, NULL, 5, 'LEASING 5', 3, NULL, NULL, NULL, NULL, NULL),
(399, 'DIDD09119', 'OfficialTeam', 'No', 'Bobby Heryunda', NULL, NULL, 5, 'LEASING 5', 4, NULL, NULL, NULL, NULL, NULL),
(400, 'DIDD08120', 'OfficialTeam', 'No', 'Ignatius Susatyo Wijoyo', NULL, NULL, 6, 'LEASING 6', 3, NULL, NULL, NULL, NULL, NULL),
(401, 'DIDD08121', 'OfficialTeam', 'No', 'Albertus Hendi', NULL, NULL, 6, 'LEASING 6', 4, NULL, NULL, NULL, NULL, NULL),
(402, 'DIDD04122', 'OfficialTeam', 'No', 'Gunawan', NULL, NULL, 7, 'LEASING 7', 5, NULL, NULL, NULL, NULL, NULL),
(403, 'DIDD04123', 'OfficialTeam', 'No', 'Edy Handojo', NULL, NULL, 7, 'LEASING 7', 4, NULL, NULL, NULL, NULL, NULL),
(404, 'DIDD06124', 'OfficialTeam', 'No', 'Alexander', NULL, NULL, 8, 'LEASING 8', 5, NULL, NULL, NULL, NULL, NULL),
(405, 'DIDD06125', 'OfficialTeam', 'No', 'Miki Effendi', NULL, NULL, 8, 'LEASING 8', 4, NULL, NULL, NULL, NULL, NULL),
(406, 'DIDD03126', 'OfficialTeam', 'No', 'Shinya Ikeda', NULL, NULL, 9, 'LEASING 9', 3, NULL, NULL, NULL, NULL, NULL),
(407, 'DIDD03127', 'OfficialTeam', 'No', 'Masato Horikoshi', NULL, NULL, 9, 'LEASING 9', 6, NULL, NULL, NULL, NULL, NULL),
(408, 'DIDD01128', 'OfficialTeam', 'No', 'Hafid Hadeli', NULL, NULL, 1, 'LEASING 1', 3, NULL, NULL, NULL, NULL, NULL),
(409, 'DIDD01129', 'OfficialTeam', 'No', 'Harry Latief', NULL, NULL, 1, 'LEASING 1', 4, NULL, NULL, NULL, NULL, NULL),
(410, 'DIDD11130', 'OfficialTeam', 'No', 'Djohan Marzuki', NULL, NULL, 10, 'LEASING OTO', 3, NULL, NULL, NULL, NULL, NULL),
(411, 'DIDD11131', 'OfficialTeam', 'No', 'Mahin Santoso', NULL, NULL, 10, 'LEASING OTO', 4, NULL, NULL, NULL, NULL, NULL),
(412, 'DIDD12132', 'OfficialTeam', 'No', 'Kim Dae Young', NULL, NULL, 11, 'LEASING 11', 3, NULL, NULL, NULL, NULL, NULL),
(413, 'DIDD12133', 'OfficialTeam', 'No', 'Tan Kim Piauw', NULL, NULL, 11, 'LEASING 11', 7, NULL, NULL, NULL, NULL, NULL),
(414, 'DIDD10134', 'OfficialTeam', 'No', 'Budi Nur Mukmin', NULL, NULL, 12, 'NISSAN HO', 8, NULL, NULL, NULL, NULL, NULL),
(415, 'DIDD10135', 'OfficialTeam', 'No', 'Alfieta Olivia', NULL, NULL, 12, 'NISSAN HO', 8, NULL, NULL, NULL, NULL, NULL),
(416, 'DIDD10136', 'OfficialTeam', 'No', 'Bima Gamadita', NULL, NULL, 12, 'NISSAN HO', 8, NULL, NULL, NULL, NULL, NULL),
(417, 'DIDD10137', 'OfficialTeam', 'No', 'Bachrein Kawiluge', NULL, NULL, 12, 'NISSAN HO', 8, NULL, NULL, NULL, NULL, NULL),
(418, 'DIDD10138', 'OfficialTeam', 'No', 'Ryan Andhika', NULL, NULL, 12, 'NISSAN HO', 8, NULL, NULL, NULL, NULL, NULL),
(419, 'DIDD10139', 'OfficialTeam', 'No', 'Budi DJ', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(420, 'DIDD10140', 'OfficialTeam', 'No', 'Eng Joo', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(421, 'DIDD10141', 'OfficialTeam', 'No', 'Eric Pascanugraha', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(422, 'DIDD10142', 'OfficialTeam', 'No', 'Agustian Ferikles', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(423, 'DIDD10143', 'OfficialTeam', 'No', 'Julian Olmon', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(424, 'DIDD10144', 'OfficialTeam', 'No', 'Indra Yanto', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(425, 'DIDD10145', 'OfficialTeam', 'No', 'Luciana', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(426, 'DIDD10146', 'OfficialTeam', 'No', 'Andhika Mulya', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(427, 'DIDD10147', 'OfficialTeam', 'No', 'Hendry Siaow', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(428, 'DIDD10148', 'OfficialTeam', 'No', 'Bimawan', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(429, 'DIDD10149', 'OfficialTeam', 'No', 'Baratha', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(430, 'DIDD10150', 'OfficialTeam', 'No', 'Hengky', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(431, 'DIDD10151', 'OfficialTeam', 'No', 'Evan', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(432, 'DIDD10152', 'OfficialTeam', 'No', 'Bobby', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(433, 'DIDD10153', 'OfficialTeam', 'No', 'Bram', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(434, 'DIDD10154', 'OfficialTeam', 'No', 'Ricky', NULL, NULL, 12, 'NISSAN HO', 9, NULL, NULL, NULL, NULL, NULL),
(435, 'DIDD10155', 'OfficialTeam', 'No', 'Davy Tuilan', NULL, NULL, 12, 'NISSAN HO', 10, NULL, NULL, NULL, NULL, NULL),
(436, 'DIDD10156', 'OfficialTeam', 'No', 'Alan caugant', NULL, NULL, 12, 'NISSAN HO', 10, NULL, NULL, NULL, NULL, NULL),
(437, 'DIDD05157', 'OfficialTeam', 'No', 'Utama Kovara', NULL, NULL, 3, 'DEALER HO', 9, NULL, NULL, NULL, NULL, NULL),
(438, 'DIDD05158', 'OfficialTeam', 'No', 'Wandy', NULL, NULL, 3, 'DEALER HO', 9, NULL, NULL, NULL, NULL, NULL),
(439, 'DIDD05159', 'OfficialTeam', 'No', 'Dani Munajat', NULL, NULL, 3, 'DEALER HO', 9, NULL, NULL, NULL, NULL, NULL),
(440, 'DIDD05160', 'OfficialTeam', 'No', 'Caca Tobing', NULL, NULL, 3, 'DEALER HO', 9, NULL, NULL, NULL, NULL, NULL),
(441, 'DIDD07161', 'OfficialTeam', 'No', 'Yudi Esaputra', NULL, NULL, 4, 'DEALER HO', 9, NULL, NULL, NULL, NULL, NULL),
(442, 'DIDD05162', 'OfficialTeam', 'No', 'Budi sujanto', NULL, NULL, 3, 'DEALER HO', 10, NULL, NULL, NULL, NULL, NULL),
(443, 'DIDD05163', 'OfficialTeam', 'No', 'Giri Suswanto', NULL, NULL, 3, 'DEALER HO', 10, NULL, NULL, NULL, NULL, NULL),
(444, 'DIDD05164', 'OfficialTeam', 'No', 'Pramudya Widianto', NULL, NULL, 3, 'DEALER HO', 10, NULL, NULL, NULL, NULL, NULL),
(445, 'DIDD05165', 'OfficialTeam', 'No', 'Asril', NULL, NULL, 3, 'DEALER HO', 10, NULL, NULL, NULL, NULL, NULL),
(446, 'DIDD07166', 'OfficialTeam', 'No', 'Rio Rajab', NULL, NULL, 4, 'DEALER HO', 10, NULL, NULL, NULL, NULL, NULL),
(447, 'DIDD05167', 'OfficialTeam', 'No', 'Susilo Dharmawan', NULL, NULL, 3, 'DEALER HO', 13, NULL, NULL, NULL, NULL, NULL),
(448, 'DIDD07168', 'OfficialTeam', 'No', 'Yoshiya Holigome', NULL, NULL, 4, 'DEALER HO', 14, NULL, NULL, NULL, NULL, NULL),
(449, 'DIDD02169', 'OfficialTeam', 'No', 'Nugroho Surhalim', NULL, NULL, 2, 'DEALER HO', 15, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `websetting`
--

CREATE TABLE `websetting` (
  `ID` int(11) NOT NULL,
  `Status` enum('Active','Inactive','','') DEFAULT NULL,
  `Code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `websetting`
--

INSERT INTO `websetting` (`ID`, `Status`, `Code`) VALUES
(1, 'Inactive', 'home');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jobtitle`
--
ALTER TABLE `jobtitle`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `websetting`
--
ALTER TABLE `websetting`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=450;
--
-- AUTO_INCREMENT for table `websetting`
--
ALTER TABLE `websetting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
