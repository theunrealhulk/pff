-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
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


-- Dumping database structure for pm
DROP DATABASE IF EXISTS `pm`;
CREATE DATABASE IF NOT EXISTS `pm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pm`;

-- Dumping data for table pm.assignments: ~8 rows (approximately)
DELETE FROM `assignments`;
INSERT INTO `assignments` (`Id`, `Name`, `Description`, `UserId`, `ProjectId`, `StatusId`, `DueDate`, `isDeleted`) VALUES
	(1, 'add Assignment to db', '', 20, 1, 4, '2023-05-20 00:00:00.000000', 0),
	(2, 'add Active Assignments', '', 20, 1, 2, '2023-05-26 00:00:00.000000', 0),
	(3, 'edit project', '', 20, 1, 1, '2023-05-22 00:00:00.000000', 0),
	(4, 'revise mesurments', '', 20, 2, 1, '2023-05-20 00:00:00.000000', 0),
	(5, 'demo', '', 7, 6, 1, '2023-06-04 00:00:00.000000', 0),
	(6, 'authenticate user and generate tokens', '', 20, 3, 1, '2023-05-20 00:00:00.000000', 0),
	(7, 'delete me too', '', 13, 4, 1, '2023-05-27 00:00:00.000000', 1),
	(8, 'finished task', 'finished task details ....', 13, 10, 4, '2024-03-04 00:00:00.000000', 0);

-- Dumping data for table pm.journals: ~0 rows (approximately)
DELETE FROM `journals`;

-- Dumping data for table pm.projects: ~10 rows (approximately)
DELETE FROM `projects`;
INSERT INTO `projects` (`Id`, `Name`, `UserId`, `DueDate`, `IsArchived`, `CreatedAt`, `UpdatedAt`, `isDeleted`) VALUES
	(1, 'make PEF project', 20, '2023-05-31 00:00:00.000000', 0, '2023-05-19 07:28:44', '2023-05-19 07:28:44', 0),
	(2, 'vr visual therapy', 20, '2023-05-26 00:00:00.000000', 0, '2023-05-19 07:41:14', '2023-05-19 07:41:14', 0),
	(3, 'make web App ASP back end Angular Front', 20, '2023-05-27 00:00:00.000000', 0, '2023-05-19 07:56:17', '2023-05-19 07:56:17', 0),
	(4, 'overdue', 20, '2023-05-18 00:00:00.000000', 0, '2023-05-19 09:11:07', '2023-05-19 09:11:07', 0),
	(5, 'Today', 20, '2023-05-19 00:00:00.000000', 0, '2023-05-19 09:12:33', '2023-05-19 09:12:33', 1),
	(6, 'this week', 20, '2023-05-20 00:00:00.000000', 0, '2023-05-19 09:13:17', '2023-05-19 09:13:17', 1),
	(7, 'project Q', 2, '2023-05-19 00:00:00.000000', 0, '2023-05-19 09:34:29', '2023-05-19 09:34:29', 0),
	(8, 'goal keeper', 22, '2023-05-20 00:00:00.000000', 0, '2023-05-19 09:54:03', '2023-05-19 09:54:03', 0),
	(9, 'delete me', 20, '2023-05-27 00:00:00.000000', 0, '2023-05-20 13:56:41', '2023-05-20 13:56:41', 1),
	(10, 'finished project', 20, '2023-06-03 00:00:00.000000', 1, '2023-05-20 15:00:23', '2023-05-20 15:00:23', 0);

-- Dumping data for table pm.roles: ~2 rows (approximately)
DELETE FROM `roles`;
INSERT INTO `roles` (`Id`, `Label`) VALUES
	(1, 'manager'),
	(2, 'assignee');

-- Dumping data for table pm.statuses: ~4 rows (approximately)
DELETE FROM `statuses`;
INSERT INTO `statuses` (`Id`, `Label`) VALUES
	(1, 'TODO'),
	(2, 'IN PROGRESS'),
	(3, 'ON HOLD'),
	(4, 'FINISHED');

-- Dumping data for table pm.users: ~12 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`Id`, `Username`, `Email`, `Password`, `RoleId`) VALUES
	(2, 'qorok', 'qorok@mailinator.com', '123', 1),
	(3, 'bimixepyw', 'bimixepyw@mailinator.com', 'Pa$$w0rd!', 1),
	(4, 'tusiciri', 'tusiciri@mailinator.com', 'Pa$$w0rd!', 1),
	(5, 'hivoh', 'hivoh@mailinator.com', 'Pa$$w0rd!', 1),
	(6, 'fyjygyh', 'fyjygyh@mailinator.com', 'Pa$$w0rd!', 1),
	(7, 'butixyxo', 'butixyxo@mailinator.com', 'Pa$$w0rd!', 1),
	(13, 'myra', 'myra@mailinator.com', 'Pa$$w0rd!', 1),
	(17, 'hynuqa', 'hynuqa@mailinator.com', 'Pa$$w0rd!', 1),
	(20, 'kulatos', 'kulatos@mailinator.com', 'Pa$$w0rd!', 1),
	(21, 'dozigod', 'dozigod@mailinator.com', 'Pa$$w0rd!', 1),
	(22, 'bono', 'bono@mailinator.com', 'Pa$$w0rd!', 1),
	(23, 'pigudu', 'pigudu@mailinator.com', 'Pa$$w0rd!', 1);

-- Dumping data for table pm.__efmigrationshistory: ~0 rows (approximately)
DELETE FROM `__efmigrationshistory`;
INSERT INTO `__efmigrationshistory` (`MigrationId`, `ProductVersion`) VALUES
	('20230518094540_initial migration', '7.0.5');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
