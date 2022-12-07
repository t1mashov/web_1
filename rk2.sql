-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2022 г., 19:20
-- Версия сервера: 5.7.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rk2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `img_link` text COLLATE utf8mb4_unicode_ci,
  `real_count` int(11) DEFAULT NULL,
  `struct` text COLLATE utf8mb4_unicode_ci,
  `price` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `img_link`, `real_count`, `struct`, `price`) VALUES
(1, 'Торт «Молочная девочка»', 'Необычайно нежный и вкусный торт «Молочная девочка» приготовить очень быстро и просто. Этот рецепт не займет много вашего времени и усилий, зато результат порадует всех. Нежные, мягкие коржи на сгущенном молоке в сочетании с кремом из сливок и сгущенки, по вкусу напоминающим сливочное мороженое. Перед этим тортом устоять невозможно!', 'https://img1.russianfood.com/dycontent/images_upl/351/sm_350741.jpg', 13, 'молоко сгущенное, яйца, соль, мука пшеничная, разрыхлитель, масло сливочное, сливки, молоко сгущенное, сахар ванильный, ягоды свежи', 950),
(2, 'Шоколадный торт «Стаканчиковый» с творожно-сметанным кремом', 'Очень вкусный и нежный шоколадный торт «Стаканчиковый», который можно приготовить без использования весов. Торт очень простой в приготовлении, его можно очень быстро сделать в домашних условиях, ведь, скорее всего, все ингредиенты уже есть у Вас в холодильнике. Коржи получаются влажными и пористыми. Крем нежный и воздушный, а глазурь мегашоколадная!', 'https://img1.russianfood.com/dycontent/images_upl/412/sm_411422.jpg', 6, 'кефир, яйца, сахар, мука, разрыхлитель, какао-порошок, масло растительное, соль, творог, сметана, сахар, сахар ванильный, сметана, сахар, какао-порошок, масло сливочное', 1200),
(3, 'Торт \"Бисквитное чудо\"', 'Такой лёгкий, вкусный и быстрый бисквитный тортик со сметанным кремом и бананами спасёт любую хозяйку за полчаса!', 'https://img1.russianfood.com/dycontent/images_upl/106/sm_105578.jpg', 8, 'яйца, мука, сахар, сахар, сахар ванильный, разрыхлитель, какао-порошок, банан, сметана', 1050),
(4, 'Торт \"Сникерс\"', 'Вкусный, очень сытный, мегашоколадный торт \"Сникерс\" с арахисом и солёной карамелью.', 'https://img1.russianfood.com/dycontent/images_upl/290/sm_289521.jpg', 10, 'мука, яйца, сахар, какао-порошок, масло растительное, молоко, кофе растворимый, кипяток, разрыхлитель, сода, шоколад черный, сливки, молоко', 1100);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
