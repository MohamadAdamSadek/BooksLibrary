-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2019 at 06:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booklibrary`
--
CREATE DATABASE IF NOT EXISTS `booklibrary` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `booklibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(200) NOT NULL,
  `AUTHOR` varchar(200) NOT NULL,
  `CATEGORY` varchar(200) NOT NULL,
  `YEAR` year(4) NOT NULL,
  `PRICE` float NOT NULL,
  `DESCRIPTION` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TITLE` (`TITLE`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `TITLE`, `AUTHOR`, `CATEGORY`, `YEAR`, `PRICE`, `DESCRIPTION`) VALUES
(1, 'Mensa Kakuro', 'Conceptis Puzzles', 'Puzzle', 2006, 8.95, 'The trick to kakuro is in making it all add up: the game begins with a grid that looks like a crossword, except that some squares contain small numbers in the corner. Fill in all the empty boxes using the numbers 1 to 9 without repeats so that the sum of each horizontal set of digits equals the number in the black triangle to its left. Don\'t forget though that the sum of each vertical set of digits must also equal the number in the triangle above it! The kakuro puzzles start out simple...and get more difficult as the book progresses, a perfect way to strengthen up those mental muscles.\r\n'),
(2, 'I Choose You!', 'Tracy West', 'Children', 1999, 28.34, 'Ash wants to be the world\'s greatest Pokemon master. With Pikachu at his side he sets off to capture and train every Pokemon he can find. Ash is determined, but there is one huge problem, Pikachu won\'t listen to a single thing Ash says.\r\n'),
(3, 'Introduction to the Theory of Computation', 'Michael Sipser', 'Computer', 2012, 24.99, 'The number one choice for today\'s computational theory course, the Introduction to the Theory of Computation offers a first-of-its-kind theoretical treatment of deterministic context-free languages, ideal for a better understanding of parsing and LR(k) grammars. This edition\'s refined presentation ensures a trusted accuracy and clarity that make the challenging study of computational theory accessible and intuitive to students while maintaining the subject\'s rigor and formalism. Readers gain a solid understanding of the fundamental mathematical properties of computer hardware, software, and applications with a blend of practical and philosophical coverage and mathematical treatments, including advanced theorems and proofs.\r\n'),
(4, 'The Wonderful Wizard of Oz', 'L. Frank Baum', 'Fantasy', 1995, 8.7, 'Follow the yellow brick road! Dorothy thinks she\'s lost forever when a tornado whirls her and her dog, Toto, into a magical world. To get home, she must find the wonderful wizard in the Emerald City of Oz. On the way she meets the Scarecrow, the Tin Woodman and the Cowardly Lion. But the Wicked Witch of the West has her own plans for the new arrival - will Dorothy ever see Kansas again?'),
(5, 'The Hobbit', 'J.R.R. Tolkien', 'Fantasy', 1937, 11.16, 'In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.'),
(7, 'Harry Potter and the Prisoner of Azkaban', 'J.K. Rowling', 'Fantasy', 1999, 15.34, 'Harry Potter is lucky to reach the age of thirteen, since he has already survived the murderous attacks of the feared Dark Lord on more than one occasion. But his hopes for a quiet term concentrating on Quidditch are dashed when a maniacal mass-murderer escapes from Azkaban, pursued by the soul-sucking Dementors who guard the prison. It\'s assumed that Hogwarts is the safest place for Harry to be. But is it a coincidence that he can feel eyes watching him in the dark, and should he be taking Professor Trelawney\'s ghoulish predictions seriously?                    '),
(8, 'Call of the Wild', 'Jack London', 'Adventure', 1990, 8.32, 'In the brutal Arctic, a dog learns the harsh laws of nature. After being kidnapped from his comfortable home, the great dog Buck is thrown into a world where the only law is the law of survival.  Working as an Alaskan sled dog, the formerly pampered pet must learn to fight, steal, and even kill in order to live.  As Buck is plunged deeper into his harsh new life, the savage nature of his wolf ancestors begins to awaken within him.  Will Buck turn his back on civilization forever and answer the call of the wild?\r\n                        '),
(9, 'Computer Networks', 'Andrew S. Tanenbaum', 'Computer', 2010, 10.99, 'For courses in computer networking or introductions to networking at both the undergraduate and graduate level in computer science, engineering, CIS, MIS, and business departments. In this revision, the author takes a structured approach to explaining how networks function.                        '),
(10, 'The Color of Magic', 'Terry Pratchett', 'Fantasy', 1983, 7.29, 'The Color of Magic is Terry Pratchett\'s maiden voyage through the now-legendary land of Discworld. This is where it all begins -- with the tourist Twoflower and his wizard guide, Rincewind.                       '),
(11, 'Around the World in Eighty Days', 'Jules Verne', 'Fiction', 1901, 8.81, 'One ill-fated evening at the Reform Club, Phileas Fogg rashly bets his companions Â£20,000 that he can travel around the entire globe in just eighty days - and he is determined not to lose. Breaking the well-establised routine of his daily life, the reserved Englishman immediately sets off for Dover, accompanied by his hot-blooded French manservant Passepartout. Travelling by train, steamship, sailing boat, sledge and even elephant, they must overcome storms, kidnappings, natural disasters, Sioux attacks and the dogged Inspector Fix of Scotland Yard - who believes that Fogg has robbed the Bank of England - to win the extraordinary wager. Around the World in Eighty Days gripped audiences on its publication and remains hugely popular, combining exploration, adventure and a thrilling race against time.\r\n                        '),
(12, 'Alice in Wonderland', 'Lewis Carroll', 'Fantasy', 2014, 6.8, 'Alice can\'t believe her eyes when a white rabbit wearing a waistcoat and carrying a pocket watch dashes by her. She chases after him, down a rabbit hole to a strange land full of exotic creatures, like the Mad Hatter and March Hare, a smiling Cheshire cat, a philosophical caterpillar, and a tempermental croquet-playing queen. Alice can hardly keep track of all the curious characters, let alone herself!                        '),
(13, 'Alanna The First Adventure', 'Tamora Pierce', 'Fantasy', 1983, 18.08, 'Daring and feisty Alanna disguises herself as a boy in order to try for knighthood. Filled with swords and sorcery, adventure and intrigue, good and evil, Alanna\'s first adventure begins - one that will lead to the fulfillment of her dreams and the magical destiny that will make her a legend in her land.\r\n                        '),
(14, '2001 A Space Odyssey', 'Arthur C. Clarke', 'Science Fiction', 1968, 18.74, 'When an enigmatic monolith is found buried on the moon, scientists are amazed to discover that it\'s at least 3 million years old. A manned spacecraft, the Discovery, is sent to investigate. Its crew is assisted by a self-aware computer, the ultra-capable HAL 9000. But HAL\'s programming is capable of guilt, neurosis, even murder, and he controls every single one of Discovery\'s components. The crew must overthrow this digital psychotic if they hope to make their rendezvous with the entities that are responsible not just for the monolith, but maybe even for human civilization.\r\n                        '),
(15, 'Insomnia', 'Stephen King', 'Horror', 1995, 23.31, 'The problem was mild to begin with, but it grew steadily worse. Six months after the first interruptions in his heretofore unremarkable sleep cycle, Ralph had reached a state of misery he could hardly credit, let alone accept. Toward the end of the summer of 1993 he began to wonder what it would be like to spend his remaining years on earth in a starey-eyed daze of wakefulness. Of course it wouldnâ€™t come to that, he told himself, it never does.\r\n                        ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
