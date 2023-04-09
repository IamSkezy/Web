-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 09 2023 г., 04:19
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sportfitness`
--

-- --------------------------------------------------------

--
-- Структура таблицы `achievements`
--

CREATE TABLE `achievements` (
  `achievement_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `achievement_date` varchar(100) NOT NULL,
  `achievement_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `achievements`
--

INSERT INTO `achievements` (`achievement_id`, `trainer_id`, `client_id`, `achievement_date`, `achievement_type`) VALUES
(1, 1, 1, '2023-04-05', 'Трудяга'),
(2, 1, 2, '05-04-2023', 'Ответственный клиент');

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_address` varchar(200) NOT NULL,
  `admin_phone` varchar(20) NOT NULL,
  `admin_login` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_address`, `admin_phone`, `admin_login`, `admin_password`) VALUES
(1, 'Пескова Наталья Александровна', 'peskova@gmail.com', 'г. Нижний Новгород, ул. Студенческая, д. 1', '89001003545', 'peskova_admin', 'peskova_admin');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_address` varchar(200) NOT NULL,
  `client_phone` varchar(20) NOT NULL,
  `client_login` varchar(100) NOT NULL,
  `client_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_email`, `client_address`, `client_phone`, `client_login`, `client_password`) VALUES
(1, 'Ануфриев Дмитрий Олегович', 'iamanufriev@gmail.com', 'г. Нижний Новгород, ул. Советской армии, д. 8', '89108765249', 'skezy', 'amid0202'),
(2, 'Сироткин Данил Александрович', 'sirotkin@gmail.com', 'г. Нижний Новгород, ул. Советской армии, д. 8', '89041647929', 'sirons', 'sirotkin');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_description` varchar(300) NOT NULL,
  `course_src` varchar(200) NOT NULL,
  `course_cost` varchar(20) NOT NULL,
  `course_time` varchar(40) NOT NULL,
  `trainer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_src`, `course_cost`, `course_time`, `trainer_id`) VALUES
(1, 'Пауэрлифтинг', 'Пауэрлифтинг — это силовой вид спорта, который состоит из трех попыток с максимальным весом в трех упражнениях: приседаниях, жиме лежа и становой тяге. Как и в олимпийской тяжелой атлетике, спортсмен пытается поднять максимальный вес штанги, нагруженной блинами, с максимальным весом.', 'resourses/training-image-01.jpg', '1200', '10:00 - 11:30', 1),
(2, 'Легкая атлетика', 'Лёгкая атле́тика — олимпийский вид спорта, включающий бег, ходьбу, прыжки и метания. Объединяет следующие дисциплины: беговые виды, спортивную ходьбу, технические виды, многоборья, пробеги и кроссы. Один из основных и наиболее массовых видов спорта.', 'resourses/training-image-02.jpg', '600', '12:00 - 13:30', 2),
(3, 'Cross-fit', 'Кроссфит — брендированная система физической подготовки. Зарегистрирована в качестве торговой марки корпорацией CrossFit, Inc, основанной Грегом Глассманом и Лорен Дженай в 2000 году. Продвигается и как система физических упражнений, и как соревновательный вид спорта.', 'resourses/training-image-03.jpg', '1500', '14:00 - 15:30', 3),
(4, 'Йога', 'Йога — это очень древняя практика для поиска целостности в занятиях и в жизни. Йога состоит из асан, дыхательных техник и медитаций, поэтому развивает человека всесторонне — через тело, ум и эмоции. Хотя изначально йога — это духовная практика, в больших городах духовность занимает её малую часть.', 'resourses/training-image-04.jpg', '1000', '16:00 - 17:30', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `days`
--

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL,
  `day_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `days`
--

INSERT INTO `days` (`day_id`, `day_name`) VALUES
(1, 'Понедельник'),
(2, 'Вторник'),
(3, 'Среда'),
(4, 'Четверг'),
(5, 'Пятница'),
(6, 'Суббота'),
(7, 'Воскресенье');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message_date` varchar(100) NOT NULL,
  `message_message` varchar(300) NOT NULL,
  `message_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`message_id`, `trainer_id`, `client_id`, `message_date`, `message_message`, `message_from`) VALUES
(5, 1, 1, '2023-04-05', 'Отлично сегодня позанимались, молодец!', 'тренер'),
(6, 1, 1, '2023-04-05', 'Вы отличный тренер!', 'клиент');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `trainer_id`, `client_id`, `course_id`) VALUES
(11, 3, 1, 3),
(14, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `schedules`
--

CREATE TABLE `schedules` (
  `schedule_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `schedule_time` varchar(20) NOT NULL,
  `schedule_cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `day_id`, `course_id`, `trainer_id`, `schedule_time`, `schedule_cost`) VALUES
(1, 1, 1, 1, '10:00 - 11:30', '1200'),
(2, 1, 2, 2, '-', '600'),
(3, 1, 3, 3, '14:00 - 15:30', '1500'),
(4, 1, 4, 4, '16:00 - 17:30', '1000'),
(5, 2, 1, 1, '-', '1200'),
(6, 2, 2, 2, '12:00 - 13:30', '600'),
(7, 2, 3, 3, '-', '1500'),
(8, 2, 4, 4, '16:00 - 17:30', '1000'),
(9, 3, 1, 1, '10:00 - 11:30', '1200'),
(10, 3, 2, 2, '-', '600'),
(11, 3, 3, 3, '14:00 - 15:30', '1500'),
(12, 3, 4, 4, '-', '1000'),
(13, 4, 1, 1, '-', '1200'),
(14, 4, 2, 2, '12:00 - 13:30', '600'),
(15, 4, 3, 3, '-', '1500'),
(16, 4, 4, 4, '16:00 - 17:30', '1000'),
(17, 5, 1, 1, '10:00 - 11:30', '1200'),
(18, 5, 2, 2, '12:00 - 13:30', '600'),
(19, 5, 3, 3, '14:00 - 15:30', '1500'),
(20, 5, 4, 4, '16:00 - 17:30', '1000');

-- --------------------------------------------------------

--
-- Структура таблицы `trainers`
--

CREATE TABLE `trainers` (
  `trainer_id` int(11) NOT NULL,
  `trainer_name` varchar(100) NOT NULL,
  `trainer_email` varchar(100) NOT NULL,
  `trainer_address` varchar(200) NOT NULL,
  `trainer_phone` varchar(20) NOT NULL,
  `trainer_type` varchar(20) NOT NULL,
  `trainer_description` varchar(200) NOT NULL,
  `trainer_src` varchar(200) NOT NULL,
  `trainer_login` varchar(100) NOT NULL,
  `trainer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `trainers`
--

INSERT INTO `trainers` (`trainer_id`, `trainer_name`, `trainer_email`, `trainer_address`, `trainer_phone`, `trainer_type`, `trainer_description`, `trainer_src`, `trainer_login`, `trainer_password`) VALUES
(1, 'Миронов Виктор', 'mironov_victor@gmail.com', 'г. Нижний Новгород, пр. Ленина, д. 60', '84951230965', 'Силовой тренер', 'Отличный тренер с многолетним опытом тренировок, идеально подходит как для новичков, так и для опытных спортсменов.', 'resourses/trainer1.jpg', 'mironov_login', 'mironov_password'),
(2, 'Сидоров Дмитрий', 'sidorov_dmitry@gmail.com', 'г. Нижний Новгород, ул. Максима Горького, д. 18', '89081539408', 'Силовой тренер', 'Отличный тренер с многолетним опытом тренировок, идеально подходит как для новичков, так и для опытных спортсменов.', 'resourses/trainer2.jpg', 'sidorov_login', 'sidorov_password'),
(3, 'Шестаков Степан', 'shestakov_stepan@gmail.com', 'г. Нижний Новгород, ул. Краснодонцев, д. 2', '89207654931', 'Силовой тренер', 'Отличный тренер с многолетним опытом тренировок, идеально подходит как для новичков, так и для опытных спортсменов.', 'resourses/trainer3.jpg', 'shestakov_login', 'shestakov_password'),
(4, 'Жуков Илья', 'jukov_ilya@gmail.com', 'г. Нижний Новгород, ул. Минина, д. 34', '89106501166', 'Силовой тренер', 'Отличный тренер с многолетним опытом тренировок, идеально подходит как для новичков, так и для опытных спортсменов.', 'resourses/trainer4.jpg', 'jukov_login', 'jukov_password');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`achievement_id`),
  ADD KEY `trainer_id` (`trainer_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Индексы таблицы `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day_id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `trainer_id` (`trainer_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `trainer_id` (`trainer_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Индексы таблицы `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `day_id` (`day_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Индексы таблицы `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`trainer_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `achievements`
--
ALTER TABLE `achievements`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `days`
--
ALTER TABLE `days`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `trainers`
--
ALTER TABLE `trainers`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `achievements_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`trainer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_2` FOREIGN KEY (`day_id`) REFERENCES `days` (`day_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
