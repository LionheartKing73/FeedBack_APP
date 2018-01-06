--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) NOT NULL,
  `business_name` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `product` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `business_name`, `address`, `product`) VALUES
(1, 'Fog Harbor Fish House', 'Fisherman''s Wharf, North Beach/Telegraph Hill\r\nPier 39\r\nSan Francisco, CA 94133\r\nPhone number (415) 421-2442', 'Seafood, Bars'),
(2, 'The House', 'North Beach/Telegraph Hill\r\n1230 Grant Ave\r\nSan Francisco, CA 94133\r\nPhone number (415) 986-8612', 'Asian Fusion'),
(3, 'Barnzu', 'Tenderloin\r\n711 Geary St\r\nSan Francisco, CA 94109\r\nPhone number (415) 525-4985', 'Korean, Tapas Bars'),
(4, 'Brenda French Soul Food', 'Tenderloin\r\n652 Polk St\r\nSan Francisco, CA 94102\r\nPhone number (415) 345-8100', 'Breakfast & Brunch, French, Soul Food'),
(5, 'The Salzburg', 'Russian Hill, North Beach/Telegraph Hill\r\n663 Union St\r\nSan Francisco, CA 94133', 'Austrian'),
(6, 'Marufuku Ramen', 'Lower Pacific Heights, Japantown\r\n1581 Webster St\r\nSan Francisco, CA 94115\r\nPhone number (415) 872-9786', 'Seafood, Seafood Markets, Live/Raw Food');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `business_id`, `rating`) VALUES
(1, 6, 3),
(2, 6, 1),
(3, 6, 5),
(4, 6, 5),
(5, 6, 5),
(6, 5, 4),
(7, 5, 1),
(8, 5, 5),
(9, 4, 3),
(10, 5, 5),
(11, 5, 5),
(12, 4, 5),
(13, 3, 3),
(14, 6, 1),
(15, 3, 5),
(16, 3, 1),
(17, 3, 1),
(18, 3, 1),
(19, 4, 1),
(20, 5, 1),
(21, 5, 2),
(22, 6, 5),
(23, 2, 2),
(24, 2, 5),
(25, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;