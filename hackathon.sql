-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 18 2021 г., 02:32
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
-- База данных: `hackathon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ankets`
--

CREATE TABLE `ankets` (
  `id` int(11) NOT NULL,
  `descr` varchar(1500) NOT NULL,
  `tools` varchar(1000) NOT NULL,
  `userid` int(50) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ankets`
--

INSERT INTO `ankets` (`id`, `descr`, `tools`, `userid`, `tag`, `name`) VALUES
(7, '2 курс it школы илларионова. занимаюсь html-разработкой, php, javascript, вообще на чем скажут на том и пишу, ищу опытных ребят, с которыми мне было весело работать вместе, безусловно я вас кину, когда меня позовут в  майтону', 'ECO forum; Red dep redetion; Space Z; Gloogl; Couter strik; Lama games; Four nights at Timur; Suetologia; Stack craft; Trinder; MPIT 2021; Kolch Music; WK; Mortal Cocomba; Zoor; Messenger Aska; Krisstalis ...\r\n', 5, 'programmer', 'Дима Васильев'),
(8, 'ECO forum; Red dep redetion; Space Z; Gloogl; Couter strik; Lama games; Four nights at Timur; Suetologia; Stack craft; Trinder; MPIT 2021; Kolch Music; WK; Mortal Cocomba; Zoor; Messenger Aska; Krisstalis ...\r\n\r\n', 'Figma; Aseprite; Python; Procrate; Abode photoshop...\r\n\r\n', 6, 'programmer', 'Николай Крылов'),
(9, '2 курс it школы илларионова. занимаюсь html-разработкой, php, javascript, вообще на чем скажут на том и пишу, ищу опытных ребят, с которыми мне было весело работать вместе, безусловно я вас кину, когда меня позовут в  майтону', 'ECO forum; Red dep redetion; Space Z; Gloogl; Couter strik; Lama games; Four nights at Timur; Suetologia; Stack craft; Trinder; MPIT 2021; Kolch Music; WK; Mortal Cocomba; Zoor; Messenger Aska; Krisstalis ...\r\n', 7, 'manager', 'Иван Яковлев'),
(10, '2 курс it школы илларионова. занимаюсь html-разработкой, php, javascript, вообще на чем скажут на том и пишу, ищу опытных ребят, с которыми мне было весело работать вместе, безусловно я вас кину, когда меня позовут в  майтону', 'ECO forum; Red dep redetion; Space Z; Gloogl; Couter strik; Lama games; Four nights at Timur; Suetologia; Stack craft; Trinder; MPIT 2021; Kolch Music; WK; Mortal Cocomba; Zoor; Messenger Aska; Krisstalis ...', 8, 'manager', 'Александр Степанов'),
(11, '2 курс it школы илларионова. занимаюсь html-разработкой, php, javascript, вообще на чем скажут на том и пишу, ищу опытных ребят, с которыми мне было весело работать вместе, безусловно я вас кину, когда меня позовут в  майтону', 'ECO forum; Red dep redetion; Space Z; Gloogl; Couter strik; Lama games; Four nights at Timur; Suetologia; Stack craft; Trinder; MPIT 2021; Kolch Music; WK; Mortal Cocomba; Zoor; Messenger Aska; Krisstalis ...\r\n', 9, 'disigner', 'Алексей череп'),
(12, '2 курс it школы илларионова. занимаюсь html-разработкой, php, javascript, вообще на чем скажут на том и пишу, ищу опытных ребят, с которыми мне было весело работать вместе, безусловно я вас кину, когда меня позовут в  майтону', 'ECO forum; Red dep redetion; Space Z; Gloogl; Couter strik; Lama games; Four nights at Timur; Suetologia; Stack craft; Trinder; MPIT 2021; Kolch Music; WK; Mortal Cocomba; Zoor; Messenger Aska; Krisstalis ...', 10, 'disigner', 'Марат Шитик'),
(13, 'ыывфывфывфывфыв', 'фывфывфысвымсмуфквафывауф', 11, 'менеджер', 'Иван');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(5, 'Robo', '1234567890'),
(6, 'ListraiD', '123'),
(7, 'ivan', 'medved228'),
(8, 'stalex', '322'),
(9, 'alex_na', '1'),
(10, 'Keyton', '223'),
(11, 'vanya', '56');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ankets`
--
ALTER TABLE `ankets`
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
-- AUTO_INCREMENT для таблицы `ankets`
--
ALTER TABLE `ankets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
