-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 06:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formula1database`
--

-- --------------------------------------------------------

--
-- Table structure for table `hpilots`
--

CREATE TABLE `hpilots` (
  `id` int(11) NOT NULL,
  `pilotName` varchar(50) NOT NULL,
  `linkPath` varchar(200) NOT NULL,
  `pathPict` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hpilots`
--

INSERT INTO `hpilots` (`id`, `pilotName`, `linkPath`, `pathPict`, `description`) VALUES
(1, 'Sebastian Vettel', 'https://ro.wikipedia.org/wiki/Sebastian_Vettel', '../pilots/vet.jpg', 'Este cel mai tanar pilot care a castigat campionatul mondial de Formula 1. A cucerit titlul la piloti in sezoanele 2010, 2011,2012 si 2013 si totodata cu ajutorul coechipierului sau Mark Webber, a castigat titlurile mondiale la constructori in aceeasi ani 2010, 2011, 2012 respectiv 2013 pentru echipa lor Red Bull Renault. Vettel detine numeroase recorduri in Formula 1 precum: cel mai tanar pilot care a luat parte intr-o sesiune oficiala de antrenamente in marele circ,cel mai tanar pilot care a punctat in Formula 1,care a condus o cursa, care a plecat din pole position si care a castigat o cursa.'),
(2, 'Lewis Hamilton', 'https://ro.wikipedia.org/wiki/Lewis_Hamilton\"', '../pilots/ham.jpg', 'El a debutat in campionatul mondial in 2007, la echipa McLaren Mercedes. Este primul pilot de culoare din Formula 1, fiind nascut in Marea Britanie dar din parinti imigranti din Grenada. Lewis si-a inceput cariera in karting in 1995, acolo unde a reusit sa se impuna cu usurinta in multe competitii la care a luat startul, fiind inca din acea perioada luat sub aripa protectoare a lui Ron Dennis si a echipei sale, McLaren, care avea sa ii finanteze cariera odata ce si-a facut debutul in Formula Renault, campionatul britanic, seria de iarna - un minicampionat care se organizeaza in lunile de iarna si unde participa de regula multi debutanti - in 2001 cand a terminat pe locul al cincilea.'),
(3, 'Michael Schumacher', 'https://ro.wikipedia.org/wiki/Michael_Schumacher', '../pilots/mic.jpg', 'Michael Schumacher este un fost pilot de Formula 1. Statistic, prin prisma celor sapte titluri mondiale castigate, a celor 91 de victorii, 68 de pole position-uri si 76 de cele mai rapide tururi, Michael Schumacher este considerat drept cel mai bun pilot de Formula 1 din toate timpurile.In 2006, in urma unui sondaj efectuat de FIA, Michael Schumacher a fost votat de catre fanii Formulei 1 drept cel mai popular pilot care a evoluat vreodata in acest sport.Michael Schumacher mai are un frate, Ralf Schumacher, cei doi fiind unicii frati care au castigat curse in Formula 1, si au devenit primii frati care au terminat pe primele doua pozitii in aceasi cursa, o performanta pe care au mai repetat-o de patru ori..In decembrie 2013, Schumacher a suferit o trauma serioasa la cap in timp ce schia in statiunea Meribel, din alpii francezi. El a fost transportat pe cale aeriana la spital, operat si indus in stare coma artificiala. Dupa ce s-a aflat in coma din 29 decembrie 2013 pana pe 16 iunie 2014, el a parasit spitalul din Grenoble pentru a se reabilita in continuare la Spitalul Universitatii din Lausanne, Elvetia.');

-- --------------------------------------------------------

--
-- Table structure for table `index_page`
--

CREATE TABLE `index_page` (
  `id` int(11) NOT NULL,
  `picturePath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_page`
--

INSERT INTO `index_page` (`id`, `picturePath`) VALUES
(1, '../images/demo/images.jpg'),
(2, '../images/demo/images(1).jpg'),
(3, '../images/demo/images(2).jpg'),
(4, '../images/demo/images.png'),
(5, '../images/demo/images(1).png'),
(6, '../images/demo//download.jpg'),
(7, '../images/demo/images(3).jpg'),
(8, '../images/demo/images(4).jpg'),
(9, '../images/demo/download(1).jpg'),
(10, '../images/demo/download(2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE `newslatter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslatter`
--

INSERT INTO `newslatter` (`id`, `email`) VALUES
(3, 'codau.fabian@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `pilots`
--

CREATE TABLE `pilots` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `team` varchar(20) NOT NULL,
  `points` int(5) NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilots`
--

INSERT INTO `pilots` (`id`, `name`, `team`, `points`, `votes`) VALUES
(1, 'Fernando Alonso', 'McLaren', 9, 4),
(2, 'Valtteri Bottas', 'Mercedes', 19, 6),
(3, 'Sebastian Vettel', 'Ferrari', 15, 4),
(4, 'Louis Hamilton', 'Mercedes', 29, 6);

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE `races` (
  `id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `location` varchar(15) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `picturePath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`id`, `name`, `location`, `description`, `picturePath`) VALUES
(1, 'Cursa 1', 'Australia', 'Prima cursa de F1 in Australia a avut loc in Adelaide. Pentru ca se dorea foarte mult o cursa in Melbourne in 1993 F1 a semnat un contract prin care MP al Australiei avea sa aiba loc in noua pista din Albert Park.De atunci, cursa a devenit populara atat pentru soferi, cat si pentru fani, iar atmosfera din Melbourne ii atrage an dupa an.', '../races/australia.jpg'),
(2, 'Cursa 2', 'China', 'Circuitul international Shanghai a fost conceput ca circuit de curse pentru noul mileniu. Cu arhitectura ei uimitoare, si-a atins obiectivul de a deveni gateway-ul Chinei in lumea cursei de Formula 1.Prima cursa aici a avut loc in 2004.', '../races/china.jpg'),
(3, 'Cursa 3', 'Rusia', 'Parcul Olimpic este numai una dintre principalele atractii ale orasului. Turistii pot face o vizita la Teatrul de Iarna, fantanile muzicale din centrul orasului, muzeele de arta si istorie, impresionanta gradina botanica, parcurile pitoresti, restaurantele cu specific (evident) rusesc sau doar o simpla plimbare prin oras.', '../races/rusia.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment_relation`
--

CREATE TABLE `user_comment_relation` (
  `id` int(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `nameUser` varchar(100) NOT NULL,
  `comm_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comment_relation`
--

INSERT INTO `user_comment_relation` (`id`, `comment`, `nameUser`, `comm_date`) VALUES
(24, 'Vettel is the best', 'fabian13', '2017-11-19 05:42:57'),
(26, 'come on vettel!', 'fabian13', '2017-11-19 05:44:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hpilots`
--
ALTER TABLE `hpilots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_page`
--
ALTER TABLE `index_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pilots`
--
ALTER TABLE `pilots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_comment_relation`
--
ALTER TABLE `user_comment_relation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hpilots`
--
ALTER TABLE `hpilots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index_page`
--
ALTER TABLE `index_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pilots`
--
ALTER TABLE `pilots`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_comment_relation`
--
ALTER TABLE `user_comment_relation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
