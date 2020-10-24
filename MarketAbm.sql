-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2020 г., 21:14
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MarketAbm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`title`, `description`, `img`, `price`) VALUES
('СНОУБОРД', 'Lib tech SKATE BANANA BTX', 'pro1.jpg', '34 000 ₽'),
('СНОУБОРД', 'DC BIDDY J SNBD', 'pro2.jpg', '16 000 ₽'),
('БОТИНКИ ДЛЯ СНОУБОРДА', 'Vans WM ENCORE', 'pro3.png', '9 230 ₽'),
('Ботинки', 'Burton x25r ', 'pro4.jpg', '15000руб.'),
('Маска', 'Electric EGX', 'pro8.jpg', '10 040 ₽'),
('ШЛЕМ ', 'Anon GRETA', 'pro6.jpg', '3 660 ₽'),
('ШЛЕМ ', 'SANDBOX CLASSIC 2.0 SNOW', 'pro5.jpg', '7000руб.'),
('КУРТКА ', 'RattleSnake STRAIGHT TWO TONE ', 'pro9.jpg', '6 820 ₽');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
