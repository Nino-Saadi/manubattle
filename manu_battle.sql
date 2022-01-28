
-- Création de la DBB

CREATE DATABASE IF NOT EXISTS `manu_battle` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `manu_battle`;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


#
# TABLE STRUCTURE FOR: grade
#


CREATE TABLE `grade` (
  `id_grade` int(11) NOT NULL AUTO_INCREMENT,
  `grd_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_grade`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `grade` (`id_grade`, `grd_name`) VALUES (1, 'a');
INSERT INTO `grade` (`id_grade`, `grd_name`) VALUES (2, 'est');
INSERT INTO `grade` (`id_grade`, `grd_name`) VALUES (3, 'possimus');
INSERT INTO `grade` (`id_grade`, `grd_name`) VALUES (4, 'eos');
INSERT INTO `grade` (`id_grade`, `grd_name`) VALUES (5, 'id');



#
# TABLE STRUCTURE FOR: FriendsWith
#


CREATE TABLE `FriendsWith` (
  `id_user` int(11) NOT NULL,
  `id_user_1` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_user_1`),
  KEY `id_user_1` (`id_user_1`),
  CONSTRAINT `FriendsWith_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id_user`),
  CONSTRAINT `FriendsWith_ibfk_2` FOREIGN KEY (`id_user_1`) REFERENCES `utilisateurs` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `FriendsWith` (`id_user`, `id_user_1`) VALUES (1, 4);
INSERT INTO `FriendsWith` (`id_user`, `id_user_1`) VALUES (2, 1);
INSERT INTO `FriendsWith` (`id_user`, `id_user_1`) VALUES (3, 5);
INSERT INTO `FriendsWith` (`id_user`, `id_user_1`) VALUES (4, 3);
INSERT INTO `FriendsWith` (`id_user`, `id_user_1`) VALUES (5, 1);



#
# TABLE STRUCTURE FOR: utilisateurs
#


CREATE TABLE `utilisateurs` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_score` int(11) DEFAULT NULL,
  `user_total_game` int(11) DEFAULT NULL,
  `user_total_win` int(11) DEFAULT NULL,
  `user_level` int(11) DEFAULT NULL,
  `user_race` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_grade` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_grade` (`id_grade`),
  CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`id_grade`) REFERENCES `grade` (`id_grade`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `utilisateurs` (`id_user`, `user_name`, `user_password`, `user_score`, `user_total_game`, `user_total_win`, `user_level`, `user_race`,`id_grade`) VALUES (1, 'skamposama', '$2y$10$RnzeUqJRYdPYon6pSJ3THeX3fb7AL6oGP4NN6Bb2eUQV.xgq7pTG.', 1, 80, 527, 7, 'elfe',1);
-- INSERT INTO `utilisateur` (`id_user`, `user_name`, `user_password`, `user_score`, `user_total_game`, `user_total_win`, `user_level`, `id_grade`) VALUES (2, 'madie.thompson', 'dljo', 4, 436, 814, 4, 2);
-- INSERT INTO `utilisateur` (`id_user`, `user_name`, `user_password`, `user_score`, `user_total_game`, `user_total_win`, `user_level`, `id_grade`) VALUES (3, 'fcummings', 'guoc', 7, 136, 549, 4, 3);
-- INSERT INTO `utilisateur` (`id_user`, `user_name`, `user_password`, `user_score`, `user_total_game`, `user_total_win`, `user_level`, `id_grade`) VALUES (4, 'colton59', 'pwtf', 1, 849, 891, 4, 4);
-- INSERT INTO `utilisateur` (`id_user`, `user_name`, `user_password`, `user_score`, `user_total_game`, `user_total_win`, `user_level`, `id_grade`) VALUES (5, 'orenner', 'mije', 5, 225, 478, 3, 5);



#
# TABLE STRUCTURE FOR: games
#


CREATE TABLE `games` (
  `id_games` int(11) NOT NULL AUTO_INCREMENT,
  `statut` tinyint(1) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_user_1` int(11) NOT NULL,
  `id_user_2` int(11) NOT NULL,
  PRIMARY KEY (`id_games`),
  KEY `id_user` (`id_user`),
  KEY `id_user_1` (`id_user_1`),
  KEY `id_user_2` (`id_user_2`),
  CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id_user`),
  CONSTRAINT `games_ibfk_2` FOREIGN KEY (`id_user_1`) REFERENCES `utilisateurs` (`id_user`),
  CONSTRAINT `games_ibfk_3` FOREIGN KEY (`id_user_2`) REFERENCES `utilisateurs` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (1, 1, 1, 3, 1);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (2, 0, 2, 1, 2);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (3, 1, 3, 4, 4);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (4, 0, 4, 1, 1);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (5, 0, 5, 2, 2);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (6, 1, 1, 3, 3);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (7, 0, 2, 4, 4);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (8, 1, 3, 5, 3);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (9, 0, 4, 5, 4);
INSERT INTO `games` (`id_games`, `statut`, `id_user`, `id_user_1`, `id_user_2`) VALUES (10, 1, 5, 1, 5);
