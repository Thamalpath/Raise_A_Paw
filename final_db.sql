-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 08:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, '<p>Raise A Paw has been transforming the lives of street dogs and the communities they live in since 2017. The opportunity to reach out and make a difference with its multifaceted approach to animal welfare, is the driving force behind Raise A Paw&rsquo;s dedicated team. Focused not only on rescues or adoptions but also sterilizations, vaccinations, education and campaigning for improved policy with regard to animals islandwide, the Raise A Paw team takes the welfare of street dogs in Sri Lanka forward against the odds. Inculcating values of respect, responsibility and compassion towards all living beings, Raise A Paw&rsquo;s fundamental aim is to create a platform that inspires people to become agents of change, love and compassion.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `work` longtext NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`id`, `name`, `number`, `work`, `img`) VALUES
(2, 'David kanuel', '9928686241', ' Hii hoW r u', 'team-memb1.jpg'),
(4, 'sunil', '0982 866 1887', ' Hi Guys!', 'team-memb2.jpg'),
(5, 'suni1', '0982 866 1887', ' Hi How r u', 'team-memb3.jpg'),
(9, 'Jon', '0982 866 1887', ' Hii I M Designer', 'gmp.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_invoice`
--

CREATE TABLE `admin_invoice` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_invoice`
--

INSERT INTO `admin_invoice` (`id`, `email`, `image`, `date`) VALUES
(4, 'Invoice 3', '1360-0321537114.pdf', '2022-12-27 12:40:49'),
(9, 'Invoice 4', '5737-doc_3.pdf', '2022-12-27 12:56:04'),
(10, 'Invoice 5', '9552-doc_2.pdf', '2022-12-27 12:56:20'),
(11, 'chamudi@gmail.com', '4682-doc_2.pdf', '2022-12-27 23:06:20'),
(12, 'chamudi@gmail.com', '7276-cv.pdf', '2022-12-28 13:44:40'),
(13, 'chamudi@gmail.com', '9642-cv.pdf', '2022-12-28 13:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `title`, `image`, `content`) VALUES
(2, 'IVY', 'adoption1.webp', '<p>Rescued as a little pup in 2018, she met with an accident which caused her permanent paralysis. The little girl was a fighter and was not one to give up just yet. Ivy has now grown to be a beautiful dog and enjoys her days with the other special needs pooches</p>\r\n'),
(3, 'WINDY', 'adoption4.jpg', '<p>Windy was rescued from Wijerama. He was paralyzed after been hit by a vehicle. He now lives at the dog care sanctuary where he is receiving physiotherapy and daily treatments that he requires. To sponsor Windy&rsquo;s monthly expenses, he requires $150 dollars a month for his medical and food bills.</p>\r\n'),
(4, 'DAFFY', 'adoption3.jpg', '<p>Daffy is a little brown beauty of around 8 months and a beholder of sweetest puppy eyes. Like her namesake, the famous &ldquo;Daffy Duck&rdquo;, our own little Daffy too loves to talk. She is a very gentle pup and loves to make friends. When Daffy came to us, she had fractures on both forelegs and open wounds, which had caused irreversible damage to the bones. Since then she has gone through medical treatments and she is on the path to recovery. She still has a long way to go and will receive further treatments at the Dog Care clinic.</p>\r\n'),
(5, 'ROLLOF', 'adoption2.jpg', '<p>Rescued from Ratmalana in February 2020, Rollof is a beautiful dog who unfortunately suffered a traumatic spinal injury. Rollof has the sweetest temperament and loves being with people. He is currently spending his days at Dog Care Clinic, our partner clinic where many paralyzed dogs we rescue are cared for.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `post`, `image`, `content`, `date`) VALUES
(6, 'Should I worry that my dog has coronavirus?', 'By Admin', 'blog2.png', '<p>The simple answer is: no. It&rsquo;s understandable that many of us are feeling concerned about the possibility of contracting coronavirus, but to turn our attention towards dogs would be entirely misguided Last month, heart-breaking images of pet dogs and cats emerged from China&rsquo;s Hubei Province - their eyes glazed over, their bodies lying lifeless on the pavements, some surrounded by a pool of their own blood. The fear of catching the virus had terrified their owners. Believing their pets could be carriers, some owners threw their pets from the windows of high-rise tower blocks. People&rsquo;s fears were leading to the cruel and unnecessary loss of life. Thankfully, this doesn&rsquo;t appear to be the common response, and most people realise this is completely unnecessary reaction to the coronavirus rumour mill.</p>\r\n', 'Fri 30th Dec 2022'),
(5, 'Trapped in war - captive animals suffer too. They belong in the wild', 'By Admin', 'blog4.jpg', '<p>Zoo animals are trapped by design. They are either taken or bred in an environment that&rsquo;s not their natural habitat, and forced into enclosures so that they can&rsquo;t escape, for the benefit of paying visitors. This leads to tragedy when their enclosures are no longer in a safe place and the income dries up as we have seen in in Ukraine.The war in Ukraine is heart-breaking - countless innocent lives are being lost every day, and 4.3 million[1] people have fled the country. We are devastated by the humanitarian tragedy unfolding, and are deeply disturbed by the immense suffering this is causing for animals.<br />\r\nAnimals are often the forgotten victims of conflicts and wars. In particular, zoo animals in Ukraine have found themselves trapped in the middle of a terrifying conflict through no fault of their own. This has led to the prospect of some zoos stating that they will have to euthanise many of their animals[2], which has led to a despairing outcry, and rightly so.</p>\r\n', 'Fri 30th Dec 2022'),
(7, 'Mexico just proved that vaccinating dogs is how you end rabies', 'By Admin', 'blog3.jpg', '<p>Our work vaccinating dogs with the Mexican government was instrumental in ending human rabies in the country. Learn why this approach is the best way to protect people and dogs In September 2019 Mexico became the first country to be validated by the World Health Organisation (WHO) for eliminating rabies in humans that has been transmitted by dogs.<br />\r\nThis important achievement in Mexico is the result of national and government cooperation and recognition of the &lsquo;one-health approach&rsquo;. This means that human and animal health are intrinsically linked, and in the case of rabies, it is not possible to protect people without protecting dogs first and foremost. Approximately 10 million dogs are cruelly culled every year because of fear of rabies. Dog culling is incorrectly viewed as a quick fix by governments, but often it makes matters worse.<br />\r\nThe poorest people in the poorest communities around the world continue to fall victim to rabies even though the solutions, vaccination and humane dog population control, are readily available and proven.</p>\r\n', 'Fri 30th Dec 2022');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `post_id` int(30) NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `date_created`) VALUES
(9, 2, 11, 'ok', '2022-12-06 15:34:27'),
(10, 2, 11, 'good', '2022-12-08 09:43:44'),
(11, 7, 11, 'gn bs', '2022-12-14 13:46:25'),
(12, 8, 11, 'hiii', '2022-12-21 18:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `amount` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `email`, `phone`, `amount`, `date`) VALUES
(1, 'Thamal', 'thamalpathsathimantha3@gmail.com', '0704290144', '1000', '2022-12-29 11:10:43'),
(3, 'Pavan', 'pavan@gmail.com', '07011112222', '2000', '2022-12-29 23:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `msg`, `cdate`) VALUES
(6, 'manvendar', 'manvendra@gmail.com', '9649990607', 'acha hai', '2021-04-28'),
(7, 'Ajay', 'ajay@gmail.com', '9928686242', 'hii how r u', '2021-04-28'),
(8, 'Atiq', 'admin@gmail.com', '3434545656', 'hii', '2021-04-29'),
(9, 'Bhagyashree', 'info@startsolution.in', '9521234291', 'hoi', '2021-04-29'),
(10, 'Demo NAme', 'otpphp5@gmail.com', '992923233', 'hii', '2021-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`id`, `title`, `image`, `date`) VALUES
(33, 'Invoice 4', '2781-doc_3.pdf', '2022-12-25 19:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `img`) VALUES
(23, 'gallery6.jpg'),
(17, 'gallery2.jpg'),
(24, 'gallery7.jpg'),
(22, 'gallery5.jpg'),
(16, 'gallery1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `insideblog`
--

CREATE TABLE `insideblog` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insideblog`
--

INSERT INTO `insideblog` (`id`, `content`) VALUES
(4, '<p>jbj</p>\r\n'),
(4, '<p>jbj</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `SID` int(11) NOT NULL,
  `INVOICE_NO` int(11) NOT NULL,
  `INVOICE_DATE` date NOT NULL,
  `CNAME` varchar(50) NOT NULL,
  `CADDRESS` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `acc` int(100) NOT NULL,
  `acc_name` varchar(100) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `GRAND_TOTAL` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`SID`, `INVOICE_NO`, `INVOICE_DATE`, `CNAME`, `CADDRESS`, `Email`, `Phone`, `acc`, `acc_name`, `bank`, `branch`, `GRAND_TOTAL`) VALUES
(48, 1, '2022-12-24', 'Chamudi', 'Meepe', 'Chamu@gmail.com', 1111111, 2147483647, 'Chamu', 'HND', 'Meepe', 2000.00),
(49, 2, '2022-12-25', 'dsvdssdvsdv', 'dvdsvsd', 'vsvdsv@gmail.com', 2147483647, 2147483647, 'dfffdbfddff', 'fdfbfdfbfd', 'fbfdbfdbfdf', 51515.00),
(50, 0, '2022-12-25', 'bkkfdbdb', 'bdfbdbdfb', 'fbdbdf@gmail.com', 2147483647, 2147483647, 'ngnfgngn', 'bdfbfdbdfb', 'nfgnfngf', 54674.00),
(51, 0, '2022-12-25', 'bkkfdbdb', 'bdfbdbdfb', 'fbdbdf@gmail.com', 2147483647, 2147483647, 'ngnfgngn', 'bdfbfdbdfb', 'nfgnfngf', 54674.00),
(52, 0, '2022-12-25', 'bkkfdbdb', 'bdfbdbdfb', 'fbdbdf@gmail.com', 2147483647, 2147483647, 'ngnfgngn', 'bdfbfdbdfb', 'nfgnfngf', 54674.00),
(53, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(54, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(55, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(56, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(57, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(58, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(59, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(60, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(61, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(62, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(63, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(64, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(65, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(66, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(67, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(68, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(69, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(70, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(71, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(72, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(73, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(74, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(75, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(76, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(77, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(78, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(79, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(80, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(81, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(82, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(83, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(84, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(85, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(86, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(87, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(88, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(89, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(90, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(91, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(92, 15, '2022-12-25', 'fdbfdbdb', 'dfbdbfdb', 'fbdbfdb', 120010230, 652062, 'bfbfdbfb', 'bfdbdfb', 'bfbddfbdf', 6102.00),
(93, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(94, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(95, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(96, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(97, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(98, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(99, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(100, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(101, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(102, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(103, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(104, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(105, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(106, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(107, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(108, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(109, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(110, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(111, 0, '2022-12-13', 'fbbfb', 'fbfbfbd', 'fbfbdfbfdb', 0, 0, 'fdbfbfdbdfb', 'fbfdbfdb', 'fbfdbdb', 16666.00),
(112, 5, '2022-12-25', 'vsdvdsvd', 'vsdvvsdvdsv', 'dvdsvdsvdvsd', 0, 0, 'vdvdsvdv', 'vdvdsvds', 'dsvdvds', 10000.00),
(113, 5, '2022-12-25', 'vsdvdsvd', 'vsdvvsdvdsv', 'dvdsvdsvdvsd', 0, 0, 'vdvdsvdv', 'vdvdsvds', 'dsvdvds', 10000.00),
(114, 5, '2022-12-25', 'vsdvdsvd', 'vsdvvsdvdsv', 'dvdsvdsvdvsd', 0, 0, 'vdvdsvdv', 'vdvdsvds', 'dsvdvds', 10000.00),
(115, 65, '2022-12-25', 'vdvsvd', 'vsdvdsv', 'dvsdvdsv', 0, 0, 'vdsvds', 'dvsdvd', 'vdsvsv', 51115.00),
(116, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(117, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(118, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(119, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(120, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(121, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(122, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(123, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(124, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(125, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(126, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(127, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(128, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(129, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(130, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(131, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(132, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(133, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(134, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(135, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(136, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(137, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(138, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(139, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(140, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(141, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(142, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(143, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(144, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(145, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(146, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(147, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(148, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(149, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(150, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(151, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(152, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(153, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(154, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(155, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(156, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(157, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(158, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(159, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(160, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(161, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(162, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(163, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(164, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(165, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(166, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(167, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(168, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(169, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(170, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(171, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(172, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(173, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(174, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(175, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(176, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(177, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(178, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(179, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(180, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(181, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00),
(182, 3, '2022-12-25', 'vsdvvs', 'dvsdvdv', 'dvdsvd', 0, 0, 'vdvdsvsv', 'dvsdvd', 'dvsvdsv', 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_products`
--

CREATE TABLE `invoice_products` (
  `ID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `PNAME` varchar(100) NOT NULL,
  `PRICE` double(10,2) NOT NULL,
  `TOTAL` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_products`
--

INSERT INTO `invoice_products` (`ID`, `SID`, `PNAME`, `PRICE`, `TOTAL`) VALUES
(47, 48, 'Treat 1', 2000.00, 2000.00),
(48, 49, 'fdbdbdfb', 51515.00, 51515.00),
(49, 50, 'fbdbfdbfdf', 10220.00, 10220.00),
(50, 50, 'fbdfbdbdf', 44454.00, 44454.00),
(51, 51, 'fbdbfdbfdf', 10220.00, 10220.00),
(52, 51, 'fbdfbdbdf', 44454.00, 44454.00),
(53, 52, 'fbdbfdbfdf', 10220.00, 10220.00),
(54, 52, 'fbdfbdbdf', 44454.00, 44454.00),
(55, 53, 'fbfbdfb', 5100.00, 5100.00),
(56, 53, 'fbdbfdbd', 1002.00, 1002.00),
(57, 54, 'fbfbdfb', 5100.00, 5100.00),
(58, 54, 'fbdbfdbd', 1002.00, 1002.00),
(59, 55, 'fbfbdfb', 5100.00, 5100.00),
(60, 55, 'fbdbfdbd', 1002.00, 1002.00),
(61, 56, 'fbfbdfb', 5100.00, 5100.00),
(62, 56, 'fbdbfdbd', 1002.00, 1002.00),
(63, 57, 'fbfbdfb', 5100.00, 5100.00),
(64, 57, 'fbdbfdbd', 1002.00, 1002.00),
(65, 58, 'fbfbdfb', 5100.00, 5100.00),
(66, 58, 'fbdbfdbd', 1002.00, 1002.00),
(67, 59, 'fbfbdfb', 5100.00, 5100.00),
(68, 59, 'fbdbfdbd', 1002.00, 1002.00),
(69, 60, 'fbfbdfb', 5100.00, 5100.00),
(70, 60, 'fbdbfdbd', 1002.00, 1002.00),
(71, 61, 'fbfbdfb', 5100.00, 5100.00),
(72, 61, 'fbdbfdbd', 1002.00, 1002.00),
(73, 62, 'fbfbdfb', 5100.00, 5100.00),
(74, 62, 'fbdbfdbd', 1002.00, 1002.00),
(75, 63, 'fbfbdfb', 5100.00, 5100.00),
(76, 63, 'fbdbfdbd', 1002.00, 1002.00),
(77, 64, 'fbfbdfb', 5100.00, 5100.00),
(78, 64, 'fbdbfdbd', 1002.00, 1002.00),
(79, 65, 'fbfbdfb', 5100.00, 5100.00),
(80, 65, 'fbdbfdbd', 1002.00, 1002.00),
(81, 66, 'fbfbdfb', 5100.00, 5100.00),
(82, 66, 'fbdbfdbd', 1002.00, 1002.00),
(83, 67, 'fbfbdfb', 5100.00, 5100.00),
(84, 67, 'fbdbfdbd', 1002.00, 1002.00),
(85, 68, 'fbfbdfb', 5100.00, 5100.00),
(86, 68, 'fbdbfdbd', 1002.00, 1002.00),
(87, 69, 'fbfbdfb', 5100.00, 5100.00),
(88, 69, 'fbdbfdbd', 1002.00, 1002.00),
(89, 70, 'fbfbdfb', 5100.00, 5100.00),
(90, 70, 'fbdbfdbd', 1002.00, 1002.00),
(91, 71, 'fbfbdfb', 5100.00, 5100.00),
(92, 71, 'fbdbfdbd', 1002.00, 1002.00),
(93, 72, 'fbfbdfb', 5100.00, 5100.00),
(94, 72, 'fbdbfdbd', 1002.00, 1002.00),
(95, 73, 'fbfbdfb', 5100.00, 5100.00),
(96, 73, 'fbdbfdbd', 1002.00, 1002.00),
(97, 74, 'fbfbdfb', 5100.00, 5100.00),
(98, 74, 'fbdbfdbd', 1002.00, 1002.00),
(99, 75, 'fbfbdfb', 5100.00, 5100.00),
(100, 75, 'fbdbfdbd', 1002.00, 1002.00),
(101, 76, 'fbfbdfb', 5100.00, 5100.00),
(102, 76, 'fbdbfdbd', 1002.00, 1002.00),
(103, 77, 'fbfbdfb', 5100.00, 5100.00),
(104, 77, 'fbdbfdbd', 1002.00, 1002.00),
(105, 78, 'fbfbdfb', 5100.00, 5100.00),
(106, 78, 'fbdbfdbd', 1002.00, 1002.00),
(107, 79, 'fbfbdfb', 5100.00, 5100.00),
(108, 79, 'fbdbfdbd', 1002.00, 1002.00),
(109, 80, 'fbfbdfb', 5100.00, 5100.00),
(110, 80, 'fbdbfdbd', 1002.00, 1002.00),
(111, 81, 'fbfbdfb', 5100.00, 5100.00),
(112, 81, 'fbdbfdbd', 1002.00, 1002.00),
(113, 82, 'fbfbdfb', 5100.00, 5100.00),
(114, 82, 'fbdbfdbd', 1002.00, 1002.00),
(115, 83, 'fbfbdfb', 5100.00, 5100.00),
(116, 83, 'fbdbfdbd', 1002.00, 1002.00),
(117, 84, 'fbfbdfb', 5100.00, 5100.00),
(118, 84, 'fbdbfdbd', 1002.00, 1002.00),
(119, 85, 'fbfbdfb', 5100.00, 5100.00),
(120, 85, 'fbdbfdbd', 1002.00, 1002.00),
(121, 86, 'fbfbdfb', 5100.00, 5100.00),
(122, 86, 'fbdbfdbd', 1002.00, 1002.00),
(123, 87, 'fbfbdfb', 5100.00, 5100.00),
(124, 87, 'fbdbfdbd', 1002.00, 1002.00),
(125, 88, 'fbfbdfb', 5100.00, 5100.00),
(126, 88, 'fbdbfdbd', 1002.00, 1002.00),
(127, 89, 'fbfbdfb', 5100.00, 5100.00),
(128, 89, 'fbdbfdbd', 1002.00, 1002.00),
(129, 90, 'fbfbdfb', 5100.00, 5100.00),
(130, 90, 'fbdbfdbd', 1002.00, 1002.00),
(131, 91, 'fbfbdfb', 5100.00, 5100.00),
(132, 91, 'fbdbfdbd', 1002.00, 1002.00),
(133, 92, 'fbfbdfb', 5100.00, 5100.00),
(134, 92, 'fbdbfdbd', 1002.00, 1002.00),
(135, 93, 'fdbdb', 15515.00, 15515.00),
(136, 93, 'dfddbfd', 1151.00, 1151.00),
(137, 94, 'fdbdb', 15515.00, 15515.00),
(138, 94, 'dfddbfd', 1151.00, 1151.00),
(139, 95, 'fdbdb', 15515.00, 15515.00),
(140, 95, 'dfddbfd', 1151.00, 1151.00),
(141, 96, 'fdbdb', 15515.00, 15515.00),
(142, 96, 'dfddbfd', 1151.00, 1151.00),
(143, 97, 'fdbdb', 15515.00, 15515.00),
(144, 97, 'dfddbfd', 1151.00, 1151.00),
(145, 98, 'fdbdb', 15515.00, 15515.00),
(146, 98, 'dfddbfd', 1151.00, 1151.00),
(147, 99, 'fdbdb', 15515.00, 15515.00),
(148, 99, 'dfddbfd', 1151.00, 1151.00),
(149, 100, 'fdbdb', 15515.00, 15515.00),
(150, 100, 'dfddbfd', 1151.00, 1151.00),
(151, 101, 'fdbdb', 15515.00, 15515.00),
(152, 101, 'dfddbfd', 1151.00, 1151.00),
(153, 102, 'fdbdb', 15515.00, 15515.00),
(154, 102, 'dfddbfd', 1151.00, 1151.00),
(155, 103, 'fdbdb', 15515.00, 15515.00),
(156, 103, 'dfddbfd', 1151.00, 1151.00),
(157, 104, 'fdbdb', 15515.00, 15515.00),
(158, 104, 'dfddbfd', 1151.00, 1151.00),
(159, 105, 'fdbdb', 15515.00, 15515.00),
(160, 105, 'dfddbfd', 1151.00, 1151.00),
(161, 106, 'fdbdb', 15515.00, 15515.00),
(162, 106, 'dfddbfd', 1151.00, 1151.00),
(163, 107, 'fdbdb', 15515.00, 15515.00),
(164, 107, 'dfddbfd', 1151.00, 1151.00),
(165, 108, 'fdbdb', 15515.00, 15515.00),
(166, 108, 'dfddbfd', 1151.00, 1151.00),
(167, 109, 'fdbdb', 15515.00, 15515.00),
(168, 109, 'dfddbfd', 1151.00, 1151.00),
(169, 110, 'fdbdb', 15515.00, 15515.00),
(170, 110, 'dfddbfd', 1151.00, 1151.00),
(171, 111, 'fdbdb', 15515.00, 15515.00),
(172, 111, 'dfddbfd', 1151.00, 1151.00),
(173, 112, 'dfbdb', 10000.00, 10000.00),
(174, 113, 'dfbdb', 10000.00, 10000.00),
(175, 114, 'dfbdb', 10000.00, 10000.00),
(176, 115, 'dvsvsdvd', 51115.00, 51115.00),
(177, 116, 'vdsvsd', 2000.00, 2000.00),
(178, 117, 'vdsvsd', 2000.00, 2000.00),
(179, 118, 'vdsvsd', 2000.00, 2000.00),
(180, 119, 'vdsvsd', 2000.00, 2000.00),
(181, 120, 'vdsvsd', 2000.00, 2000.00),
(182, 121, 'vdsvsd', 2000.00, 2000.00),
(183, 122, 'vdsvsd', 2000.00, 2000.00),
(184, 123, 'vdsvsd', 2000.00, 2000.00),
(185, 124, 'vdsvsd', 2000.00, 2000.00),
(186, 125, 'vdsvsd', 2000.00, 2000.00),
(187, 126, 'vdsvsd', 2000.00, 2000.00),
(188, 127, 'vdsvsd', 2000.00, 2000.00),
(189, 128, 'vdsvsd', 2000.00, 2000.00),
(190, 129, 'vdsvsd', 2000.00, 2000.00),
(191, 130, 'vdsvsd', 2000.00, 2000.00),
(192, 131, 'vdsvsd', 2000.00, 2000.00),
(193, 132, 'vdsvsd', 2000.00, 2000.00),
(194, 133, 'vdsvsd', 2000.00, 2000.00),
(195, 134, 'vdsvsd', 2000.00, 2000.00),
(196, 135, 'vdsvsd', 2000.00, 2000.00),
(197, 136, 'vdsvsd', 2000.00, 2000.00),
(198, 137, 'vdsvsd', 2000.00, 2000.00),
(199, 138, 'vdsvsd', 2000.00, 2000.00),
(200, 139, 'vdsvsd', 2000.00, 2000.00),
(201, 140, 'vdsvsd', 2000.00, 2000.00),
(202, 141, 'vdsvsd', 2000.00, 2000.00),
(203, 142, 'vdsvsd', 2000.00, 2000.00),
(204, 143, 'vdsvsd', 2000.00, 2000.00),
(205, 144, 'vdsvsd', 2000.00, 2000.00),
(206, 145, 'vdsvsd', 2000.00, 2000.00),
(207, 146, 'vdsvsd', 2000.00, 2000.00),
(208, 147, 'vdsvsd', 2000.00, 2000.00),
(209, 148, 'vdsvsd', 2000.00, 2000.00),
(210, 149, 'vdsvsd', 2000.00, 2000.00),
(211, 150, 'vdsvsd', 2000.00, 2000.00),
(212, 151, 'vdsvsd', 2000.00, 2000.00),
(213, 152, 'vdsvsd', 2000.00, 2000.00),
(214, 153, 'vdsvsd', 2000.00, 2000.00),
(215, 154, 'vdsvsd', 2000.00, 2000.00),
(216, 155, 'vdsvsd', 2000.00, 2000.00),
(217, 156, 'vdsvsd', 2000.00, 2000.00),
(218, 157, 'vdsvsd', 2000.00, 2000.00),
(219, 158, 'vdsvsd', 2000.00, 2000.00),
(220, 159, 'vdsvsd', 2000.00, 2000.00),
(221, 160, 'vdsvsd', 2000.00, 2000.00),
(222, 161, 'vdsvsd', 2000.00, 2000.00),
(223, 162, 'vdsvsd', 2000.00, 2000.00),
(224, 163, 'vdsvsd', 2000.00, 2000.00),
(225, 164, 'vdsvsd', 2000.00, 2000.00),
(226, 165, 'vdsvsd', 2000.00, 2000.00),
(227, 166, 'vdsvsd', 2000.00, 2000.00),
(228, 167, 'vdsvsd', 2000.00, 2000.00),
(229, 168, 'vdsvsd', 2000.00, 2000.00),
(230, 169, 'vdsvsd', 2000.00, 2000.00),
(231, 170, 'vdsvsd', 2000.00, 2000.00),
(232, 171, 'vdsvsd', 2000.00, 2000.00),
(233, 172, 'vdsvsd', 2000.00, 2000.00),
(234, 173, 'vdsvsd', 2000.00, 2000.00),
(235, 174, 'vdsvsd', 2000.00, 2000.00),
(236, 175, 'vdsvsd', 2000.00, 2000.00),
(237, 176, 'vdsvsd', 2000.00, 2000.00),
(238, 177, 'vdsvsd', 2000.00, 2000.00),
(239, 178, 'vdsvsd', 2000.00, 2000.00),
(240, 179, 'vdsvsd', 2000.00, 2000.00),
(241, 180, 'vdsvsd', 2000.00, 2000.00),
(242, 181, 'vdsvsd', 2000.00, 2000.00),
(243, 182, 'vdsvsd', 2000.00, 2000.00);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `post_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `date_created`) VALUES
(25, 2, 11, '2022-12-12 10:36:51'),
(40, 8, 13, '2022-12-24 22:36:44'),
(42, 9, 11, '2022-12-28 00:26:46'),
(58, 8, 14, '2022-12-28 23:35:23'),
(59, 8, 12, '2022-12-28 23:35:27'),
(71, 5, 12, '2022-12-29 01:17:56'),
(72, 8, 11, '2022-12-29 01:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `nextblog`
--

CREATE TABLE `nextblog` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pragraph` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nextblog`
--

INSERT INTO `nextblog` (`user_id`, `id`, `pragraph`) VALUES
(1, 3, '<p>hii</p>\r\n'),
(2, 5, '<p>Women empowerment is a serious issue and needs a holistic approach so that rather than focusing on one problem we focus on wide range of issues associated with the sameWomen empowerment is a serious issue and needs a holistic approach so that rather than focusing on one problem we focus on wide range of issues associated with the sameWomen empowerment is a serious issue and needs a holistic approach so that rather than focusing on one problem we focus on wide range of issues associated with the same</p>\r\n'),
(3, 4, '<p>Education is the social institution through which social provides its members with important knowledge such as culture norm values, job skills and basic facts. It plays a fundamental role in the construction of a good societyEducation is the social institution through which social provides its members with important knowledge such as culture norm values, job skills and basic facts. It plays a fundamental role in the construction of a good societyEducation is the social institution through which social provides its members with important knowledge such as culture norm values, job skills and basic facts. It plays a fundamental role in the construction of a good society</p>\r\n'),
(4, 3, '<p>One of the effective ways that can protect you from the prevailing diseases and problems is personal hygiene. It basically refers to the set of practices perceived by a community to be associated with the preservation of health and healthy living.One of the effective ways that can protect you from the prevailing diseases and problems is personal hygiene. It basically refers to the set of practices perceived by a community to be associated with the preservation of health and healthy living.One of the effective ways that can protect you from the prevailing diseases and problems is personal hygiene. It basically refers to the set of practices perceived by a community to be associated with the preservation of health and healthy living.</p>\r\n'),
(5, 3, '<p>sunil</p>\r\n'),
(6, 4, '<p>suil1</p>\r\n'),
(7, 5, '<p>sunil3</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ourwork`
--

CREATE TABLE `ourwork` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourwork`
--

INSERT INTO `ourwork` (`id`, `content`) VALUES
(1, '<h2><strong><big>Fostering &amp; Rehoming</big></strong></h2>\r\n\r\n<h3><small>Puppies that are rescued from the streets are cared for by their rescuers until they are old enough for adoption. This &lsquo;foster system&rsquo; allows the pups to enjoy a temporary loving home, while Raise a paw covers all medical expenses, which most commonly include vaccinations, sterilizations and de-worming. Prior to adoption, Embark arranges for each dog to be vaccinated and if female, also sterilized. Raise a paw also advises that male puppies be neutered when they reach the appropriate age and weight required for surgery as this helps both with population management and behavioral issues.</small></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><big>Education &amp; Awareness</big></strong></h2>\r\n\r\n<h3><small>Raise a paw&rsquo;s main education programs are conducted alongside large-scale CNVR campaigns that create awareness amongst school children in the selected program areas. The programs include information on how to safely interact with and approach street dogs, methods people can use to keep both themselves and their pets safe from rabies, how to be a responsible pet guardian and information on basic animal care and medical requirements.</small></h3>\r\n\r\n<h3><small>Raise a paw also conducts awareness campaigns to keep the public informed of animal welfare issues, to promote kindness, compassion and end cruelty towards animals. Whilst this is done through using traditional mediums, the growth of social media has allowed us to expand our reach and take our message to multitudes of people across the world.</small></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><big>Rescue &amp; Treatment</big></strong></h2>\r\n\r\n<h3><small>The Raise a paw rescue and treatment program for street dogs has grown to become one of the most significant components of our work. We offer high standards of Veterinary care for homeless dogs at no charge, which is a much needed service in Sri Lanka considering the large numbers.</small></h3>\r\n\r\n<h3><small>As our work expanded, the numbers of rescue and treatment requests have also increased exponentially with a monthly estimate of over 1000 calls to the hotline. Each request is assessed by our team and addressed by our veterinarians either in-house, onsite or through hospitalization for more critical cases. Assessments are dependent on several factors; the most important being the consideration of both the physical and mental wellbeing, veterinary advise and the long term welfare of the dog.</small></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><big>Sterilization &amp; Vaccination</big></strong></h2>\r\n\r\n<h3><small>Raise a paw believes in making Sri Lanka free of rabies by conducting vaccination and population control programs. We have successfully completed mass sterilization and vaccination programs in Jaffna, Sigiriya and Colombo during the past years. Vaccinating at least 70 -80% of the dog population in a selected area create a barrier which effectively controls the spread of rabies, while sterilization helps manage the population resulting control of the spread of disease. Day programs have been and are conducted at present in Hospitals, Hotels, Universities, communities and other government and private organisations where caring citizens have sought Embark&rsquo;s support to provide a sustainable and humane solution to the problem of over-population.</small></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>&nbsp;</h1>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `content` text NOT NULL,
  `type` int(11) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `accept` varchar(100) NOT NULL,
  `status` tinyint(10) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `type`, `location`, `accept`, `status`, `date_created`) VALUES
(11, 5, 'save me', 0, '', '8', 1, '2022-12-06 15:28:31'),
(12, 9, '#Save Dogs', 0, '', '5', 1, '2022-12-22 18:51:19'),
(14, 9, '#Stray Dogs', 0, '', '8', 1, '2022-12-28 13:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `social1` varchar(255) NOT NULL,
  `social2` varchar(255) NOT NULL,
  `social3` varchar(255) NOT NULL,
  `social4` varchar(255) NOT NULL,
  `sociallink1` longtext NOT NULL,
  `sociallink2` longtext NOT NULL,
  `sociallink3` longtext NOT NULL,
  `sociallink4` longtext NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `website` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `social1`, `social2`, `social3`, `social4`, `sociallink1`, `sociallink2`, `sociallink3`, `sociallink4`, `gmail`, `number`, `address`, `website`, `companyname`, `logo`) VALUES
(1, '          fab fa-facebook-square', 'fab fa-instagram', 'fab fa-twitter', 'fab fa-linkedin', 'https://facebook.com/', 'https://instagram.com/', 'https://twiter.com/', 'https://instagram.com/', 'raiseapaw@gmail.com', '0701112222', 'No.73,jawatta road, colombo 00500.', 'www.raiseapaw.com', 'Raise A Paw', 'Artboard 1@4x.png');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `sl` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `img`, `sl`) VALUES
(46, '46.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usr`
--

CREATE TABLE `tbl_usr` (
  `id` int(11) NOT NULL,
  `un` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usr`
--

INSERT INTO `tbl_usr` (`id`, `un`, `pw`) VALUES
(1, 'admin', 'admin@#123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `bio` text NOT NULL,
  `profile_pic` text NOT NULL,
  `cover_pic` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `contact`, `address`, `email`, `password`, `dob`, `role`, `status`, `bio`, `profile_pic`, `cover_pic`, `date_created`) VALUES
(5, 'pabasara', 'methsan', 'Male', '0713368452', 'hanwella', 'sathsaraedirisinge@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-01-01', 'doctor', 1, 'cricketer', '1670320620_men1.jpg', '', '2022-12-06 15:26:05'),
(8, 'chamudi', 'dewenika ', 'Female', '0714354168', 'godagama', 'chamudi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-01-01', 'doctor', 1, 'programmer', '1671620100_Background.jpg', '1671620100_3.jpg', '2022-12-21 16:23:46'),
(9, 'Thamalpath', 'Sathimantha', 'Male', '0704290144', '70/2 Railway Avenue,\r\nNawinna,\r\nMaharagama', 'thamalpathsathimantha3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2001-10-16', 'member', 1, 'Programmer', '1671707880_IMG-20220305-WA0187.jpg', '1671707880_photo_2021-11-03_21-23-56.jpg', '2022-12-22 16:47:12'),
(13, 'Peshan', 'Yasas', 'Male', '0111111111', 'Canada', 'peshan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2003-07-19', 'member', 1, 'Apex Legend MF', '1671901440_2.jpg', '1671901440_3.jpg', '2022-12-24 22:33:36'),
(15, 'Himansu', 'Sunkalya', 'Male', '0712223333', 'Rathnapura', 'himansu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2000-04-01', 'doctor', 1, 'Lazy Person', '1672425000_adoption1.webp', '1672425000_slider1.jpg', '2022-12-30 23:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `whatwe`
--

CREATE TABLE `whatwe` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatwe`
--

INSERT INTO `whatwe` (`id`, `title`, `image`, `content`) VALUES
(23, 'CAMPAIGNS FOR ANIMAL WELFARE', 'campaign.jpg', '<p>Championing fair rental policies for owners and their pets, emailing your local MP about animal welfare legislation, and sharing our campaigns on social media are just some of the ways you can support our work.</p>\r\n'),
(21, 'FINDING NEW HOMES FOR DOGS', 'dog_care_2.jpg', '<p>We give every animal personalised care and spend lots of time getting to know them so we can make sure we find the best new home or working role for them.</p>\r\n'),
(20, 'REHABILITATING DOGS IN NEED', 'adopt2.webp', '<p>Expert care is at the very heart of Raise A Paw. Learn more about how we do our best for dogs and cats, every day, with the resources we have.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addmember`
--
ALTER TABLE `addmember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_invoice`
--
ALTER TABLE `admin_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `invoice_products`
--
ALTER TABLE `invoice_products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nextblog`
--
ALTER TABLE `nextblog`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ourwork`
--
ALTER TABLE `ourwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usr`
--
ALTER TABLE `tbl_usr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatwe`
--
ALTER TABLE `whatwe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addmember`
--
ALTER TABLE `addmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_invoice`
--
ALTER TABLE `admin_invoice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fileup`
--
ALTER TABLE `fileup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `invoice_products`
--
ALTER TABLE `invoice_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `ourwork`
--
ALTER TABLE `ourwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_usr`
--
ALTER TABLE `tbl_usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `whatwe`
--
ALTER TABLE `whatwe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
