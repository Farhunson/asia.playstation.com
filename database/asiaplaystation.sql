-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 10:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asiaplaystation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`) VALUES
(1301174516);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `buy_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `games_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(10) NOT NULL,
  `address` varchar(70) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `address`, `gender`, `name`, `phoneNo`, `username`) VALUES
(1301174517, 'Sukabirus', 'Male', 'via', '085751457712', 'gnowles'),
(1301174533, 'Telkom', '', 'kapal fery', '085751457712', 'fery');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `games_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `provider` varchar(50) NOT NULL,
  `platform` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`games_id`, `name`, `genre`, `release_date`, `provider`, `platform`, `price`, `picture`, `description`) VALUES
(1, 'Tom Clancy\'s The Division® 2 - Digital Standard Edition (English/Chinese/Korean/Japanese Ver.)', 'Sports', '2019-03-15', 'Ubisoft Entertainment', 'PS4', 745000, 'img/games/tomclancy.jpg', 'HISTORY WILL REMEMBER In Tom Clancy’s The Division® 2, the fate of the free world is on the line. Lead a team of elite agents into a post-pandemic Washington DC to restore order and prevent the collapse of the city. The Division 2 is an online, action shooter RPG experience, where exploration and player-progression are essential. • Liberate Washington DC – Save a country on the brink of collapse as you explore an open, dynamic and hostile world. • Stronger with your team – Specialize and fight together with your friends in online co-op or against others in competitive adversial PVP mode. • Genre-defining endgame – Choose a unique class specialization to take on the toughest challenges with friends.'),
(2, 'Days Gone Digital Deluxe Edition (English/Chinese/Korean Ver.)', 'Action', '2019-04-26', 'Worldwide Studios', 'PS4', 1039000, 'img/games/daysgone.jpg', 'Days Gone Digital Deluxe Edition includes:\r\n- Days Gone Digital Full Game\r\n- Digital Original Music\r\n- Days Gone Digital Mini-Art Book* by Dark Horse Comics\r\n- Days Gone PS4™ Dynamic Theme\r\n- Monkey Wrench Skill Early Unlock\r\n- 3 Bike Skins\r\n\r\n*The art book contains spoilers to the Days Gone story mode. We here at Bend Studio recommend playing through the story mode before viewing the art book.\r\n\r\nDays Gone is an open-world action-adventure game set in a harsh wilderness two years after a devastating global pandemic. Play as Deacon St. John, a drifter and bounty hunter who rides the broken road, fighting to survive while searching for a reason to live. \r\n•Harsh Open World: Using the power of PlayStation®4 and Unreal Engine 4, Days Gone offers an incredibly realistic and detailed open-world experience. Immerse yourself in vast and hostile environments, and explore their secrets. Search abandoned vehicles, houses, truck stops and towns as you scavenge for resources. But be careful— day a'),
(3, '(Pre-Order) Borderlands 3 (English/Chinese/Korean Ver.)', 'Shooter', '2019-09-13', 'Take2 International Asia', 'PS4', 740000, 'img/games/borderlands.jpg', 'The original shooter-looter returns, packing bazillions of guns and a mayhem-fueled adventure! Blast through new worlds and enemies as one of four new Vault Hunters. Play solo or with friends to take on insane enemies, score loads of loot and save your home from the most ruthless cult leaders in the galaxy.\r\n\r\nA MAYHEM-FUELED THRILL RIDE \r\nStop the fanatical Calypso Twins from uniting the bandit clans and claiming the galaxy’s ultimate power.\r\n\r\nYOUR VAULT HUNTER, YOUR PLAYSTYLE \r\nBecome one of 4 new Vault Hunters, each with deep skill trees, abilities and customization.\r\n\r\nLOCK, LOAD, AND LOOT\r\nWith bazillions of guns and gadgets, every fight is an opportunity to score new gear.\r\n\r\nNEW BORDERLANDS \r\nDiscover new worlds beyond Pandora, each with unique environments and enemies.\r\n\r\nQUICK & SEAMLESS CO-OP ACTION\r\nPlay with anyone at any time online or in split-screen co-op, regardless of your level or mission progress.'),
(4, '(Pre-Order) Crash™ Team Racing Nitro-Fueled (English Ver.)', 'Racing', '2019-06-21', 'Activision', 'PS4', 579000, 'img/games/crash.jpg', 'Crash™ is back in the driver’s seat! Get ready to go fur-throttle with Crash™ Team Racing Nitro-Fueled. It’s the authentic CTR experience plus a whole lot more, now fully-remastered and revved up to the max:\r\n\r\n- Start your engines with the original game modes, characters, tracks, power-ups, weapons and controls\r\n- Power slide to glory in additional karts, tracks and arenas from Crash™ Nitro Kart\r\n- Race online with friends and Crash the competition with online leaderboards\r\n\r\nWith Crash™ Team Racing Nitro-Fueled, the stakes are high and the competition is fierce. It\'s the CTR you love, now kicked into the highest gear.\r\n\r\nPLAY EXCLUSIVE RETRO CONTENT ON PS4™\r\n- RETRO SKINS FOR CRASH, COCO & CORTEX\r\n- RETRO KARTS\r\n- RETRO TRACK\r\n\r\n*In-game items\r\n\r\nCertain elements and functionality require Playstation®Plus subscription, sold separately. Storage requirements subject to change. Mandatory updates may be required to play. Activision makes no guarantee regarding the availability of online '),
(5, 'Pang Adventures (English/Chinese/Korean Ver.)', 'Arcade', '2018-06-28', 'ARC SYSTEM WORKS Co.,Ltd.', 'PS4', 339000, 'img/games/pang.jpg', 'The Pang series is a beloved collection of arcade games from the 90s. Guide two brothers around the world to save humankind from an alien invasion! Use your skills to overcome the attack balls pouring from the skies & rescue the world from impending annihilation!\r\n\r\nPang Adventures brings new features & gameplay while keeping true to the original spirit:\r\n\r\n?Local Co-op in every game mode!\r\n\r\n?3 different modes:\r\nTour Mode: one location at a time!\r\nScore Attack: 3 lives and NO CONTINUES! The real arcade experience!\r\nPanic Mode: 99 levels of continuous battle! \r\n\r\n?The Bros. have upgraded their gear since the last invasion: machine guns, flamethrowers, shurikens…\r\n\r\n?Boss fights! For the 1st time, the Bros. come face-to-face with the nefarious Alien Commanders! They didn\'t come to Earth for the sightseeing…so get ready to blow them to smithereens!'),
(6, 'Hand of the Gods (English/Chinese Ver.)', 'Board Games', '2018-02-20', 'Hi-Rez Studios', 'PS4', 0, 'img/games/hand.jpg', '“Hearthstone and X-Com combine” - PCGamesN\r\n\r\nCollectible card games and turn-based strategy collide in Hand of the Gods! Wage divine war by summoning the Gods to a full 3D battlefield. Move your forces into position, then unleash divine powers to defeat your foes. Can you Command the Gods?\r\n\r\nDIVINE BLEND OF CCG AND TBS\r\n\r\nIt’s not what cards you play – it’s where you play them. Dominate the battlefield with your tactical brilliance.\r\n\r\nBRING YOUR CARDS TO LIFE\r\n\r\nYou can’t contain a God in a flat, 2D card. Drag your cards onto the battleground and watch the Gods come to life in rich 3D.\r\n\r\n\r\nUNREAL ENGINE 4 POWERED\r\n\r\nExperience stunning 3D graphics, with FX and animations made possible by Unreal Engine 4.\r\n\r\n\r\nCOMMAND THE GODS\r\n\r\nWhich Pantheon will you lead into battle? Build your army from the legendary Gods of Greek, Roman, Norse, Chinese, and Egyptian mythology.\r\n\r\n\r\nFREE-TO-PLAY\r\n\r\nIt’s free to play Hand of the Gods – and we’ll give you 4 Core Card Packs to open FREE when you f'),
(7, 'Puyo Puyo™ Tetris® (Chinese/Korean Ver.)', 'Puzzle', '2019-04-19', 'SEGA Games Co., Ltd.', 'PS4', 423000, 'img/games/puyo.jpg', 'This game offers many new rules such as \"Versus\", player can play dream battle \"Puyo Puyo versus Tetris\", and \"Puyo Teto Mix\", Puyo Puyo and Tetris pieces fall into the same field.\r\nOnline play features Puzzle League where players climb to the top of their region or watch replays from other players!');

-- --------------------------------------------------------

--
-- Table structure for table `manage_games`
--

CREATE TABLE `manage_games` (
  `managegames_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `games_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manage_news`
--

CREATE TABLE `manage_news` (
  `managenews_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `news_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `content` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `type`, `date`, `content`) VALUES
(1, 'PlayStation®VR Beat Saber All-in-One Pack to Be Re', 'press', '2019-04-26', ' Sony Interactive Entertainment Hong Kong Limited Singapore Branch (SIES) announced today that it will be releasing the highly anticipated title, Beat Saber, altogether in a special PlayStation®VR (PS VR) bundle. The PS VR Beat Saber All-in-One Pack will be available on 10th May 2019 at the suggested retail price of IDR 5,499,000, and will include a PS VR Headset, a PlayStation® Camera, two PlayStation®Move Motion Controllers, and the PS VR title, Beat Saber (Digital).\r\n\r\n\r\nSIES is committed to deliver the best gaming experience to our valued users, and will continue to further expand the PS4™ platform throughout Southeast Asia.\r\n\r\nProduct Outline:\r\n\r\nProduct Name\r\n\r\n“PlayStation®VR Beat Saber All-in-One Pack”\r\n\r\nRelease Date\r\n\r\n10th May 2019\r\n\r\n\r\n\r\nCopyright\r\n\r\n·        © 2019 Beat Games. All rights reserved. Beat Saber is a trademark of Beat Games.\r\n\r\n \r\n\r\n* Please note that the information listed in this Media Alert is subject to change without prior notice.\r\n\r\n* “PlayStation”, “PS4” and “DUALSHOCK” are registered trademarks or trademarks of Sony Interactive Entertainment Inc.\r\n\r\n* All other trademarks are the properties of their respective owners.'),
(2, 'Immortal Legacy: The Jade Cipher Release Date Anno', 'press', '2019-04-17', 'Sony Interactive Entertainment Hong Kong Limited Singapore Branch (SIES) announced that the PlayStation®VR software Immortal Legacy: The Jade Cipher will be released on 17th April 2019, Wednesday.\r\n\r\n \r\n\r\nAbout Immortal Legacy\r\n\r\nImmortal Legacy is a horror shooter game that fuses old-school single-player storytelling with cutting-edge VR gameplay. It\'s a potent mix of combat, problem solving and exploration, designed to keep players in suspense and thoroughly immersed throughout.\r\n\r\nYou play as Tyre, an ex-special forces soldier travelling to the isle of Yingzhou after the mysterious death of his mother. Together with Ksana (an estranged friend of his mother\'s), Tyre seeks to uncover the truth behind her death and her even more enigmatic past.\r\n\r\nYou\'ll get to grips with 15 unique weapons using dual PlayStation Move controllers, including melee, ranged and explosives. And there\'s more to Immortal Legacy than just combat. As you explore, you\'ll need to navigate ancient traps and puzzles which require both skill and intellect to survive and solve.\r\n\r\n \r\n\r\n\r\n\r\n\r\n \r\n\r\nEarly Purchase Bonus\r\n\r\nPurchase \"Immortal Legacy: The Jade Cipher\" on PlayStation™Store by 14th May 2019, Tuesday, and get \"WWII SMG weapon\" as early purchase bonus.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`) VALUES
(1301174516, 'admin1@gmail.com', '123'),
(1301174517, 'cust2@gmail.com', '123'),
(1301174533, 'cust3@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `games_id_fk` (`games_id`),
  ADD KEY `user_id_fk3` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`games_id`);

--
-- Indexes for table `manage_games`
--
ALTER TABLE `manage_games`
  ADD PRIMARY KEY (`managegames_id`),
  ADD KEY `games_id_fk2` (`games_id`),
  ADD KEY `user_id_fk4` (`user_id`);

--
-- Indexes for table `manage_news`
--
ALTER TABLE `manage_news`
  ADD PRIMARY KEY (`managenews_id`),
  ADD KEY `user_id_fk5` (`user_id`),
  ADD KEY `news_id_fk` (`news_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301174517;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `buy_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301174534;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `games_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_games`
--
ALTER TABLE `manage_games`
  MODIFY `managegames_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_news`
--
ALTER TABLE `manage_news`
  MODIFY `managenews_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1301174534;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `games_id_fk` FOREIGN KEY (`games_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_fk3` FOREIGN KEY (`user_id`) REFERENCES `customer` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `user_id_fk2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_games`
--
ALTER TABLE `manage_games`
  ADD CONSTRAINT `games_id_fk2` FOREIGN KEY (`games_id`) REFERENCES `games` (`games_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_fk4` FOREIGN KEY (`user_id`) REFERENCES `admin` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manage_news`
--
ALTER TABLE `manage_news`
  ADD CONSTRAINT `news_id_fk` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_fk5` FOREIGN KEY (`user_id`) REFERENCES `admin` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
