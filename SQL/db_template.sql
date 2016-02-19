-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2016 alle 14:43
-- Versione del server: 5.1.71-community-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_gclusters`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `accesscount`
--

CREATE TABLE IF NOT EXISTS `accesscount` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `n_vis` smallint(6) NOT NULL DEFAULT '0',
  `updated` date NOT NULL DEFAULT '0000-00-00',
  `var_count` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `user_num` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(16) DEFAULT NULL,
  `last_name` varchar(16) DEFAULT NULL,
  `user_id` varchar(16) DEFAULT NULL,
  `user_passwd` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`user_num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `biblioclusters`
--

CREATE TABLE IF NOT EXISTS `biblioclusters` (
  `authors` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `journal` tinytext NOT NULL,
  `adslink` tinytext,
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `mdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `annoarti` smallint(4) NOT NULL DEFAULT '0',
  `cmdiagrams` tinytext NOT NULL,
  `biblio_date` date NOT NULL DEFAULT '0000-00-00',
  `linkima` tinytext,
  `otherlink` mediumtext,
  `jf_link` tinytext,
  `abstract` text,
  `numvis` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2267 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `bibliomain`
--

CREATE TABLE IF NOT EXISTS `bibliomain` (
  `authors` tinytext,
  `title` tinytext NOT NULL,
  `journal` tinytext,
  `adslink` tinytext,
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `mdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `annoarti` year(4) NOT NULL DEFAULT '0000',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `bibliotags`
--

CREATE TABLE IF NOT EXISTS `bibliotags` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `paper` smallint(6) NOT NULL DEFAULT '0',
  `tag` varchar(14) NOT NULL DEFAULT '',
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=845 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `blogaddr` tinytext NOT NULL,
  `googlesky` tinytext NOT NULL COMMENT 'links to pages of Google Sky',
  `descrizione` text NOT NULL,
  `reference` tinytext NOT NULL,
  `reflink` tinytext NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `datemod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descrmod` mediumtext,
  `numbmod` tinyint(4) NOT NULL AUTO_INCREMENT,
  `timemod` date NOT NULL DEFAULT '0000-00-00',
  `categ` tinytext,
  PRIMARY KEY (`numbmod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `infousers`
--

CREATE TABLE IF NOT EXISTS `infousers` (
  `numcomm` smallint(6) NOT NULL AUTO_INCREMENT,
  `ID` varchar(10) DEFAULT NULL,
  `datacomm` date DEFAULT NULL,
  `nomeuser` varchar(30) DEFAULT NULL,
  `commento` text,
  `intestazione` tinytext NOT NULL,
  PRIMARY KEY (`numcomm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `linkspage`
--

CREATE TABLE IF NOT EXISTS `linkspage` (
  `ID` varchar(20) NOT NULL DEFAULT '',
  `linkname` tinytext NOT NULL,
  `ldescr` mediumtext,
  `linkaddr` varchar(200) NOT NULL,
  `linkimage` varchar(200) DEFAULT NULL,
  `linkdate` date DEFAULT NULL,
  `num` smallint(6) NOT NULL AUTO_INCREMENT,
  `cache` varchar(80) DEFAULT NULL,
  `numvis` int(11) NOT NULL DEFAULT '0',
  `credits` tinytext NOT NULL,
  UNIQUE KEY `num` (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `localfiles`
--

CREATE TABLE IF NOT EXISTS `localfiles` (
  `ID` int(2) NOT NULL DEFAULT '0',
  `cluster` varchar(9) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `fname` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `newpar`
--

CREATE TABLE IF NOT EXISTS `newpar` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `cluster` varchar(14) NOT NULL DEFAULT '',
  `param` smallint(6) NOT NULL DEFAULT '0',
  `pvalue` varchar(12) NOT NULL DEFAULT '',
  `biref` tinytext NOT NULL,
  `biyear` smallint(6) NOT NULL DEFAULT '0',
  `bilink` tinytext,
  `comments` mediumtext,
  `mdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `RA` varchar(12) DEFAULT NULL,
  `Declination` varchar(12) DEFAULT NULL,
  `Gal_long` float DEFAULT NULL,
  `Gal_lat` float DEFAULT NULL,
  `R_sun` float DEFAULT NULL,
  `R_gc` float DEFAULT NULL,
  `X` float DEFAULT NULL,
  `Y` float DEFAULT NULL,
  `Z` float DEFAULT NULL,
  `E_bv` float DEFAULT NULL,
  `V_hb` float DEFAULT NULL,
  `m_M` float DEFAULT NULL,
  `Vt` float DEFAULT NULL,
  `M_Vt` float DEFAULT NULL,
  `UB` float DEFAULT NULL,
  `BV` float DEFAULT NULL,
  `VR` float DEFAULT NULL,
  `VI` float DEFAULT NULL,
  `S_RR` float DEFAULT NULL,
  `HBR` float DEFAULT NULL,
  `HBT` float DEFAULT NULL,
  `FE_H` float DEFAULT NULL,
  `SpT` varchar(10) DEFAULT NULL,
  `v_r` float DEFAULT NULL,
  `v_r_ERR` float DEFAULT NULL,
  `v_LSR` float DEFAULT NULL,
  `C` float DEFAULT NULL,
  `R_C` float DEFAULT NULL,
  `R_H` float DEFAULT NULL,
  `R_T` float DEFAULT NULL,
  `LG_TC` float DEFAULT NULL,
  `LG_TH` float DEFAULT NULL,
  `MU_V` float DEFAULT NULL,
  `RHO_V` float DEFAULT NULL,
  `sed` varchar(120) DEFAULT NULL,
  `credits` text,
  `linkimage` tinytext,
  `linkdss` varchar(100) DEFAULT NULL,
  `source` varchar(20) NOT NULL DEFAULT 'HARRIS',
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'most recent edit',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Aggiornamento per H10';

-- --------------------------------------------------------

--
-- Struttura della tabella `parameters_1`
--

CREATE TABLE IF NOT EXISTS `parameters_1` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `RA` varchar(12) DEFAULT NULL,
  `Declination` varchar(12) DEFAULT NULL,
  `Gal_long` float DEFAULT NULL,
  `Gal_lat` float DEFAULT NULL,
  `R_sun` float DEFAULT NULL,
  `R_gc` float DEFAULT NULL,
  `X` float DEFAULT NULL,
  `Y` float DEFAULT NULL,
  `Z` float DEFAULT NULL,
  `E_bv` float DEFAULT NULL,
  `V_hb` float DEFAULT NULL,
  `m_M` float DEFAULT NULL,
  `Vt` float DEFAULT NULL,
  `M_Vt` float DEFAULT NULL,
  `UB` float DEFAULT NULL,
  `BV` float DEFAULT NULL,
  `VR` float DEFAULT NULL,
  `VI` float DEFAULT NULL,
  `S_RR` float DEFAULT NULL,
  `HBR` float DEFAULT NULL,
  `HBT` float DEFAULT NULL,
  `FE_H` float DEFAULT NULL,
  `SpT` varchar(10) DEFAULT NULL,
  `v_r` float DEFAULT NULL,
  `v_r_ERR` float DEFAULT NULL,
  `v_LSR` float DEFAULT NULL,
  `C` float DEFAULT NULL,
  `R_C` float DEFAULT NULL,
  `R_H` float DEFAULT NULL,
  `R_T` float DEFAULT NULL,
  `LG_TC` float DEFAULT NULL,
  `LG_TH` float DEFAULT NULL,
  `MU_V` float DEFAULT NULL,
  `RHO_V` float DEFAULT NULL,
  `sed` varchar(120) DEFAULT NULL,
  `credits` text,
  `linkimage` tinytext,
  `linkdss` varchar(100) DEFAULT NULL,
  `source` varchar(20) NOT NULL DEFAULT 'HARRIS',
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'most recent edit',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Aggiornamento per H10';

-- --------------------------------------------------------

--
-- Struttura della tabella `parameters_2`
--

CREATE TABLE IF NOT EXISTS `parameters_2` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `RA` varchar(12) DEFAULT NULL,
  `Declination` varchar(12) DEFAULT NULL,
  `Gal_long` float DEFAULT NULL,
  `Gal_lat` float DEFAULT NULL,
  `R_sun` float DEFAULT NULL,
  `R_gc` float DEFAULT NULL,
  `X` float DEFAULT NULL,
  `Y` float DEFAULT NULL,
  `Z` float DEFAULT NULL,
  `E_bv` float DEFAULT NULL,
  `V_hb` float DEFAULT NULL,
  `m_M` float DEFAULT NULL,
  `Vt` float DEFAULT NULL,
  `M_Vt` float DEFAULT NULL,
  `UB` float DEFAULT NULL,
  `BV` float DEFAULT NULL,
  `VR` float DEFAULT NULL,
  `VI` float DEFAULT NULL,
  `S_RR` float DEFAULT NULL,
  `HBR` float DEFAULT NULL,
  `HBT` float DEFAULT NULL,
  `FE_H` float DEFAULT NULL,
  `SpT` varchar(10) DEFAULT NULL,
  `v_r` float DEFAULT NULL,
  `v_r_ERR` float DEFAULT NULL,
  `v_LSR` float DEFAULT NULL,
  `C` float DEFAULT NULL,
  `R_C` float DEFAULT NULL,
  `R_H` float DEFAULT NULL,
  `R_T` float DEFAULT NULL,
  `LG_TC` float DEFAULT NULL,
  `LG_TH` float DEFAULT NULL,
  `MU_V` float DEFAULT NULL,
  `RHO_V` float DEFAULT NULL,
  `sed` varchar(120) DEFAULT NULL,
  `credits` text,
  `linkimage` tinytext,
  `linkdss` varchar(100) DEFAULT NULL,
  `source` varchar(20) NOT NULL DEFAULT 'HARRIS',
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'most recent edit',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Versione H03';

-- --------------------------------------------------------

--
-- Struttura della tabella `parameters_3`
--

CREATE TABLE IF NOT EXISTS `parameters_3` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `RA` varchar(12) DEFAULT NULL,
  `Declination` varchar(12) DEFAULT NULL,
  `Gal_long` float DEFAULT NULL,
  `Gal_lat` float DEFAULT NULL,
  `R_sun` float DEFAULT NULL,
  `R_gc` float DEFAULT NULL,
  `X` float DEFAULT NULL,
  `Y` float DEFAULT NULL,
  `Z` float DEFAULT NULL,
  `E_bv` float DEFAULT NULL,
  `V_hb` float DEFAULT NULL,
  `m_M` float DEFAULT NULL,
  `Vt` float DEFAULT NULL,
  `M_Vt` float DEFAULT NULL,
  `UB` float DEFAULT NULL,
  `BV` float DEFAULT NULL,
  `VR` float DEFAULT NULL,
  `VI` float DEFAULT NULL,
  `S_RR` float DEFAULT NULL,
  `HBR` float DEFAULT NULL,
  `HBT` float DEFAULT NULL,
  `FE_H` float DEFAULT NULL,
  `SpT` varchar(10) DEFAULT NULL,
  `v_r` float DEFAULT NULL,
  `v_r_ERR` float DEFAULT NULL,
  `v_LSR` float DEFAULT NULL,
  `C` float DEFAULT NULL,
  `R_C` float DEFAULT NULL,
  `R_H` float DEFAULT NULL,
  `R_T` float DEFAULT NULL,
  `LG_TC` float DEFAULT NULL,
  `LG_TH` float DEFAULT NULL,
  `MU_V` float DEFAULT NULL,
  `RHO_V` float DEFAULT NULL,
  `sed` varchar(120) DEFAULT NULL,
  `credits` text,
  `linkimage` tinytext,
  `linkdss` varchar(100) DEFAULT NULL,
  `source` varchar(20) NOT NULL DEFAULT 'HARRIS',
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'most recent edit',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `rrlyrae`
--

CREATE TABLE IF NOT EXISTS `rrlyrae` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `n_vis` smallint(6) NOT NULL DEFAULT '0',
  `updated` date NOT NULL DEFAULT '0000-00-00',
  `histo` tinytext NOT NULL,
  `rrcatal` tinytext NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `c1` tinyint(4) NOT NULL DEFAULT '0',
  `c2` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `tutors`
--

CREATE TABLE IF NOT EXISTS `tutors` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `cluster` varchar(14) NOT NULL,
  `person` smallint(6) NOT NULL,
  `from` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `affiliation` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `country` varchar(30) DEFAULT NULL,
  `homepage` varchar(50) DEFAULT NULL,
  `facebook` varchar(60) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `profilepic` varchar(80) DEFAULT NULL,
  `joindate` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `whatsnewtab`
--

CREATE TABLE IF NOT EXISTS `whatsnewtab` (
  `datemod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descrmod` text NOT NULL,
  `numbmod` tinyint(4) NOT NULL AUTO_INCREMENT,
  `timemod` date NOT NULL DEFAULT '0000-00-00',
  `categ` tinytext NOT NULL,
  PRIMARY KEY (`numbmod`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
