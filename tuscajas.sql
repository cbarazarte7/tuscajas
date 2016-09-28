-- phpMyAdmin SQL Dump
-- version 4.5.5.1deb2.trusty~ppa.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-09-2016 a las 11:32:11
-- Versión del servidor: 5.6.31-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tuscajas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `state`, `created_at`, `updated_at`) VALUES
(1, '10 consejos a la hora de mudarte', '<p><strong>1. Prep&aacute;rate</strong></p>\n\n\n<p>Las mudanzas son la ocasi&oacute;n id&oacute;nea para hacer limpieza y deshacerte de todas aquellas cosas que no usas o no necesitas. En esta &eacute;poca te vendr&aacute; genial guardar en el dep&oacute;sto de tu nueva casa las sillas de la playa, la sombrilla, incluso la ropa que ya no usas.</p>\n\n<p>&nbsp;</p>\n\n<p>Despu&eacute;s, pasa revista. Comprueba que puedes usar el ascensor para subir muebles (hay comunidades que lo tienen prohibido); parque en la puerta de tu casa, para que el &ldquo;d&iacute;a D&rdquo; lo cambies por el camion de trasteos; desconecta la nevera la noche antes&hellip;&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>2. Kit de supervivencia</strong></p>\n\n<p>Piensa en el d&iacute;a despu&eacute;s o, incluso, en la noche, si no quieres dormir en un colch&oacute;n sin s&aacute;banas y vestida. Ropa de cama, <strong>toallas, pijamas y elementos </strong>para el ba&ntilde;o son algunas de las cosas que no te pueden faltar. A la ma&ntilde;ana siguiente, necesitas empezar con fuerzas, descansad@&hellip; &iexcl;Y limpi@!&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>3. &iquest;Me la hacen o la hago?&nbsp;</strong></p>\n\n<p>Depende de varios factores, pero especialmente de tu presupuesto y de los ayudantes con los que puedas contar. Una mudanza para una casa de unos 70-80 m2 cuesta en promedio 1 millon de pesos (25 m3), siempre que no necesites contratar una gr&uacute;a para subir los muebles por la fachada haya o no haya ascensor, se pueda estacionar en la puerta, etc.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>4. Yo puedo,&nbsp; Soy capaz y no tengo de otra.</strong></p>\n\n<p>Si lo haces t&uacute; (eso s&iacute;, con ayuda de familiares y amigos dispuestos a sacrificar un s&aacute;bado o un domingo), tendr&aacute;s que buscar igual una compa&ntilde;&iacute;a de trasteos para tener un camion de trasteos. Para que te entre todo sin problema, debe tener <strong>una capacidad de unos 18m3</strong>. Su precio oscila entre los 200 a 350 mil pesos por trasteo de 25 M3.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>5. Momento &ldquo;hacer cajas&rdquo;&nbsp;</strong></p>\n\n<p>Para tener todo listo, necesitas empezar unas tres semanas antes del d&iacute;a de mudanza. Puedes comenzar por recopilar las cajas de los comerciantes o almacenes de la zona y si necesitas m&aacute;s, compr&aacute;rselas a las empresas de mudanzas (desde $2.200 cada una). &nbsp;Y adem&aacute;s tendr&aacute;s que buscar cinta industrial, pl&aacute;stico de burbujas, bolsas industriales y un marcador para enumerar las cajas y unas tijeras. Si buscas cada cosa por separado tardaras en promedio 1 d&iacute;a perdido y en diferentes sitios . Terminaras pagando en promedio&nbsp; 80 Mil pesos por los elementos para trastear tu apartaestudio, pasajes o gasolina,&nbsp; trasnporte de los elementos a tu casa y&nbsp; un arduo d&iacute;a de busqueda donde se atrasar&aacute;n cosas de tu vida normal. Por eso te recomendamos que adquieras alguno de los kits de <a href="http://www.tuscajasparatrasteos.com/">www.tuscajasparatrasteos.com</a> para que hagas tu vida m&aacute;s f&aacute;cil.</p>\n\n<p>Para seguir viviendo esas semanas con cierta normalidad,<strong> empieza a empaquetar todo aquello que no necesitas </strong>para tu d&iacute;a a d&iacute;a: libros, ropa que ya no te sriva&hellip; Y un consejo: Aunque la caja sea grande (o muy grande) no la cargues a tope, porque no podr&aacute;s moverla. Pero sabes? Eso no sera un problema con las dimensiones de las cajas escogotas por <a href="http://www.tuscajasparatrasteos.com/">www.tuscajasparatrasteos.com</a>. No necesitas cajas grandes para poder mover lo mismo por peso. Cajas medianas te dar&aacute;n mas espacio para tu mudanza y podr&aacute;s cargarlas por ti mism@ sin problemas.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>6. &iquest;C&oacute;mo empacar una casa entera?&nbsp;</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Sigue un orden. Guarda cada habitaci&oacute;n por separado y marca cada caja con el nombre de la estancia a la que corresponda. No olvides <strong>hacer inventario</strong>. Y si no quieres que nada se rompa por el camino, usa &nbsp;un rollo de papel de burbujas&nbsp; <a href="http://www.tuscajasparatrasteos.com/">www.tuscajasparatrasteos.com</a>.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>7. Momento desmontar los muebles&nbsp; </strong></p>\n\n<p>Ante todo, no pierdas ninguna pieza. Mete los tornillos y las piezas peque&ntilde;as de cada uno en bolsas industriales&nbsp; de tus&nbsp; <a href="http://www.tuscajasparatrasteos.com/">www.tuscajasparatrasteos.com</a>. , especificando el mueble del que se trate. Y si la cosa se complica,<strong> haz un croquis. </strong>As&iacute;, ser&aacute; m&aacute;s f&aacute;cil montarlo de nuevo.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>8. Momento Camion de mudanza</strong></p>\n\n<p>Aprovecha bien el espacio. <strong>Primero carga los muebles m&aacute;s voluminosos</strong>, despu&eacute;s las cajas m&aacute;s pesadas, de forma que aseguren los muebles, y las m&aacute;s ligeras sobre las otras o el mobiliario. Ve rellenando con las piezas sueltas y asegura con cuerdas, para que no se caiga nada. Un consejo: ponte ropa c&oacute;moda y holgada, que te permita libertad de movimientos y no cargues cosas muy pesadas, si no quieres ver sufrir a tu cuerpo. Mejor, m&aacute;s viajes con menos peso.&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>9. Momento &ldquo;casa nueva&rdquo;&nbsp;</strong></p>\n\n<p>Por fin, llegas a tu nuevo hogar, aunque hay tanto bulto que no sabes por d&oacute;nde empezar. &iexcl;Tranquil@! Respira y comienza. <strong>Primero, monta los muebles,</strong> despu&eacute;s, deshaz las cajas, procura ir dobl&aacute;ndolas al mismo tiempo para que ocupen menos espacio, y por &uacute;ltimo, conecta la nevera(recuerda que al menos deben pasar 24 horas para este paso).</p>\n\n<p>&nbsp;</p>\n\n<p><strong>10. Momento &ldquo;colocar&rdquo;</strong></p>\n\n<p>Para que la cosa termine y no te pases d&iacute;as y d&iacute;as con la casa patas arriba, <strong>empieza colocando las cosas de la cocina y el ba&ntilde;o</strong> (al quitarte un n&uacute;mero importante de cajas, te vas animando). Despu&eacute;s, las habitaciones y termina con la sala, que es, normalmente, la estancia donde m&aacute;s hay que colocar.&nbsp;</p>\n', 'act', '2016-05-13 23:56:10', '2016-05-14 01:18:50'),
(2, '6 tips para saber que es hora de mudarte', '<p>Mudarse no es la actividad preferida de nadie. Al margen del esfuerzo f&iacute;sico que requiere meter una vivienda entera en cajas y enviarlas a un nuevo lugar (a veces sin ayuda, otras veces con), hay otros factores que considerar, como el cambio de nombre en los servicios, la cancelaci&oacute;n de deudas y pagos, el traslado de las mascotas, dejar la vivienda en buenas condiciones para las personas que entrar&aacute;n, el torbellino emocional que involucra abandonar un hogar, entre muchas otras cuestiones. Mucha gente se resiste a este cambio por todas sus implicancias, y lo posterga indefinidamente o se convence de que no es lo mejor. Eventualmente acabar&aacute; acept&aacute;ndolo, y m&aacute;s vale temprano que tarde, sobre todo si la necesidad apremia. Porque la realidad es que, cuando es tiempo de mudarse, no hay con qu&eacute; darle: hay que hacerlo. &iquest;C&oacute;mo nos damos cuenta, entonces, de que ya es tiempo de abandonar el viejo hogar? A continuaci&oacute;n, una serie de indicadores claros para ayudarnos a entender que lleg&oacute; la hora cambiar de casa.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>1. El factor n&uacute;mero 1: dinero</strong></p>\n\n<p>&nbsp;</p>\n\n<p>La clave a la hora de tomar una decisi&oacute;n de semejante magnitud. Parece obvio pero muchas personas quiz&aacute;s no recuerden que, a la hora de decidir mudarse, deben tener en cuenta mucho m&aacute;s que la compa&ntilde;&iacute;a mudadora que deber&aacute;n contratar. Examinar adecuadamente los ahorros, los ingresos, ponerse al d&iacute;a con el pago de impuestos, de servicios, hacer los traspasos correspondientes, etc. Todas cosas que nadie deber&iacute;a pasar por alto.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>2. Necesitas m&aacute;s espacio de almacenamiento</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Esta es una de las principales necesidades que empujan a las personas a cambiar de casa. Si realmente te encuentras apretado y ya no entra un alfiler en tus armarios o alacenas (y la situaci&oacute;n financiera te acompa&ntilde;a), es una raz&oacute;n m&aacute;s que v&aacute;lida para elegir mudarte. Si ambientes con armarios profundos y anchos te ayudar&aacute;n a organizar mejor tus pertenencias y vivir de manera m&aacute;s limpia y ordenada, ni lo dudes.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>3. El barrio est&aacute; en decadencia</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Quiz&aacute;s cuando te mudaste a tu vecindario era un barrio de moda o presentaba condiciones ideales para ese momento de tu vida. No obstante, con el tiempo notaste que los comercios fueron cerrando, los restaurantes fueron mudando sus sucursales, y volver tarde por la noche ya no te da mucha seguridad. Quiz&aacute;s pienses en tener hijos pronto y no te vuelva loco la idea de criarlos en un barrio as&iacute;, porque los colegios buenos est&aacute;n lejos, hay pocos ni&ntilde;os en la zona o estar&aacute;s intranquilo si andan solos por la calle. El barrio es una raz&oacute;n poderosa a la hora de planificar una mudanza; debes tenerlo siempre en cuenta, seg&uacute;n las circunstancias de tu vida.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>4. La familia se agranda</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Esto pasa y es lo m&aacute;s normal del mundo. Un hijo que nace, una madre que se instala indefinidamente en tu casa, otra cuarta mascota que no has podido resistirte a adoptar. Buscar una casa m&aacute;s grande es el siguiente paso l&oacute;gico, no solamente por cuestiones de espacio y almacenamiento, sino porque de pronto las zonas de colegios, hospitales y &aacute;reas verdes se transforman en una prioridad para ti. Gran motivo para mudarse.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>5. La familia se achica</strong></p>\n\n<p>&nbsp;</p>\n\n<p>La situaci&oacute;n opuesta tambi&eacute;n llegar&aacute;: tus hijos crecieron y abandonan el nido, te has divorciado o te ha llegado el momento de abandonar la casa de tus padres. Quiz&aacute;s no necesites una casa tan grande, sino algo m&aacute;s peque&ntilde;o, f&aacute;cil y pr&aacute;ctico de limpiar, bien ubicado y bien conectado con alternativas de transporte p&uacute;blico.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>6. Ya no es la casa de tus sue&ntilde;os</strong></p>\n\n<p>&nbsp;</p>\n\n<p>Cuando te mudaste a tu casa actual, ten&iacute;as ciertas expectativas, ciertos horarios, cierto estilo de vida. Ahora quiz&aacute;s precises estar m&aacute;s cerca del centro, o de la estaci&oacute;n de tren por si alguno de tus hijos se ha mudado a otra ciudad, o simplemente te has cansado de viajar tanto tiempo para llegar a la oficina. Tu vida ha cambiado y contin&uacute;a cambiando. Quiz&aacute;s sea hora de dar un paso m&aacute;s y buscar un lugar que se ajuste a tus necesidades actuales por eso es importante que uses para que esta decisi&oacute;n sea mas facil y la vida no se te haga cuadros www.tuscajasparatrasteos.com</p>\n', 'act', '2016-04-29 21:52:44', '2016-05-14 01:21:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extras`
--

CREATE TABLE `extras` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `extras`
--

INSERT INTO `extras` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Si tu biblioteca es más grande que la de tus amigos, agrega 3 cajas, por solo', '15000.00', '2016-09-05 19:50:30', '0000-00-00 00:00:00'),
(2, 'Si tu casa tiene más accesorios de decoración de lo normal, agrega 6 metros de plástico burbuja por solo', '12000.00', '2016-09-05 19:50:30', '0000-00-00 00:00:00'),
(3, 'Si amas la cocina y tienes todos los juguetes para hacer platos geniales, agrega 2 cajas más por solo', '10000.00', '2016-09-05 19:50:30', '0000-00-00 00:00:00'),
(4, 'Si tu casa es como una galería de arte, agrega un rollo de vinipel o 3 bolsas por solo', '10000.00', '2016-09-15 20:33:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kits`
--

CREATE TABLE `kits` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `contents` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `state` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `kits`
--

INSERT INTO `kits` (`id`, `name`, `tags`, `picture`, `description`, `contents`, `price`, `state`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Kit  para apartaestudios', 'apartaestudios', '', 'Hasta 50 m2. \n\n', '12 Cajas Medianas, 1 Cinta industrial ; 8 mts de plástico de burbuja , 4 Bolsas industriales, 1 marcador. ', '65000.00', 'act', 'tra', '2016-03-10 08:49:07', '2016-04-16 01:44:23'),
(2, 'Kit para apartamentos', 'apartamentos', '', 'Hasta 140 m2', '18 Cajas Medianas , 1 Cinta industrial, 15 metros de Plástico de burbuja ,8 Bolsas industriales.', '115000.00', 'act', 'tra', '2016-03-10 10:23:47', '2016-05-11 06:49:13'),
(4, 'Kit para casas', 'casas', '', 'Entre 180 m2 y 300 m2.\n', '34 Cajas Medianas , 1 Cinta industrial, 30 metros de Plástico de burbuja , 12 Bolsas industriales.', '185000.00', 'act', 'tra', '2016-03-10 10:25:40', '2016-05-14 03:45:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_09_211043_create_kits_table', 2),
('2016_03_09_211056_create_orders_table', 2),
('2016_04_27_203242_create_articles_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `neighborhood` text COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `extra_id` text COLLATE utf8_unicode_ci,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kit_id` int(10) UNSIGNED NOT NULL,
  `payment` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `response` text COLLATE utf8_unicode_ci NOT NULL,
  `response_code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `response_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `name`, `code`, `email`, `tel`, `city`, `neighborhood`, `comments`, `extra_id`, `state`, `kit_id`, `payment`, `date`, `created_at`, `updated_at`, `address`, `response`, `response_code`, `response_date`) VALUES
(45, 'lina', 'G1I11Z7BD0DewmUNIlSm', 'lina.pinilla@grimorum.com', '65464', 'bogota', 'prueba', '', '0', 'Hemos recibido tu pedido', 4, 'Tarjeta de credito', '2016-09-14 23:57:39', '2016-09-15 04:57:39', '2016-09-15 04:57:39', '', '', '', '0000-00-00 00:00:00'),
(46, 'lina', '1eIUzw6vVkSDmzQeOmZp', 'lina.pinilla@grimorum.com', '65464', 'bogota', 'prueba', '', '1', 'Hemos recibido tu pedido', 4, 'Tarjeta de credito', '2016-09-14 23:57:39', '2016-09-15 04:57:39', '2016-09-15 04:57:39', '', '', '', '0000-00-00 00:00:00'),
(47, 'Hector David Barrero', 'Hizi83Ut21kRujWhoY4c', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '0', 'Hemos recibido tu pedido', 4, 'PSE', '2016-09-16 19:10:24', '2016-09-16 23:10:24', '2016-09-16 23:10:24', '', '', '', '0000-00-00 00:00:00'),
(48, 'Hector David Barrero', 'GsrKuIV7BCgL11CxZSyB', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '1', 'Hemos recibido tu pedido', 4, 'PSE', '2016-09-16 19:10:24', '2016-09-16 23:10:24', '2016-09-16 23:10:24', '', '', '', '0000-00-00 00:00:00'),
(49, 'Hector David Barrero', 'MNFENJtB1Fv43xvrc6eN', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '3', 'Hemos recibido tu pedido', 4, 'PSE', '2016-09-16 19:10:24', '2016-09-16 23:10:24', '2016-09-16 23:10:24', '', '', '', '0000-00-00 00:00:00'),
(50, 'Hector David Barrero', 'Odb58xKwDxJ8pRmZd6TB', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '0', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:57:13', '2016-09-16 23:57:13', '2016-09-16 23:57:13', '', '', '', '0000-00-00 00:00:00'),
(51, 'Hector David Barrero', 'nINDuSeC4IfX4jaqvvaT', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '1', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:57:13', '2016-09-16 23:57:13', '2016-09-16 23:57:13', '', '', '', '0000-00-00 00:00:00'),
(52, 'Hector David Barrero', '0wFezpXwXSi8e6JpymVH', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '2', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:57:13', '2016-09-16 23:57:13', '2016-09-16 23:57:13', '', '', '', '0000-00-00 00:00:00'),
(53, 'Hector David Barrero', '9SVGJmeh171anFxJu5iM', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '3', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:57:13', '2016-09-16 23:57:13', '2016-09-16 23:57:13', '', '', '', '0000-00-00 00:00:00'),
(54, 'Hector David Barrero', 'iNrPTj4fuKq7Pz0Xj8Bc', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '4', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:57:13', '2016-09-16 23:57:13', '2016-09-16 23:57:13', '', '', '', '0000-00-00 00:00:00'),
(55, 'Hector David Barrero', 'X842dbKj9Dlj5Eo4Cfku', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '0', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:58:02', '2016-09-16 23:58:02', '2016-09-16 23:58:02', '', '', '', '0000-00-00 00:00:00'),
(56, 'Hector David Barrero', '00ddbNJXnBtWdcYkgzuh', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '2', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:58:02', '2016-09-16 23:58:02', '2016-09-16 23:58:02', '', '', '', '0000-00-00 00:00:00'),
(57, 'Hector David Barrero', 'VRkLpf41rz9JCCi33Dgp', 'david.barrero@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '3', 'Hemos recibido tu pedido', 4, 'Contra entrega', '2016-09-16 19:58:02', '2016-09-16 23:58:02', '2016-09-16 23:58:02', '', '', '', '0000-00-00 00:00:00'),
(58, 'prueba', 'bSxU2Vh8aj7G0RBTrscm', 'prueba@prueba.com', '12345', 'bogota', 'prueba', '', '0', 'Hemos recibido tu pedido', 1, 'Contra entrega', '2016-09-17 22:34:06', '2016-09-18 02:34:06', '2016-09-18 02:34:06', '', '', '', '0000-00-00 00:00:00'),
(59, 'Pruebas David', '691005dWkfqJaP9H1f6Z', 'Pruebas@grimorum.com', '3204522938749547', 'Bogota', 'Potosi', '', '0', 'Hemos recibido tu pedido', 1, 'Contra entrega', '2016-09-19 15:21:01', '2016-09-19 19:21:01', '2016-09-19 19:21:01', '', '', '', '0000-00-00 00:00:00'),
(60, 'Pruebas David', 'JTBBQa7AgCmYefSUYFfS', 'Pruebas@grimorum.com', '3204522938749547', 'Bogota', 'Potosi', '', '1', 'Hemos recibido tu pedido', 1, 'Contra entrega', '2016-09-19 15:21:01', '2016-09-19 19:21:01', '2016-09-19 19:21:01', '', '', '', '0000-00-00 00:00:00'),
(61, 'Pruebas David', 'bR54dfQCcif6HGyvHZO8', 'Pruebas@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '0', 'Hemos recibido tu pedido', 1, 'Contra entrega', '2016-09-19 16:37:28', '2016-09-19 20:37:28', '2016-09-19 20:37:28', 'AHI AL LADO DE DONDE PEDRO', '', '', '0000-00-00 00:00:00'),
(62, 'Pruebas David', 'p3lgbHda2SInnDzIlFrY', 'Pruebas@grimorum.com', '3204522938', 'Bogotá', 'Potosi', '', '1', 'Hemos recibido tu pedido', 1, 'Contra entrega', '2016-09-19 16:37:28', '2016-09-19 20:37:28', '2016-09-19 20:37:28', 'AHI AL LADO DE DONDE PEDRO', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'grimorum@grimorum.com', '$2y$10$mT/7pmS9tHu0GpXWU5Kx1.52CSgWgRCxBtb.vT9Je1bW8RL4jLNOy', 'jb0WcAv9mj68QQDjV1uktj7XKvdxYxr3nR43NJNHVqhiJdSSTcPGUMYX4z7K', '2016-03-10 03:10:53', '2016-05-02 20:14:00'),
(2, 'fj,fh,', 'fdyu,fyu,', '', NULL, '2016-04-29 02:14:51', '2016-04-29 02:14:51'),
(3, 'loiiu', 'DFJBLARBHLAHERB', '', NULL, '2016-04-29 03:07:59', '2016-04-29 03:07:59');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `kits`
--
ALTER TABLE `kits`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_kit_id_index` (`kit_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `extras`
--
ALTER TABLE `extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `kits`
--
ALTER TABLE `kits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_kit_id_foreign` FOREIGN KEY (`kit_id`) REFERENCES `kits` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
