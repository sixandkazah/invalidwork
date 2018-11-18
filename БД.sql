-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 18 2018 г., 10:45
-- Версия сервера: 5.7.16
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `everland`
--

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `group_desc` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_desc`) VALUES
(1, 'Модератор', 'Модератор'),
(2, 'Соискатель', 'Соискатель'),
(3, 'Наставник', 'Наставник'),
(4, 'Заказчик', 'Заказчик');

-- --------------------------------------------------------

--
-- Структура таблицы `invites`
--

CREATE TABLE `invites` (
  `invite_id` int(11) NOT NULL,
  `invite_code` text NOT NULL,
  `invite_status` int(1) NOT NULL DEFAULT '1',
  `invite_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `invites`
--

INSERT INTO `invites` (`invite_id`, `invite_code`, `invite_status`, `invite_group_id`) VALUES
(3, '111111', 2, 1),
(4, '222221', 2, 2),
(5, '222222', 2, 2),
(6, '333331', 2, 3),
(7, '333332', 1, 3),
(8, '444441', 2, 4),
(9, '444442', 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `invite_statuses`
--

CREATE TABLE `invite_statuses` (
  `status_id` int(11) NOT NULL,
  `status_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `invite_statuses`
--

INSERT INTO `invite_statuses` (`status_id`, `status_name`) VALUES
(1, 'Активный'),
(2, 'Активированный');

-- --------------------------------------------------------

--
-- Структура таблицы `mentors`
--

CREATE TABLE `mentors` (
  `mentors_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `invalid_id` int(11) NOT NULL,
  `mentor_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mentors`
--

INSERT INTO `mentors` (`mentors_id`, `mentor_id`, `invalid_id`, `mentor_status`) VALUES
(2, 9, 10, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(40) NOT NULL,
  `menu_link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_link`) VALUES
(1, 'Главная', ''),
(2, 'Заказы', 'taskboard');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`) VALUES
(25, '[]'),
(26, '[]'),
(27, '[]'),
(28, '[]'),
(29, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(30, '[]'),
(31, '[]'),
(32, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(33, '[]'),
(34, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(35, '[]'),
(36, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(37, '[]'),
(38, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(39, '[]'),
(40, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(41, '[]'),
(42, '{\"login\":\"Zhenya\",\"password\":\"Toxic\"}'),
(43, 'Array'),
(44, 'Array'),
(45, 'Array'),
(46, 'Array'),
(47, '{\"email\":\"ilya@gmail.com\",\"password\":\"ask3Klo1\"}'),
(48, '{\"email\":\"ilya@gmail.com\",\"password\":\"ask3Klo1\"}'),
(49, '{\"email\":\"ilya@gmail.com\",\"password\":\"ask3Klo1\"}'),
(50, '{\"email\":\"ilya@gmail.com\",\"password\":\"ask3Klo1\"}'),
(51, '{\"email\":\"ilya@gmail.com\",\"password\":\"ask3Klo1\"}'),
(52, '{\"huy\":\"pizda\",\"pizda\":\"huy\"}'),
(53, '{\"huy\":\"pizda\",\"pizda\":\"huy\"}'),
(54, '{\"huy\":\"pizda\",\"pizda\":\"huy\"}'),
(55, '{\"darov\":\"privet\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `prof`
--

CREATE TABLE `prof` (
  `prof_id` int(11) NOT NULL,
  `prof_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `prof`
--

INSERT INTO `prof` (`prof_id`, `prof_name`) VALUES
(1, 'WEB'),
(2, 'DESIGN');

-- --------------------------------------------------------

--
-- Структура таблицы `prof_test`
--

CREATE TABLE `prof_test` (
  `prof_test_id` int(11) NOT NULL,
  `prof_test_user_id` int(11) NOT NULL,
  `prof_test_result` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `psycho_test`
--

CREATE TABLE `psycho_test` (
  `psycho_test_id` int(11) NOT NULL,
  `psycho_test_result` text NOT NULL,
  `psycho_test_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `psycho_test`
--

INSERT INTO `psycho_test` (`psycho_test_id`, `psycho_test_result`, `psycho_test_user_id`) VALUES
(9, '1', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `psycho_types`
--

CREATE TABLE `psycho_types` (
  `psycho_type_id` int(11) NOT NULL,
  `psycho_type_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_from_executor` int(11) NOT NULL,
  `rating_from_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `shared_tasks`
--

CREATE TABLE `shared_tasks` (
  `shared_task_id` int(11) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `invalid_id` int(11) NOT NULL,
  `shared_task_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `shared_tasks_statuses`
--

CREATE TABLE `shared_tasks_statuses` (
  `status_id` int(11) NOT NULL,
  `status_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shared_tasks_statuses`
--

INSERT INTO `shared_tasks_statuses` (`status_id`, `status_name`) VALUES
(1, 'Предложен'),
(2, 'Отклонён');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `task_desc` text NOT NULL,
  `task_company` text NOT NULL,
  `task_status_id` int(11) NOT NULL DEFAULT '1',
  `task_customer_id` int(11) DEFAULT NULL,
  `task_executor_id` int(11) NOT NULL,
  `task_date` date NOT NULL,
  `task_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_desc`, `task_company`, `task_status_id`, `task_customer_id`, `task_executor_id`, `task_date`, `task_price`) VALUES
(1, 'Сделать сайт', 'Доделать готовый сайт', 'Газпром', 5, 10, 11, '2018-11-18', 10000);

-- --------------------------------------------------------

--
-- Структура таблицы `task_notes`
--

CREATE TABLE `task_notes` (
  `note_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `task_statuses`
--

CREATE TABLE `task_statuses` (
  `status_id` int(11) NOT NULL,
  `status_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task_statuses`
--

INSERT INTO `task_statuses` (`status_id`, `status_name`) VALUES
(1, 'Премодерация'),
(2, 'Опубликован'),
(3, 'Принят'),
(4, 'Закрыт'),
(5, 'Запрошен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_surname` varchar(60) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_patronymic` varchar(60) NOT NULL,
  `user_login` varchar(60) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_problem` varchar(30) DEFAULT NULL,
  `user_invite_id` int(50) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `user_prof_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_surname`, `user_name`, `user_patronymic`, `user_login`, `user_password`, `user_email`, `user_problem`, `user_invite_id`, `user_group_id`, `user_prof_id`) VALUES
(8, 'Bykov', 'Pavel', 'Andreevich', 'exellentguy', '0b589bc82064ee82c2d8dbcbc9f7c63d', 'exelllentguy@gmail.com', NULL, 3, 1, 1),
(9, 'Bykov', 'Pavel', 'Andreevich', 'exelllentguy', '0b589bc82064ee82c2d8dbcbc9f7c63d', 'exelllentguy@gmail.com', NULL, 6, 3, 1),
(10, 'Pletenev', 'Maxim', 'Daniilovich', 'maxplt', '202cb962ac59075b964b07152d234b70', '12312@gmail.com', NULL, 4, 2, 1),
(11, 'Ten', 'Yury', 'Menovich', 'ten', '202cb962ac59075b964b07152d234b70', '12312@gmail.com', NULL, 8, 4, 1),
(12, '123123', '31231', '321', '123213', '202cb962ac59075b964b07152d234b70', '3123@mail.ru', NULL, 5, 2, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Индексы таблицы `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`invite_id`),
  ADD KEY `invites_ibfk_1` (`invite_group_id`);

--
-- Индексы таблицы `invite_statuses`
--
ALTER TABLE `invite_statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`mentors_id`),
  ADD KEY `mentor_id` (`mentor_id`),
  ADD KEY `invalid_id` (`invalid_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`prof_id`);

--
-- Индексы таблицы `prof_test`
--
ALTER TABLE `prof_test`
  ADD PRIMARY KEY (`prof_test_id`),
  ADD KEY `prof_test_ibfk_1` (`prof_test_user_id`);

--
-- Индексы таблицы `psycho_test`
--
ALTER TABLE `psycho_test`
  ADD PRIMARY KEY (`psycho_test_id`);

--
-- Индексы таблицы `psycho_types`
--
ALTER TABLE `psycho_types`
  ADD PRIMARY KEY (`psycho_type_id`);

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `shared_tasks`
--
ALTER TABLE `shared_tasks`
  ADD PRIMARY KEY (`shared_task_id`);

--
-- Индексы таблицы `shared_tasks_statuses`
--
ALTER TABLE `shared_tasks_statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `task_status_id` (`task_status_id`);

--
-- Индексы таблицы `task_notes`
--
ALTER TABLE `task_notes`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `task_id` (`task_id`);

--
-- Индексы таблицы `task_statuses`
--
ALTER TABLE `task_statuses`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `users_ibfk_1` (`user_invite_id`),
  ADD KEY `user_group_id` (`user_group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `invites`
--
ALTER TABLE `invites`
  MODIFY `invite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `invite_statuses`
--
ALTER TABLE `invite_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `mentors`
--
ALTER TABLE `mentors`
  MODIFY `mentors_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT для таблицы `prof`
--
ALTER TABLE `prof`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `prof_test`
--
ALTER TABLE `prof_test`
  MODIFY `prof_test_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `psycho_test`
--
ALTER TABLE `psycho_test`
  MODIFY `psycho_test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `psycho_types`
--
ALTER TABLE `psycho_types`
  MODIFY `psycho_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `shared_tasks`
--
ALTER TABLE `shared_tasks`
  MODIFY `shared_task_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `shared_tasks_statuses`
--
ALTER TABLE `shared_tasks_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `task_notes`
--
ALTER TABLE `task_notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `task_statuses`
--
ALTER TABLE `task_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
