-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 07, 2016 alle 12:56
-- Versione del server: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gc_stripped`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `accesscount`
--

CREATE TABLE `accesscount` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `n_vis` smallint(6) NOT NULL DEFAULT '0',
  `updated` date NOT NULL DEFAULT '0000-00-00',
  `var_count` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `accesscount`
--

INSERT INTO `accesscount` (`ID`, `Name`, `n_vis`, `updated`, `var_count`) VALUES
('NGC 5272', 'M 3', 6, '0000-00-00', 0),
('NGC 6205', 'M 13', 2, '0000-00-00', 0),
('NGC 6218', 'M 12', 3, '0000-00-00', 0),
('NGC 6341', 'M 92', 6, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `biblioclusters`
--

CREATE TABLE `biblioclusters` (
  `authors` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `journal` tinytext NOT NULL,
  `adslink` tinytext,
  `ID` int(4) NOT NULL DEFAULT '0',
  `mdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `annoarti` smallint(4) NOT NULL DEFAULT '0',
  `cmdiagrams` tinytext NOT NULL,
  `biblio_date` date NOT NULL DEFAULT '0000-00-00',
  `linkima` tinytext,
  `otherlink` mediumtext,
  `jf_link` tinytext,
  `abstract` text,
  `numvis` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `biblioclusters`
--

INSERT INTO `biblioclusters` (`authors`, `title`, `journal`, `adslink`, `ID`, `mdate`, `annoarti`, `cmdiagrams`, `biblio_date`, `linkima`, `otherlink`, `jf_link`, `abstract`, `numvis`) VALUES
('Lee, Kang Hwan; Lee, Hyung Mok; Fahlman, Gregory G.; Lee, Myung Gyoon', 'Wide-Field CCD Photometry of the Globular Cluster M92', 'The Astronomical Journal, Volume 126, Issue 2, pp. 815-825', 'http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=2003AJ....126..815L', 9, '2004-01-27 14:43:00', 2003, '', '0000-00-00', NULL, NULL, '', NULL, 208),
('Corwin, T. Michael; Carney, Bruce W.', 'BV Photometry of the RR Lyrae Variables of the Globular Cluster M3', 'The Astronomical Journal, Volume 122, Issue 6, pp. 3183-3211', 'http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=2001AJ....122.3183C', 20, '2004-09-07 14:49:00', 2001, '', '2004-09-07', NULL, NULL, '', NULL, 223),
('Marconi, M.; Caputo, F.; Di Criscienzo, M.; Castellani, M.', 'RR Lyrae Stars in Galactic Globular Clusters. II. A Theoretical Approach to Variables in M3', 'The Astrophysical Journal, Volume 596, Issue 1, pp. 299-313', 'http://adsabs.harvard.edu/cgi-bin/nph-bib_query?bibcode=2003ApJ...596..299M', 27, '2004-11-02 12:01:00', 2003, '', '2004-11-02', NULL, NULL, '', 'We present predicted relations connecting pulsational (period and amplitude of pulsation) and evolutionary (mass, absolute magnitude, and color) parameters, as based on a wide set of convective pulsating models of RR Lyrae stars with Z = 0.001, Y = 0.24, and mass and luminosity suitable for the "old" (age > 8 Gyr) variables observed in globular clusters. The relations are collated with sound constraints on the mass of pulsators, as inferred from up-to-date evolutionary models of horizontal-branch stars, in order to provide a self-consistent theoretical framework for the analysis of observed variables. The theoretical predictions are tested through a detailed comparison with measurements of RR Lyrae stars in the globular cluster M3. We show that the predicted relations satisfy a variety of observed data, thus providing a pulsational route to the determination of accurate distances to RR Lyrae-rich globular clusters with intermediate metal content. We show that current uncertainties on the intrinsic luminosity of up-to-date horizontal-branch models, as due to the input physics used in the computations by the different authors, have a quite low influence (~0.02-0.03 mag) on the pulsational distance modulus. On the contrary, the effect of the different bolometric corrections adopted to convert bolometric luminosity into absolute magnitude is of the order of ~0.05-0.06 mag. The pulsation models are also used to perform some valuable tests on the physics adopted in current stellar evolution computations. We show that the constraints inferred by pulsation theory support the large value of the mixing-length parameter (l/Hp = 1.9-2.0) adopted to fit observed red giant branches, but that, at the same time, they would yield that the luminosity of the horizontal-branch updated models is too bright by ~0.08 ± 0.05 mag, if helium diffusion and metal diffusion are neglected. Conversely, if element diffusion is properly taken into account, then there is a marginal discrepancy of ~0.04 ± 0.05 mag between evolutionary and pulsational predictions.', 219),
('Ferraro, F. R.; Carretta, E.; Corsi, C. E.; Fusi Pecci, F.; Cacciari, C.; Buonanno, R.; Paltrinieri, B.; Hamilton, D.', 'The stellar population of the globular cluster M 3. II. CCD photometry of additional 10,000 stars.', 'A&A, 320, 757', 'http://adsabs.harvard.edu/cgi-bin/nph-bib_query?bibcode=1997A%26A...320..757F', 28, '2004-11-22 14:00:00', 1997, '', '2004-11-22', NULL, NULL, '', NULL, 239),
('Buonanno, R.; Corsi, C. E.; Buzzoni, A.; Cacciari, C.; Ferraro, F. R.; Fusi Pecci, F.', 'The stellar population of the globular cluster M 3. I. Photographic photometry of 10 000 stars', 'Astron. Astrophys. 290, 69-103 ', '"http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1994A%26A...290...69B"', 97, '2007-10-04 10:15:46', 1994, 'ngc5272', '0000-00-00', NULL, NULL, '', NULL, 258),
('Cohen, Randi L. et al.', 'Globular Cluster Photometry with the Hubble Space Telescope.<br>VI.WF/PC-I Observations of the Stellar Populations in the Core of M13 (NGC 6205)', 'Astronomical Journal v.113, p. 669-681 ', '"http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1997AJ....113..669C"', 122, '2007-10-04 10:15:46', 1997, 'ngc6205', '0000-00-00', NULL, NULL, '', NULL, 293),
('Sato, Takashi; Richer, Harvey B.; Fahlman, Gregory G.', 'Deep CCD photometry in globular clusters. VIII - M12', 'Astronomical Journal, vol. 98, Oct. 1989, p. 1335-1353', '"http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1989AJ.....98.1335S"', 124, '2007-10-04 10:15:46', 1989, 'ngc6218', '0000-00-00', NULL, NULL, '', NULL, 239),
('Stetson, Peter B.; Harris, William E.', 'CCD photometry of the globular cluster M92', 'Astronomical Journal, vol. 96, Sept. 1988, p. 909-975.', '"http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1988AJ.....96..909S"', 136, '2007-10-04 10:15:46', 1988, 'ngc6341', '0000-00-00', NULL, NULL, '', NULL, 187),
('Forbes, D.; Dawson, P. C.', 'A photoelectric BVRI sequence in the field of the globular cluster NGC 6205 (M 13)', 'PASP, vol. 98, p. 102, 103', 'http://cdsads.u-strasbg.fr/abs/1986PASP...98..102F', 247, '2008-05-27 09:34:39', 1986, '', '2008-05-27', NULL, NULL, '', NULL, 291),
('Nassau, J. J.; Hynek, J. A.', 'Magnitudes and Colors in the Globular Cluster Messier 12 and Selected Area 108.', 'Astrophysical Journal, vol. 96, p.37', 'http://adsabs.harvard.edu/abs/1942ApJ....96...37N', 391, '2013-10-21 08:07:21', 1942, '', '2013-10-21', NULL, NULL, '', 'The presente report deals with the determination of red magnitudes of stars in Messier 12, which is three degrees from the Selected Area. The red magnitudes of the bright stars of the former were determined by a direct comparison with the North Sequence; those of the faint stars, by means of a 72-inch wire objective grating attached to the 69-inch Perkins reflector...', 166),
('Harrington, M. W.', 'On the structure of M13 Herculis', 'Astronomical Journal, vol. 7, iss. 164, p. 156-157', 'http://esoads.eso.org/abs/1887AJ......7..156H', 421, '2013-12-06 14:38:48', 1886, '', '2013-12-06', NULL, NULL, NULL, 'The great cluster in Hercules has been frequently figured and always, with one exception, as a globular mass of stars much condensed in the center. Lord ROSSE''s observers alone found it crossed by three dark rifts, as shown in Figure 1, which is a copy of their drawing, the position only being changed in order to bring the notable hooks above. Last spring I spent some time in studying this cluster with the aid of Mr. H. C. MARKHAM, an artist whose sight I have found to be remarkably keen...', 255),
('Dalessandro, E.; Salaris, M.; Ferraro, F. R.; Mucciarelli, A.; Cassisi, S.', 'The horizontal branch in the UV colour-magnitude diagrams - II. The case of M3, M13 and M79', 'MNRAS, Volume 430, Issue 1, p.459-471', 'http://adsabs.harvard.edu/abs/2013MNRAS.430..459D', 491, '2015-11-20 09:41:11', 2013, '', '2015-11-20', NULL, NULL, NULL, 'We present a detailed comparison between far-ultraviolet (UV)/optical colour-magnitude diagrams obtained with high-resolution Hubble Space Telescope data and suitable theoretical models for three Galactic globular clusters: M3, M13 and M79. These systems represents a `classical'' example of clusters in the intermediate-metallicity regime that, even sharing similar metal content and age, show remarkably different horizontal branch morphologies. As a consequence, the observed differences in the colour distributions of horizontal branch stars cannot be interpreted in terms of either first (metallicity) or a second parameter such as age...', 14);

-- --------------------------------------------------------

--
-- Struttura della tabella `bibliomain`
--

CREATE TABLE `bibliomain` (
  `authors` tinytext,
  `title` tinytext NOT NULL,
  `journal` tinytext,
  `adslink` tinytext,
  `ID` int(3) NOT NULL,
  `mdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `annoarti` year(4) NOT NULL DEFAULT '0000'
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `bibliomain`
--

INSERT INTO `bibliomain` (`authors`, `title`, `journal`, `adslink`, `ID`, `mdate`, `annoarti`) VALUES
('Clement, Christine M.; Muzzin, Adam; Dufton, Quentin; Ponnampalam, Thivya; Wang, John; Burford, Jay; Richardson, Alan; Rosebery, Tara;Rowe, Jason; Hogg, Helen Sawyer', 'Variable Stars in Galactic Globular Clusters', 'The Astronomical Journal, Volume 122, Issue 5, pp. 2587-2599.', 'http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=2001AJ....122.2587C', 2, '2005-12-27 16:09:00', 2001),
('Salaris, M.; Weiss, A.', 'Homogeneous age dating of 55 Galactic globular clusters. Clues to the Galaxy formation mechanisms', 'Astronomy and Astrophysics, v.388, p.492-503 (2002)', 'http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=2002A%26A...388..492S', 4, '2003-02-17 10:09:00', 2002),
('Harris, William E.', 'A Catalog of Parameters for Globular Clusters in the Milky Way', 'Astronomical Journal v.112, p.1487', 'http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1996AJ....112.1487H', 6, '2005-12-27 16:13:00', 1996),
('Webbink, R.F.', 'Structure Parameters of Galactic Globular Clusters', 'IN: "Dynamics of star clusters"; Proceedings of the Symposium, Princeton, NJ, May 29-June 1, 1984  Dordrecht, D. Reidel Publishing Co., 1985, p. 541-577.', 'http://adsabs.harvard.edu/cgi-bin/nph-bib_query?bibcode=1985IAUS..113..541W', 9, '2006-04-20 13:17:00', 1985);

-- --------------------------------------------------------

--
-- Struttura della tabella `bibliotags`
--

CREATE TABLE `bibliotags` (
  `ID` smallint(6) NOT NULL DEFAULT '0',
  `paper` smallint(6) NOT NULL DEFAULT '0',
  `tag` varchar(14) NOT NULL DEFAULT '',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `bibliotags`
--

INSERT INTO `bibliotags` (`ID`, `paper`, `tag`, `updated`) VALUES
(78, 9, 'NGC 6341', '2007-09-04 08:51:18'),
(89, 20, 'NGC 5272', '2007-09-04 08:51:18'),
(96, 27, 'NGC 5272', '2007-09-04 08:51:18'),
(97, 28, 'NGC 5272', '2007-09-04 08:51:18'),
(134, 20, 'cmd', '2007-09-04 10:03:04'),
(194, 97, 'NGC 5272', '2007-10-10 13:52:00'),
(244, 122, 'NGC 6205', '2007-10-10 13:52:00'),
(248, 124, 'NGC 6218', '2007-10-10 13:52:00'),
(272, 136, 'NGC 6341', '2007-10-10 13:52:00'),
(491, 247, 'NGC 6205', '2008-05-27 09:35:00'),
(681, 391, 'NGC 6218', '2013-10-21 08:08:02'),
(718, 421, 'NGC 6205', '2013-12-06 14:39:38'),
(736, 421, 'history', '2014-01-17 16:43:46'),
(821, 491, 'NGC 6205', '2015-11-20 09:42:09'),
(822, 491, 'NGC 5272', '2015-11-20 09:59:49');

-- --------------------------------------------------------

--
-- Struttura della tabella `blog`
--

CREATE TABLE `blog` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `blogaddr` tinytext NOT NULL,
  `googlesky` tinytext NOT NULL COMMENT 'links to pages of Google Sky',
  `descrizione` text NOT NULL,
  `reference` tinytext NOT NULL,
  `reflink` tinytext NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `blog`
--

INSERT INTO `blog` (`ID`, `Name`, `blogaddr`, `googlesky`, `descrizione`, `reference`, `reflink`, `updated`) VALUES
('NGC 104', '47 Tuc', '47tuc', 'latitude=-72.081084&longitude=-173.977292&zoom=8', '47 Tucanae (NGC 104) or just 47 Tuc is a globular cluster located in the constellation Tucana. It is about 16,700 light years away from Earth, and 120 light years across. It can be seen with the naked eye, with a visual apparent magnitude of 4.9. <p>Its number comes not from the Flamsteed catalogue, but the more obscure 1801 "Allgemeine Beschreibung und Nachweisung der Gestirne nebst Verzeichniss" compiled by Johann Elert Bode. 47 Tucanae is included in Sir Patrick Moore''s Caldwell catalogue as C106...', 'Wikipedia', 'http://en.wikipedia.org/wiki/47_Tucanae', '2013-01-28 23:00:00'),
('NGC 288', '', 'ngc288', 'latitude=-26.583614813585854&longitude=-166.8109130859375&zoom=12', 'NGC 288 attracted attention of astronomers in the late 1980s when it was compared with the otherwise similar globular cluster NGC 362 on about the same right ascension (but much more southern), and found that NGC 288 must be about 3 billion years older. This result was found because of differences in the color-magnitude diagrams: The so-called Horizontal Branch of NGC 288 is bluer, and the turnoff point of the main sequence (hottest/bluest/most massive main sequence stars) is redder (and fainter).\r\n<p>\r\nBinocular observers can view NGC 288 together with the bright galaxy NGC 253 in one field; NGC 288 appears as a round nebulous object. Telescopes of 4 or 6 inches aperture resolve this cluster, provided the observer is located sufficiently south. The rather poor concentration of this cluster is indicated by its classification in class X. ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/n0288.html', '0000-00-00 00:00:00'),
('NGC 362', '', 'ngc362', 'latitude=-70.848306&longitude=-164.191918&zoom=10', 'Globular cluster NGC 362 was discovered by James Dunlop on August 1, 1826 and cataloged by him as No. 62 of his catalog.\r\n<p>\r\nIn the late 1980s, NGC 362 was compared to the otherwise similar globular NGC 288, and it was found that this cluster was about 3 billion years younger. This result was found because of differences in the color-magnitude diagrams: The so-called Horizontal Branch of NGC 362 is redder, and the turnoff point of the main sequence (hottest/bluest/most massive main sequence stars) is bluer (and brighter). ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/n0362.html', '0000-00-00 00:00:00'),
('NGC 1261', '', 'ngc1261', 'latitude=-55.215706692749436&longitude=-131.934814453125&zoom=11', 'James Dunlop discovered this globular cluster on November 24, 1826 and cataloged it as Dunlop 337. ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/n1261.html', '0000-00-00 00:00:00'),
('Pal 1', '', 'Pal1', '', 'Discovered by George Abell in 1954. <p>A team of astronomers lead by Alfred Rosenberg of Padova, Italy has closer investigated globular cluster Palomar 1. First, they confirm its nature as a globular by finding that its properties and location in the outer halo, about 55,000 light-years from the Galaxy''s center, contradict the possibility of a very old open cluster. <p>They find that Palomar 1 is probably younger than most globulars, and could have been created in a different formation process. ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/pal01.html', '0000-00-00 00:00:00'),
('AM 1', 'E 1', 'AM1', '', 'Discovered by Lauberts in 1976.<br>\r\nIndependently found by Arp and Madore in 1979. ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/am1.html', '0000-00-00 00:00:00'),
('Eridanus', 'C0422-213', 'Eridanus', '', '', '', '', '0000-00-00 00:00:00'),
('Pal 2', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 1851', '', '', 'latitude=-40.04625&longitude=-101.472376&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 1904', 'M 79', '', 'latitude=-24.524806&longitude=-98.955834&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 2298', NULL, '', 'latitude=-36.00414&longitude=-77.753126&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 2419', '', 'ngc2419', 'latitude=38.88161&longitude=-65.46475&zoom=12', '', '', '', '0000-00-00 00:00:00'),
('Pyxis', NULL, '', '', 'Discovered in 1995 by Weinberger.\r\nBarbara Wilson describes this one as:\r\n"Faint but clearly visible as a round evenly illuminated glow with no resolution even at 450 power. [..] Inside of a sideways ''V'' shaped asterism of stars."\r\nThe Pyxis Globular Cluster was discovered by Ronald Weinberger in 1995 when scanning various optical surveys (POSS, ESO/SERC) for new interesting objects. He found this object to be detectible only in the infrared and classified it as globular cluster candidate similar to AM4, or potentially a nearby dwarf galaxy (Weinberger 1995). Subsequent investigations by Demers, Irwin and Kunkel with the UK Schmidt Telescope (Demers et.al. 1995, Irwin et.al. 1995) as well as Da Costa (1995) with the Anglo-Australian Telescope have confirmed its nature as remote globular cluster.', 'SEDS page', 'http://spider.seds.org/spider/MWGC/pyx.html', '2013-08-07 22:00:00'),
('NGC 2808', NULL, 'ngc2808', 'latitude=-64.863863&longitude=-41.989127&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('E 3', 'C0921-770', '', '', '', '', '', '0000-00-00 00:00:00'),
('Pal 3', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 3201', '', '', 'latitude=-46.412584&longitude=-25.59575&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('Pal 4', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 4147', '', '', 'latitude=18.541806&longitude=2.526166&zoom=12', 'Globular cluster NGC 4147 was discovered by William Herschel on March 14, 1784 and cataloged as H I.19.\r\n<p>\r\nThis cluster is perhaps a former member of the Sagittarius Dwarf Elliptical Galaxy (SagDEG), or Sagittarius Dwarf Spheroidal Galaxy (Sgr dSph), the nearby dwarf galaxy discovered in 1994, which is currently in a close and perhaps final encounter before its tidal disruption, with our Milky Way Galaxy. ', 'SEDS', 'http://spider.seds.org/spider/MWGC/n4147.html', '2012-12-28 15:05:08'),
('NGC 4372', '', '', 'latitude=-72.657862&longitude=6.440208&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('Rup 106', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 4590', 'M 68', '', '#latitude=-26.741931220736518&longitude=9.867095947265625&zoom=11', 'Messier 68 (also known as M68 or NGC 4590) is a globular cluster in the Hydra constellation. <p>It was discovered by Charles Messier in 1780. M68 is at a distance of about 33,000 light-years away from Earth.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_68', '0000-00-00 00:00:00'),
('NGC 4833', NULL, '', '#latitude=-70.875444&longitude=14.896958&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('NGC 5024', 'M 53', '', '#latitude=18.168666&longitude=18.230208&zoom=10', 'Messier 53 (also known as M53, or NGC 5024) is a globular cluster in the Coma Berenices constellation. <p>It was discovered by Johann Elert Bode in 1775. M53 is one of the more outlying globular clusters, being about 60,000 light-years away from the Galactic Center, and almost the same distance (about 58,000 light-years) from the Solar system.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_53', '0000-00-00 00:00:00'),
('NGC 5053', NULL, '', '#latitude=17.697804&longitude=19.112124&zoom=11', 'NGC 5053 was discovered by William Herschel on March 14, 1784 and cataloged as H VI.7.\r\n<p>\r\nNGC 5053 is situated just about 1 degree southeast of another, much more prominent globular cluster, M53. As they happen to be at a similar distance, both clusters are spacially quite close together. NGC 5053 is of a much lesser stellar density than its prominent neighbor, and particularly lacks a concentrated bright nucleus.<p>\r\n\r\nAt a distance of about 53,500 light-years from us, NGC 5053''s apparent diameter of 10.5 arc minutes corresponds to a linear extension of about 160 light-years. The cluster shines at a visual brightness of about 9.5 magnitudes, and a photographic magnitude 10.5. Its absolute visual magnitude is only about -6.72, corresponding to an intrinsic luminosity of about 40,000 times that of our sun. It is receding from us at about 44 km/s.\r\n', 'Seds.org', 'http://spider.seds.org/spider/MWGC/n5053.html', '2012-12-16 23:00:00'),
('NGC 5139', 'omega Cen', 'ngc5139', '#latitude=-47.481472&longitude=21.695915&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('NGC 5272', 'M 3', '', '#latitude=28.376388&longitude=25.547081&zoom=10', 'Messier 3 (also known as M3 or NGC 5272) is a globular cluster in the constellation Canes Venatici. It was discovered by Charles Messier in 1764, and resolved into stars by William Herschel around 1784. This cluster is one of the largest and brightest, and is made up of around 500,000 stars. It is located at a distance of about 33,900 light-years away from Earth. M3 has an apparent magnitude of 6.2, making it visible to the naked eye under dark conditions. From a moderate-sized telescope, the cluster is fully defined.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_3', '0000-00-00 00:00:00'),
('NGC 5286', '', '', '#latitude=-51.375&longitude=26.610666&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('AM 4', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 5466', NULL, '', '#latitude=28.53236&longitude=31.365166&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 5634', NULL, '', 'latitude=-5.977056&longitude=37.405416&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 5694', NULL, '', 'latitude=-26.538195&longitude=39.902124&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('IC 4499', NULL, '', 'latitude=-82.213641&longitude=45.078958&zoom=9', '', '', '', '0000-00-00 00:00:00'),
('NGC 5824', NULL, '', 'latitude=-33.06852769197117&longitude=45.9942626953125&zoom=11', 'NGC 5824 is a globular cluster in the constellation Lupus, almost on its western border with Centaurus. Astronomers James Dunlop (1826), John Herschel (1831) and E.E. Barnard (1882) all claim to have independently discovered the cluster. It is condensed and may be observed with small telescopes, but larger apertures are required to resolve its stellar core.', 'Wikipedia', 'http://en.wikipedia.org/wiki/NGC_5824', '2013-07-29 22:00:00'),
('Pal 5', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 5897', NULL, '', 'latitude=-21.010168&longitude=49.351958&zoom=11', 'Globular Cluster NGC 5897 was discovered by William Herschel, probably on April 25, 1784 when he logged his H VI.8 with an inacurate position, but with certainty on March 10, 1785 when he cataloged it as H VI.19.\r\n<p>\r\nWith its visual brightness of about 8.5 mag, this is a fairly bright and fine object for telescopes of any size. It is situated about 5deg NE of Sigma Lib (mag 3), and 8deg SW of Alpha Lib.', 'SEDS page', 'http://spider.seds.org/spider/MWGC/n5897.html', '2013-11-14 23:00:00'),
('NGC 5904', 'M 5', '', 'latitude=2.082415&longitude=49.639582&zoom=11', 'M5 is, under extremely good conditions, just visible to the naked eye as a faint "star" near the star 5 Serpentis. Binoculars or small telescopes will identify this cluster as non-stellar while larger telescopes will start to show individual stars, of which the brightest are of apparent magnitude 12.2.<p>\r\n\r\nM5 was discovered by the German astronomer Gottfried Kirch in 1702 when he was observing a comet. Charles Messier found it in 1764 and thought it a nebula without any stars associated with it. William Herschel resolved individual stars in the cluster in 1791, counting roughly 200 of them.\r\n<p>\r\nM5 is not to be confused with the much fainter and more distant globular Palomar 5 which is situated nearby in the sky.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_5', '0000-00-00 00:00:00'),
('NGC 5927', NULL, '', 'latitude=-50.672972&longitude=52.001832&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 5946', NULL, '', 'latitude=-50.65914&longitude=53.867999&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('BH 176', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 5986', NULL, '', 'latitude=-37.785694&longitude=56.514792&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('Lynga 7', NULL, '', '', 'Globular cluster Lynga 7 was first cataloged by G. Lynga (1964) as open cluster and classified as of Trumpler type II 2 p. It is listed again as open cluster by van den Bergh-Hagen (1975) as vdB-Ha 184.<p>\r\nIt was only in 1993 that Ortolani, Bica and Barbuy brought up evidence that this object might be a globular cluster. They investigated its color-magnitude diagram, which resembles that of a globular, but derive a significantly lower age than for the usual globular clusters, and classify it as a disk globular cluster. Similar results were obtained by Tavarez and Friel (1995). Meanwhile, Lynga 7 is generally regarded as globular.\r\n<p>\r\nLynga 7 is one of the more "metal-rich" globulars, i.e. its stars contain significantly higher concentrations of elements heavier than Helium than average globulars, more similar to the composition of our Sun.', 'SEDS page', 'http://spider.seds.org/spider/MWGC/lynga7.html', '2013-01-04 11:38:16'),
('Pal 14', 'AvdB', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6093', 'M 80', '', 'latitude=-22.9755&longitude=64.261792&zoom=11', 'Messier 80 (also known as M80 or NGC 6093) is a globular cluster in the constellation Scorpius. It was discovered by Charles Messier in 1781.(...) It is among the more densely populated globular clusters in the Milky Way Galaxy.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_80', '0000-00-00 00:00:00'),
('NGC 6121', 'M 4', '', 'latitude=-26.526306&longitude=65.896791&zoom=10', 'Messier 4 (also known as M4 or NGC 6121) is a globular cluster in the constellation Scorpius. It was discovered by Philippe Loys de Cheseaux in 1746 and catalogued by Charles Messier in 1764.\r\n<p>\r\nM4 was the first globular cluster in which individual stars were resolved. M4 is conspicuous in even the smallest of telescopes as a fuzzy ball of light. It is also the one of the easiest globular clusters to find, being located only 1.3 degrees west of the bright star Antares, with both objects being visible in a wide field telescope. Modestly sized telescopes will begin to resolve individual stars of which the brightest in M4 are of apparent magnitude 10.8. <p>The cluster carries a characteristic "bar" structure across its core, visible in images (including the one below, extending from upper left to lower right) and moderate sized telescopes. The structure consists of 11th magnitude stars and is approximately 2.5'' long and was first noted by William Herschel in 1783.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_4', '0000-00-00 00:00:00'),
('NGC 6101', NULL, '', 'latitude=-72.201334&longitude=66.448958&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('NGC 6144', NULL, '', 'latitude=-26.023918&longitude=66.807874&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6139', NULL, '', 'latitude=-38.849084&longitude=66.917623&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('Terzan 3', NULL, '', '', 'Discovered by Agop Terzan in 1968', 'SEDS', 'http://spider.seds.org/spider/MWGC/ter03.html', '2013-09-18 22:00:00'),
('NGC 6171', 'M 107', '', 'latitude=-13.053194&longitude=68.133081&zoom=11', 'Globular Cluster M107 (also known as Messier Object 107 or NGC 6171) is a very loose globular cluster in the constellation Ophiuchus. It was discovered by Pierre Mechain in April 1782 and independently by William Herschel in 1793. It wasn''t until 1947 that Helen Sawyer Hogg added it, and three other objects discovered by Mechain to the list of Messier objects.\r\n<p>\r\nM107 is close to the galactic plane at a distance of about 20,900 light-years from Earth. There are 25 known variable stars in this cluster.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_107', '0000-00-00 00:00:00'),
('1636-283', 'ESO452-SC11', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6205', 'M 13', '', 'latitude=36.459805&longitude=70.42175&zoom=10', 'The Great Globular Cluster in Hercules (also known as the Hercules Globular Cluster, Messier Object 13, Messier 13, M13, or NGC 6205) is a globular cluster in the Hercules constellation (..)<p>\r\n\r\nIt was discovered by Edmond Halley in 1714, and catalogued by Charles Messier on June 1, 1764.\r\n<p>\r\nWith an apparent magnitude of 5.8, it is barely visible with the naked eye on a very clear night. Its real diameter is about 145 light-years, and is composed of several hundred thousand stars, the brightest of which is the variable star V11 with an apparent magnitude of 11.95. M13 is 25,100 light-years away from Earth.\r\n', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_13', '0000-00-00 00:00:00'),
('NGC 6229', '', '', 'latitude=47.527416&longitude=71.744582&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6218', 'M 12', 'ngc6218', 'latitude=-1.947694&longitude=71.809791&zoom=10', 'Messier 12 (also known as M12, Globular Cluster M12 or NGC 6218) is a globular cluster in the constellation Ophiuchus. It was discovered by Charles Messier on May 30, 1764.<p>\r\nLocated roughly 3 degrees from the cluster M10, M12 is about 16,000 light-years distant and has a spatial diameter of ~75 light-years. The brightest stars of M12 are of 12th magnitude. It is rather loosely packed for a globular and M12 was once thought to be a tightly concentrated open cluster. Thirteen variable stars have been recorded in this cluster.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_12', '0000-00-00 00:00:00'),
('NGC 6235', '', '', 'latitude=-22.17614&longitude=73.354416&zoom=11', 'Globular cluster NGC 6235 was discovered by William Herschel in 1786 and cataloged as H II.584.', 'SEDS', 'http://spider.seds.org/spider/MWGC/n6235.html', '2013-10-15 22:00:00'),
('NGC 6254', 'M 10', '', 'latitude=-4.098834&longitude=74.288165&zoom=10', 'Messier 10 (also known as M10, Globular Cluster M10 or NGC 6254) is a globular cluster in the constellation Ophiuchus. It was discovered by Charles Messier on May 29, 1764, cataloged as number 10 in his list, and described as a "Nebula without stars."', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_10', '0000-00-00 00:00:00'),
('NGC 6256', NULL, '', 'latitude=-37.121334&longitude=74.885708&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('Pal 15', NULL, '', '', 'Palomar 15 was discovered by Zwicky (1959), who claimed it contained about 400 star with 19 < m < 22. Kinman and Rosino (1961) obtained nine deep plates (limiting m around 22), and counted 150 stars within a 4.2'' radius, and found no variables. The cluster was ignored until recently, when both the authors and Harris and ban den Bergh (1983) decided to study it in more detail... the cluster apparently has an unusually large core radius, the largest, in fact, of any globular cluster. This alone makes it dinamically interesting. Its large tidal radius, on the other hand, suggests it has never strayed close to the Galactic center, where tidal forces would easily dismember it.', 'Seitzer and Carney (1990)', 'http://gclusters.altervista.org/article.php?idart=362', '2013-08-05 22:00:00'),
('NGC 6266', 'M 62', '', 'latitude=-30.111869849235244&longitude=75.14236450195312&zoom=11', 'Messier 62 (also known as M62 or NGC 6266) is a globular cluster in the constellation Ophiuchus. It was discovered in 1771 by Charles Messier.\r\n<p>\r\nM62 is at a distance of about 22,500 light-years from Earth and measures some 100 light-years across. From studies conducted in the 1970s it is known that M62 contains the high number of 89 variable stars, many of them of the RR Lyrae type. The globular also contains a number of x-ray sources, thought to be close binary star systems, and millisecond pulsars in binary systems.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_62', '0000-00-00 00:00:00'),
('NGC 6273', 'M 19', '', 'latitude=-26.267694&longitude=75.656873&zoom=11', 'Messier 19 (also known as M19 or NGC 6273) is a globular cluster in the constellation Ophiuchus. It was discovered by Charles Messier in 1764 and added to his catalog of comet-like objects that same year.\r\n<p>\r\nM19 is the most oblate known globular cluster. It is at a distance of about 28,000 light-years from the Solar System, and quite near to the Galactic Center, only about 5,200 light-years away.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_19', '0000-00-00 00:00:00'),
('NGC 6284', NULL, '', 'latitude=-24.764194&longitude=76.119666&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6287', NULL, '', 'latitude=-22.707056&longitude=76.287874&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6293', NULL, '', 'latitude=-26.582112&longitude=77.5435&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6304', NULL, '', 'latitude=-29.462028&longitude=78.63375&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6316', NULL, '', 'latitude=-28.139815912754436&longitude=79.15512084960938&zoom=11', 'Discovered by William Herschel on May 24, 1784', 'SEDS', 'http://spider.seds.org/spider/MWGC/n6316.html', '2013-09-19 22:00:00'),
('NGC 6341', 'M 92', '', 'latitude=43.136499&longitude=79.280874&zoom=10', 'Messier 92 (also known as M92 or NGC 6341) is a globular cluster in the constellation Hercules. It was discovered by Johann Elert Bode in 1777 and independently rediscovered by Charles Messier on March 18, 1781. M92 is at a distance of about 26,000 light-years away from Earth.\r\n<p>\r\nM92 is one of the brighter globular clusters in the northern hemisphere, but it is often overlooked by amateur astronomers because of its proximity to the even more spectacular Messier 13.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_92', '0000-00-00 00:00:00'),
('NGC 6325', NULL, '', 'latitude=-23.765972&longitude=79.495624&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6333', 'M 9', '', 'latitude=-18.516168&longitude=79.799042&zoom=11', 'Messier 9 (also known as M9 or NGC 6333) is a globular cluster in the constellation Ophiuchus. It was discovered by Charles Messier in 1764.\r\n<p>\r\nM9 is one of the nearer globular clusters to the center of the Milky Way Galaxy with a distance of around 5,500 light-years. Its distance from Earth is 25,800 light-years. The total luminosity of this cluster is around 120,000 times that of the Sun, the absolute magnitude being -8.04.\r\n<p>\r\nThe brightest individual stars in M9 are of apparent magnitude 13.5, making them visible in moderately sized telescopes. There have been 13 variable stars found in M9.\r\n<p>\r\nNearby, at about 80'' to the northeast of M9 is the dimmer globular cluster NGC 6356, while at about 80'' to the southeast is the globular NGC 6342.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_9', '0000-00-00 00:00:00'),
('NGC 6342', NULL, '', 'latitude=-19.587222&longitude=80.292291&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6356', NULL, '', 'latitude=-17.814418&longitude=80.895666&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6355', NULL, '', 'latitude=-26.352778&longitude=80.993832&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('NGC 6352', NULL, '', 'latitude=-48.422556&longitude=81.371374&zoom=11', '', '', '', '0000-00-00 00:00:00'),
('IC 1257', NULL, '', 'latitude=-7.093222&longitude=81.785292&zoom=12', 'Discovered in 1890 by Spitaler.\r\nIdentified as globular cluster by W.E. Harris et.al in 1997.<p>\r\nOn the ground of its discovery by Rudolf Ferdinand Spitaler, this object was included by Dreyer in his first Index Catalogue as IC 1257, and longly referred to as an open cluster, although R. Burnham, Jr. remarked that its classification may be uncertain. It was finally revealed as a globular cluster only in 1997 (Harris et.al., 1997), making it Milky Way Globular Cluster No. 147.\r\n<p>\r\nIdentification as a globular was done by obtaining a color-magnitude diagram, which immediately revealed its nature as a globular beyond the Galactic Center. IC 1257 is at a distance of 81,500 light years from our Sun and about 58,400 light years from the Galactic Center. It is approaching us at about 140 km/sec.', 'Seds.org', 'http://spider.seds.org/spider/MWGC/i1257.html', '2012-12-17 23:00:00'),
('Terzan 2', 'HP 3', '', 'latitude=2.3&longitude=356.32&zoom=10', '', '', '', '0000-00-00 00:00:00'),
('NGC 6366', NULL, 'ngc6366', '', '', '', '', '0000-00-00 00:00:00'),
('Terzan 4', 'HP 4', '', '', '', '', '', '0000-00-00 00:00:00'),
('HP 1', 'BH 229', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6362', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Liller 1', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6380', 'Ton 1', '', '', 'This cluster was discovered by James Dunlop in 1826 from Paramatta, Australia and cataloged by him as Dun 538. However, due to unknown reason, Dunlop''s discovery could not be verified by John Herschel, who independently rediscovered this object from the Cape of Good Hope in 1834, and cataloged as h 3688. Dunlop''s discovery was eventually brought to light in the 1990s by Glen Cozens of Australia.\r\n<p>\r\nFor a long long time, NGC 6380 was thought to be just an open cluster. Only in the 1950s, this object was found to be globular by A.D. Thackeray on photographic plates obtained with the 74-inch telescope at Radcliffe Observatory in the 1950s (see Sawyer Hogg 1959). It was independently discovered once more by Paris Pismis, who cataloged it as Tonantzintla 1 or Ton 1 (Pismis 1959); it was also referred to as Pismis 25 on that occasion. In the same paper, Pismis also announced a second new globular, Tonantzintla 2 or Ton 2 - this was an original discovery.', 'SEDS', 'http://spider.seds.org/spider/MWGC/n6380.html', '2013-10-03 11:00:13'),
('Terzan 1', 'HP 2', '', '', '', '', '', '0000-00-00 00:00:00'),
('Ton 2', 'Pismis 26', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6388', NULL, 'ngc6388', 'latitude=-44.735472&longitude=84.072082&zoom=10', 'Discovered on June 5, 1826 by Dunlop.\r\nCataloged as Dun 457. ', 'Seds.org', 'http://spider.seds.org/spider/MWGC/n6388.html', '2011-04-29 13:35:16'),
('NGC 6402', 'M 14', '', '', 'Messier 14 (also known as M14 or NGC 6402) is a globular cluster in the constellation Ophiuchus. It was discovered by Charles Messier in 1764.\r\n<p>At a distance of about 30,000 light-years, M14 contains several 100,000 stars. At a brightness of magnitude 7.6 it can be easily observed with binoculars and medium sized telescopes begin to show some hint of the individual stars of which the brightest is of magnitude +14.\r\n<p>The total luminosity of M14 is in the order of 400,000 times that of the Sun corresponding to an absolute magnitude of -9.12. The shape of the cluster is decidedly elongated. M14 spans about 100 light-years across.\r\n<p>\r\nA respectable total of 70 variable stars are known in M14, many of the W Virginis variety common in globular clusters.<p> In 1938, a nova appeared in this globular cluster although this was not discovered until photographic plates from that time were studied in 1964.\r\n\r\n', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_14', '0000-00-00 00:00:00'),
('NGC 6401', NULL, '', '', 'Discovered by William Herschel on May 21, 1784.<p>\r\nThis globular cluster was first taken for a bright nebula by W. Herschel, and cataloged accordingly as H I.44. John Herschel also described it as a nebula, as he apparently couldn''t resolve it into stars either.\r\n<p>\r\nIn 1977, Peterson announced the finding of another planetary nebula in the neighborhood, and perhaps associated with globular cluster NGC 6401 in Ophiuchus; this planetary nebula candidate was cataloged as Peterson 1 (Pt 1; PK 004+03.1). However, in 1990 Acker and Stenholm found that this object exhibits a red stellar continuum - thus is not a planetary nebula but a symbiotic star.', 'Seds.org', 'http://spider.seds.org/spider/MWGC/n6401.html', '2013-01-28 23:00:00'),
('NGC 6397', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Pal 6', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6426', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Djorg 1', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Terzan 5', 'Terzan 11', '', '', 'Terzan 5 is a heavily obscured globular cluster belonging to the bulge (the central star concentration) of the Milky Way galaxy. It was one of six globulars discovered by French astronomer Agop Terzan in 1968 and was initially labeled <b>Terzan 11</b>. The cluster was cataloged by the Two-Micron Sky Survey as IRC–20385. It is situated in the Sagittarius constellation in the direction of the Milky Way''s center. Terzan 5 probably follows an unknown complicated orbit around the center of the galaxy, but currently it moves towards the Sun with the speed of around 90 km/s.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Terzan_5', '2013-04-15 22:00:00'),
('NGC 6440', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6441', NULL, 'ngc6441', '', '', '', '', '0000-00-00 00:00:00'),
('Terzan 6', 'HP 5', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6453', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('UKS 1', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6496', NULL, '', '', 'This cluster was discovered by James Dunlop on June 28, 1826. It has been cataloged as Dun 460. ', 'SEDS', 'https://en.wikipedia.org/wiki/NGC_6496', '2013-10-17 22:00:00'),
('Terzan 9', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Djorg 2', 'E456-SC38', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6517', 'C1759-089', '', '', '', '', '', '0000-00-00 00:00:00'),
('Terzan 10', NULL, '', '', 'Very few information is available for this cluster. By means of the bright giants method Webbink (1985) estimated an horizontal branch level of  which, combined to a reddening of E(B-V) = 1.71 from the modified cosecant law, led to a distance from the Sun of . The cluster is not concentrated, with c = 1.12, as estimated from the core and limiting radii presented by Webbink. Liu et al. (1994) presented infrared photometry deriving a reddening of E(B-V) = 2.6, a metallicity close to that of 47 Tuc, and a true distance modulus of (m-M)0 = 14.5.', 'Ortolani , Bica, and Barbuy (1997)', 'http://gclusters.altervista.org/article.php?idart=165', '2013-04-15 22:00:00'),
('NGC 6522', NULL, '', 'latitude=-30.035&longitude=90.897082&zoom=11', 'Discovered by William Herschel on June 24, 1784. ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/n6522.html', '0000-00-00 00:00:00'),
('NGC 6535', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6528', NULL, '', 'latitude=-30.055945&longitude=91.206374&zoom=11', 'Discovered by William Herschel on June 24, 1784.\r\n<p>\r\nOn the occasion of its discovery, William Herschel cataloged this globular cluster as H 2.200, indicating that he took it for a "Faint Nebula." His son, John Herschel, listed it as h 3723 in his "Cape of Good Hope" catalog, and included it in his General Catalogue as GC 4364. ', 'Seds.org', 'http://www.seds.org/~spider/spider/MWGC/n6528.html', '0000-00-00 00:00:00'),
('NGC 6539', NULL, 'ngc6539', 'latitude=-7.586501&longitude=91.206957&zoom=10', 'This globular cluster was discovered by Brorsen in 1856, and included by Auwers as No. 39 in his catalog, as well as in John Herschel''s General Catalogue as GC 4370.\r\n', 'Seds.org website', 'http://spider.seds.org/spider/MWGC/n6539.html', '2011-04-27 08:47:32'),
('NGC 6540', 'Djorg 3', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6544', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6541', NULL, '', '', 'Discovered by N. Cacciatore on March 19, 1826. Independently found by James Dunlop on July 3, 1826.\r\n<a href="http://en.wikipedia.org/wiki/Niccol%C3%B2_Cacciatore">Nicolò Cacciatore</a> (1780 - 1841) of the observatory in Palermo, Italy discovered this globular cluster on March 19, 1826, just a few months before James Dunlop independently found it on July 3 of the same year. Erroneously, Cacciatore first suspected this to be a "new nebula." John Herschel included it in his 1847 catalog as h 3725, and in his "General Catalogue" as GC 4372, which became NGC 6541 in J.L.E. Dreyer''s New General Catalogue.\r\n', 'SEDS ', 'http://spider.seds.org/spider/MWGC/n6541.html', '2013-04-09 22:00:00'),
('NGC 6553', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6558', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('IC 1276', 'Pal 7', '', '', '', '', '', '0000-00-00 00:00:00'),
('Terzan 12', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6569', NULL, '', '', 'Globular cluster NGC 6569 was discovered by William Herschel on June 13, 1784. He first took it for a faint nebula and cataloged it as H II.201. James Dunlop found it independently in the late 1820s and cataloged it as Dun 619. ', 'SEDS.org', 'http://spider.seds.org/spider/MWGC/n6569.html', '0000-00-00 00:00:00'),
('NGC 6584', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6624', NULL, '', 'latitude=-30.361112&longitude=95.919332&zoom=10', 'Discovered on June 24, 1784 by William Herschel.\r\nThis globular was discovered by William Herschel on June 24, 1784 and cataloged as H I.50, as he first thought it was a nebula.', 'Cluster''s page at SEDS', 'http://spider.seds.org/spider/MWGC/n6624.html', '0000-00-00 00:00:00'),
('NGC 6626', 'M 28', '', '', 'Messier 28 (also known as M28 or NGC 6626) is a globular cluster in the constellation Sagittarius. It was discovered by Charles Messier in 1764.\r\n<p>\r\nM28 is at a distance of about 18,000 to 19,000 light-years away from Earth. 18 RR Lyrae type variable stars have been observed in this cluster. In 1986, M28 became the first globular cluster where a millisecond pulsar was discovered (by the Lovell Telescope at Jodrell Bank Observatory).', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_28', '0000-00-00 00:00:00'),
('NGC 6638', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6637', 'M 69', '', '', 'Messier 69 (also known as M69 or NGC 6637) is a globular cluster in the constellation Sagittarius. It was discovered by Charles Messier in August 31, 1780, the same night he discovered M70. At the time, he was searching for an object described by LaCaille in 1751-2 and thought he had rediscovered it, but it is unclear if LaCaille actually described M69.<p>\r\n\r\nM69 is at a distance of about 29,700 light-years away from Earth and has a spatial radius of 42 light-years. It is a close neighbor of Globular Cluster M70, 1,800 light-years separating the two objects, and both these clusters lie close to the Galactic Center. ', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_69', '0000-00-00 00:00:00'),
('NGC 6642', NULL, '', '', 'This globular was discovered by William Herschel on August 7, 1784, and cataloged by him as H II.205.', 'SEDS', 'http://spider.seds.org/spider/MWGC/n6642.html', '2013-09-03 22:00:00'),
('NGC 6652', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6656', 'M 22', '', '', 'Messier 22 (also known as M22 or NGC 6656) is an elliptical globular cluster in the constellation Sagittarius near the Galactic bulge region. It is one of the brightest globulars that is visible in the night sky.<p>\r\nM22 was one of the first globulars to be discovered in 1665 by Abraham Ihle and it was included in Charles Messier''s catalog of comet-like objects on June 5, 1764.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_22', '0000-00-00 00:00:00'),
('Pal 8', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6681', 'M 70', '', '', 'Messier 70 (also known as M70 or NGC 6681) is a globular cluster in the constellation Sagittarius. It was discovered by Charles Messier in 1780.\r\n<p>\r\nM70 is at a distance of about 29,300 light years away from Earth and close to the Galactic Center. It is roughly the same size and luminosity as its neighbour in space, Globular Cluster M69. Only 2 variable stars are known within this cluster.\r\n', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_70', '0000-00-00 00:00:00'),
('NGC 6712', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6715', 'M 54', 'ngc6715', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6717', 'Pal 9', 'ngc6717', '', 'Discovered by William Herschel on August 7, 1784.<p>\r\nWilliam Herschel discovered this cluster and cataloged it as H III.143. He described it as a very faint round nebula and apparently thought it was a cluster with nebulosity. It was first recognized as globular cluster by Per Collinder in 1931. When compiling his catalog of newly discovered globular clusters, George Abell (1955) included this object, apparently unaware of its identity, as it was not previously classified as a globular cluster. Its identification with NGC 6717 was probably done in 1958 by Alter.\r\n<p>\r\nIt is of historical interest that a stellar lump in this cluster was cataloged separately as IC 4802 on the grounds of its observation by Bigourdan around 1900 (Bigourdan 434).', 'SEDS.org', 'http://spider.seds.org/spider/MWGC/n6717.html', '2013-04-16 22:00:00'),
('NGC 6723', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6749', 'Be42', '', '', '<a href="https://en.wikipedia.org/wiki/John_Herschel">John Herschel</a> discovered this globular cluster during his observations from Bath in Southern England in 1827, and cataloged it as h 2029.\r\n<p>\r\nNGC 6749 was also cataloged as Berkeley 42 or Be 42 (in an open cluster catalog).', 'SEDS', 'http://spider.seds.org/spider/MWGC/n6749.html', '2013-10-27 23:00:00'),
('NGC 6752', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6760', '', '', '', 'This globular cluster was discovered on March 30, 1845 by John Russell Hind. John Herschel included it in his General Catalogue as GC 4473, which became NGC 6760 in J.L.E. Dreyer''s catalog.', 'SEDS', 'http://spider.seds.org/spider/MWGC/n6760.html', '2013-10-23 22:00:00'),
('NGC 6779', 'M 56', '', '', 'Messier 56 (also known as M56 or NGC 6779) is a globular cluster in the constellation Lyra. It was discovered by Charles Messier in 1779. M56 is at a distance of about 32,900 light-years from Earth and measures roughly 84 light-years across.\r\n<p>\r\nThe brightest stars in M56 are of 13th magnitude while it contains only about a dozen known variable stars like V6 (RV Tauri star; period: 90 days) or V1 (Cepheid: 1.510 days); other variable stars are V2 (irregular) and V3 (semiregular).', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_56', '0000-00-00 00:00:00'),
('Terzan 7', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Pal 10', ' -', '', '', '', '', '', '0000-00-00 00:00:00'),
('Arp 2', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6809', 'M 55', '', '', '', '', '', '0000-00-00 00:00:00'),
('Terzan 8', '', '', '', '', '', '', '0000-00-00 00:00:00'),
('Pal 11', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6838', 'M 71', '', '', 'Messier 71 (also known as M71 or NGC 6838) is a globular cluster in the constellation Sagitta. It was discovered by Philippe Loys de Cheseaux in 1746 and included by Charles Messier in his catalog of comet-like objects in 1780. It was also noted by Koehler at Dresden around 1775.<p>\r\n\r\nM71 is at a distance of about 12,000 light years away from Earth and spans some 27 light years across. The irregular variable star Z Sagittae is a member of this cluster.\r\n<p>\r\nM71 was long thought (until the 1970s) to be a densely packed open cluster and was classified as such by leading astronomers in the field of star cluster research due to its lacking a dense central compression (..) However, modern photometric photometry has detected a short "horizontal branch" in the H-R diagram of M71, which is characteristic of a globular cluster.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_71', '0000-00-00 00:00:00'),
('NGC 6864', 'M 75', '', '', 'Messier 75 (also known as M75 or NGC 6864) is a globular cluster in the constellation Sagittarius. It was discovered by Pierre Mechain in 1780 and included in Charles Messier''s catalog of comet-like objects that same year.\r\n<p>\r\nM75 is at a distance of about 67,500 light years away from Earth and its apparent size on the sky translates to a true radius of some 67 light years', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_75', '0000-00-00 00:00:00'),
('NGC 6934', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 6981', 'M 72', '', '', 'Messier 72 (also known as M72 or NGC 6981) is a globular cluster in the Aquarius constellation discovered by Pierre Mechain in August 29, 1780. <p>Charles Messier looked for it on the following October 4 and 5, and included it in his catalog. Both decided that it was a faint nebula not a cluster as is now believed.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_72', '0000-00-00 00:00:00'),
('NGC 7006', ' -', '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 7078', 'M 15', '', '', '<p class="testodescr">Globular Cluster M15 (also known as Messier Object 15 or NGC 7078) is a globular cluster in the constellation Pegasus. It was discovered by Jean-Dominique Maraldi in 1746 and included in Charles Messier''s catalog of comet-like objects in 1764. It is estimated to be 13.2 billion years old, one of the oldest globular clusters.\r\n<p>\r\nM15 is at a distance of about 33,600 light-years from Earth. It has an absolute magnitude of -9.2 which translates to a total luminosity of 360,000 times that of the Sun. Messier 15 is one of the most densely packed globulars known in the Milky Way galaxy. The core of this cluster has undergone a contraction known as core collapse and it has a central density cusp (just left of centre in image at right), with an enormous number of stars surrounding what may be a central black hole.\r\n<p>\r\nMessier 15 contains a rather high number of variable stars; 112 of these are known to reside within its mass of stars. There have also been found to be at least 8 pulsars in M15 including one double neutron star system, M15 C. Moreover, M15 houses one of only four planetary nebulae known in a globular cluster, Pease 1, discovered in 1928.\r\n<p>\r\nTo the amateur astronomer Messier 15 appears as a fuzzy star in the smallest of telescopes. Mid to large size telescopes (at least 6 in./150 mm diameter) will start to reveal individual stars, the brightest of which are of magnitude +12.6.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_15', '0000-00-00 00:00:00'),
('NGC 7089', 'M 2', '', '', 'M2 is, under extremely good conditions, just visible to the naked eye five degrees north of the star Beta Aquarii. Binoculars or small telescopes will identify this cluster as non-stellar while larger telescopes will resolve individual stars, of which the brightest are of apparent magnitude 13.1.<p>\r\n\r\nM2 was discovered by the French astronomer Jean-Dominique Maraldi in 1746 when he was observing a comet with Jacques Cassini. Charles Messier rediscovered it in 1760 and thought it a nebula without any stars associated with it. William Herschel was the first to resolve individual stars in the cluster in 1794.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_2', '0000-00-00 00:00:00'),
('NGC 7099', 'M 30', 'ngc7099', '', 'Messier 30 (also known as M30 or NGC 7099) is a globular cluster in the Capricornus constellation. <p>It was discovered by Charles Messier in 1764. M30 is at a distance of about 26,000 light-years away from Earth.', 'Wikipedia', 'http://en.wikipedia.org/wiki/Messier_30', '0000-00-00 00:00:00'),
('Pal 12', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('Pal 13', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('NGC 7492', ' -', '', '', '', '', '', '0000-00-00 00:00:00'),
('ESO280-SC06', NULL, '', '', '', '', '', '0000-00-00 00:00:00'),
('2MASS-GC01', 'Hurt 1', '', '', 'Globular cluster 2MASS-GC01 was noted by visual inspection of arbitrary images from the 2MASS Atlas data, together with the apparently neighbored globular 2MASS-GC02 at less than 1 degree separation. Effectively obscured in the visible light by an estimated 21.5 +/- 1.0 magnitudes, it could only be discovered in the infrared. It was Milky Way Globular Cluster No. 148 to be discovered.\r\n<p>\r\nThis high obscuration occurs because of the cluster''s low galactic latitude of about 0 deg, and its proximity to the Galactic Center of about 10 deg.', 'SEDS page', 'http://spider.seds.org/spider/MWGC/2mass-gc01.html', '2013-01-02 23:00:00'),
('2MASS-GC02', 'Hurt 2', '', '', '2MASS-GC02 was discovered by 2MASS telescope operator Joselino Vasquez in his observing logs as a suspected globular cluster, and confirmed by visual inspection of arbitrary 2MASS Atlas images, together with its apparent neighbor, 2MASS-GC01. <p>It is heavily obscured in the visible part of the spectrum by about 18.0 +/- 1.0 magnitudes, and therefore only discovered in the infrared. 2MASS-GC02 was Milky Way Globular Cluster No. 149 to be discovered.', 'SEDS page', 'http://spider.seds.org/spider/MWGC/2mass-gc02.html', '2013-01-02 23:00:00'),
('FR 1767', NULL, 'fr1767', '', '', '', '', '0000-00-00 00:00:00'),
('BH 261', 'AL 3', 'bh261', '', '', '', '', '2011-12-18 23:00:00'),
('Pfleiderer 2', NULL, 'Pfleiderer2', '', '', '', '', '0000-00-00 00:00:00'),
('Whiting 1', NULL, 'whiting1', '', 'Discovered by Whiting, Hau and Irwin in 2002. \r\nIdentified as globular cluster by Giovanni Carraro in 2005.\r\nDuring their hunt for new Local Group galaxies, Whiting, Hau and Irwin (2002) discovered this object and cataloged it as WHI B0200-03, as a suspected star cluster.\r\n\r\nBased on CCD photometry in the BVI bands of the spectrum, Carraro (2005) identified it as a compact star cluster of low metallicity ([Fe/H]=-1.20) of approximate age of 5 billion years. It is clearly a halo object, and definitely not an open cluster, but probably one of the youngest globular clusters in the Milky Way''s halo.\r\n', 'Seds.org', 'http://spider.seds.org/spider/MWGC/whiting1.html', '2011-12-21 10:16:09'),
('Kosopov 1', 'Ko 1', 'Kosopov1', '', '', '', '', '2012-01-27 15:09:54'),
('Kosopov 2', 'Ko 2', 'Kosopov2', '', '', '', '', '2013-08-09 13:09:34');

-- --------------------------------------------------------

--
-- Struttura della tabella `infousers`
--

CREATE TABLE `infousers` (
  `numcomm` smallint(6) NOT NULL,
  `ID` varchar(10) DEFAULT NULL,
  `datacomm` date DEFAULT NULL,
  `nomeuser` varchar(30) DEFAULT NULL,
  `commento` text,
  `intestazione` tinytext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `infousers`
--

INSERT INTO `infousers` (`numcomm`, `ID`, `datacomm`, `nomeuser`, `commento`, `intestazione`) VALUES
(1, 'NGC 6341', '2003-02-18', 'Batman', 'I have observed many times this gorgeous globular cluster... it''s the very best cluster, trust me.', 'The very best cluster! ');

-- --------------------------------------------------------

--
-- Struttura della tabella `linkspage`
--

CREATE TABLE `linkspage` (
  `ID` varchar(20) NOT NULL DEFAULT '',
  `linkname` tinytext NOT NULL,
  `ldescr` mediumtext,
  `linkaddr` varchar(200) NOT NULL,
  `linkimage` varchar(200) DEFAULT NULL,
  `linkdate` date DEFAULT NULL,
  `num` smallint(6) NOT NULL,
  `cache` varchar(80) DEFAULT NULL,
  `numvis` int(11) NOT NULL DEFAULT '0',
  `credits` tinytext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `linkspage`
--

INSERT INTO `linkspage` (`ID`, `linkname`, `ldescr`, `linkaddr`, `linkimage`, `linkdate`, `num`, `cache`, `numvis`, `credits`) VALUES
('NGC 6218', 'VLT Study Reveals Troubled Past of Globular Cluster Messier 12', 'Based on observations with ESO''s Very Large Telescope, a team of Italian astronomers reports [1] that the stellar cluster Messier 12 must have lost to our Milky Way galaxy close to one million low-mass stars.', 'http://www.eso.org/outreach/press-rel/pr-2006/pr-04-06.html', 'http://img75.imageshack.us/img75/8895/phot04a06preview1fk.jpg', '2006-02-07', 43, NULL, 137, ''),
('NGC 6205', 'M13 Globular Cluster ', 'An image by Gianluca Pompeo', 'http://pompeo.rigelcomputers.com/gallery/displayimage.php?album=8&pos=0', '', '2008-11-17', 27, NULL, 149, ''),
('NGC 6205', 'A Celestial Snow Globe of Stars', 'Like a whirl of shiny flakes sparkling in a snow globe, NASA''s Hubble Space Telescope catches an instantaneous glimpse of many hundreds of thousands of stars moving about in the globular cluster M13, one of the brightest and best-known globular clusters in the northern sky', 'http://hubblesite.org/newscenter/archive/releases/2008/40/', NULL, '2008-12-04', 25, NULL, 138, ''),
('NGC 6205', 'M13: The Great Globular Cluster in Hercules ', '... M13 is now modestly recognized as the Great Globular Cluster in Hercules, one of the brightest globular star clusters in the northern sky. ', 'http://apod.nasa.gov/apod/ap120614.html', NULL, '2012-06-15', 13, NULL, 231, ''),
('NGC 6205', 'M 13 – Her @ Virtualtelescope', 'A total of 40 exposures, with 90 seconds of integration each and taken with the Planewave 17 unit, were averaged...', 'http://www.virtualtelescope.eu/2012/08/24/m-13-her/', '', '2013-01-18', 3, NULL, 110, '');

-- --------------------------------------------------------

--
-- Struttura della tabella `localfiles`
--

CREATE TABLE `localfiles` (
  `ID` int(2) NOT NULL DEFAULT '0',
  `cluster` varchar(9) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `fname` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `localfiles`
--

INSERT INTO `localfiles` (`ID`, `cluster`, `type`, `fname`) VALUES
(1, 'Arp 2 ', 1, 'ARP0002.wav'),
(2, 'Lynga 7', 1, 'LYNGA07.wav'),
(3, 'NGC 104', 1, 'NGC0104.wav'),
(4, 'NGC 288', 1, 'NGC0288.wav'),
(5, 'NGC 362', 1, 'NGC0362.wav'),
(6, 'NGC 1261', 1, 'NGC1261.wav'),
(7, 'NGC 1851', 1, 'NGC1851.wav'),
(8, 'NGC 2298', 1, 'NGC2298.wav'),
(9, 'NGC 3201', 1, 'NGC3201.wav'),
(10, 'NGC 4147 ', 1, 'NGC4147.wav'),
(11, 'NGC 4590', 1, 'NGC4590.wav'),
(12, 'NGC 4833', 1, 'NGC4833.wav'),
(13, 'NGC 5024', 1, 'NGC5024.wav'),
(14, 'NGC 5053', 1, 'NGC5053.wav'),
(15, 'NGC 5272', 1, 'NGC5272.wav'),
(16, 'NGC 5286', 1, 'NGC5286.wav'),
(17, 'NGC 5466', 1, 'NGC5466.wav'),
(18, 'NGC 5904', 1, 'NGC5904.wav'),
(19, 'NGC 5927', 1, 'NGC5927.wav'),
(20, 'NGC 5896', 1, 'NGC5986.wav'),
(21, 'NGC 6093', 1, 'NGC6093.wav'),
(22, 'NGC 6101', 1, 'NGC6101.wav'),
(23, 'NGC 6121', 1, 'NGC6121.wav'),
(24, 'NGC 6144', 1, 'NGC6144.wav'),
(25, 'NGC 6171', 1, 'NGC6171.wav'),
(26, 'NGC 6025', 1, 'NGC6205.wav'),
(27, 'NGC 6218', 1, 'NGC6218.wav'),
(28, 'NGC 6254', 1, 'NGC6254.wav'),
(29, 'NGC 6304', 1, 'NGC6304.wav'),
(30, 'NGC 6341', 1, 'NGC6341.wav'),
(31, 'NGC 6352', 1, 'NGC6352.wav'),
(32, 'NGC 6362', 1, 'NGC6362.wav'),
(33, 'NGC 6366', 1, 'NGC6366.wav'),
(34, 'NGC 6388', 1, 'NGC6388.wav'),
(35, 'NGC 6397', 1, 'NGC6397.wav'),
(36, 'NGC 6441', 1, 'NGC6441.wav'),
(37, 'NGC 6496', 1, 'NGC6496.wav'),
(38, 'NGC 6535', 1, 'NGC6535.wav'),
(39, 'NGC 6541', 1, 'NGC6541.wav'),
(40, 'NGC 6548', 1, 'NGC6584.wav'),
(41, 'NGC 6624', 1, 'NGC6624.wav'),
(42, 'NGC 6637', 1, 'NGC6637.wav'),
(43, 'NGC 6652', 1, 'NGC6652.wav'),
(44, 'NGC 6656', 1, 'NGC6656.wav'),
(45, 'NGC 6681', 1, 'NGC6681.wav'),
(46, 'NGC 6715', 1, 'NGC6715.wav'),
(47, 'NGC 6717', 1, 'NGC6717.wav'),
(48, 'NGC 6723', 1, 'NGC6723.wav'),
(49, 'NGC 6752', 1, 'NGC6752.wav'),
(50, 'NGC 6779', 1, 'NGC6779.wav'),
(51, 'NGC 6809', 1, 'NGC6809.wav'),
(52, 'NGC 6838', 1, 'NGC6838.wav'),
(53, 'NGC 6934', 1, 'NGC6934.wav'),
(54, 'NGC 6981', 1, 'NGC6981.wav'),
(55, 'NGC 7078', 1, 'NGC7078.wav'),
(56, 'NGC 7089', 1, 'NGC7089.wav'),
(57, 'NGC 7099', 1, 'NGC7099.wav'),
(58, 'Pal 2', 1, 'PALMAR2.wav'),
(59, 'Pal 1 ', 1, 'PALMR01.wav'),
(60, 'Pal 12', 1, 'PALMR12.wav'),
(61, 'Ter 7 ', 1, 'TERZAN7.wav'),
(62, 'Ter 8', 1, 'TERZAN8.wav');

-- --------------------------------------------------------

--
-- Struttura della tabella `newpar`
--

CREATE TABLE `newpar` (
  `ID` smallint(6) NOT NULL,
  `cluster` varchar(14) NOT NULL DEFAULT '',
  `param` smallint(6) NOT NULL DEFAULT '0',
  `pvalue` varchar(12) NOT NULL DEFAULT '',
  `biref` tinytext NOT NULL,
  `biyear` smallint(6) NOT NULL DEFAULT '0',
  `bilink` tinytext,
  `comments` mediumtext,
  `mdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `newpar`
--

INSERT INTO `newpar` (`ID`, `cluster`, `param`, `pvalue`, `biref`, `biyear`, `bilink`, `comments`, `mdate`) VALUES
(4, 'NGC 6205', 23, '-1.65', 'Lee, Demarque & Zinn', 1994, 'http://cdsads.u-strasbg.fr/abs/1994ApJ...423..248L', NULL, '2008-08-06 13:52:51'),
(21, 'NGC 5272', 23, '-1.66', 'Lee, Demarque & Zinn', 1994, 'http://cdsads.u-strasbg.fr/abs/1994ApJ...423..248L', NULL, '2008-08-06 13:52:51'),
(38, 'NGC 6218', 23, '-1.61', 'Lee, Demarque & Zinn', 1994, 'http://cdsads.u-strasbg.fr/abs/1994ApJ...423..248L', NULL, '2008-08-06 13:52:51'),
(48, 'NGC 6341', 23, '-2.24', 'Lee, Demarque & Zinn', 1994, 'http://cdsads.u-strasbg.fr/abs/1994ApJ...423..248L', NULL, '2008-08-06 13:52:51'),
(49, 'NGC 6341', 23, '-0.66', 'Lee, Demarque & Zinn', 1994, 'http://cdsads.u-strasbg.fr/abs/1994ApJ...423..248L', NULL, '2008-08-06 13:52:51');

-- --------------------------------------------------------

--
-- Struttura della tabella `parameters`
--

CREATE TABLE `parameters` (
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
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'most recent edit'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Aggiornamento per H10';

--
-- Dump dei dati per la tabella `parameters`
--

INSERT INTO `parameters` (`ID`, `Name`, `RA`, `Declination`, `Gal_long`, `Gal_lat`, `R_sun`, `R_gc`, `X`, `Y`, `Z`, `E_bv`, `V_hb`, `m_M`, `Vt`, `M_Vt`, `UB`, `BV`, `VR`, `VI`, `S_RR`, `HBR`, `HBT`, `FE_H`, `SpT`, `v_r`, `v_r_ERR`, `v_LSR`, `C`, `R_C`, `R_H`, `R_T`, `LG_TC`, `LG_TH`, `MU_V`, `RHO_V`, `sed`, `credits`, `linkimage`, `linkdss`, `source`, `edited`) VALUES
('NGC 5272', 'M 3', '13 42 11.62', '+28 22 38.2', 42.22, 78.71, 10.2, 12, 1.5, 1.3, 10, 0.01, 15.64, 15.07, 6.19, -8.88, 0.09, 0.69, NULL, 0.93, 49, 0.08, 4, -1.5, ' F6', -147.6, 0.2, -138.3, 1.89, 0.37, 2.31, 38.19, 8.31, 9.79, 16.64, 3.57, '<a href="http://www.seds.org/messier/m/m003.html">SEDS data</a>', NULL, NULL, NULL, 'HARRIS', '0000-00-00 00:00:00'),
('NGC 6205', 'M 13', '16 41 41.24', '+36 27 35.5', 59.01, 40.91, 7.1, 8.4, 2.8, 4.6, 4.7, 0.02, 14.9, 14.33, 5.78, -8.55, -0.02, 0.68, NULL, 0.86, 1.7, 0.97, 0, -1.53, ' F6', -244.2, 0.2, -228, 1.53, 0.62, 1.69, 25.18, 8.51, 9.3, 16.59, 3.55, '<a href="http://www.seds.org/messier/m/m013.html">SEDS data</a>', NULL, NULL, NULL, 'HARRIS', '0000-00-00 00:00:00'),
('NGC 6218', 'M 12', '16 47 14.18', '-01 56 54.7', 15.72, 26.31, 4.8, 4.5, 4.2, 1.2, 2.1, 0.19, 14.6, 14.01, 6.7, -7.31, 0.2, 0.83, 0.56, 1.14, 0, 0.97, 1, -1.37, ' F8', -41.4, 0.2, -27.9, 1.34, 0.79, 1.77, 17.6, 8.19, 8.87, 18.1, 3.23, '<a href="http://www.seds.org/messier/m/m012.html">SEDS data</a>', NULL, NULL, NULL, 'HARRIS', '0000-00-00 00:00:00'),
('NGC 6341', 'M 92', '17 17 07.39', '+43 08 09.4', 68.34, 34.86, 8.3, 9.6, 2.5, 6.3, 4.7, 0.02, 15.1, 14.65, 6.44, -8.21, 0.01, 0.63, NULL, 0.88, 13.1, 0.91, 2, -2.31, ' F2', -120, 0.1, -103.5, 1.68, 0.26, 1.02, 15.17, 7.96, 9.02, 15.47, 4.3, '<a href="http://www.seds.org/messier/m/m092.html">SEDS data</a>', NULL, NULL, NULL, 'HARRIS', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `rrlyrae`
--

CREATE TABLE `rrlyrae` (
  `ID` varchar(14) NOT NULL DEFAULT '',
  `Name` varchar(14) DEFAULT NULL,
  `n_vis` smallint(6) NOT NULL DEFAULT '0',
  `updated` date NOT NULL DEFAULT '0000-00-00',
  `histo` tinytext NOT NULL,
  `rrcatal` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `rrlyrae`
--

INSERT INTO `rrlyrae` (`ID`, `Name`, `n_vis`, `updated`, `histo`, `rrcatal`) VALUES
('NGC 5272', 'M 3', 555, '2005-09-15', '', 'C1339p286'),
('NGC 6205', 'M 13', 583, '2008-07-31', '', 'C1639p365'),
('NGC 6218', 'M 12', 262, '2005-10-25', '', 'C1644m018'),
('NGC 6341', 'M 92', 327, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `tutors`
--

CREATE TABLE `tutors` (
  `ID` smallint(6) NOT NULL,
  `cluster` varchar(14) NOT NULL,
  `person` smallint(6) NOT NULL,
  `from` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `tutors`
--

INSERT INTO `tutors` (`ID`, `cluster`, `person`, `from`) VALUES
(1, 'NGC 5272', 1, '2012-05-21');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `ID` smallint(6) NOT NULL,
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
  `joindate` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`ID`, `email`, `password`, `name`, `surname`, `affiliation`, `active`, `country`, `homepage`, `facebook`, `twitter`, `profilepic`, `joindate`) VALUES
(1, 'm.castellani@gmail.com', '', 'Marco', 'Castellani', 'INAF - Rome Astronomical Observatory', 1, 'Italy', 'http://mcastel.weebly.com', 'http://www.facebook.com/marco.castellani', 'http://twitter.com/mcastel', 'https://img.skitch.com/20120530-eh1raast31c281gq81pa7yuj7c.jpg', '2012-05-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesscount`
--
ALTER TABLE `accesscount`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `bibliomain`
--
ALTER TABLE `bibliomain`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `infousers`
--
ALTER TABLE `infousers`
  ADD PRIMARY KEY (`numcomm`);

--
-- Indexes for table `linkspage`
--
ALTER TABLE `linkspage`
  ADD UNIQUE KEY `num` (`num`);

--
-- Indexes for table `localfiles`
--
ALTER TABLE `localfiles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newpar`
--
ALTER TABLE `newpar`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rrlyrae`
--
ALTER TABLE `rrlyrae`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibliomain`
--
ALTER TABLE `bibliomain`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `infousers`
--
ALTER TABLE `infousers`
  MODIFY `numcomm` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `linkspage`
--
ALTER TABLE `linkspage`
  MODIFY `num` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `newpar`
--
ALTER TABLE `newpar`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
