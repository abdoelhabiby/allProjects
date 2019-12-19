-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2019 at 09:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_lynda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `username`, `email`, `password_hash`) VALUES
(1, 'ahmed', 'mohamed', 'cypher', 'ahmed.mohamed@gmail.com', '$2y$10$9KkD2nvVbgnQZ.oKrj1.O.ykPtSduUP/b6dDsdBXFic4skgm2jatK'),
(2, 'mohamed', 'ahmed', 'ahmed', 'ahmed.mohamed@gmail.com', '$2y$10$fbJacbpjgf3cNYndU7/dBuLQdE6qOBv210e.DeK1KM3RR3EOKgy2G');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `subject_id`, `page_name`, `position`, `visible`, `content`) VALUES
(1, 1, 'globe bank', 1, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/about us_96582054.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>About Globe Bank</h1>\r\n  <p>Our mission at Globe Bank International is simple: To serve every coordinate in every hemisphere as if it were our own. From the beginning, it\'s been our goal to incorporate world-class services with an unmatched level of responsiveness and thoughtfulness, no matter what your level of banking need. </p>\r\n\r\n  <p>Globe Bank International (NYSE: GBI), founded in 1950, is one of the newer financial institutions widely active in the world financial market. Despite our youth, we have a history solidly built on hard work, common-sense business practices, empowering investments, and an unyielding dedication to excellence.</p>\r\n\r\n  <p>We currently operate in 42 countries and have nearly 130,000 employees. Our client base is in the millions, from individuals to worldwide conglomerates, and our assets total approximately $1.8 trillion. Learn more about our services and our history, and let us know how we can work together to help you.</p>\r\n\r\n</div>'),
(2, 1, 'HISTROY', 2, 0, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/leadership_469723021.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Leadership</h1>\r\n\r\n  <h2>Board of Directors</h2>\r\n  <ul>\r\n    <li>Robert Otis Bott, President</li>\r\n    <li>Sarah M. Bott</li>\r\n    <li>Alisha Bryan</li>\r\n    <li>Henry Terry</li>\r\n    <li>Meredith Jewel Coffey</li>\r\n    <li>Jesse Gould</li>\r\n    <li>Lea Sheryl Rodriquez</li>\r\n    <li>Joseph Riley</li>\r\n    <li>Martin Stephens</li>\r\n    <li>Jimmie Frank</li>\r\n  </ul>\r\n\r\n  <h2>Executive Team</h2>\r\n  <ul>\r\n    <li>Gerald Bott,&nbsp;Chairman and Chief Executive Officer</li>\r\n    <li>Stewart Talley, Chief Risk Officer</li>\r\n    <li>Judson Phillips, General Counsel</li>\r\n    <li>Naomi Ballard, VP Human Resources</li>\r\n    <li>Dominique Stein, Asset Management CEO </li>\r\n    <li>Cantby Bott, Chief Financial Officer</li>\r\n    <li>Frederic Owen, Commercial Banking CEO</li>\r\n    <li>Freeman McConnell, Corporate & Investment Bank CEO</li>\r\n    <li>Saul Hunt, Consumer & Community Banking CEO</li>\r\n    <li>Cheri Karla Mann, Chief Operating Officer</li>\r\n  </ul>\r\n\r\n</div>'),
(3, 1, 'leadership', 3, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/leadership_469723021.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Leadership</h1>\r\n\r\n  <h2>Board of Directors</h2>\r\n  <ul>\r\n    <li>Robert Otis Bott, President</li>\r\n    <li>Sarah M. Bott</li>\r\n    <li>Alisha Bryan</li>\r\n    <li>Henry Terry</li>\r\n    <li>Meredith Jewel Coffey</li>\r\n    <li>Jesse Gould</li>\r\n    <li>Lea Sheryl Rodriquez</li>\r\n    <li>Joseph Riley</li>\r\n    <li>Martin Stephens</li>\r\n    <li>Jimmie Frank</li>\r\n  </ul>\r\n\r\n  <h2>Executive Team</h2>\r\n  <ul>\r\n    <li>Gerald Bott,&nbsp;Chairman and Chief Executive Officer</li>\r\n    <li>Stewart Talley, Chief Risk Officer</li>\r\n    <li>Judson Phillips, General Counsel</li>\r\n    <li>Naomi Ballard, VP Human Resources</li>\r\n    <li>Dominique Stein, Asset Management CEO </li>\r\n    <li>Cantby Bott, Chief Financial Officer</li>\r\n    <li>Frederic Owen, Commercial Banking CEO</li>\r\n    <li>Freeman McConnell, Corporate & Investment Bank CEO</li>\r\n    <li>Saul Hunt, Consumer & Community Banking CEO</li>\r\n    <li>Cheri Karla Mann, Chief Operating Officer</li>\r\n  </ul>\r\n\r\n</div>'),
(5, 2, 'Banking', 1, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/banking_57278269.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Banking</h1>\r\n  <h2>Branch, ATM, and Online Banking </h2>\r\n  <p>Bank from anywhere around the globe! With hundreds of branches and even more ATMs, it\'s almost guaranteed that you\'re within a short walk or drive from one of our locations. We go beyond the typical banking hours with our secure online banking services. If you need to manage or move your money, your accounts are available 24 hours a day. </p>\r\n\r\n  <ul>\r\n    <li><a href=\"#\">Find a branch</a></li>\r\n\r\n    <li><a href=\"#\">Find an ATM</a></li>\r\n\r\n    <li><a href=\"#\">Learn about online banking</a></li>\r\n\r\n    <li><a href=\"#\">Learn about Bott Bill Pay</a></li>\r\n  </ul>\r\n\r\n</div>'),
(6, 2, 'credit cards', 2, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/creditcards_598949380.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Credit Cards</h1>\r\n  <p>Our credit card program has been redesigned to help everyone build and improve their credit rather than sink deep into debt. With variable rates that suite your financial profile and needs, we grow with you, rather than against you.</p>\r\n  <ul>\r\n    <li><a href=\"#\">Compare our credit cards</a></li>\r\n    <li><a href=\"#\">Cash back credit cards</a></li>\r\n    <li><a href=\"#\">Rewards cards</a></li>\r\n    <li><a href=\"#\">Check your credit score</a></li>\r\n    <li><a href=\"#\">Transfer a balance</a></li>\r\n  </ul>\r\n</div>'),
(7, 2, 'mortgages', 3, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/homeloans_84513610.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Mortgages</h1>\r\n  <p>People shouldn\'t have to buy the farm before they buy the farm. We believed that in 1950, and we believe that today. A home&mdash;whether a farm or condo or anything in between&mdash;is a place where you should feel safe and secure, not afraid that your mortgage is going to drain you of all happiness. Our home loan and home equity professionals take the time to discuss all options, and combine our pre-approval screening with financial forecasts so you know exactly what you can afford for your first or next home.</p>\r\n  <ul>\r\n    <li><a href=\"#\">Check current mortgage rates</a></li>\r\n    <li><a href=\"#\">Check current refinance rates</a></li>\r\n    <li><a href=\"#\">Learn how to buy a home</a></li>\r\n    <li><a href=\"#\">Learn how to refinance</a></li>\r\n    <li><a href=\"#\">Mortgage rate calculator</a></li>\r\n  </ul>\r\n</div>'),
(8, 3, 'checking', 1, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/bizchecking_86519574.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Business Checking</h1>\r\n  <p>Options abound when it comes to selecting a Globe Bank business checking account. With so many choices, it might seem daunting to select the account that\'s right for your business. However, our talented customer service team is always available to help, whether in person, by phone, or online. Take a peek at some of our options, and when you\'re ready to get started, give us a shout.</p>\r\n\r\n  <ul>\r\n    <li><a href=\"#\">Compare our checking accounts</a></li>\r\n    <li><a href=\"#\">What you\'ll need to open an account</a></li>\r\n    <li><a href=\"#\">How to choose the right checking account for your business</a></li>\r\n    <li><a href=\"#\">Accounts with no monthly service fee</a></li>\r\n    <li><a href=\"#\">Order checks</a></li>\r\n  </ul>\r\n\r\n</div>'),
(10, 4, 'MERCHANT SERVICE', 2, 1, '<div id=\"hero-image\">\r\n  <img src=\"images/page_assets/merchant_619738814.png\" width=\"820\" height=\"200\" alt=\"\" />\r\n</div>\r\n\r\n<div id=\"content\">\r\n  <h1>Merchant Services</h1>\r\n  <p>Whether onsite, online, or on-the-go, your business needs to be nimble in processing payments. We\'ve got the experience to navigate the ever-changing world of payment processing technology. We\'ll make it easy for you to get started with a merchant account, so you can start taking payments almost immediately. </p>\r\n  <ul>\r\n    <li><a href=\"#\">Compare our merchant accounts</a></li>\r\n    <li><a href=\"#\">Credit card processing options</a></li>\r\n    <li><a href=\"#\">Accepting mobile payments</a></li>\r\n    <li><a href=\"#\">POS systems</a></li>\r\n  </ul>\r\n\r\n</div>'),
(11, 1, 'fixit', 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `menu_name`, `position`, `visible`) VALUES
(1, 'About Global Bank', 1, 1),
(2, 'Consumer', 2, 1),
(3, 'Small Bussines', 3, 0),
(4, 'Commercila', 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
