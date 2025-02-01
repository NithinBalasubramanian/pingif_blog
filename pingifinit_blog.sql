-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 05:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pingifinit_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `img` varchar(100) NOT NULL,
  `field` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_cont`
--

CREATE TABLE `blog_cont` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `sub_img` varchar(100) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `sub_cont` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(3, 'Economics'),
(4, 'lifestyle'),
(5, 'Politics'),
(6, 'buisness'),
(7, 'education'),
(8, 'sports'),
(9, 'News');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `news_heading` varchar(250) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `news_reporter` varchar(100) DEFAULT NULL,
  `news_preview` varchar(250) DEFAULT NULL,
  `news_image` varchar(100) DEFAULT NULL,
  `news_cont` text,
  `date_created` varchar(100) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `blog_id`, `news_heading`, `category_id`, `news_reporter`, `news_preview`, `news_image`, `news_cont`, `date_created`, `count`, `status`) VALUES
(1, 4, 147627, 'Checking Data', 4, 'Nithin', 'This is checking about data center', '1603374338_blog_img.jpg', 'There are around 600 programming languages out there. The demand and popularity of programming languages fluctuate every year. Also, new programming languages are coming with attractive features. So, which programming language should you learn? Learning a new programming language is always an investment of your time and brainpower. If you are a seasoned developer or if you already know several programming languages, then you can learn a niche, modern one. Recently, I have written a blog post where I have short-listed seven modern programming languages worth learning:', '22-10-2020', NULL, 1),
(2, 4, 733422, 'No 1 programming language of 2020', 7, 'Nithin', 'No 1 programming language on the series top 10 programming languages for 2020', '1603375722_blog_img.png', 'When Guido van Rossum developed Python in the 1990s as his side project, nobody has thought it would be the most popular programming language one day. Considering all well-recognized rankings and industry trends, I put Python as the number one programming language overall.\r\nPython has not seen a meteoric rise in popularity like Java or C/C++. Also, Python is not a disruptive programming language. But from the very beginning, Python has focused on developer experience and tried to lower the barrier to programming so that school kids can also write production-grade code.', '22-10-2020', NULL, 1),
(9, 4, 767712, 'Dubai breaks Guinness World Record for the largest fountain', 9, 'Nithin', 'Dubai the land of dreams has been keen for breaking multiple records on the field of constructions has once again broke the record of largest fountain in world', '1604237218_blog_img.jpg', 'If you have ever set eyes on the iconic fountains at the Bellagio hotel in Las Vegas, then you’d be awe-struck by this piece of news we bring to you! Believe it or not, but Dubai is soon schedule to have a set of fountains that would be 25 percent larger than the one at Bellagio Hotel! Yes, it’s true, and its makers – Emaar Properties, the real estate giant, has confirmed this news. Emaar plans to build the largest fountains in the world as the centerpiece to its Downtown Burj Dubai project.', '01-11-2020', NULL, 1),
(4, 4, 166321, '2nd in top 10 programming language', 7, 'Nithin', '2nd of top 10 programming languages in the year 2020', '1603377680_blog_img.png', 'During the first browser war, Netscape had assigned Brendan Eich to develop a new programming language for its Browser. Brendan Eich had developed the initial prototype in only ten days, and the rest is history. Software developers often ridiculed JavaScript in its early days because of its poor language design and lack of features.\r\nOver the years, JavaScript has evolved into a multi-paradigm, high-level, dynamic programming language. The first significant breakthrough of JavaScript came in 2009 when Ryan Dahl has released cross-platform JavaScript runtime Node.js and enabled JavaScript to run on Server Side.\r\nThe other enormous breakthrough of JavaScript came around 2010 when Google has released a JavaScript based Web development framework AngularJS.\r\nToday, JavaScript is one of the most widely used programming languages in the world and runs on virtually everywhere: Browsers, Servers, Mobile Devices, Cloud, Containers, Micro-controllers.', '22-10-2020', NULL, 1),
(8, 4, 425821, 'How to Practice SQL on AWS for Free', 7, 'Nithin Balasubramanian', 'Improve your SQL skills by practicing on a real database', '1603381465_blog_img.jpeg', 'One of the required skills of a data scientist is working on databases using SQL. You might argue that it is the job of a data engineer but the data scientist roles are inclined to being full-stack. Besides, as a data scientist, you wouldn’t want to depend on a data engineer to retrieve data from a database.\r\nThere are lots of tutorials that explain SQL syntax to do certain operations. You can even practice and test your queries on sample databases. However, it is not a very efficient way to learn.\r\nWorking on a database of your own and running SQL queries with an RDBMS (e.g. MySQL) is far more efficient in improving your skills. In this post, we will create a MySQL database on AWS and connect to it using MySQL Workbench.', '22-10-2020', NULL, 1),
(10, 4, 791683, 'CSK Beats KXIP By 9 wickets', 8, 'Nithin', 'Chennai Super Kings win Kings XI Punjab by 9 wickets in which CSK Won the toss and opt to bowl', '1604238272_blog_img.jpg', 'A clinical win for CSK and the party poppers have dashed the hopes of the Kings XI. Despite Hooda\'s quickfire fifty in the latter half of the first innings, it was a good effort from the CSK bowlers to restrict the strong Punjab line-up to a below-par score. In reply, the openers took a few balls to get their eye in. Shami bowled a wayward ball down leg in the second over of the second innings and that gave the momentum for the Yellow Army in their chase. Faf and Ruturaj Gaikwad didn\'t allow any of the Punjab seamers to settle and scored 57 in the powerplay. Hooda put down a tough chance, an umpire review didn\'t go Punjab\'s way and finally in the tenth over, Jordan showed us that a KXP bowler can dismiss a CSK batter. However, that wicket came too late. The Super Kings saw off the two leggies without giving them any wickets and Ruturaj Gaikwad showed his class. The 23-year-old was involved in two half-ton partnerships and brought up his third successive fifty. Also, he remained unbeaten to take his team over the line. CSK move to No. 7 on the points table; have they avoided the wooded spoon?', '01-11-2020', NULL, 1),
(12, 4, 9156248, 'Tesla’s Cybertruck Gets Way More Orders Than Kia Seltos, MG Hector Combined', 8, 'Nithin', 'Tesla’s all-electric pick-up, the Cybertruck, has received over 2.5 lakh bookings in less than 10 days of its debut', '1604565085_blog_img.jpg', 'Inception of Tesla Motors happened twelve years ago in the Silicon Valley. Founded by a group of engineers in 2003, Tesla is currently employing more than 12000 employees and operates a revenue of 3 billion US dollars annually. Initial roots for the company was laid by Martin Eberhard and Marc Tarpenning, who incorporated the firm in July 2003 and financed it until the Series A round of funding. Elon Musk is the third member who led the Series A round of funding in February 2004. Soon after this, he joined the company\'s board of directors as the chairman. The company is named after Nikola Tesla, a physicist and an electrical engineer who pioneered AC induction Motor technology more than a century ago. With an aim to commercialize electric vehicles, Tesla motors started off its journey with a sports car and moved into the mainstream segment with a sedan and a crossover model. The company\'s engineers have developed the first fully electric sports car using the same AC induction motor technology, which was patented in 1888 by Nikola Tesla. In the year 2008, the Tesla Roadster was launched, whose pickup rate from 0 to 100 Kmph was clocked in just 3.8 seconds. The company has sold more than 2400 units of Roadsters in more than 30 countries across the globe. Its first ever luxury sedan was the Tesla Model S, which was launched in 2012. Earlier this year, it presented a full size crossover Model X, whose design is based on the Model S sedan. Currently it is working on Model 3, which is slated to go into mass-production by 2020.', '05-11-2020', NULL, 1),
(13, 4, 5589113, NULL, NULL, NULL, NULL, '1605796821_blog_img.jpg', NULL, '19-11-2020', NULL, 1),
(14, 4, 7869206, NULL, NULL, NULL, NULL, '1605796828_blog_img.jpg', NULL, '19-11-2020', NULL, 1),
(15, 4, 2648828, 'America presidential Election ', 5, 'Nithin', 'Democrates vs Republic', '1605796829_blog_img.jpg', 'US Election News Live 2020: In his final weeks, Trump is breaking precedent at every turn\r\nWith the end of his term drawing to a close, President Trump seems to be operating with a vengeance, now setting the execution of three inmates on death row before he leaves office.', '19-11-2020', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `plan` varchar(100) DEFAULT NULL,
  `notification` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `plan`, `notification`, `status`) VALUES
(6, 'Free', 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `plan` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `final_price` int(11) DEFAULT NULL,
  `valid_month` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `plan`, `amount`, `discount`, `final_price`, `valid_month`, `status`) VALUES
(2, 'behalf', 24000, 3, 1128, '2 month', 1);

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `privacy` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `privacy`) VALUES
(1, '<p>privacy</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `port` varchar(100) NOT NULL,
  `host` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smtp`
--

INSERT INTO `smtp` (`id`, `status`, `port`, `host`, `user`, `pass`) VALUES
(1, 1, 'port', 'smtp_host', 'user', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date`) VALUES
(4, 'pingifinit@gmail.com', '08-10-2020'),
(5, 'check@gmail.com', '09-10-2020'),
(6, 'nithinfurie17@gmail.com', '22-10-2020'),
(7, 'virtualtech1210@gmail.com', '01-11-2020'),
(8, 'nithin', '02-11-2020'),
(9, 'nithinfurie17@gmail.com', '02-11-2020'),
(10, 'nithinfurie17@gmail.com', '02-11-2020'),
(11, 'nithinfurie17@gmail.com', '02-11-2020'),
(12, 'nithinfurie17@gmail.com', '02-11-2020'),
(13, 'pingifinit@gmail.com', '02-11-2020'),
(14, 'pingifinit@gmail.com', '02-11-2020'),
(15, 'nithinfurie17@gmail.com', '02-11-2020'),
(16, 'nithinfurie17@gmail.com', '02-11-2020'),
(17, 'nithinmigo1@gmail.com', '02-11-2020'),
(18, 'nithinfurie17@gmail.com', '02-11-2020'),
(19, 'nithinfurie17@gmail.com', '02-11-2020'),
(20, 'nithinmigo1@gmail.com', '02-11-2020'),
(21, 'nithinmigo1@gmail.com', '05-11-2020'),
(22, 'prodigynavin@gmail.com', '19-11-2020'),
(23, 'balasubramanianmini@gmail.com', '19-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `sub_category_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sub_category_name`) VALUES
(2, 'phone'),
(3, 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cont_blog`
--

CREATE TABLE `sub_cont_blog` (
  `id` int(11) NOT NULL,
  `blog_id` varchar(100) DEFAULT NULL,
  `sub_heading` text,
  `sub_cont` text,
  `sub_img` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_cont_blog`
--

INSERT INTO `sub_cont_blog` (`id`, `blog_id`, `sub_heading`, `sub_cont`, `sub_img`, `date`) VALUES
(1, '147627', NULL, NULL, '1603374362_blog_sub_img.jpg', '22-10-2020'),
(2, '147627', 'Checking sub heading', 'this is sub heading', '', '22-10-2020'),
(3, '733422', 'Popularity:', 'In the last several years, Python has seen enormous growth in demand with no sign of slowing down. The programming language ranking site PYPL has ranked Python as the number one programming language with a considerable popularity gain in 2019:', '1603375796_blog_sub_img.jpeg', '22-10-2020'),
(4, '733422', NULL, NULL, '1603375802_blog_sub_img.jpeg', '22-10-2020'),
(5, '166321', 'Job Market:', 'In the USA Job market, Indeed has ranked JavaScript as the third most demanding programming language with 57 K Job posting in January 2020. With $114 K average yearly salary, JavaScript ranks 4th in terms of salary:\r\nAlso, StackOverflow developer survey has shown that JavaScript developers can earn a modest salary with relatively low experience:', '', '22-10-2020'),
(6, '425821', '1. Create a MySQL database using Amazon RDS', 'We will use Amazon RDS (Relational Database Service) which can be accessed by typing RDS on the console.Scroll down a little and click on the “Create database” box.', '1603381578_blog_sub_img.png', '22-10-2020'),
(7, '425821', '2. Connect to the database using MySQL Workbench', 'Select the appropriate version for your computer, download it, and then install it.\r\nOn the MySQL Workbench console, click on “connect to a database” under the “database” section on top.', '', '22-10-2020'),
(8, '767712', NULL, NULL, '1604237259_blog_sub_img.jpg', '01-11-2020'),
(9, '767712', '', 'Sources reveal that the fountains, which have yet to be named, will be capable of shooting water over 150 meters into the air – the height of a 50-storey building, and stretch over 275 meters – the length of two football fields! In addition, like the Fountains of Bellagio, the Emaar fountains will include an integral light and sound show. With such glamor attached to the creation of these new fountains, Dubai is expecting major tourists visits, which have been approximated to over 10 million visitors per year.', '', '01-11-2020'),
(10, '9156248', 'A week ago, Tesla unveiled the Cybertruck, its first-ever all-electric utility pick-up. Since then, the entire world has been going crazy over the design and versatility of this unearthly truck.', NULL, '1604565122_blog_sub_img.jpg', '05-11-2020'),
(11, '9156248', '', 'After receiving over 2 lakh pre-orders within a week, it has now crossed the 2.5 lakh mark. Tesla opened bookings at $100 (Rs 7,000 approx) for the all-electric utility truck. The pre-configured variants of the Cybertruck are priced from $40,000 to $70,000 (approx. Rs 28 lakh and Rs 50 lakh). ', '', '05-11-2020'),
(12, '9156248', NULL, NULL, '1604565151_blog_sub_img.jpg', '05-11-2020'),
(13, '9156248', '', 'If you compare its orders with two of the most popular SUVs in India, the Kia Seltos and MG Hector, the Cybertruck has received way more bookings than both SUVs combined. The Kia and MG SUVs bookings are less than a lakh till date. While we know that this is a bizarre comparison given how the Tesla is a more premium and fully-electric offering compared to the Kia and MG, it is astonishing to note that reservations for the electric truck only started a week ago.  ', '', '05-11-2020'),
(14, '9156248', '', 'Tesla will be offering the Cybertruck with three powertrain options: single-motor RWD, dual-motor AWD and tri-motor AWD. The entry-spec model has a claimed range of over 400km whereas the top-spec model can go over 800km on a single charge. In terms of features, Tesla will be offering the Cybertruck with air suspension, Tesla Autopilot semi-autonomous driver assistance, and a 17-inch touchscreen display as standard.', '', '05-11-2020'),
(15, '9156248', '', 'The all-electric truck is expected to hit the production line in late 2021 while the top-spec Tri-motor variant will enter production in 2022. Even though Tesla is expected to come to India by the time the Cybertruck enters production, we don’t expect it to be a part of the carmaker’s initial lineup for our market.', '', '05-11-2020'),
(16, '9156248', '', 'The all-electric truck is expected to hit the production line in late 2021 while the top-spec Tri-motor variant will enter production in 2022. Even though Tesla is expected to come to India by the time the Cybertruck enters production, we don’t expect it to be a part of the carmaker’s initial lineup for our market.', '', '05-11-2020'),
(17, '2648828', NULL, NULL, '', '19-11-2020'),
(18, '2648828', 'BHIBJINJN', 'NKJNKMLKFDJSNGJLKDFSJGISFDLKGLKSNKJDGNKJDFSMLKFMDS,L', '', '19-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posts` int(11) DEFAULT NULL,
  `visits` int(11) DEFAULT NULL,
  `block` int(11) DEFAULT NULL,
  `date_created` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `fname`, `lname`, `email`, `contact`, `password`, `img`, `status`, `posts`, `visits`, `block`, `date_created`) VALUES
(4, NULL, 'Nithin', 'Balasubramanian', 'nithinmigo1@gmail.com', 8838825568, 'b818082dfcaf5c93f7bf612fa425b9dd2267b3bf', '1602312869_user.jpg', 1, NULL, NULL, NULL, '2020-08-08'),
(5, NULL, 'Nithin', 'Furie', 'nithinfurie17@gmail.com', 8989898989, '2001f505d0dc4d6ad305ef11efa2aa8cccbeafaa', NULL, 1, NULL, NULL, NULL, '2020-08-08'),
(6, NULL, 'ammu', 'ammu', 'varginaslam123@gmail.com', 9443740424, 'f2bb5edfd595b13fa3330ce048858b5332ed05b3', NULL, 1, NULL, NULL, NULL, '2020-08-10'),
(7, NULL, 'vargina', 'rani', 'varginaslam123@gmail.com', 9443740424, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, 1, NULL, NULL, NULL, '2020-08-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_cont`
--
ALTER TABLE `blog_cont`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cont_blog`
--
ALTER TABLE `sub_cont_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_cont`
--
ALTER TABLE `blog_cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sub_cont_blog`
--
ALTER TABLE `sub_cont_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
