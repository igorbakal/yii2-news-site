-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 04 2016 г., 10:53
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rgk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '3', 1477605775),
('manager', '2', 1477605768),
('user', '1', 1477605748),
('user', '4', 1477608328),
('user', '5', 1478087285);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/admin/*', 2, NULL, NULL, NULL, 1477605103, 1477605103),
('/gii/*', 2, NULL, NULL, NULL, 1478184867, 1478184867),
('/news/*', 2, NULL, NULL, NULL, 1477605358, 1477605358),
('/profile/*', 2, NULL, NULL, NULL, 1478185267, 1478185267),
('/rbac/*', 2, NULL, NULL, NULL, 1477605117, 1477605117),
('admin', 1, 'Главный администратор', NULL, NULL, 1477605693, 1477605693),
('adminAccess', 2, 'Общий доступ в админ-панель', NULL, NULL, 1477605405, 1477605405),
('manager', 1, 'Контент-менеджер. Может добавлять новости', NULL, NULL, 1477605619, 1477605656),
('newsAccess', 2, 'Доступ к чтению новостей', NULL, NULL, 1477605205, 1477605205),
('updatePost', 2, 'Возможность обновить пост', NULL, NULL, 1477611787, 1477611787),
('user', 1, 'простой зарегистрированный пользователь', NULL, NULL, 1477605552, 1477605552),
('userAccess', 2, 'Доступ к rbac. ТОЛЬКО для админов', NULL, NULL, 1477605474, 1477605474);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', '/gii/*'),
('admin', 'manager'),
('admin', 'userAccess'),
('adminAccess', '/admin/*'),
('manager', 'adminAccess'),
('manager', 'user'),
('newsAccess', '/news/*'),
('newsAccess', '/profile/*'),
('user', 'newsAccess'),
('userAccess', '/rbac/*');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` varchar(500) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `short`, `content`) VALUES
(1, 1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare, risus non faucibus commodo, lacus odio commodo elit, at aliquam risus tellus eget nunc. Cras aliquet gravida hendrerit. Vivamus quis tellus id nulla finibus consectetur. Donec vel nulla eu dolor tempor efficitur eget nec neque. Praesent vitae justo sodales, tincidunt sapien ac, congue risus. Vestibulum accumsan sapien in elit suscipit, id molestie quam iaculis. Duis tortor lacus, scelerisque sit amet viverra pharetra, ', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ornare, risus non faucibus commodo, lacus odio commodo elit, at aliquam risus tellus eget nunc. Cras aliquet gravida hendrerit. Vivamus quis tellus id nulla finibus consectetur. Donec vel nulla eu dolor tempor efficitur eget nec neque. Praesent vitae justo sodales, tincidunt sapien ac, congue risus. Vestibulum accumsan sapien in elit suscipit, id molestie quam iaculis. Duis tortor lacus, scelerisque sit amet viverra pharetra, sodales vitae sem. Donec tincidunt, mauris quis ultrices facilisis, tellus lectus dictum ligula, vel fermentum augue nibh eu orci. Fusce convallis sapien in dapibus hendrerit. Fusce sed arcu ipsum. Duis ut libero eu erat sodales scelerisque. Maecenas id placerat mauris. Quisque augue dui, tempor sit amet justo eget, vestibulum placerat massa. Curabitur sit amet consectetur massa. Quisque et diam auctor, venenatis ex vel, volutpat elit. Cras tincidunt rhoncus porta.\r\n\r\nMauris sagittis euismod velit, at convallis justo consequat a. Morbi a molestie diam. Aenean eget lacus ac nulla porttitor lacinia. Sed mollis, erat ut tincidunt interdum, justo ex suscipit nibh, ut maximus quam dui vehicula velit. Phasellus ac erat convallis nulla auctor feugiat. Donec eu pulvinar sapien. Integer a nisl id leo sagittis malesuada ut quis risus. Sed accumsan ut libero ut porta. Suspendisse in aliquam nulla, quis consequat purus. Praesent posuere velit at velit bibendum sodales. Praesent ornare nec orci quis imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque enim mi, hendrerit semper bibendum mollis, convallis sed tellus. Curabitur odio elit, fringilla ac lacinia at, fermentum eget quam.\r\n\r\nQuisque et velit erat. Quisque ac cursus nulla, vel imperdiet dui. Donec bibendum turpis quam, non ultrices nisi porttitor at. Mauris gravida ante vitae gravida fringilla. Vivamus ultricies fringilla luctus. Ut ultricies ultricies arcu. Cras dictum in purus viverra condimentum. Donec massa nunc, ultricies quis sagittis eu, maximus et mi. Suspendisse tincidunt elit eros, vel posuere sem interdum sed.\r\n\r\nVestibulum commodo odio malesuada pretium ornare. Proin posuere sit amet felis sit amet varius. Praesent dictum ante sit amet diam varius iaculis. Fusce rhoncus ligula nulla, a vestibulum dolor bibendum vitae. Ut aliquam nunc id ligula mollis gravida. Sed rhoncus arcu ac mauris suscipit, sit amet posuere arcu luctus. Phasellus eget tellus est. Nunc pellentesque urna vel ullamcorper placerat. Morbi nec nisl elementum tortor dapibus fringilla et a velit. Proin ac nibh eu dui euismod egestas. Aenean congue, magna quis lacinia vehicula, erat tellus pulvinar nulla, iaculis malesuada orci dui eget tellus. Phasellus dictum faucibus ipsum, at suscipit erat. Curabitur id felis id sem blandit laoreet. Cras sed facilisis diam. Suspendisse viverra eu nibh non faucibus.\r\n\r\nNullam facilisis euismod tristique. Maecenas in blandit leo. Suspendisse hendrerit nunc eget lobortis venenatis. Nullam vitae vulputate nunc. Duis ut turpis facilisis, viverra massa ut, pretium lorem. Quisque vel luctus est. Nam enim odio, rhoncus ac risus quis, interdum gravida quam. '),
(2, 2, 'Lorem Ipsum 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel purus eget metus pulvinar tincidunt a in erat. Cras accumsan diam quis libero rutrum, vel hendrerit nulla aliquet. Pellentesque ac nisl at metus commodo gravida et a turpis. In hac habitasse platea dictumst. Quisque malesuada volutpat enim non egestas. Pellentesque aliquam sem nec purus rutrum ultricies. In tempus mauris eu vehicula tristique. Cras a sollicitudin lacus. Curabitur tempus ipsum quis lacus sodales, vel vestib', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel purus eget metus pulvinar tincidunt a in erat. Cras accumsan diam quis libero rutrum, vel hendrerit nulla aliquet. Pellentesque ac nisl at metus commodo gravida et a turpis. In hac habitasse platea dictumst. Quisque malesuada volutpat enim non egestas. Pellentesque aliquam sem nec purus rutrum ultricies. In tempus mauris eu vehicula tristique. Cras a sollicitudin lacus. Curabitur tempus ipsum quis lacus sodales, vel vestibulum lectus scelerisque. Integer quis lorem in nisi consequat efficitur in ut enim. Aliquam nisl odio, fermentum eu blandit a, interdum non ligula.\r\n\r\nAenean tristique mi ac neque ornare, in rutrum ligula lacinia. In laoreet quam nec nunc suscipit, a porttitor mauris accumsan. Curabitur malesuada, ligula ut bibendum lacinia, lectus nulla pellentesque quam, vel lobortis tortor tellus at risus. Duis ullamcorper semper lacinia. Nam ut sapien tellus. Integer pulvinar, neque ac condimentum pretium, purus arcu faucibus mauris, quis semper sem nisl et eros. Vivamus efficitur quam quis enim fringilla, non pharetra metus imperdiet.\r\n\r\nProin ultricies nibh nisi, a tempor dui suscipit vel. Cras vulputate neque et ipsum tristique rhoncus. Vivamus convallis lobortis purus, sit amet aliquam nisi finibus et. Donec efficitur in leo vitae ornare. Sed ut pharetra purus, in efficitur arcu. Duis laoreet ex tortor. Sed viverra lorem sed ornare aliquet. Nulla tincidunt eros non mauris fermentum, id congue quam tempus. Morbi fringilla egestas nibh. Sed commodo lacus vel molestie sollicitudin.\r\n\r\nUt tincidunt nibh nisl, et gravida nisi tristique id. Etiam condimentum maximus purus sed pellentesque. Duis eget tortor non ligula eleifend tristique. Proin ac luctus metus. Vestibulum auctor, justo sit amet euismod consectetur, libero est elementum eros, vitae volutpat tortor dolor sit amet arcu. Vestibulum vel auctor nibh. Vestibulum at quam justo. Quisque auctor sapien facilisis ultricies faucibus.\r\n\r\nProin mattis cursus tellus rhoncus hendrerit. Mauris nunc odio, sagittis in velit quis, viverra euismod lorem. Pellentesque sit amet ante nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam sodales urna metus, a ultrices leo lobortis nec. Etiam pharetra eget ligula nec dictum. Aliquam eget suscipit mauris. Vivamus et dolor tortor. In hac habitasse platea dictumst. Donec vel velit justo. In aliquam in est a tempor. Morbi accumsan feugiat elit mattis luctus. Phasellus elit libero, volutpat a tristique ut, auctor sit amet massa. Aliquam turpis eros, ultrices in leo sit amet, feugiat fringilla felis. Phasellus orci dui, sollicitudin eget enim at, ultrices congue tellus. Maecenas dictum nisl dolor, sit amet porta erat vulputate nec. '),
(3, 3, 'проверка', 'Проверка уведомлений', 'testastastas');

-- --------------------------------------------------------

--
-- Структура таблицы `notice`
--

CREATE TABLE `notice` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `for_user` int(10) UNSIGNED NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_confirm_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `notification_type` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `email_confirm_token`, `status`, `created_at`, `updated_at`, `notification_type`) VALUES
(1, 'User', 'zaNVmG_u625BfwELIWypkI0kepSp8xfp', '$2y$13$Ov/5KVhjx0uT1QrTpBwUV.WlUunHaAb9nKkAI0oyKo0KYZ1m6Xq1u', NULL, 'test@test.ru', NULL, 10, 1477604128, 1478088300, 'a:1:{i:0;s:5:"email";}'),
(2, 'Manager', 'jGRGCBlX91ouXK0crjw5wSnMH203eivt', '$2y$13$/4kHeIQdCTzynyYemDRfzuL.nmZ7JkAfO2l4Mv.vQUjkcGm7QV7iW', NULL, 'manager@mysite.com', NULL, 10, 1477604937, 1477604937, 'a:1:{i:0;s:5:"email";}'),
(3, 'Admin', 'kkhhzwqq_WkwfoNiB-XBAYdLrziOhhdu', '$2y$13$LJIDipWGLXa8USWfVjupTeABAIZ4By3iVM8oXrRmGwX/2Q2uHDULm', NULL, 'admin@mysite.com', NULL, 10, 1477604990, 1478200703, 's:7:"browser";'),
(4, 'test', 'Un0Wwrbm4WVkNlhpl3Shlq44BdvNuQCg', '$2y$13$rsLJHm.jH4BFyMzZeMsED.aouNhhVPzXpM3Ocifh3mIr9Uxmb/wNq', NULL, 'info@mysite.com', NULL, 10, 1477608133, 1477608133, 'a:1:{i:0;s:5:"email";}'),
(5, 'test2', 'GCO77OjegUTJ5KV08NJK72PWORxD0Ana', '$2y$13$X5U54BunhVjqISTFa3gIc.kKHfM5kb8wQqBSA5GS7iZitbwUBQB6a', NULL, 'test@oops.ru', NULL, 10, 1478087285, 1478115898, 'a:1:{i:0;s:7:"browser";}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
