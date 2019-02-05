CREATE DATABASE IF NOT EXISTS `merckeypasser`;
USE `merckeypasser`;

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Password` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

CREATE TABLE IF NOT EXISTS `passwordkeys` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `Title` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Username` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Password` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Source` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `FK_passwordkeys_users` (`UserId`),
  CONSTRAINT `FK_passwordkeys_users` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;
