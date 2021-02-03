-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 03 2021 г., 22:52
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lav_lord_factor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int NOT NULL DEFAULT '1612268079',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `short`, `image`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Our Capabilities', 'Competently supply maintainable information after resource-leveling intellectual capital. Synergistically simplify process-centric internal or \"organic\" sources via next-generation mindshare.', 'g3LIL8DOWC.png', 1612346493, 1, '2021-02-03 05:01:33', '2021-02-03 05:01:33'),
(2, 'Our Standards', 'Competently supply maintainable information after resource-leveling intellectual capital. Synergistically simplify process-centric internal or \"organic\" sources via next-generation mindshare.', '6gUwdQP2Vr.png', 1612346506, 1, '2021-02-03 05:01:46', '2021-02-03 05:01:46'),
(3, 'Our Principles', 'Competently supply maintainable information after resource-leveling intellectual capital. Synergistically simplify process-centric internal or \"organic\" sources via next-generation mindshare.', 'byh2VK3UYs.png', 1612348541, 1, '2021-02-03 05:35:41', '2021-02-03 05:35:41');

-- --------------------------------------------------------

--
-- Структура таблицы `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` int NOT NULL DEFAULT '1612268083',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `short`, `image`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Mijozlarga xizmat', 'Monotonektal ravishda 24/7 tarmoqli kengligi ishonchli talablarga ega. Oldinga borganingizdan so\'ng doimo noyob joylarni bo\'shating.', 'maCo4YtGiL.jpeg', 1, 1612345838, 1, '2021-02-03 04:50:38', '2021-02-03 04:50:38'),
(3, 'Bozor tahlilchisi', 'Klik va ohak arxitekturalari yordamida past rentabellikga ega yuqori rentabellikdagi sinov jarayonlarini sinergik ravishda yaxshilang .', '6m03NQ74J7.jpeg', 1, 1612345859, 1, '2021-02-03 04:50:59', '2021-02-03 04:50:59'),
(4, 'Strategik boshqaruv', 'Ta\'sirchan autsorsing orqali parallel elektron bozorlarni samarali rivojlantirish. Oldindan istiqbolli funktsiyalarni qulay tarzda boshqaring.', 'Bb5ulyrIgW.jpeg', 1, 1612345884, 1, '2021-02-03 04:51:24', '2021-02-03 04:51:24');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` int NOT NULL DEFAULT '1612268081',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `position`, `image`, `comment`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Paulina Berger', 'Marketolog', 'dBwWXERWEP.jpeg', 'Marketolog sifatida shuni aytishim mumkinki: Lord Faktor jamoasi siz uchun juda katta imkoniyat va qulayliklar yaratib berishini ko\'rib hayratda qoldim. Bunday qulaylik va imkoniyatlardan siz ham foydalanishingizni maslahat beraman.', 1, 1612270570, 1, '2021-02-02 07:56:10', '2021-02-03 04:55:25'),
(3, 'Lennox Arnold', 'Biznesmen', 'VLaZc2OgUl.jpeg', 'Sifat haqida gapirmayman, bunga esa birgina sababni keltirishim mumkin. Bu ham bo\'lsa Lord Faktor jamoasining ma\'suliyatli ishga yondashishi va har bir biznesga shaxsiy mahsulotidek ko\'rgan holda harakat qilishi... Bu bilan sizga jamoaning Biznesingiz uchun mahsulotlarga shaxsiy buyumi sifatida ko\'rgan holda insonlarni jalb qilishini ko\'rishingiz mumkin. Jamoaga ishonch bildirib tavakkal qilishdan qo\'rqmang.', 1, 1612346148, 1, '2021-02-03 04:55:48', '2021-02-03 04:55:48'),
(4, 'Justus Kühn', 'Nemis rassomi', 'DFC6Gl5HJR.jpeg', 'Tezkorlik bilan ishlashlari orqali hech qanday kamchiliklarsiz vazifalarni o\'z vaqtida, hattoki vaqtidan oldin ham bajarib topshirishlari bilan Biznesingiz uchun yechim topuvchi jamoa sifatida tavsiya etaman.', 1, 1612346172, 1, '2021-02-03 04:56:12', '2021-02-03 04:56:12');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `time` int NOT NULL DEFAULT '1612268083',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `full_name`, `phone`, `email`, `text`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'jamshid Maxmudov', '93 394-49-93', 'xoliqov@gmail.com', 'das', 1, 1612377711, NULL, '2021-02-03 13:41:51', '2021-02-03 13:53:21'),
(2, 'Jamshid Maxmudov', '99 607-67-60', 'xoliqov@gmail.com', 'ads', 1, 1612379417, NULL, '2021-02-03 14:10:17', '2021-02-03 14:14:26'),
(3, 'Jamshid Maxmudov', '99 607-67-60', 'jshmahkmudov@bk.ru', 'dasd', 1, 1612379491, NULL, '2021-02-03 14:11:31', '2021-02-03 14:14:30'),
(4, 'Abdulhamid Xoliqov', '+998946562521', 'xoliqovhamid@gmail.com', 'Salom', 0, 1612380128, NULL, '2021-02-03 14:22:08', '2021-02-03 14:22:08');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_18_101922_create_text_table', 1),
(5, '2020_04_18_101959_create_title_table', 1),
(6, '2020_04_29_104533_create_settings_table', 1),
(7, '2020_05_07_055032_create_site_setting_table', 1),
(8, '2021_01_31_074440_create_about_table', 1),
(9, '2021_01_31_074458_create_sevices_table', 1),
(10, '2021_01_31_074518_create_comments_table', 1),
(11, '2021_01_31_074558_create_team_table', 1),
(12, '2021_01_31_074613_create_feedback_table', 1),
(13, '2021_01_31_074652_create_carousel_table', 1),
(14, '2021_01_31_074722_create_process_table', 1),
(15, '2021_01_31_074743_create_partners_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` int NOT NULL DEFAULT '1612268085',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `title`, `image`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Partner 6', 'alCF03ooVj.jpeg', 1, 1612330257, 1, '2021-02-03 00:30:57', '2021-02-03 04:57:05'),
(2, 'Partner 5', 'lCtCnPPUTf.jpeg', 1, 1612346238, 1, '2021-02-03 04:57:18', '2021-02-03 04:57:18'),
(3, 'Partner 4', 'zlHoqBQBMI.jpeg', 1, 1612346251, 1, '2021-02-03 04:57:31', '2021-02-03 04:57:31'),
(4, 'Partner 3', 'w3LA1uSCI6.png', 1, 1612346261, 1, '2021-02-03 04:57:41', '2021-02-03 04:57:41'),
(5, 'Partner 2', 'iXreixRAHI.jpeg', 1, 1612346271, 1, '2021-02-03 04:57:51', '2021-02-03 04:57:51'),
(6, 'Partner 1', 'yV7OwRos4o.jpeg', 1, 1612346281, 1, '2021-02-03 04:58:01', '2021-02-03 04:58:01');

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
-- Структура таблицы `process`
--

CREATE TABLE `process` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` int NOT NULL DEFAULT '1612268084',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `process`
--

INSERT INTO `process` (`id`, `title`, `short`, `text`, `image`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Marketologning asosiy vazifalari', 'Marketologning asosiy vazifalari', 'Marketologning asosiy vazifalari\r\nMarketologning asosiy vazifalari', 'aCC18SyBnY.png', 1, 1612337775, 1, '2021-02-03 02:36:15', '2021-02-03 04:58:52'),
(2, 'Faqat foyda haqida o\'ylash', 'Faqat foyda haqida o\'ylash', 'Faqat foyda haqida o\'ylash\r\nFaqat foyda haqida o\'ylash', 'NjsqluDEnH.png', 1, 1612346347, 1, '2021-02-03 04:59:07', '2021-02-03 04:59:07'),
(3, 'SEO va veb-ishlab chiqish', 'SEO va veb-ishlab chiqish', NULL, 'aDHfHYRKKr.png', 1, 1612346361, 1, '2021-02-03 04:59:21', '2021-02-03 04:59:21'),
(4, 'Ishga yollash usullari', 'Ishga yollash usullari', NULL, 'gX8aRrmWkZ.png', 1, 1612346379, 1, '2021-02-03 04:59:39', '2021-02-03 04:59:39'),
(5, 'Korxona faoliyatini tahlil qilish', 'Korxona faoliyatini tahlil qilish', 'Korxona faoliyatini tahlil qilish', 'MLf4ypGZN3.png', 1, 1612346393, 1, '2021-02-03 04:59:53', '2021-02-03 04:59:53'),
(6, 'Muammoni hal qilish', 'Muammoni hal qilish', 'Muammoni hal qilish', 'u4fxIHpLv6.png', 1, 1612346406, 1, '2021-02-03 05:00:06', '2021-02-03 05:00:06');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `title`, `name`, `value`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Office address', 'office_address', 'Buxoro shahri, Alpomish ko\'chasi', 1, 1, '2021-02-03 11:56:35', '2021-02-03 12:40:04'),
(3, 'Operator phone', 'operator_phone', '+998 (99) 686-44-40', 1, 1, '2021-02-03 12:01:10', '2021-02-03 12:01:10'),
(4, 'Office phone', 'office_phone', '+9989 99 772 72 37', 1, 1, '2021-02-03 12:02:36', '2021-02-03 12:02:36'),
(5, 'Operator email', 'operator_email', 'contactt@uiCookies.com', 1, 1, '2021-02-03 12:04:00', '2021-02-03 12:04:00'),
(6, 'Office email', 'office_email', 'lord_factor@gmail.com', 1, 1, '2021-02-03 12:04:39', '2021-02-03 12:04:39'),
(7, 'Page size', 'admin_pagination', '10', 1, 1, '2021-02-03 12:33:00', '2021-02-03 12:33:00'),
(8, 'Gmail plus seti', 'gmail_plus', 'https://mail.google.com/', 1, 1, '2021-02-03 12:34:29', '2021-02-03 12:35:54'),
(9, 'Instagram site', 'instagram', 'https://www.instagram.com/', 1, 1, '2021-02-03 12:35:10', '2021-02-03 12:35:44'),
(10, 'Facebook site', 'facebook', 'https://www.facebook.com/', 1, 1, '2021-02-03 12:35:32', '2021-02-03 12:35:32'),
(11, 'Youtube site', 'youtube', 'https://www.youtube.com/', 1, 1, '2021-02-03 12:36:26', '2021-02-03 12:36:26'),
(12, 'Telegram site', 'telegram', 'https://t.me/lordfaktor', 1, 1, '2021-02-03 12:37:07', '2021-02-03 12:37:07'),
(13, 'Office time', 'office_time', '9:00 - 21:00', 1, 1, '2021-02-03 12:39:23', '2021-02-03 12:39:23'),
(14, 'Telegram bot token', 'telegram_bot_token', '1619900654:AAEXUHFCTb2NZaSfRuteKHpwy18PZN0SbAU', 1, 1, '2021-02-03 13:55:33', '2021-02-03 13:59:09'),
(15, 'Telegram merchand id', 'telegram_merchand_id', '1000935930', 1, 1, '2021-02-03 13:58:47', '2021-02-03 14:00:41'),
(16, 'Telegram bot user name', 'telegram_bot_user_name', '@lord_factor_bot', 1, 1, '2021-02-03 13:59:48', '2021-02-03 14:00:54');

-- --------------------------------------------------------

--
-- Структура таблицы `sevices`
--

CREATE TABLE `sevices` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` int NOT NULL DEFAULT '1612268080',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sevices`
--

INSERT INTO `sevices` (`id`, `title`, `short`, `icon`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Raqamli marketing', 'Backend resurslariga nisbatan standartlarga muvofiq munosabatlarni g\'ayrat bilan targ\'ib qiling.', 'flaticon-viral-marketing', 1, 1612268918, 1, '2021-02-02 07:28:38', '2021-02-03 04:52:20'),
(2, 'Ijtimoiy media', 'Birgalikda arzon tashabbuslar uchun eng yaxshi ishlab chiqarilgan mahsulotlarni sotib oling. Dinamik ravishda qayta yo\'naltirish.', 'flaticon-social-media', 1, 1612345981, 1, '2021-02-03 04:53:01', '2021-02-03 04:53:01'),
(3, 'Kontent marketingi', 'Birgalikda ishlaydigan elektron xizmatlardan ko\'ra texnik jihatdan ishonchli elektron bozorlarni samarali ravishda monetizatsiya qilish.', 'flaticon-blogging', 1, 1612346003, 1, '2021-02-03 04:53:23', '2021-02-03 04:53:23'),
(4, 'Tovar ko\'rinishi', 'Oldinga intiladigan veb-xizmatlarni, intuitiv elektron bozorlarni esa osonlikcha osonlashtiring. To\'liq parallel vazifalar dunyosi.', 'flaticon-monitoring', 1, 1612346028, 1, '2021-02-03 04:53:48', '2021-02-03 04:53:48'),
(5, 'Buyuk reytinglar', 'Biznesga mos keladigan buyumlarni standartlarga mos keladigan ko\'rsatkichlar bilan aniq o\'stiring. Vakolatli vakolatlarni yaxlit targ\'ib qilish.', 'flaticon-ranking', 1, 1612346055, 1, '2021-02-03 04:54:15', '2021-02-03 04:54:15'),
(6, 'SEO mutaxassislari', 'Ajoyib osoyishtalik butun bahorning shu shirin tonglari singari butun qalbingizni egallab oladi.', 'flaticon-tags', 1, 1612346076, 1, '2021-02-03 04:54:36', '2021-02-03 04:54:36');

-- --------------------------------------------------------

--
-- Структура таблицы `site_setting`
--

CREATE TABLE `site_setting` (
  `id` bigint UNSIGNED NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logotype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `time` int NOT NULL DEFAULT '1612268082',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name`, `title`, `image`, `facebook`, `twitter`, `in`, `status`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Malte Schmidt', 'Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla.', 'acrzaVuxE9.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 1, 1612329265, 1, '2021-02-03 00:14:25', '2021-02-03 05:36:20'),
(2, 'Till Böhm', 'Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla.', 'nZ1W49K0sA.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 1, 1612348617, 1, '2021-02-03 05:36:57', '2021-02-03 05:36:57'),
(3, 'Jakob Döring', 'Phasellus vehicula justo eget diam posuere sollicitudin eu tincidunt nulla.', 'rCBCj2MGNx.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 1, 1612348646, 1, '2021-02-03 05:37:26', '2021-02-03 05:37:26');

-- --------------------------------------------------------

--
-- Структура таблицы `text`
--

CREATE TABLE `text` (
  `id` bigint UNSIGNED NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int NOT NULL DEFAULT '1612268075',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `text`
--

INSERT INTO `text` (`id`, `text`, `slug`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Appropriately benchmark bricks-and-clicks e-business before parallel communities. Completely synergize exceptional outsourcing with principle-centered platforms. Credibly unleash synergistic internal or \"organic\" sources without functionalized technology. Objectively brand granular human capital without goal-oriented e-business. Competently predominate multifunctional web-readiness via state of the art strategic theme areas.', 'appropriately-benchmark-bricks-and-clicks', 1612368938, 1, '2021-02-03 11:15:38', '2021-02-03 11:15:38'),
(2, 'Completely pontificate timely metrics rather than accurate growth strategies. Seamlessly impact premium communities whereas real-time networks. Professionally transform high-payoff collaboration and idea-sharing before resource maximizing supply chains. Energistically evisculate timely manufactured products for resource-leveling ROI. Assertively create client-focused vortals whereas functional potentialities.', 'completely-pontificate-timely-metrics', 1612368965, 1, '2021-02-03 11:16:05', '2021-02-03 11:16:05'),
(3, 'Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs cond mentum leo massa mollis estiegittis miristum nulla.', 'ut-cursus-massa', 1612370126, 1, '2021-02-03 11:35:26', '2021-02-03 11:35:26'),
(4, 'Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs cond mentum leo massa mollis estiegittis miristum nulla.', 'ut-cursus-massa-urnaaculis-estie', 1612370246, 1, '2021-02-03 11:37:26', '2021-02-03 11:37:26'),
(5, 'Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs cond mentum leo massa mollis estiegittis miristum nulla.', 'ut-cursus-massa-sed-aliquamellus-vitae', 1612370307, 1, '2021-02-03 11:38:27', '2021-02-03 11:38:27'),
(6, 'Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.\r\n\r\nMauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie.', 'mauris-in-quam', 1612370419, 1, '2021-02-03 11:40:19', '2021-02-03 11:40:19'),
(7, 'Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo. Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie.', 'mauris-in-quam-tristique', 1612370577, 1, '2021-02-03 11:42:57', '2021-02-03 11:42:57'),
(8, 'Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo. Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie.', 'mauris-in-quam-tristique-dignissim-urna-in', 1612370626, 1, '2021-02-03 11:43:46', '2021-02-03 11:43:46'),
(9, 'Premium natijalarga nisbatan qat\'iylik bilan sinergetik platformalar arxitekturasi. Birinchi darajali manbalarga emas, balki yuqori rentabellikga ega elektron xizmatlarni sinergik jihatdan engillashtirish. Haqiqiy vaqtda  elektron tijoratni amalga oshirmasdan infomediaries-ni bozor joylashuvini birgalikda boshqarish.', 'office-footer-text', 1612374255, 1, '2021-02-03 12:44:15', '2021-02-03 12:44:15'),
(10, 'Ajoyib osoyishtalik, bahramand bo\'layotgan bu bahorning shirin tonglari singari butun qalbingizni egallab oladi. Butun qalbingiz bilan borliq jozibasini shu yerda his qiling.', 'ajoyib-osoyishtalik-bahramand-buling', 1612375838, 1, '2021-02-03 13:10:38', '2021-02-03 13:10:38'),
(11, 'O\'zaro bog\'liq dasturlarsiz imkoniyatlarni kengaytirishning aniq usullarini dinamik ravishda yaxshilang. Vizyoner ishlab chiqarilgan mahsulotlar uchun sinergetik platformalarni tegishli ravishda elektron tarzda ta\'minlash. Korxona miqyosidagi metodikalarsiz san\'at aloqalarini keskin rivojlantiring.', 'uzaro-bogliq-dasturlarsiz-imkonyatlar', 1612375924, 1, '2021-02-03 13:12:04', '2021-02-03 13:12:04');

-- --------------------------------------------------------

--
-- Структура таблицы `title`
--

CREATE TABLE `title` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Create title',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int NOT NULL DEFAULT '1612268076',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `title`
--

INSERT INTO `title` (`id`, `title`, `slug`, `time`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Biz haqimizda', 'about-us', 1612368699, 1, '2021-02-03 11:11:39', '2021-02-03 12:41:49'),
(2, 'We help you to get appear on first page of serach engines', 'we-help-you', 1612368816, 1, '2021-02-03 11:13:36', '2021-02-03 11:13:36'),
(3, 'Meet The Team', 'meet-the-team', 1612369002, 1, '2021-02-03 11:16:42', '2021-02-03 11:16:42'),
(4, 'Xizmatlar', 'our-services', 1612369101, 1, '2021-02-03 11:18:21', '2021-02-03 12:42:10'),
(5, 'How we work', 'how-we-work', 1612369404, 1, '2021-02-03 11:23:24', '2021-02-03 11:23:24'),
(6, 'Seamlessly empower', 'seamlesslt-wmpower', 1612369529, 1, '2021-02-03 11:25:29', '2021-02-03 11:25:29'),
(7, 'Initiatives.', 'initiatives', 1612369558, 1, '2021-02-03 11:25:58', '2021-02-03 11:25:58'),
(8, 'Objectively maintain', 'objectively-maintain', 1612369600, 1, '2021-02-03 11:26:40', '2021-02-03 11:26:40'),
(9, 'Why choose our services', 'why-choose-services', 1612369638, 1, '2021-02-03 11:27:18', '2021-02-03 11:27:18'),
(10, 'Strategic Plan', 'strategic-plan', 1612369664, 1, '2021-02-03 11:27:44', '2021-02-03 11:27:44'),
(11, 'Annual Budget Plan', 'annual-budget-plan', 1612369696, 1, '2021-02-03 11:28:16', '2021-02-03 11:28:16'),
(12, 'Professional Details', 'perofessional-details', 1612369728, 1, '2021-02-03 11:28:48', '2021-02-03 11:28:48'),
(13, 'Biz bilan aloqa', 'contact-us', 1612370898, 1, '2021-02-03 11:48:18', '2021-02-03 12:42:24'),
(14, 'If you have any questions or comments, or would just like to say hello, please feel free to contact our friendly team', 'if-you-have-any', 1612371196, 1, '2021-02-03 11:53:16', '2021-02-03 11:53:16'),
(15, 'Office Address', 'office-address', 1612371260, 1, '2021-02-03 11:54:20', '2021-02-03 11:54:20'),
(16, 'Phone Number', 'phone-number', 1612371293, 1, '2021-02-03 11:54:53', '2021-02-03 11:54:53'),
(17, 'Email Address', 'email-address', 1612371322, 1, '2021-02-03 11:55:22', '2021-02-03 11:55:22'),
(18, 'Send Message', 'send-message', 1612371957, 1, '2021-02-03 12:05:57', '2021-02-03 12:05:57'),
(19, 'Land', 'land', 1612372011, 1, '2021-02-03 12:06:51', '2021-02-03 12:06:51'),
(20, 'Cell', 'cell', 1612372031, 1, '2021-02-03 12:07:11', '2021-02-03 12:07:11'),
(21, 'Onlayn ishlashingizni yaxshilaymiz', 'onlayn-ishlashingizni-yaxshilaymiz', 1612375642, 1, '2021-02-03 13:07:22', '2021-02-03 13:07:22'),
(22, 'Biz haqimizda ko\'proq ma\'lumot oling', 'biz-haqimizda-malumot-oling', 1612375722, 1, '2021-02-03 13:08:42', '2021-02-03 13:08:42'),
(23, 'Bizning amaliy tadqiqotlarimiz', 'bizning-amaliy-tadqiqotlarimiz', 1612375764, 1, '2021-02-03 13:09:24', '2021-02-03 13:09:24');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_reset_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `role`, `email`, `name`, `email_verified_at`, `password`, `password_reset_token`, `remember`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', 'xoliqovhamid@gmail.com', 'hamid', NULL, '$2y$10$WHzcILNAtjbTXHjOWElmBOhnlWoBI48QuHA0Kn79AXsMqWYUoyfN.', NULL, 0, 1, NULL, '2021-02-02 07:16:09', '2021-02-02 07:16:09'),
(2, NULL, 'admin', 'lord_factor@gmail.com', 'Lord factor', NULL, '$2y$10$eFIGmApMXP3Bqs7RRrRTmuZxgD/o3Ck712P5uRcki7MzB.XQmfi6W', NULL, 0, 1, NULL, '2021-02-03 05:44:17', '2021-02-03 05:44:17');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_name_unique` (`name`);

--
-- Индексы таблицы `sevices`
--
ALTER TABLE `sevices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `text_slug_unique` (`slug`);

--
-- Индексы таблицы `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title_slug_unique` (`slug`);

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
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `process`
--
ALTER TABLE `process`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `sevices`
--
ALTER TABLE `sevices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `text`
--
ALTER TABLE `text`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `title`
--
ALTER TABLE `title`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
