-- phpMyAdmin SQL Dump
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+06:00";

--
-- Создаем Базу данных "gamecenter"
--
CREATE DATABASE gamecenter;


--
-- СОЗДАЕМ ТАБЛИЦУ "games"
--
USE gamecenter;
/*drop table games;*/

CREATE TABLE `games` (
  `id` int(11) NOT NULL,					/*--идентификатор записи;*/
  `rating` int(2),							/*--рейтинг и игры из ТОП 100;*/
  `title` varchar(50) NOT NULL,				/*--наименование игры;*/
  
  `release_date` date NOT NULL,				/*--дата выхода игры;*/
  `link_info` varchar(255) NOT NULL,		/*--ссылка на локальную страницу с описанием игры;*/
  `link_shop` varchar(255)					/*--ссылка на магазин для покупки;*/
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- ЗАПОЛНЯЕМ ТАБЛИЦУ "games" начальными данными
--
USE gamecenter;

INSERT INTO `games` (`id`, `rating`, `title`, `release_date`, `link_info`, `link_shop`) VALUES
	(1, 1, "Mass Effect", "2012-03-06", "/games/mass-effect.php", "https://store.steampowered.com/app/1238020/Mass_Effect_3/"),
	(2, 2, "Dead Space", "2013-02-05", "/games/dead-space.php", "https://store.steampowered.com/app/1238060/Dead_Space_3/"),
	(3, 3, "Dying Light", "2015-01-26", "/games/dying-light.php", "https://store.steampowered.com/app/239140/Dying_Light_Enhanced_Edition/"),
	(4, 4, "Prey (2006)", "2006-07-11", "/games/prey-2006.php", "https://steamcommunity.com/app/3970");


--
-- ДОБАВЛЯЕМ ИНДЕКСЫ К ТАБЛИЦАМ
--

--
-- Индексы таблицы "games"
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);


--
-- ДОБАВЛЯЕМ AUTO_INCREMENT по полю id
--

--
-- AUTO_INCREMENT для таблицы "games"
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
  
--
-- COMMIT TRANSACTION
--
COMMIT;
