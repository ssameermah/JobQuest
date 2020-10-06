-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2019 at 12:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `banglore_details`
--

DROP TABLE IF EXISTS `banglore_details`;
CREATE TABLE IF NOT EXISTS `banglore_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banglore_details`
--

INSERT INTO `banglore_details` (`id`, `image`, `text`) VALUES
(1, 'Breya.png', '--Key responsibilities:\r\nInclude creating social media posts, website banners, emailers, posters & other graphics (digital as well as print) Brainstorming & coming up with new concepts, ideas & layouts Candidate should be from a design background & well versed with design softwares. (Illustrator & Photoshop)\r\nFashion background will be given preference.\r\n--Location: Andheri East, Mumbai --Duration: 3 months, with possibility of full-time employment offer. --Job Details: Seniority Level Internship\r\n--Industry: Apparel & Fashion Design Graphic Design Employment Type Internship\r\n--Job Functions: Art/Creative Marketing Design'),
(2, 'Crescendo.png', 'An exciting techno-functional job opportunity for a professional holding at least 3 years as Data Scientist. Our distinguished client is looking for a smart, pliable developer who is keen to develop their career into Data Science, Deep Learning and Analytics.\r\nLocation: Mumbai\r\nYour Future Employer: A Leading provider of investment research serving different market regions across the globe.\r\nResponsibilities:\r\n- Designing and developing flexible enterprise solutions.\r\n- Improving complex data flow, data structures to move to the next platform.\r\n- Building solutions incorporating numerical techniques such as ML, statistics, and optimization\r\nRequirements:\r\n- Minimum of 3 years of experience in software engineering\r\n- Expertise in either Python or Java.\r\n- Basic knowledge of ML/AI/statistical algorithms.\r\nReach Us:\r\nIf you think this role is aligned with your career, kindly write me an email along with your updated CV on riddhisharma@crescendogroup.in for a confidential discussion on the role.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `delhi_details`
--

DROP TABLE IF EXISTS `delhi_details`;
CREATE TABLE IF NOT EXISTS `delhi_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delhi_details`
--

INSERT INTO `delhi_details` (`id`, `image`, `text`) VALUES
(1, 'DBS.jpg', 'As the leading bank in Asia, DBS Consumer Banking Group is in a unique position to help our customers realise their dreams and ambitions. Our financial solutions are not only the best in the business â€“ they were made just right for you.\r\n--Purpose We are looking for CA Industrial Trainees to join the Bankâ€™s Consumer Banking Group, who aspire to build their career in Banking; desire to learn the Bankâ€™s business; and look for exposure to Digital MNC Bank\r\nKey Accountabilities :\r\nProvide critical assessment of all processes around cost booking / projections by assessing all incoming products, resources and services\r\nRequired Experience, Knowledge & Skill-Sets\r\nExperience:\r\nGraduate with 60% marks\r\nCA â€“ Inter / IPCC examination qualified\r\nMin. 2 years article training completed with reputed CA firms (Big 4 or Top 20)\r\nExperience in Bankâ€™s concurrent / internal / statutory audits during articles training\r\nBanking Regulations, Business & Operational processes\r\nKey Details :\r\nTraining Duration : Min. 9 months to Max. 12 months\r\nCA students appearing for May 2020 exams and thereafter should only apply'),
(2, 'YouGov.png', 'Requirements:\r\nExcellent understanding of machine learning techniques and algorithms, such as Neural Network, k-NN, Naive Bayes, SVM, Decision Forests, etc.\r\nExperience with common data science toolkits, such as R, Weka, Numpy, MatLab, Octave, SAS, SPSS etc. Excellence in at least one of these is highly desirable.\r\nExperience in ML libraries like Caffe, Tensorflow, Theano, scikit-learn, etc will be an added advantage.\r\nExperience in any of the programming languages such as C / C++ / Java / Python.\r\nExperience with data visualization tools, such as D3.js, GGplot, Tableau etc.\r\nProficiency in using query languages such as SQL, Hive, Pig etc.\r\nExperience with NoSQL databases, such as MongoDB, Cassandra, HBase etc.\r\nGood applied statistics skills, such as distributions, statistical testing, regression, etc.\r\nGood scripting and programming skills\r\n--Job Details: Seniority Level Mid-Senior level\r\n--Industry: Information Technology & Services Employment Type Full-time\r\nJob Functions: Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `mumbai_details`
--

DROP TABLE IF EXISTS `mumbai_details`;
CREATE TABLE IF NOT EXISTS `mumbai_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mumbai_details`
--

INSERT INTO `mumbai_details` (`id`, `image`, `text`) VALUES
(1, 'Accenture.jpg', 'We have immediate openings for Data Science( Exploratory Data Analysis - EDA ).\r\n--Work Location: Mumbai / Bangalore\r\n--Exp: 3 - 12 yrs relevant experience.\r\n--Skills Required: 3-7 years of experience in Data Analysis and Data science background. Candidate must be able to articulate well and possess\r\ncommunication skills 80% - Insights -exploratory and prescriptive analysis + 20 % modeling Experience into text mining techniques like\r\ntokenization, stopword removal, stemming & sentiment analysis is preferable Candidate should be informed that the role will involve mainly\r\nworking with text data Candidate required to work on text analysis and more as a chat log consultant role along with Topic modeling Experience\r\nin exploratory data analysis/ analytical consulting/ exploratory modeling.\r\n--Tools : R or python ( even SAS will work) experience required. Mandatory experience in SQL\r\n--Domain / Industry experience: Customer care, telecom background/ Any industry\r\n--Notice Period: 15-30 days mandatory.'),
(2, 'LT.png', 'Requirements:\r\nExcellent understanding of machine learning techniques and algorithms, such as Neural Network, k-NN, Naive Bayes, SVM, Decision Forests, etc.\r\nExperience with common data science toolkits, such as R, Weka, Numpy, MatLab, Octave, SAS, SPSS etc. Excellence in at least one of these is highly desirable.\r\nExperience in ML libraries like Caffe, Tensorflow, Theano, scikit-learn, etc will be an added advantage.\r\nExperience in any of the programming languages such as C / C++ / Java / Python.\r\nExperience with data visualization tools, such as D3.js, GGplot, Tableau etc.\r\nProficiency in using query languages such as SQL, Hive, Pig etc.\r\nExperience with NoSQL databases, such as MongoDB, Cassandra, HBase etc.\r\nGood applied statistics skills, such as distributions, statistical testing, regression, etc.\r\nGood scripting and programming skills\r\n--Job Details: Seniority Level Mid-Senior level\r\n--Industry: Information Technology & Services Employment Type Full-time\r\nJob Functions: Information Technology');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
