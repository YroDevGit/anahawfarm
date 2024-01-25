-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for farm
CREATE DATABASE IF NOT EXISTS `farm` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `farm`;

-- Dumping structure for table farm.cropp
CREATE TABLE IF NOT EXISTS `cropp` (
  `cropid` int(11) NOT NULL AUTO_INCREMENT,
  `uzer` int(11) DEFAULT NULL,
  `cropping` varchar(500) DEFAULT NULL,
  `plant` date DEFAULT NULL,
  `harvest` date DEFAULT NULL,
  `production` varchar(100) DEFAULT NULL,
  `sack` float DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `farm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cropid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.cropp: ~8 rows (approximately)
INSERT INTO `cropp` (`cropid`, `uzer`, `cropping`, `plant`, `harvest`, `production`, `sack`, `stat`, `farm`) VALUES
	(10, 367, '1st cropping', '2023-11-15', '2023-11-15', '200', 50, 1, '1ly120423081229YBB714SUN9AIS'),
	(13, 367, '3rd cropping', '2023-11-16', '2024-02-16', '200', 50, 1, '1ly120423081229YBB714SUN9AIS'),
	(14, 367, '1st cropping', '2023-11-01', '2023-12-30', '110', 50, 0, '1ly120423081229YBB714SUN9AIS'),
	(15, 367, '2nd cropping', '2023-11-16', '2023-11-30', '155', 50, 1, '1ly120423081229YBB714SUN9AIS'),
	(16, 367, '2nd cropping', '2023-11-17', '2023-12-24', '90', 48, 0, '1ly120423081229YBB714SUN9AIS'),
	(17, 361, '1st croppings', '2023-02-17', '2023-10-03', '90', 50, 0, 'b6j120423081219YBB714NMC9AIM'),
	(18, 361, '2nd cropping', '2023-12-13', '2023-12-13', '22', 50, 0, 'b6j120423081219YBB714NMC9AIM'),
	(19, 361, '1st cropping', '2023-12-05', '2023-12-05', '22', 50, 0, 'b6j120423081219YBB714NMC9AIM');

-- Dumping structure for table farm.damage
CREATE TABLE IF NOT EXISTS `damage` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `iname` varchar(200) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `contact` varchar(1000) DEFAULT NULL,
  `farm_add` varchar(1000) DEFAULT NULL,
  `area` varchar(1000) DEFAULT NULL,
  `seed` varchar(1000) DEFAULT NULL,
  `dateplant` date DEFAULT NULL,
  `program` varchar(1000) DEFAULT NULL,
  `halit` varchar(1000) DEFAULT NULL,
  `halitdate` varchar(1000) DEFAULT NULL,
  `plantage` varchar(1000) DEFAULT NULL,
  `areahalit` varchar(1000) DEFAULT NULL,
  `percenthalit` varchar(1000) DEFAULT NULL,
  `cropdate` date DEFAULT NULL,
  `north` varchar(1000) DEFAULT NULL,
  `south` varchar(1000) DEFAULT NULL,
  `east` varchar(1000) DEFAULT NULL,
  `west` varchar(1000) DEFAULT NULL,
  `uzer` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.damage: ~2 rows (approximately)
INSERT INTO `damage` (`iid`, `iname`, `address`, `contact`, `farm_add`, `area`, `seed`, `dateplant`, `program`, `halit`, `halitdate`, `plantage`, `areahalit`, `percenthalit`, `cropdate`, `north`, `south`, `east`, `west`, `uzer`, `stat`) VALUES
	(8, 'Firsty Lastnamey', 'address', 'contact', 'address', 'farm area', 'rc10', '2023-11-15', 'program', 'pesti', '2023-11-15', '3years', '3km', '30%', '2023-11-15', 'North', 'South', 'East', 'West', 360, 0),
	(9, 'Firsty Lastnamey', 'address', 'contact', 'address', 'farm area', 'rc10', '2023-11-15', 'program', 'pesti', '2023-11-15', '3years', '3km', '30%', '2023-11-15', 'North', 'South', 'East', 'West', 367, 0);

-- Dumping structure for table farm.datatbl
CREATE TABLE IF NOT EXISTS `datatbl` (
  `col1` varchar(1000) DEFAULT NULL,
  `col2` varchar(1000) DEFAULT NULL,
  `col3` varchar(1000) DEFAULT NULL,
  `col4` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.datatbl: ~2 rows (approximately)
INSERT INTO `datatbl` (`col1`, `col2`, `col3`, `col4`) VALUES
	('09992737727', 'Farmers Associations', 'Anahaw Farmers Associaton', 'jgh'),
	('09992737727', 'Farmers Associationx', 'Farmers Associaton', 'jgh');

-- Dumping structure for table farm.dropdowns
CREATE TABLE IF NOT EXISTS `dropdowns` (
  `ids` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(100) DEFAULT '0',
  `civil_status` varchar(100) DEFAULT '0',
  `cropping_season` varchar(100) DEFAULT '0',
  `cropping_time` varchar(100) DEFAULT '0',
  `cropping_proceedure` varchar(100) DEFAULT '0',
  `planting_method` varchar(100) DEFAULT '0',
  `variety` varchar(100) DEFAULT '0',
  `fertilizer` varchar(100) DEFAULT '0',
  `chemical` varchar(100) DEFAULT '0',
  `education` varchar(50) DEFAULT '0',
  PRIMARY KEY (`ids`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.dropdowns: ~4 rows (approximately)
INSERT INTO `dropdowns` (`ids`, `gender`, `civil_status`, `cropping_season`, `cropping_time`, `cropping_proceedure`, `planting_method`, `variety`, `fertilizer`, `chemical`, `education`) VALUES
	(1, 'Male', 'Single', 'dry season', '1 Crops/Year', 'Land Preparation.', 'Direct seeding', 'RC10', '14-14-11', 'Pest chemical', 'Elementary'),
	(2, 'Female', 'Married', 'wet season', '2 Crops/Year', 'Seed selection', 'Transplanting', '226', '16-20-0', 'Wedges and Sedges', 'Highschool'),
	(3, '0', 'Seperated', '0', 'tripple/Year', '0', 'Rice Machinery', '216', '18-46-0', 'Others', '0'),
	(4, '0', 'Widow', '0', '0', '0', '0', 'Others', 'Others', '0', '0');

-- Dumping structure for table farm.expenses
CREATE TABLE IF NOT EXISTS `expenses` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `farm_id` varchar(100) DEFAULT NULL,
  `expense` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `datetime` varchar(50) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `crop` int(11) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.expenses: ~3 rows (approximately)
INSERT INTO `expenses` (`eid`, `farm_id`, `expense`, `amount`, `datetime`, `stat`, `crop`) VALUES
	(6, 'b6j120423081219YBB714NMC9AIM', 'Fertilizer', 300, '2024-01-10T09:17', 0, 19),
	(7, 'b6j120423081219YBB714NMC9AIM', 'Fertilizer', 300, '2024-01-17T09:18', 0, 18),
	(8, 'b6j120423081219YBB714NMC9AIM', 'arado', 500, '2024-01-10T19:33', 0, 18);

-- Dumping structure for table farm.farmdetails
CREATE TABLE IF NOT EXISTS `farmdetails` (
  `sched` varchar(50) NOT NULL,
  `sched_id` varchar(50) DEFAULT NULL,
  `farm_id` varchar(50) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `date_set` date DEFAULT NULL,
  `date_act` date DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`sched`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.farmdetails: ~17 rows (approximately)
INSERT INTO `farmdetails` (`sched`, `sched_id`, `farm_id`, `user_id`, `date_set`, `date_act`, `desc`, `stat`, `status`) VALUES
	('29j092323110926TRN9ELA', '6f9092323060912OTR9ZRA', 'iom040223090433OTY9ZLE', 367, '2023-04-27', '2023-04-29', 'Not-set', 0, 0),
	('7ok092323060931YER9RZL', 'dkj042123100457OET9AZL', 'a7y040223090442RTN9EAL', 367, '2023-05-07', '2023-09-23', 'Not-set', 0, 0),
	('e5n042723040408YOT9LZR', 'f47041323090444ERY9ZEA', 'bfs040223090459YOR9ALZ', 367, '2023-04-13', '2023-04-27', 'Not-set', 0, 0),
	('epk092323060941NRO9ALZ', '7y9042823100453ERT9ARE', 'a7y040223090442RTN9EAL', 367, '2023-06-21', '2023-09-23', 'Not-set', 0, 0),
	('hci092323060936RNO9ALZ', 'dhb042123100450ETN9RLE', 'a7y040223090442RTN9EAL', 367, '2023-04-22', '2023-09-23', 'Not-set', 0, 0),
	('j7n092323110917TER9AZR', 'y9n041323090443EOT9LRE', 'iom040223090433OTY9ZLE', 367, '2023-04-17', '2023-04-29', 'Not-set', 0, 0),
	('kyt092223050942EOY9LAE', '534041923110446OET9LZR', 'bfs040223090459YOR9ALZ', 367, '2023-04-22', '2023-04-30', 'Not-set', 0, 0),
	('mei102123081004ETO9RAZ', 'kya102123081014NTR9ZEL', 'yk9102123081041YTO9RZA', 360, '2023-10-22', '2023-10-21', 'Not-set', 0, 0),
	('n23102123081008YON9ELZ', 'm7s042123040429REO9ZER', 'qm7032623060358TYR9ARZ', 360, '2023-04-22', '2023-04-28', 'Not-set', 0, 0),
	('nin092323120905TRE9RZE', 'yia041323090443ETR9ERL', 'iom040223090433OTY9ZLE', 367, '2023-04-29', '2023-04-29', 'Not-set', 0, 0),
	('nsc092223050910TER9EAR', 'bn4041323090434YNR9EZL', 'iom040223090433OTY9ZLE', 367, '2023-04-26', '2023-04-18', 'Not-set', 0, 0),
	('q2b051323040516EYT9EAR', '3re051323040508OTR9EZR', 'ngo051323040539ORN9EAZ', 370, '2023-05-13', '2023-05-13', 'Not-set', 0, 0),
	('r76042723040421NOE9RLZ', 'rqn041923110430ORT9AZE', 'bfs040223090459YOR9ALZ', 367, '2023-04-13', '2023-04-27', 'Not-set', 0, 0),
	('s1e092323110941NTY9LEZ', 'ro6092323050917EYT9ARL', 'iom040223090433OTY9ZLE', 367, '2023-04-27', '2023-04-28', 'Not-set', 0, 0),
	('sr6052723110527REY9ERL', '5nc052723110552EYR9ERL', '794052723110531ETO9RAL', 371, '2023-05-28', '2023-05-27', 'Not-set', 0, 0),
	('sy7092323040952YNE9LRA', '3sk092223050908YOT9RAL', 'bfs040223090459YOR9ALZ', 367, '2023-09-23', '2023-09-23', 'Not-set', 0, 0),
	('trp051323040512NRE9ELZ', '1lb051323040515OYT9ARZ', 'ngo051323040539ORN9EAZ', 370, '2023-05-14', '2023-05-13', 'Not-set', 0, 0);

-- Dumping structure for table farm.farmtbl
CREATE TABLE IF NOT EXISTS `farmtbl` (
  `farmid` varchar(100) DEFAULT NULL,
  `farm_number` varchar(100) DEFAULT NULL,
  `farmname` varchar(100) DEFAULT NULL,
  `farm_area` varchar(100) DEFAULT NULL,
  `farm_fields` int(11) DEFAULT NULL,
  `farm_loc` varchar(100) DEFAULT NULL,
  `farm_active` varchar(100) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `mgr` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.farmtbl: ~2 rows (approximately)
INSERT INTO `farmtbl` (`farmid`, `farm_number`, `farmname`, `farm_area`, `farm_fields`, `farm_loc`, `farm_active`, `stat`, `user`, `mgr`) VALUES
	('b6j120423081219YBB714NMC9AIM', '1231872341', 'farm', '34sq km', 5, 'anahaw', '1', 0, 361, 0),
	('9cf120523011243YBB714USM9SAM', '23776342', 'farm1', '56sq km', 22, 'Anahaw', '0', 0, 361, 0);

-- Dumping structure for table farm.finance
CREATE TABLE IF NOT EXISTS `finance` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `croppid` int(11) DEFAULT NULL,
  `seed_cost` float DEFAULT NULL,
  `sacks` int(11) DEFAULT NULL,
  `fertile_cost` float DEFAULT NULL,
  `fertile_bag` int(11) DEFAULT NULL,
  `chem_cost` float DEFAULT NULL,
  `chem_num` int(11) DEFAULT NULL,
  `prod_per_hect` varchar(500) DEFAULT NULL,
  `marketing_income` float DEFAULT NULL,
  `consume_sack` int(11) DEFAULT NULL,
  `out_of_sack` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.finance: ~5 rows (approximately)
INSERT INTO `finance` (`fid`, `user`, `croppid`, `seed_cost`, `sacks`, `fertile_cost`, `fertile_bag`, `chem_cost`, `chem_num`, `prod_per_hect`, `marketing_income`, `consume_sack`, `out_of_sack`, `stat`) VALUES
	(1, 367, 11, 1200, 100, 1, 1, 1000, 100, '1000', 1000, 1000, 1000, 1),
	(3, 367, 10, 1300, 100, 1, 1, 1000, 100, '1000', 1000, 1000, 1000, 1),
	(4, 367, 10, 1120, 100, 12000, 70, 1000, 100, '1000', 1000, 1000, 1000, 1),
	(5, 367, 14, 1200, 60, 1300, 25, 7023, 200, '30', 5000, 50, 10, 0),
	(6, 361, 19, 100, 50, 500, 50, 1200, 70, '100', 1000, 50, 10, 0);

-- Dumping structure for table farm.inventory
CREATE TABLE IF NOT EXISTS `inventory` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `crop` int(11) DEFAULT NULL,
  `p_ani` int(11) DEFAULT NULL,
  `p_triser` int(11) DEFAULT NULL,
  `p_porsyento` int(11) DEFAULT NULL,
  `p_consumo` int(11) DEFAULT NULL,
  `production` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.inventory: ~3 rows (approximately)
INSERT INTO `inventory` (`iid`, `user`, `crop`, `p_ani`, `p_triser`, `p_porsyento`, `p_consumo`, `production`, `stat`) VALUES
	(3, 367, 15, 100, 20, 20, 15, 155, 1),
	(4, 367, 14, 50, 50, 5, 5, 110, 0),
	(5, 361, 18, 5, 4, 10, 3, 22, 0);

-- Dumping structure for table farm.members
CREATE TABLE IF NOT EXISTS `members` (
  `mem_id` varchar(100) NOT NULL DEFAULT '',
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `mem_type` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `del` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.members: ~10 rows (approximately)
INSERT INTO `members` (`mem_id`, `fname`, `lname`, `contact`, `address`, `mem_type`, `user_id`, `stat`, `del`) VALUES
	('r9o052023040530NEO9ZLE', 'sd', 'sdf', 'fsd', 'fas', 1, 366, 0, 0),
	('dmr052723110510YNT9ARL', 'Juan', 'Tamad', '09201931', 'Anahaw', 1, 371, 0, 0),
	('sln092223050943YTR9ZLA', 'admin', 'admin', 'admin', 'admin', 2, 360, 0, 1),
	('4em092323110906TOE9ZAE', 'Miguel', 'Cotto', '09129381273', 'Mexico', 1, 367, 0, 1),
	('1y4092323110932RYN9REZ', 'Cesar ', 'Juarez', '091328232423', 'Philippines', 1, 367, 0, 0),
	('yf3092323110913OTE9ZEL', 'Jericho', 'Montiel', '091381273434', 'South California', 1, 367, 0, 0),
	('n67092323110947YOT9REA', 'Omar', 'Narvaez', '1237123551', 'Buenos Aires Argintina', 1, 367, 0, 0),
	('8kc092323110937NYO9ARE', 'Ricardo', 'Mayorga', '1236123523', 'Puerto Rico', 1, 367, 0, 0),
	('afo092323110903YTN9LRZ', 'Diego', 'Martinez', '3917317263', 'South Carolina USA', 1, 367, 0, 0),
	('lfb111523011142TYN9RZA', 'Firsty', 'Lastnamey', '09987865', 'address', 2, 360, 0, 0);

-- Dumping structure for table farm.method
CREATE TABLE IF NOT EXISTS `method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `planted_area` varchar(1000) DEFAULT NULL,
  `season` varchar(1000) DEFAULT NULL,
  `ctime` varchar(1000) DEFAULT NULL,
  `procedure` varchar(1000) DEFAULT NULL,
  `pmethod` varchar(1000) DEFAULT NULL,
  `variety` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `farm_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.method: ~6 rows (approximately)
INSERT INTO `method` (`id`, `user`, `planted_area`, `season`, `ctime`, `procedure`, `pmethod`, `variety`, `stat`, `farm_id`) VALUES
	(6, 367, '23sq km.', 'Cropping season', '1 crops/year', 'Land preparation', 'Direct seeding', 1, 0, 'b6j120423081219YBB714NMC9AIM'),
	(7, 361, '23sq km.', 'wet season', 'tripple/Year', 'Seed selection', 'Transplanting', 2, 0, 'b6j120423081219YBB714NMC9AIM'),
	(8, 361, '20 hectare', 'wet season', '2 Crops/Year', 'Land Preparation.', 'Transplanting', 2, 0, '9cf120523011243YBB714USM9SAM'),
	(9, 361, '20 hectare', 'dry season', '1 Crops/Year', 'Land Preparation.', 'Direct seeding', 1, 0, '9cf120523011243YBB714USM9SAM'),
	(10, 361, '20 hectare', 'dry season', '1 Crops/Year', 'Land Preparation.', 'Direct seeding', 1, 0, 'b6j120423081219YBB714NMC9AIM'),
	(11, 361, '20 hectare', 'dry season', '1 Crops/Year', 'Land Preparation.', 'Direct seeding', 2, 0, 'b6j120423081219YBB714NMC9AIM');

-- Dumping structure for table farm.resource
CREATE TABLE IF NOT EXISTS `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `crop` int(11) DEFAULT NULL,
  `num_bags` int(11) DEFAULT NULL,
  `fert_type` varchar(1000) DEFAULT NULL,
  `chem_app` varchar(1000) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.resource: ~6 rows (approximately)
INSERT INTO `resource` (`id`, `user`, `crop`, `num_bags`, `fert_type`, `chem_app`, `stat`) VALUES
	(5, 367, 10, 5, '18-46-0', 'Wedges and Sedges', 1),
	(8, 367, 14, 100, '16-20-0', 'Pist chemical', 0),
	(9, 361, 19, 4, '16-20-0', 'Wedges and Sedges', 0),
	(10, 361, 18, 44, '18-46-0', 'Wedges and Sedges', 0),
	(11, 361, 19, 3, 'Others', 'Others', 1),
	(12, 361, 18, 4, 'Others', 'Others', 1);

-- Dumping structure for table farm.rice
CREATE TABLE IF NOT EXISTS `rice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variety` varchar(50) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `dateInputed` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.rice: ~4 rows (approximately)
INSERT INTO `rice` (`id`, `variety`, `stat`, `dateInputed`) VALUES
	(1, 'RC10', 0, '2024-01-11 05:49:48'),
	(2, '216', 1, '2024-01-11 05:49:49'),
	(4, '', 1, '2024-01-11 08:12:40'),
	(5, '216', 0, '2024-01-11 11:50:52');

-- Dumping structure for table farm.sales
CREATE TABLE IF NOT EXISTS `sales` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `sacks` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `kg` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `crop` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `variety` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.sales: ~5 rows (approximately)
INSERT INTO `sales` (`s_id`, `sacks`, `price`, `kg`, `total`, `date`, `crop`, `user`, `variety`) VALUES
	(3, 3, 2000, 50, 100000, '2024-01-09', 18, 361, 1),
	(4, 20, 2100, 50, 42000, '2024-01-09', 19, 361, 1),
	(5, 30, 2000, 50, 600000, '2024-01-10', 18, 361, 1),
	(6, 300, 2000, 50, 600000, '2024-01-10', 18, 361, 1),
	(7, 50, 22, 45, 49500, '2024-01-10', 18, 361, 1);

-- Dumping structure for table farm.schedule
CREATE TABLE IF NOT EXISTS `schedule` (
  `sched_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `farm_id` varchar(100) DEFAULT NULL,
  `activity` varchar(100) DEFAULT NULL,
  `schedule` datetime DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `cropp` int(11) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  PRIMARY KEY (`sched_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.schedule: ~8 rows (approximately)
INSERT INTO `schedule` (`sched_id`, `user_id`, `farm_id`, `activity`, `schedule`, `stat`, `cropp`, `cost`) VALUES
	(1, 361, 'b6j120423081219YBB714NMC9AIM', 'Ani', '2023-12-29 00:22:00', 0, 18, 0),
	(2, 361, 'b6j120423081219YBB714NMC9AIM', 'asdas', '2024-01-10 22:20:00', 0, 18, 0),
	(3, 361, 'b6j120423081219YBB714NMC9AIM', 'sadasd', '2024-01-08 22:20:00', 0, 18, 0),
	(4, 361, 'b6j120423081219YBB714NMC9AIM', 'sadas', '2024-01-08 22:21:00', 1, 19, 0),
	(5, 361, '9cf120523011243YBB714USM9SAM', 'sadsa', '2024-01-09 08:52:00', 1, 19, 0),
	(6, 361, '9cf120523011243YBB714USM9SAM', 'sadsa', '2024-01-11 08:54:00', 0, 18, 0),
	(7, 361, 'b6j120423081219YBB714NMC9AIM', 'asds', '2024-01-09 09:20:00', 1, 19, 0),
	(8, 361, 'b6j120423081219YBB714NMC9AIM', 'Arado', '2024-01-18 11:19:00', 0, 18, 300);

-- Dumping structure for table farm.sms
CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(50) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.sms: ~5 rows (approximately)
INSERT INTO `sms` (`id`, `message`, `stat`, `date`) VALUES
	(1, 'aSAs', 1, '2024-01-11 08:13:47'),
	(2, 'sdasd', 1, '2024-01-11 08:14:49'),
	(3, 'sdasd', 1, '2024-01-11 08:16:30'),
	(4, 'hello Anahaw farmers association, this is a sample', 0, '2024-01-11 08:18:30'),
	(5, 'hello Anahaw farmers association, this is a sample', 0, '2024-01-11 08:18:48');

-- Dumping structure for table farm.supinv
CREATE TABLE IF NOT EXISTS `supinv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `production` varchar(100) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.supinv: ~1 rows (approximately)
INSERT INTO `supinv` (`id`, `user`, `location`, `branch`, `production`, `sold`, `status`, `stat`) VALUES
	(2, 361, 'Loc', 'Branch', 'Prod', 33, 'Sold', 0);

-- Dumping structure for table farm.user
CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.user: ~1 rows (approximately)
INSERT INTO `user` (`User_ID`, `Username`, `Password`) VALUES
	(1, 'admin', 'admin');

-- Dumping structure for table farm.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `imgtitle` varchar(50) DEFAULT NULL,
  `imgfile` varchar(200) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `actions` int(11) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `varcode` int(11) DEFAULT 0,
  `gender` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=384 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.users: ~16 rows (approximately)
INSERT INTO `users` (`user_id`, `fname`, `lname`, `contact`, `address`, `about`, `username`, `password`, `imgtitle`, `imgfile`, `user_type`, `actions`, `stat`, `varcode`, `gender`) VALUES
	(361, 'new', 'User', '09128126632', 'Payao Binalbagan Negros Occidental', 'Hi', 'y', 'y', '129983662', 'Ez09032023071202.png', 3, 1, 0, 0, 'Male'),
	(362, 'Juan', 'Dela Cruz', '09139818736', 'Metro Manila Philippines', 'I\'m Juan Dela Cruz from manila and i want to manage my farm using this website to make everything\'s easy', 'juan', 'juan', '27735521', 'Dela_Cruz09032023093357.png', 2, 0, 0, 0, 'Female'),
	(365, 'Tst', 'M-Test', '09716328815', 'Libacao Himamaylan City Negros Occidental', 'Nothing', 'testing', 'testing', '118376223', 'M-Test11032023125226.png', 2, 1, 0, 0, 'Male'),
	(366, 'zee', 'Test', '0939123761', 'Libacao Himamaylan City Negros Occidental', '?', 'tyrone', 'tyrone', '1442613472', 'Test11032023131841.jpg', 2, 0, 0, 0, 'Male'),
	(367, 'Test', 'Test', '939123761', 'Libacao Himamaylan City Negros Occidental', 'Hi, my name is name and ....', 'ad', 'ad', '8836615272', 'Test13032023075326.png', 2, 1, 0, 0, 'Male'),
	(368, 'wed', 'fau', '0923567', 'sitio serena', '???', 'member', '1234', '1234', 'fau18032023100102.png', 2, 1, 0, 0, 'Male'),
	(369, 'samp', 'samp', 's', 's', 'fgbnjh ', 'addd', 'add', 'ggtr54d5', 'samp22042023103638.jpg', 2, 1, 0, 0, 'Male'),
	(370, 'Weddy', 'Faustino', '09686667874', 'Sitio serena Brgy. Enclaro Binalbagan', 'Testing', 'Wed', '1234', '1234', 'Faustino13052023044118.png', 2, 1, 0, 0, 'Female'),
	(371, 'Kapitan', 'Kawayan', '0912817632', 'Anahaw Hinigaran', 'ako kapitan sng anahaw', 'admin', 'admin', '1234', 'Kawayan27052023111632.jpg', 1, 1, 0, 0, 'Female'),
	(372, 'Male', '3', '923163552', 'adsd', 'sadasdas', 'da', 'da', '2312312', '312112023121045.png', 2, 0, 0, 0, 'Male'),
	(373, 'Test', '3', '923163552', 'adsd', 'sadas', 'admin1', 'admin1', '2312312', '312112023121141.jpg', 2, 0, 0, 0, 'Male'),
	(374, 'Tyr', 'emz', '91043756433', '111', 'tell', 'oo', 'oo', '2382741232', 'Single17112023030617.png', 2, 1, 0, 0, 'Female'),
	(375, 'Tyr', 'Emzy', '91043756433', '111', 'tell', 'aa', 'aa', '2382741232', 'Single17112023030720.png', 2, 0, 0, 0, 'Male'),
	(381, 'ron', 's', '09239182', 'Libacao', 'sadas', 'ddd', 'ddd', '34234', 's06122023025917.jpg', 2, 0, 0, 0, 'Male'),
	(382, 'ron', 's', '09239182', 'Libacao', 'sadas', 'ooo', 'ooo', '34234', 's06122023030017.jpg', 2, 0, 0, 0, 'Female'),
	(383, 'First', 'Last', '0982371632', 'address', 'me', 'h', 'h', '1213123', 'Last11012024144534.jpg', 2, 0, 0, 0, 'Male');

-- Dumping structure for table farm.user_type
CREATE TABLE IF NOT EXISTS `user_type` (
  `type_id` int(11) DEFAULT NULL,
  `type_title` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table farm.user_type: ~3 rows (approximately)
INSERT INTO `user_type` (`type_id`, `type_title`) VALUES
	(1, 'admin'),
	(2, 'user'),
	(3, 'por');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
