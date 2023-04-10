-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2023 г., 13:34
-- Версия сервера: 8.0.29
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `business_school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `ID_category` int NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`ID_category`, `name_category`) VALUES
(1, 'Информационные технологии'),
(2, 'Инженерные науки'),
(3, 'Образование');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `ID_client` int NOT NULL,
  `full_name_client` varchar(50) NOT NULL,
  `date_client` date NOT NULL,
  `series` int NOT NULL,
  `passport_number` int NOT NULL,
  `education` varchar(255) NOT NULL,
  `pol` varchar(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`ID_client`, `full_name_client`, `date_client`, `series`, `passport_number`, `education`, `pol`, `phone`, `address`, `email`) VALUES
(1, 'Павлова Кристина Романовна', '1994-06-23', 4167, 427228, 'высшее', 'Ж', '+7 (965) 697-38-82', 'Россия, г. Севастополь, Набережная ул., д. 14 кв.113', 'anthony75@mail.com'),
(2, 'Парфенов Даниил Леонидович', '2002-06-28', 4141, 841389, 'среднее профессиональное', 'М', '+7 (929) 538-54-46', 'Россия, г. Березники, Центральная ул., д. 15 кв.138', ''),
(3, 'Шевелева Алиса Ивановна', '1995-05-16', 4575, 874442, 'среднее профессиональное', 'Ж', '+7 (905) 466-31-60', 'Россия, г. Ногинск, Мичурина ул., д. 7 кв.208', ''),
(4, 'Кулаков Никита Ярославович', '1990-06-10', 4773, 540667, 'высшее', 'М', '+7 (954) 675-31-34', 'Россия, г. Симферополь, Вокзальная ул., д. 4 кв.147', 'wboehm@mail.com'),
(5, 'Лебедев Кирилл Дмитриевич', '2002-11-07', 4727, 138386, 'нет', 'М', '+7 (960) 807-69-33', 'Россия, г. Петропавловск-Камчатский, Садовый пер., д. 6 кв.37', ''),
(6, 'Кононов Михаил Евгеньевич', '1997-04-24', 4985, 349521, 'начальное профессиональное', 'М', '+7 (909) 833-65-77', 'Россия, г. Пенза, Ленина ул., д. 15 кв.163', '');

-- --------------------------------------------------------

--
-- Структура таблицы `form`
--

CREATE TABLE `form` (
  `ID_form` int NOT NULL,
  `name_form` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `form`
--

INSERT INTO `form` (`ID_form`, `name_form`) VALUES
(1, 'Очная'),
(2, 'Заочная'),
(3, 'Очно-заочная'),
(4, 'Дистанционная');

-- --------------------------------------------------------

--
-- Структура таблицы `program`
--

CREATE TABLE `program` (
  `ID_program` int NOT NULL,
  `name_program` varchar(255) NOT NULL,
  `ID_category` int NOT NULL,
  `ID_type` int NOT NULL,
  `ID_form` int NOT NULL,
  `ID_type_doc` int NOT NULL,
  `ID_teacher` int NOT NULL,
  `count_hour` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `program`
--

INSERT INTO `program` (`ID_program`, `name_program`, `ID_category`, `ID_type`, `ID_form`, `ID_type_doc`, `ID_teacher`, `count_hour`) VALUES
(1, 'ИУ7', 3, 1, 1, 4, 1, 500),
(2, 'ИУ6', 2, 2, 2, 1, 1, 300),
(3, 'ИУ5', 1, 1, 3, 2, 2, 200),
(4, 'ИУ4', 2, 2, 4, 3, 2, 350),
(5, 'ИУ3', 1, 1, 3, 2, 2, 150);

-- --------------------------------------------------------

--
-- Структура таблицы `schedule`
--

CREATE TABLE `schedule` (
  `ID_schedule` int NOT NULL,
  `ID_program` int NOT NULL,
  `date_start_s` date NOT NULL,
  `date_end_s` date NOT NULL,
  `max_count_listener` int NOT NULL,
  `actual_count_listener` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `schedule`
--

INSERT INTO `schedule` (`ID_schedule`, `ID_program`, `date_start_s`, `date_end_s`, `max_count_listener`, `actual_count_listener`) VALUES
(1, 1, '2023-01-25', '2024-01-25', 200, 1),
(2, 5, '2023-02-03', '2023-09-21', 50, 2),
(3, 2, '2023-02-03', '2024-07-10', 100, 1),
(4, 4, '2023-04-05', '2025-08-16', 120, 1),
(5, 3, '2023-06-30', '2024-07-18', 50, 1),
(6, 5, '2023-02-03', '2023-04-03', 5, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `ID_teacher` int NOT NULL,
  `full_name_teacher` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `date_teacher` date NOT NULL,
  `work_exp` varchar(20) NOT NULL,
  `date_enter` date NOT NULL,
  `date_leave` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`ID_teacher`, `full_name_teacher`, `position`, `date_teacher`, `work_exp`, `date_enter`, `date_leave`) VALUES
(1, 'Киселев Иван Данилович', 'Преподаватель', '1997-06-13', '3 года 8 месяцев', '2021-03-03', NULL),
(2, 'Никифорова Анна Александровна', 'Преподаватель', '1980-02-02', '2 года 6 месяцев', '2021-09-02', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `teaching`
--

CREATE TABLE `teaching` (
  `ID_teaching` int NOT NULL,
  `ID_client` int NOT NULL,
  `ID_schedule` int NOT NULL,
  `number_doc` int DEFAULT NULL,
  `date_start_t` date NOT NULL,
  `date_end_t` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `teaching`
--

INSERT INTO `teaching` (`ID_teaching`, `ID_client`, `ID_schedule`, `number_doc`, `date_start_t`, `date_end_t`) VALUES
(1, 1, 2, 112233, '2023-02-06', '2023-11-16'),
(2, 2, 2, 1001, '2023-02-07', '2023-07-14'),
(3, 3, 2, NULL, '2023-02-09', NULL),
(4, 1, 6, NULL, '2023-02-11', NULL),
(5, 6, 5, NULL, '2023-02-23', NULL),
(6, 5, 3, NULL, '2023-02-25', NULL),
(7, 4, 4, NULL, '2023-02-21', NULL),
(8, 3, 1, NULL, '2023-02-15', NULL),
(9, 2, 6, NULL, '2023-02-14', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `ID_type` int NOT NULL,
  `name_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`ID_type`, `name_type`) VALUES
(1, 'Повышение квалификации'),
(2, 'Профессиональная переподготовка');

-- --------------------------------------------------------

--
-- Структура таблицы `type_doc`
--

CREATE TABLE `type_doc` (
  `ID_type_doc` int NOT NULL,
  `name_doc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `type_doc`
--

INSERT INTO `type_doc` (`ID_type_doc`, `name_doc`) VALUES
(1, 'Удостоверение'),
(2, 'Сертификат'),
(3, 'Свидетельство'),
(4, 'Диплом');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `ID_user` int NOT NULL,
  `full_name_user` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`ID_user`, `full_name_user`, `position`, `login`, `password`) VALUES
(1, 'Харламов И. К.', 'Директор', '333', '333'),
(2, 'Пручковский Н. Н.', 'Менеджер', '222', '222'),
(3, 'Кузнецов Н. В.', 'Методист', '111', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_category`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID_client`);

--
-- Индексы таблицы `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`ID_form`);

--
-- Индексы таблицы `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`ID_program`),
  ADD KEY `ID_category` (`ID_category`),
  ADD KEY `ID_type` (`ID_type`),
  ADD KEY `ID_form` (`ID_form`),
  ADD KEY `ID_type_doc` (`ID_type_doc`),
  ADD KEY `ID_teacher` (`ID_teacher`);

--
-- Индексы таблицы `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ID_schedule`),
  ADD KEY `ID_program` (`ID_program`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID_teacher`);

--
-- Индексы таблицы `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`ID_teaching`),
  ADD KEY `ID_client` (`ID_client`),
  ADD KEY `ID_schedule` (`ID_schedule`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID_type`);

--
-- Индексы таблицы `type_doc`
--
ALTER TABLE `type_doc`
  ADD PRIMARY KEY (`ID_type_doc`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `ID_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `ID_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `form`
--
ALTER TABLE `form`
  MODIFY `ID_form` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `program`
--
ALTER TABLE `program`
  MODIFY `ID_program` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ID_schedule` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID_teacher` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `teaching`
--
ALTER TABLE `teaching`
  MODIFY `ID_teaching` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `ID_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `type_doc`
--
ALTER TABLE `type_doc`
  MODIFY `ID_type_doc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`ID_form`) REFERENCES `form` (`ID_form`),
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`ID_category`) REFERENCES `category` (`ID_category`),
  ADD CONSTRAINT `program_ibfk_3` FOREIGN KEY (`ID_teacher`) REFERENCES `teacher` (`ID_teacher`),
  ADD CONSTRAINT `program_ibfk_4` FOREIGN KEY (`ID_type`) REFERENCES `type` (`ID_type`),
  ADD CONSTRAINT `program_ibfk_5` FOREIGN KEY (`ID_type_doc`) REFERENCES `type_doc` (`ID_type_doc`);

--
-- Ограничения внешнего ключа таблицы `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`ID_program`) REFERENCES `program` (`ID_program`);

--
-- Ограничения внешнего ключа таблицы `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `teaching_ibfk_2` FOREIGN KEY (`ID_schedule`) REFERENCES `schedule` (`ID_schedule`),
  ADD CONSTRAINT `teaching_ibfk_3` FOREIGN KEY (`ID_client`) REFERENCES `client` (`ID_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
