-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 26 2017 г., 00:45
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `advent`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Developer', 'admin-panel@gmail.com', '$2y$10$P3JYNaBXDIN3uuSgCVXb3.ogL7hvm0MUGBZFV.msm0umi1boMEfgy', NULL, '2017-07-24 21:00:00', '2017-07-24 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `advert`
--

CREATE TABLE `advert` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Объявление по покупке', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed nibh ex. Pellentesque ultrices sapien a urna facilisis hendrerit. Donec nunc est, eleifend a auctor quis, pellentesque ac diam. Sed sed sem libero. In ut gravida lacus. Curabitur eu ipsum vitae urna suscipit condimentum id ut sapien. Morbi sit amet placerat mi. Mauris vitae est malesuada, dapibus dolor bibendum, aliquam augue. Integer sit amet fermentum leo, in vestibulum nisl. Nunc in nibh vulputate, dictum nibh fermentum, facilisis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nMauris molestie turpis in vulputate ultrices. Ut id magna nisi. Sed iaculis scelerisque nulla, vel pharetra sapien rhoncus nec. Suspendisse vehicula feugiat placerat. Praesent quis mollis eros. Aenean suscipit luctus congue. Praesent eu venenatis risus, sed mollis felis. Quisque lacus nisi, fermentum vel felis nec, convallis consectetur est. Aliquam id sapien iaculis, vestibulum leo et, consequat dolor. Ut sed lorem imperdiet, accumsan leo in, vulputate dolor. Nulla quam purus, eleifend et enim vitae, dignissim iaculis turpis. Donec ornare, dolor nec mattis bibendum, leo tortor congue tellus, non viverra libero mauris consectetur magna. Morbi tempor porttitor tellus, a posuere elit tempus at. Aenean id sollicitudin enim.', 1, '2017-07-25 10:55:00', '2017-07-25 10:55:00'),
(2, 'What is Lorem Ipsum?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed nibh ex. Pellentesque ultrices sapien a urna facilisis hendrerit. Donec nunc est, eleifend a auctor quis, pellentesque ac diam. Sed sed sem libero. In ut gravida lacus. Curabitur eu ipsum vitae urna suscipit condimentum id ut sapien. Morbi sit amet placerat mi. Mauris vitae est malesuada, dapibus dolor bibendum, aliquam augue. Integer sit amet fermentum leo, in vestibulum nisl. Nunc in nibh vulputate, dictum nibh fermentum, facilisis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nMauris molestie turpis in vulputate ultrices. Ut id magna nisi. Sed iaculis scelerisque nulla, vel pharetra sapien rhoncus nec. Suspendisse vehicula feugiat placerat. Praesent quis mollis eros. Aenean suscipit luctus congue. Praesent eu venenatis risus, sed mollis felis. Quisque lacus nisi, fermentum vel felis nec, convallis consectetur est. Aliquam id sapien iaculis, vestibulum leo et, consequat dolor. Ut sed lorem imperdiet, accumsan leo in, vulputate dolor. Nulla quam purus, eleifend et enim vitae, dignissim iaculis turpis. Donec ornare, dolor nec mattis bibendum, leo tortor congue tellus, non viverra libero mauris consectetur magna. Morbi tempor porttitor tellus, a posuere elit tempus at. Aenean id sollicitudin enim.', 1, '2017-07-25 11:00:04', '2017-07-25 11:00:04'),
(4, 'What is Lorem Ipsum?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed nibh ex. Pellentesque ultrices sapien a urna facilisis hendrerit. Donec nunc est, eleifend a auctor quis, pellentesque ac diam. Sed sed sem libero. In ut gravida lacus. Curabitur eu ipsum vitae urna suscipit condimentum id ut sapien. Morbi sit amet placerat mi. Mauris vitae est malesuada, dapibus dolor bibendum, aliquam augue. Integer sit amet fermentum leo, in vestibulum nisl. Nunc in nibh vulputate, dictum nibh fermentum, facilisis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nMauris molestie turpis in vulputate ultrices. Ut id magna nisi. Sed iaculis scelerisque nulla, vel pharetra sapien rhoncus nec. Suspendisse vehicula feugiat placerat. Praesent quis mollis eros. Aenean suscipit luctus congue. Praesent eu venenatis risus, sed mollis felis. Quisque lacus nisi, fermentum vel felis nec, convallis consectetur est. Aliquam id sapien iaculis, vestibulum leo et, consequat dolor. Ut sed lorem imperdiet, accumsan leo in, vulputate dolor. Nulla quam purus, eleifend et enim vitae, dignissim iaculis turpis. Donec ornare, dolor nec mattis bibendum, leo tortor congue tellus, non viverra libero mauris consectetur magna. Morbi tempor porttitor tellus, a posuere elit tempus at. Aenean id sollicitudin enim.', 2, '2017-07-25 11:05:36', '2017-07-25 11:05:36'),
(5, 'Очень срочное объявление', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed nibh ex. Pellentesque ultrices sapien a urna facilisis hendrerit. Donec nunc est, eleifend a auctor quis, pellentesque ac diam. Sed sed sem libero. In ut gravida lacus. Curabitur eu ipsum vitae urna suscipit condimentum id ut sapien. Morbi sit amet placerat mi. Mauris vitae est malesuada, dapibus dolor bibendum, aliquam augue. Integer sit amet fermentum leo, in vestibulum nisl. Nunc in nibh vulputate, dictum nibh fermentum, facilisis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nMauris molestie turpis in vulputate ultrices. Ut id magna nisi. Sed iaculis scelerisque nulla, vel pharetra sapien rhoncus nec. Suspendisse vehicula feugiat placerat. Praesent quis mollis eros. Aenean suscipit luctus congue. Praesent eu venenatis risus, sed mollis felis. Quisque lacus nisi, fermentum vel felis nec, convallis consectetur est. Aliquam id sapien iaculis, vestibulum leo et, consequat dolor. Ut sed lorem imperdiet, accumsan leo in, vulputate dolor. Nulla quam purus, eleifend et enim vitae, dignissim iaculis turpis. Donec ornare, dolor nec mattis bibendum, leo tortor congue tellus, non viverra libero mauris consectetur magna. Morbi tempor porttitor tellus, a posuere elit tempus at. Aenean id sollicitudin enim', 2, '2017-07-25 11:05:53', '2017-07-25 11:05:53'),
(6, 'Объявление по продаже', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed nibh ex. Pellentesque ultrices sapien a urna facilisis hendrerit. Donec nunc est, eleifend a auctor quis, pellentesque ac diam. Sed sed sem libero. In ut gravida lacus. Curabitur eu ipsum vitae urna suscipit condimentum id ut sapien. Morbi sit amet placerat mi. Mauris vitae est malesuada, dapibus dolor bibendum, aliquam augue. Integer sit amet fermentum leo, in vestibulum nisl. Nunc in nibh vulputate, dictum nibh fermentum, facilisis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nMauris molestie turpis in vulputate ultrices. Ut id magna nisi. Sed iaculis scelerisque nulla, vel pharetra sapien rhoncus nec. Suspendisse vehicula feugiat placerat. Praesent quis mollis eros. Aenean suscipit luctus congue. Praesent eu venenatis risus, sed mollis felis. Quisque lacus nisi, fermentum vel felis nec, convallis consectetur est. Aliquam id sapien iaculis, vestibulum leo et, consequat dolor. Ut sed lorem imperdiet, accumsan leo in, vulputate dolor. Nulla quam purus, eleifend et enim vitae, dignissim iaculis turpis. Donec ornare, dolor nec mattis bibendum, leo tortor congue tellus, non viverra libero mauris consectetur magna. Morbi tempor porttitor tellus, a posuere elit tempus at. Aenean id sollicitudin enim.', 2, '2017-07-25 11:06:02', '2017-07-25 11:06:02'),
(7, 'What is Lorem Ipsum?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed nibh ex. Pellentesque ultrices sapien a urna facilisis hendrerit. Donec nunc est, eleifend a auctor quis, pellentesque ac diam. Sed sed sem libero. In ut gravida lacus. Curabitur eu ipsum vitae urna suscipit condimentum id ut sapien. Morbi sit amet placerat mi. Mauris vitae est malesuada, dapibus dolor bibendum, aliquam augue. Integer sit amet fermentum leo, in vestibulum nisl. Nunc in nibh vulputate, dictum nibh fermentum, facilisis leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.\n\nMauris molestie turpis in vulputate ultrices. Ut id magna nisi. Sed iaculis scelerisque nulla, vel pharetra sapien rhoncus nec. Suspendisse vehicula feugiat placerat. Praesent quis mollis eros. Aenean suscipit luctus congue. Praesent eu venenatis risus, sed mollis felis. Quisque lacus nisi, fermentum vel felis nec, convallis consectetur est. Aliquam id sapien iaculis, vestibulum leo et, consequat dolor. Ut sed lorem imperdiet, accumsan leo in, vulputate dolor. Nulla quam purus, eleifend et enim vitae, dignissim iaculis turpis. Donec ornare, dolor nec mattis bibendum, leo tortor congue tellus, non viverra libero mauris consectetur magna. Morbi tempor porttitor tellus, a posuere elit tempus at. Aenean id sollicitudin enim.', 1, '2017-07-25 11:59:46', '2017-07-25 15:16:36');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_19_085507_create_admins_table', 1),
(4, '2017_07_25_131108_create_table_advert', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Developer', 'admin@gmail.com', '$2y$10$P3JYNaBXDIN3uuSgCVXb3.ogL7hvm0MUGBZFV.msm0umi1boMEfgy', '0iNQsjoK4YGdGZu5xz1yNq6JBN1esFnxBo5XhxnIGMKmK7aQfo0Mgn6PIjxH', '2017-07-25 10:05:30', '2017-07-25 10:05:30'),
(2, 'Karlos', 'admin@mail.ru', '$2y$10$zsXnsNrcJp0BFEK8VMhxYeh0CGa6BYefRfWY.jyK8ORqP2UMyIEeS', 'DI6R4KVRUewbqx7tqG27j0KREN6Z9Ow09eE0ny4vhkBWAV4kXjvwuKd1Gdrx', '2017-07-25 11:05:28', '2017-07-25 11:05:28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Индексы таблицы `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advert_author_id_index` (`author_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `advert`
--
ALTER TABLE `advert`
  ADD CONSTRAINT `advert_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
