-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2019 at 01:27 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recette`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`idCategory` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `etapes`
--

CREATE TABLE IF NOT EXISTS `etapes` (
`idEtape` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
`idIngredient` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recette`
--

CREATE TABLE IF NOT EXISTS `recette` (
`idRecette` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nb_part` int(11) NOT NULL,
  `duration` time NOT NULL,
  `ingredient` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `etape` varchar(50) NOT NULL,
  `image` binary(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cocktail`
--

CREATE TABLE IF NOT EXISTS `cocktail` (
`idCocktail` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `ingredient` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `etape` varchar(50) NOT NULL,
  `image` binary(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `etapes`
--
ALTER TABLE `etapes`
 ADD PRIMARY KEY (`idEtape`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
 ADD PRIMARY KEY (`idIngredient`);

--
-- Indexes for table `recette`
--
ALTER TABLE `recette`
 ADD PRIMARY KEY (`idRecette`);

--
-- Indexes for table `cocktail`
--
ALTER TABLE `cocktail`
 ADD PRIMARY KEY (`idCocktail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `etapes`
--
ALTER TABLE `etapes`
MODIFY `idEtape` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
MODIFY `idIngredient` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recette`
--
ALTER TABLE `recette`
MODIFY `idRecette` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recette`
--
ALTER TABLE `cocktail`
MODIFY `idCocktail` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
