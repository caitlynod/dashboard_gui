-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 03, 2015 at 10:38 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: db_dashboard
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_contacts
--

CREATE TABLE tbl_contacts (
  contacts_id smallint(4) unsigned NOT NULL,
  contacts_fname varchar(150) NOT NULL,
  contacts_lname varchar(150) NOT NULL,
  contacts_img varchar(150) NOT NULL DEFAULT 'user-icon.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_contacts
--

INSERT INTO tbl_contacts (contacts_id, contacts_fname, contacts_lname, contacts_img) VALUES
(1, 'Alex', 'Stegmann', 'user_icon.png'),
(2, 'Boxuan', 'Zhang', 'user_icon.png'),
(3, 'Britney', 'Core', 'user_icon.png'),
(4, 'Caitlyn', 'O''Driscoll', 'user_icon.png'),
(5, 'Chris', 'Robins', 'user_icon.png'),
(6, 'Diana', 'Chavez Avila', 'user_icon.png'),
(7, 'Dylan', 'Copland', 'user_icon.png'),
(8, 'Jason', 'Day', 'user_icon.png'),
(9, 'Jonathan', 'Ferreira', 'user_icon.png'),
(10, 'Jugraj', 'Singh', 'user_icon.png'),
(11, 'Kewal', 'Sangoi', 'user_icon.png'),
(12, 'Lionel', 'Pereira', 'user_icon.png'),
(13, 'Lovejot', 'Singh', 'user_icon.png'),
(14, 'Lucas', 'Morrish', 'user_icon.png'),
(15, 'Matthew', 'Walcher', 'user_icon.png'),
(16, 'Michel', 'Beaubien', 'user_icon.png'),
(17, 'Randy', 'Phalla', 'user_icon.png'),
(18, 'Tanner', 'Fisher', 'user_icon.png'),
(19, 'Tatiana', 'Uspenskaia', 'user_icon.png'),
(20, 'Vanessa', 'Rusu', 'user_icon.png'),
(21, 'Robert', 'Haaf', 'user_icon.png'),
(22, 'Jarrod', 'Osterback', 'user_icon.png'),
(23, 'Marco', 'Deluca', 'user_icon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_contacts
--
ALTER TABLE tbl_contacts
  ADD PRIMARY KEY (contacts_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_contacts
--
ALTER TABLE tbl_contacts
  MODIFY contacts_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
