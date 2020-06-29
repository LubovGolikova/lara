-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 15 2020 г., 15:58
-- Версия сервера: 5.7.25
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lara`
--

-- --------------------------------------------------------

--
-- Структура таблицы `flowers`
--

CREATE TABLE `flowers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `slider` tinyint(1) NOT NULL,
  `stock` tinyint(1) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `flowers`
--

INSERT INTO `flowers` (`id`, `path`, `name`, `price`, `slider`, `stock`, `description`, `created_at`, `updated_at`) VALUES
(3, '/photos/shares/photo9.jpg', 'Лилейник', 600, 1, 0, '<p>A diam maecenas sed enim ut sem viverra. Consequat ac felis donec et. Morbi tincidunt ornare massa eget egestas purus viverra. Dictum varius duis at consectetur lorem. Lectus urna duis convallis convallis tellus id interdum. Tempor nec feugiat nisl pretium fusce id velit ut tortor. Tortor dignissim convallis aenean et. Sed lectus vestibulum mattis ullamcorper velit sed. Venenatis a condimentum vitae sapien. Sed viverra tellus in hac habitasse platea dictumst. Nulla posuere sollicitudin aliquam ultrices sagittis. Consectetur adipiscing elit pellentesque habitant morbi tristique. Imperdiet massa tincidunt nunc pulvinar sapien. Urna neque viverra justo nec. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Metus vulputate eu scelerisque felis imperdiet proin. At auctor urna nunc id cursus metus. Turpis egestas integer eget aliquet nibh praesent tristique. Mauris rhoncus aenean vel elit scelerisque.</p>', '2019-09-17 04:56:52', '2019-12-25 16:01:33'),
(4, '/photos/shares/photo1.jpg', 'Лилейник', 60, 0, 1, '<p>hj</p>', '2019-09-17 05:31:37', '2019-10-11 15:41:57'),
(5, '/photos/shares/photo2.jpg', 'Лилейник', 123, 1, 1, '<p>jkjk</p>', '2019-09-17 05:31:51', '2019-10-11 15:41:18'),
(6, '/photos/shares/photo8.jpg', 'Лилейник', 60, 1, 1, NULL, '2019-10-09 06:20:33', '2019-10-11 15:41:25'),
(7, '/photos/shares/photo9.jpg', 'Лилейник', 80, 1, 1, '<p>Новинки</p>', '2019-10-09 06:21:16', '2019-10-11 15:41:31'),
(8, '/photos/shares/photo10.jpg', 'Лилейник', 50, 0, 1, '<p>Новинки</p>', '2019-10-09 06:27:46', '2019-10-09 06:27:46'),
(9, '/photos/shares/photo9.jpg', 'Лилейник', 65, 0, 1, NULL, '2019-10-09 06:28:20', '2019-10-09 06:28:20'),
(10, '/photos/shares/photo8.jpg', 'Хризантема', 123, 1, 1, NULL, '2019-10-24 09:39:26', '2019-10-24 09:39:26');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_09_12_095728_create_flowers_table', 2),
(5, '2019_10_15_085241_create_orders_table', 3),
(6, '2019_10_15_090011_create_order_items_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `total_sum` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `delivery`, `payment`, `total_sum`, `created_at`, `updated_at`) VALUES
(1, 'Лилейник123', '0932677881123', 'lubovgolikova@gmail.com123', 1, 1, 180, '2019-10-15 06:59:36', '2019-10-22 05:21:32'),
(2, 'Лилейник', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 60, '2019-10-15 07:02:52', '2019-10-15 07:02:52'),
(3, 'Лилейник', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 60, '2019-10-15 13:29:08', '2019-10-15 13:29:08'),
(4, 'Лилейник', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 200, '2019-10-15 13:34:24', '2019-10-22 05:21:56'),
(5, 'Лилейник', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 120, '2019-10-20 07:43:32', '2019-10-20 07:43:32'),
(6, 'Лилейник', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 60, '2019-10-22 03:14:59', '2019-10-22 03:14:59'),
(7, 'Лилейник', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 60, '2019-10-22 03:16:56', '2019-10-22 03:16:56'),
(8, 'Лилейник', '0932677881', 'test@gmail.com', 2, 2, 60, '2019-12-06 15:25:16', '2019-12-06 15:25:16'),
(9, 'Лилейник', '0932677881', 'test@gmail.com', 2, 2, 120, '2019-12-06 15:41:54', '2019-12-06 15:41:54'),
(10, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 60, '2019-12-25 10:50:45', '2019-12-25 10:50:45'),
(11, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 80, '2019-12-25 11:08:40', '2019-12-25 11:08:40'),
(12, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 120, '2019-12-25 13:12:25', '2019-12-25 13:12:25'),
(13, 'Лилейник', '0932677881', 'test@gmail.com', 2, 2, 60, '2019-12-31 08:49:36', '2019-12-31 08:49:36'),
(14, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 0, '2020-02-28 12:30:46', '2020-02-28 12:30:46'),
(15, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 669, '2020-03-11 12:36:12', '2020-03-11 12:36:12'),
(16, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 669, '2020-03-11 13:00:29', '2020-03-11 13:00:29'),
(17, 'Голикова Любовь', '0932677881', 'lubovgolikova@gmail.com', 2, 2, 669, '2020-03-11 14:35:28', '2020-03-11 14:35:28');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `flower_id` bigint(20) UNSIGNED NOT NULL,
  `flower_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flower_price` int(11) NOT NULL,
  `flower_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `flower_id`, `flower_name`, `flower_price`, `flower_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Лилейник', 60, 3, '2019-10-15 06:59:36', '2019-10-22 05:16:23'),
(2, 2, 3, 'Лилейник', 60, 1, '2019-10-15 07:02:52', '2019-10-15 07:02:52'),
(3, 3, 3, 'Лилейник', 60, 1, '2019-10-15 13:29:08', '2019-10-15 13:29:08'),
(4, 4, 3, 'Лилейник', 50, 2, '2019-10-15 13:34:24', '2019-10-22 05:21:46'),
(5, 4, 5, 'Лилейник', 100, 1, '2019-10-15 13:34:24', '2019-10-22 05:21:56'),
(6, 5, 3, 'Лилейник', 60, 1, '2019-10-20 07:43:32', '2019-10-20 07:43:32'),
(7, 5, 4, 'Лилейник', 60, 1, '2019-10-20 07:43:32', '2019-10-20 07:43:32'),
(8, 6, 3, 'Лилейник', 60, 1, '2019-10-22 03:14:59', '2019-10-22 03:14:59'),
(9, 7, 3, 'Лилейник', 60, 1, '2019-10-22 03:16:56', '2019-10-22 03:16:56'),
(10, 8, 3, 'Лилейник', 60, 1, '2019-12-06 15:25:16', '2019-12-06 15:25:16'),
(11, 9, 3, 'Лилейник', 60, 2, '2019-12-06 15:41:54', '2019-12-06 15:41:54'),
(12, 10, 3, 'Лилейник', 60, 1, '2019-12-25 10:50:45', '2019-12-25 10:50:45'),
(13, 11, 7, 'Лилейник', 80, 1, '2019-12-25 11:08:40', '2019-12-25 11:08:40'),
(14, 12, 4, 'Лилейник', 60, 2, '2019-12-25 13:12:25', '2019-12-25 13:12:25'),
(15, 13, 4, 'Лилейник', 60, 1, '2019-12-31 08:49:36', '2019-12-31 08:49:36'),
(16, 15, 5, 'Лилейник', 123, 2, '2020-03-11 12:36:12', '2020-03-11 12:36:12'),
(17, 15, 10, 'Хризантема', 123, 1, '2020-03-11 12:36:12', '2020-03-11 12:36:12'),
(18, 15, 4, 'Лилейник', 60, 3, '2020-03-11 12:36:12', '2020-03-11 12:36:12'),
(19, 15, 6, 'Лилейник', 60, 2, '2020-03-11 12:36:12', '2020-03-11 12:36:12'),
(20, 16, 5, 'Лилейник', 123, 2, '2020-03-11 13:00:29', '2020-03-11 13:00:29'),
(21, 16, 10, 'Хризантема', 123, 1, '2020-03-11 13:00:29', '2020-03-11 13:00:29'),
(22, 16, 4, 'Лилейник', 60, 3, '2020-03-11 13:00:29', '2020-03-11 13:00:29'),
(23, 16, 6, 'Лилейник', 60, 2, '2020-03-11 13:00:29', '2020-03-11 13:00:29'),
(24, 17, 5, 'Лилейник', 123, 2, '2020-03-11 14:35:28', '2020-03-11 14:35:28'),
(25, 17, 10, 'Хризантема', 123, 1, '2020-03-11 14:35:28', '2020-03-11 14:35:28'),
(26, 17, 4, 'Лилейник', 60, 3, '2020-03-11 14:35:28', '2020-03-11 14:35:28'),
(27, 17, 6, 'Лилейник', 60, 2, '2020-03-11 14:35:28', '2020-03-11 14:35:28');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nikolay', 'nikolayvoronov007@gmail.com', 'admin', NULL, '$2y$10$zA3uZqlWpSULHbNgpKKWp.Uyxo0bxJhZtToc.SWSAma8i6rgBOvSC', 'aXz8VNFaVpd5fLvDcgeYxsAHB9Z8TsWqIZ8z1h5mkwKLaM1I5wNXlLL0vntw', '2019-09-12 06:24:26', '2019-09-12 06:24:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_flower_id_foreign` (`flower_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_flower_id_foreign` FOREIGN KEY (`flower_id`) REFERENCES `flowers` (`id`),
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
