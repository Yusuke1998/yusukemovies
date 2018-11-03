-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2018 a las 23:10:31
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yusuke_movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `firstname`, `lastname`, `biography`, `created_at`, `updated_at`) VALUES
(3, 'Marlon', 'Brando', 'El es vito corleone :v', NULL, NULL),
(5, 'Jean claude', 'Van Damme', 'Experto en artes marciales-', NULL, '2018-09-21 08:49:41'),
(6, 'Steven', 'Seagal', 'Actor reconocido por peleas sin un estilo muy vistoso, pero efectivo, realmente bueno evitando golpes y usando la fuerza del enemigo en su contra', NULL, '2018-09-21 15:48:12'),
(7, 'Bruce', 'Lee', 'Bruce es el padre de las artes marciales en el cine.', '2018-09-21 08:18:04', '2018-09-21 08:18:04'),
(8, 'German', 'Valdez', 'Mejor conocido como TinTan, es el hermano de Ramon Valdez, alias don ramon, tin tan, fue un actor del la epoca de oro del cine mexicano.', '2018-09-21 08:19:16', '2018-09-21 08:19:16'),
(9, 'Bruce', 'Willis', 'El actor de duro de matar y red.', '2018-09-21 08:19:51', '2018-09-21 08:19:51'),
(10, 'Cantinflas', 'no tiene', 'El tipo hacia comedia', '2018-09-21 19:31:48', '2018-09-21 19:31:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor_movie`
--

CREATE TABLE `actor_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actor_movie`
--

INSERT INTO `actor_movie` (`id`, `actor_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(42, 6, 22, NULL, NULL),
(44, 5, 24, NULL, NULL),
(45, 6, 25, NULL, NULL),
(46, 6, 26, NULL, NULL),
(48, 7, 28, NULL, NULL),
(50, 6, 30, NULL, NULL),
(51, 6, 31, NULL, NULL),
(53, 6, 33, NULL, NULL),
(54, 3, 34, NULL, NULL),
(55, 5, 34, NULL, NULL),
(56, 6, 34, NULL, NULL),
(57, 7, 34, NULL, NULL),
(58, 8, 34, NULL, NULL),
(59, 6, 35, NULL, NULL),
(60, 6, 36, NULL, NULL),
(61, 7, 36, NULL, NULL),
(62, 3, 37, NULL, NULL),
(63, 5, 37, NULL, NULL),
(64, 6, 37, NULL, NULL),
(65, 5, 29, NULL, NULL),
(66, 6, 32, NULL, NULL),
(67, 5, 27, NULL, NULL),
(68, 5, 23, NULL, NULL),
(69, 6, 38, NULL, NULL),
(70, 8, 38, NULL, NULL),
(71, 5, 39, NULL, NULL),
(72, 6, 39, NULL, NULL),
(73, 8, 39, NULL, NULL),
(74, 5, 40, NULL, NULL),
(75, 6, 40, NULL, NULL),
(76, 6, 41, NULL, NULL),
(77, 9, 41, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Accion', 'Se trata de uno de los generos mas buscados y preferidos por los cinefilos y por las personas en general', '2018-09-21 03:00:18', '2018-09-21 03:00:18'),
(2, 'Ciencia Ficcion', 'Mucha fantasia, en general referente a la electronica, ciencia, etc.', NULL, NULL),
(4, 'Wester', 'peliculas vaqueras', '2018-09-22 18:11:46', '2018-09-22 18:11:46'),
(5, 'Policial', 'Genero referente a todo lo vinculado a lo policial, casos, crimenes, etc', '2018-09-22 18:12:41', '2018-09-22 18:12:41'),
(6, 'Politica', 'Genero referente a acciones politicas, bandos, impacto publico, etc.', '2018-09-22 18:37:30', '2018-09-22 18:37:30'),
(7, 'Romance', 'mucho amor :v', '2018-09-22 18:37:46', '2018-09-22 18:37:46'),
(8, 'Drogas', 'Las personas y sus problemas locos', '2018-09-22 18:38:41', '2018-09-22 18:38:41'),
(9, 'Deportes', 'deportes', '2018-09-22 18:39:15', '2018-09-22 18:39:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commentaries`
--

CREATE TABLE `commentaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `commentaries`
--

INSERT INTO `commentaries` (`id`, `movie_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(12, 23, 4, 'Terminatooooor!', '2018-09-25 05:35:31', '2018-09-25 05:35:31'),
(13, 26, 4, 'Tu eres shinichi? :v', '2018-09-25 05:43:08', '2018-09-25 05:43:08'),
(14, 27, 4, 'Ella es cool 7u7', '2018-09-25 05:52:15', '2018-09-25 05:52:15'),
(15, 31, 4, 'MEMEMEMEMEMEMEMEMES !', '2018-09-25 05:55:00', '2018-09-25 05:55:00'),
(16, 34, 4, 'Picina de la muerte :v', '2018-09-25 17:39:41', '2018-09-25 17:39:41'),
(17, 34, 4, 'Death', '2018-09-25 20:10:53', '2018-09-25 20:10:53'),
(18, 26, 4, 'Shinichi kun? v:', '2018-09-25 20:18:16', '2018-09-25 20:18:16'),
(19, 34, 4, 'mnb,jb,hn,k', '2018-09-26 00:14:45', '2018-09-26 00:14:45'),
(20, 30, 4, 'houuuse', '2018-09-26 00:16:17', '2018-09-26 00:16:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directors`
--

CREATE TABLE `directors` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `directors`
--

INSERT INTO `directors` (`id`, `firstname`, `lastname`, `biography`, `created_at`, `updated_at`) VALUES
(1, 'Mario', 'Pusso', 'adjlkj        $director = Director::find($id);', '2018-09-21 03:07:31', '2018-09-21 16:52:40'),
(3, 'Stiven', 'Spelman', 'no recuerdo, pero creo que es el de Titanic', '2018-09-21 16:53:49', '2018-09-21 16:53:49'),
(4, 'Simon', 'Bolivar', 'El tipo que salvo a los vneezolanos :v', '2018-09-26 01:22:18', '2018-09-26 01:22:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_20_205603_create_categories_table', 1),
(4, '2018_09_20_205933_create_actors_table', 1),
(5, '2018_09_20_210118_create_directors_table', 1),
(6, '2018_09_20_210330_create_tags_table', 1),
(7, '2018_09_20_210508_create_years_table', 1),
(8, '2018_09_20_210656_create_movies_table', 1),
(9, '2018_09_20_211720_create_qualifications_table', 1),
(10, '2018_09_20_212237_create_commentaries_table', 1),
(11, '2018_09_20_212632_create_posters_table', 1),
(12, '2018_09_20_213411_create_actor_movie_table', 1),
(13, '2018_09_20_215345_create_movie_tag_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `year_id` int(10) UNSIGNED NOT NULL,
  `director_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `title`, `sinopsis`, `content`, `user_id`, `year_id`, `director_id`, `category_id`, `created_at`, `updated_at`) VALUES
(22, 'El Estafador', 'La pelicula es buena', '<p><em><strong>Trata sobre estafas, peleas, matanzas, etc :v Trata sobre estafas, peleas, matanzas, etc :v Trata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :vTrata sobre estafas, peleas, matanzas, etc :v</strong></em><br></p>', 4, 10, 3, 9, '2018-09-25 00:24:44', '2018-09-25 22:53:43'),
(23, 'Terminator 1', 'La aparicion del exterminador del futuro', '<p>La aparicion del exterminador del futurLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuroLa aparicion del exterminador del futuro</p>', 4, 10, 3, 1, '2018-09-25 05:19:12', '2018-09-25 22:59:08'),
(24, 'Yusuke Urameshi', 'Mi personaje', '<p>\\Auth::user()-&gt;i\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id\\Auth::user()-&gt;id</p>', 4, 1, 1, 2, '2018-09-25 05:32:30', '2018-09-25 05:32:30'),
(25, 'Brayan griffin', 'Brayan griffin', '<p>Brayan griffinBrayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffinBrayan griffinBrayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p><p>Brayan griffin</p>', 4, 12, 1, 4, '2018-09-25 05:34:58', '2018-09-25 05:34:58'),
(26, 'Shinichi', 'El chico de la mano extraterrestre', '<p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p><p>El chico de la mano extraterrestre</p>', 4, 2, 3, 1, '2018-09-25 05:37:01', '2018-09-25 05:37:01'),
(27, 'Mi novia', 'Ella si es bonita vale :v', 'Ella sale en la pelicula de hermanos de armas, ella es chevere :v<br>', 4, 8, 3, 9, '2018-09-25 05:38:11', '2018-09-25 22:57:03'),
(28, 'Mr Robot', 'El es eliot anderson', 'Es un hacker, el mejor hacker de todos los tiempos, tiene crisis de identidad, en una es un hacker malvado, el la otra solo un hacker...<br>', 4, 3, 3, 2, '2018-09-25 05:45:05', '2018-09-25 05:45:05'),
(29, 'Ellas dos 7u7', 'Son dos chicas, una peliroja y una morena', 'Estan bonitas, ellas salen en un video musical de Sam Smith<br>', 4, 17, 3, 9, '2018-09-25 05:47:32', '2018-09-25 22:52:00'),
(30, 'Dr House', 'El mldt dr house nunca falla :v', 'El dr mas loco y genial de todos los tiempos<br>', 4, 13, 3, 8, '2018-09-25 05:48:48', '2018-09-25 05:48:48'),
(31, 'Una pagina de memes, que mas :v', 'Me dan ganas de hacer la pagina para memes, una especie de copia de meme droid', 'Deberia intentar hacerla, no estaria mal<br>', 4, 17, 1, 9, '2018-09-25 05:50:26', '2018-09-25 05:50:26'),
(32, 'Illuminate!', 'Illuminate\\Support\\Facades\\Shema', '<p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\Shema</p><p>Illuminate\\Support\\Facades\\ShemaIlluminate\\Support\\Facades\\Shema</p>', 4, 9, 3, 9, '2018-09-25 05:54:05', '2018-09-25 22:55:45'),
(33, 'El pianista judio', 'Eje, yo no me robe esos caramelos :v', 'No me atrapen, soy artista :v<br>', 4, 17, 1, 1, '2018-09-25 05:56:32', '2018-09-25 05:56:32'),
(34, 'DeadPool', 'El asesino bocazas', 'El tiene poderes de regeneracion mucho mejores que los de wolverine<br>', 4, 17, 3, 7, '2018-09-25 17:39:03', '2018-09-25 17:39:03'),
(35, 'Slash', 'guitarrista', 'Slash, el principal guitarrista de guns and roses<br>', 4, 13, 1, 2, '2018-09-25 17:43:17', '2018-09-25 17:43:17'),
(36, 'Samurai', 'Asesino samurai entrenado por hercules', 'El samurai chevere<br>', 4, 5, 3, 2, '2018-09-25 17:44:05', '2018-09-25 17:44:05'),
(37, 'Bleach', 'Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v', '<p>Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v</p><p>Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v</p><p>Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v</p><p>Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v</p><p>Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :vIchigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v</p><p>Ichigo kurosaki, el se convierte en un shinigami, adquiere una gran espada y se vuelve un maton :v</p>', 4, 3, 1, 1, '2018-09-25 20:19:57', '2018-09-25 20:19:57'),
(38, 'Mordecai', 'Es un azulejo que habla, de la serie \"Un show mas\"', 'Mordecai habla como bobo.<br>', 4, 17, 1, 7, '2018-09-26 00:29:22', '2018-09-26 00:29:22'),
(39, 'Dead Note', '\"L\" , el principal detective de la serie anime DeadNote', 'L es un detective, aficionado de resolver casos y de comer dulces, tiene extraños habitos y una forma de pensar fuera de lo comun.<br>', 4, 17, 3, 5, '2018-09-26 00:32:17', '2018-09-26 00:32:17'),
(40, 'Paisaje, atardecer', 'Paisaje, atardecerPaisaje, atardecerPaisaje, atardecerPaisaje, atardecerPaisaje, atardecerPaisaje, atardecerPaisaje, atardecer', '<p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p><p>Paisaje, atardecer</p>', 4, 2, 1, 2, '2018-09-26 00:48:38', '2018-09-26 00:48:38'),
(41, 'Lobo, el lobo', 'El lobo que corre', 'Lobo agazapado :V<br>', 4, 13, 3, 2, '2018-09-26 00:58:04', '2018-09-26 00:58:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie_tag`
--

CREATE TABLE `movie_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `movie_tag`
--

INSERT INTO `movie_tag` (`id`, `movie_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(27, 24, 3, NULL, NULL),
(28, 25, 3, NULL, NULL),
(29, 26, 3, NULL, NULL),
(30, 30, 3, NULL, NULL),
(31, 31, 3, NULL, NULL),
(33, 33, 3, NULL, NULL),
(34, 34, 3, NULL, NULL),
(35, 35, 3, NULL, NULL),
(36, 36, 3, NULL, NULL),
(37, 37, 3, NULL, NULL),
(38, 27, 3, NULL, NULL),
(39, 38, 3, NULL, NULL),
(40, 39, 3, NULL, NULL),
(41, 40, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posters`
--

CREATE TABLE `posters` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posters`
--

INSERT INTO `posters` (`id`, `movie_id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(21, 22, '1537818884_poster_vlcsnap-2018-05-26-00h50m10s340.png', 'Http://www.example.com', '2018-09-25 00:24:45', '2018-09-25 00:24:45'),
(22, 23, '1537836552_poster_0 (41).jpg', 'Http://www.example.com', '2018-09-25 05:19:13', '2018-09-25 05:19:13'),
(23, 24, '1537837350_poster_yusu.jpg', 'Http://www.example.com', '2018-09-25 05:32:31', '2018-09-25 05:32:31'),
(24, 25, '1537837498_poster_vlcsnap-2018-06-11-20h19m38s975.png', 'Http://www.example.com', '2018-09-25 05:34:59', '2018-09-25 05:34:59'),
(25, 26, '1537837621_poster_vlcsnap-2018-07-18-20h17m36s272.png', 'Http://www.example.com', '2018-09-25 05:37:02', '2018-09-25 05:37:02'),
(26, 27, '1537837691_poster_beia.png', 'Http://www.example.com', '2018-09-25 05:38:11', '2018-09-25 05:38:11'),
(27, 28, '1537838105_poster_vlcsnap-2018-06-12-21h34m30s679.png', 'Http://www.example.com', '2018-09-25 05:45:05', '2018-09-25 05:45:05'),
(28, 29, '1537838252_poster_vlcsnap-2018-07-29-22h31m46s149.png', 'Http://www.example.com', '2018-09-25 05:47:32', '2018-09-25 05:47:32'),
(29, 30, '1537838328_poster_33c34d032964fd551f1f44147f3f64be.jpg', 'Http://www.example.com', '2018-09-25 05:48:48', '2018-09-25 05:48:48'),
(30, 31, '1537838426_poster_vlcsnap-2018-05-02-14h20m10s195.png', 'Http://www.example.com', '2018-09-25 05:50:27', '2018-09-25 05:50:27'),
(31, 32, '1537838645_poster_Illuminati2.png', 'Http://www.example.com', '2018-09-25 05:54:05', '2018-09-25 05:54:05'),
(32, 33, '1537838792_poster_vlcsnap-2018-05-19-20h29m02s338.png', 'Http://www.example.com', '2018-09-25 05:56:32', '2018-09-25 05:56:32'),
(33, 34, '1537880943_poster_0 (26).jpg', 'Http://www.example.com', '2018-09-25 17:39:03', '2018-09-25 17:39:03'),
(34, 35, '1537881197_poster_0 (29).jpg', 'Http://www.example.com', '2018-09-25 17:43:17', '2018-09-25 17:43:17'),
(35, 36, '1537881245_poster_0 (34).jpg', 'Http://www.example.com', '2018-09-25 17:44:06', '2018-09-25 17:44:06'),
(36, 37, '1537890597_poster_0 (31).jpg', 'Http://www.example.com', '2018-09-25 20:19:57', '2018-09-25 20:19:57'),
(37, 38, '1537905562_poster_0 (15).jpg', 'Http://www.example.com', '2018-09-26 00:29:22', '2018-09-26 00:29:22'),
(38, 39, '1537905737_poster_0 (32).jpg', 'Http://www.example.com', '2018-09-26 00:32:17', '2018-09-26 00:32:17'),
(39, 40, '1537906718_poster_0 (20).jpg', 'Http://www.example.com', '2018-09-26 00:48:39', '2018-09-26 00:48:39'),
(40, 41, '1537907284_poster_0 (19).jpg', 'Http://www.example.com', '2018-09-26 00:58:04', '2018-09-26 00:58:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(3, 'kung fu', 'Es un arte marcial de los chinos', '2018-09-22 01:17:24', '2018-09-22 01:17:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@gmail.com', 'admin', '$2y$10$d9G0RAhn9qwLC6UJmH01zevSdORVyv7hUg5HlyvtNnpjBBth0w242', 'HmTHstSIeanivaGGlH78lyYYCbefbYdksfWIoTpTvS2PMUcPMR5xCCO5lva5', '2018-09-24 18:43:57', '2018-09-24 18:43:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `years`
--

CREATE TABLE `years` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `years`
--

INSERT INTO `years` (`id`, `year`, `created_at`, `updated_at`) VALUES
(1, 1959, NULL, NULL),
(2, 1960, NULL, NULL),
(3, 1961, NULL, NULL),
(4, 1962, NULL, NULL),
(5, 1963, NULL, NULL),
(6, 1964, NULL, NULL),
(7, 1965, NULL, NULL),
(8, 2000, NULL, NULL),
(9, 2001, NULL, NULL),
(10, 2002, NULL, NULL),
(11, 2003, NULL, NULL),
(12, 2004, NULL, NULL),
(13, 2005, NULL, NULL),
(14, 2006, NULL, NULL),
(15, 2007, NULL, NULL),
(16, 2008, NULL, NULL),
(17, 2009, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_movie_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_movie_movie_id_foreign` (`movie_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indices de la tabla `commentaries`
--
ALTER TABLE `commentaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaries_movie_id_foreign` (`movie_id`),
  ADD KEY `commentaries_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movies_title_unique` (`title`),
  ADD KEY `movies_user_id_foreign` (`user_id`),
  ADD KEY `movies_year_id_foreign` (`year_id`),
  ADD KEY `movies_director_id_foreign` (`director_id`),
  ADD KEY `movies_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `movie_tag`
--
ALTER TABLE `movie_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_tag_movie_id_foreign` (`movie_id`),
  ADD KEY `movie_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posters_movie_id_foreign` (`movie_id`);

--
-- Indices de la tabla `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qualifications_movie_id_foreign` (`movie_id`),
  ADD KEY `qualifications_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `years_year_unique` (`year`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `actor_movie`
--
ALTER TABLE `actor_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `commentaries`
--
ALTER TABLE `commentaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `movie_tag`
--
ALTER TABLE `movie_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `posters`
--
ALTER TABLE `posters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `years`
--
ALTER TABLE `years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actor_movie`
--
ALTER TABLE `actor_movie`
  ADD CONSTRAINT `actor_movie_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actor_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `commentaries`
--
ALTER TABLE `commentaries`
  ADD CONSTRAINT `commentaries_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movies_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movies_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `movie_tag`
--
ALTER TABLE `movie_tag`
  ADD CONSTRAINT `movie_tag_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `movie_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `posters`
--
ALTER TABLE `posters`
  ADD CONSTRAINT `posters_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `qualifications`
--
ALTER TABLE `qualifications`
  ADD CONSTRAINT `qualifications_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qualifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
