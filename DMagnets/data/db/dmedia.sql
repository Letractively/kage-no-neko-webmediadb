-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Дек 15 2011 г., 21:42
-- Версия сервера: 5.5.10
-- Версия PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `dmedia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actor`
--

CREATE TABLE IF NOT EXISTS `actor` (
  `actor_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  PRIMARY KEY (`actor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Дамп данных таблицы `actor`
--

INSERT INTO `actor` (`actor_id`, `first_name`, `last_name`) VALUES
(6, 'Киле', 'Санчез'),
(7, 'Риз', 'Койро'),
(8, 'Диора', 'Бэрд'),
(9, 'Хэролд', 'Перрино'),
(10, 'Миа', 'Киршнер'),
(11, 'Трой', 'Раптэш'),
(12, 'Бен', 'Коттон'),
(13, 'Кэти', 'Китинг'),
(14, 'Кэтрин', 'Изабель'),
(15, 'Рэй', 'Уинстоун'),
(16, 'Энтони', 'Хопкинс'),
(17, 'Робин', 'Райт'),
(18, 'Джон', 'Малкович'),
(19, 'Криспин', 'Гловер'),
(20, 'Брендан', 'Глисон'),
(21, 'Анджелина', 'Джоли'),
(22, 'Костас', 'Мэндилор'),
(23, 'Пол', 'Бэйкер'),
(24, 'Джон', 'Билезикджян'),
(25, 'Пол', 'Блекторн'),
(26, 'Валери', 'Крус'),
(27, 'Терренс', 'Манн'),
(28, 'Рауль', 'Банеджа'),
(29, 'Конрад', 'Коутс'),
(30, 'Мэтт', 'Гордон'),
(31, 'Джонатан', 'Хиггинс'),
(32, 'Дэниэл', 'Кэш'),
(33, 'Джоэнн', 'Келли'),
(34, 'Мэттью', 'Найт'),
(35, 'Билли', 'Уэст'),
(36, 'Кэти', 'Сагал'),
(37, 'Джон', 'ДиМаджио'),
(38, 'Тресс', 'МакНилл'),
(39, 'Фил', 'ЛаМарр'),
(40, 'Морис', 'ЛаМарш'),
(41, 'Лоурен', 'Том'),
(42, 'Дэвид', 'Херман'),
(43, 'Фрэнк', 'Уэлкер'),
(44, 'Кэт', 'Сауси');

-- --------------------------------------------------------

--
-- Структура таблицы `actor_in_film`
--

CREATE TABLE IF NOT EXISTS `actor_in_film` (
  `actor_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  KEY `actor_id` (`actor_id`,`film_id`),
  KEY `film_id` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `actor_in_film`
--

INSERT INTO `actor_in_film` (`actor_id`, `film_id`) VALUES
(15, 14),
(16, 14),
(17, 14),
(18, 14),
(19, 14),
(20, 14),
(21, 14),
(22, 14),
(23, 14),
(24, 14),
(25, 17),
(26, 17),
(27, 17),
(28, 17),
(29, 17),
(30, 17),
(31, 17),
(32, 17),
(33, 17),
(34, 17),
(35, 29),
(36, 29),
(37, 29),
(38, 29),
(39, 29),
(40, 29),
(41, 29),
(42, 29),
(43, 29),
(44, 29);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `comment_txt` text NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `film_id` (`film_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='countries list' AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`country_id`, `name`) VALUES
(7, 'Россия'),
(8, 'Украина'),
(9, 'США'),
(10, 'СССР'),
(11, 'Великобритания'),
(12, 'Австралия'),
(13, 'Австрия'),
(14, 'Бельгия'),
(15, 'Бразилия'),
(16, 'Венгрия'),
(17, 'Германия'),
(18, 'Индия'),
(19, 'Испания'),
(20, 'Италия'),
(21, 'Китай'),
(22, 'Корея'),
(23, 'Корея Южная'),
(24, 'Корея Северная'),
(25, 'Латвия'),
(26, 'Литва'),
(27, 'Норвегия'),
(28, 'Польша'),
(29, 'Франция'),
(30, 'Япония'),
(31, 'Канада');

-- --------------------------------------------------------

--
-- Структура таблицы `countries_of_films`
--

CREATE TABLE IF NOT EXISTS `countries_of_films` (
  `country_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  KEY `country_id` (`country_id`,`film_id`),
  KEY `film_id` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries_of_films`
--

INSERT INTO `countries_of_films` (`country_id`, `film_id`) VALUES
(9, 14),
(9, 17),
(9, 29),
(31, 17);

-- --------------------------------------------------------

--
-- Структура таблицы `episod`
--

CREATE TABLE IF NOT EXISTS `episod` (
  `episode_id` int(11) NOT NULL AUTO_INCREMENT,
  `episode_name` varchar(50) NOT NULL DEFAULT '',
  `season_id` int(11) NOT NULL,
  `episod_num` int(5) NOT NULL DEFAULT '0',
  `file_id` int(11) NOT NULL,
  PRIMARY KEY (`episode_id`),
  KEY `file_id` (`file_id`),
  KEY `season_id` (`season_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `episod`
--

INSERT INTO `episod` (`episode_id`, `episode_name`, `season_id`, `episod_num`, `file_id`) VALUES
(1, 'Episode 1x1', 2, 1, 31),
(2, 'Episode 1x2', 2, 2, 32),
(3, 'Episode 2x1', 3, 1, 33),
(4, 'Episode 2x2', 3, 2, 34);

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_link` text NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`file_id`, `file_link`) VALUES
(9, 'magnet:?xt=urn:tree:tiger:WMIQV7KG6UIK7VR47T3EKJPGVOOJRYCPT4QGNKA&xl=8796854986&dn=30_%D0%B4%D0%BD%D0%B5%D0%B9_%D0%BD%D0%BE%D1%87%D0%B8-%D0%A2%D0%B5%D0%BC%D0%BD%D1%8B%D0%B5_%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B0(2010).mkv'),
(11, 'magnet:?xt=urn:tree:tiger:OG4JG4KQ7SBDFDBKEK67DRFRD43H7YQELMI25LI&xl=12857713877&dn=%D0%90%D0%BC%D0%B5%D1%80%D0%B8%D0%BA%D0%B0%D0%BD%D0%B5%D1%86(2010).mkv'),
(12, 'magnet:?xt=urn:tree:tiger:CZJYNKVHJCVNAW3XXYTXTCHE27XKNLVGDQNE5WY&xl=4977548442&dn=%D0%91%D0%B5%D0%B7%D1%83%D0%BC%D0%BD%D1%8B%D0%B9_%D0%9C%D0%B0%D0%BA%D1%81_3-%D0%9F%D0%BE%D0%B4_%D0%BA%D1%83%D0%BF%D0%BE%D0%BB%D0%BE%D0%BC_%D0%B3%D1%80%D0%BE%D0%BC%D0%B0(1985).mkv'),
(13, 'magnet:?xt=urn:tree:tiger:N67BAK3U6SVIAVW4NG7OHQHO7GKZUZTXHPWEWBA&xl=2203273216&dn=%D0%91%D1%83%D1%80%D0%BB%D0%B5%D1%81%D0%BA(2010).avi'),
(14, 'magnet:?xt=urn:tree:tiger:A7QZH55HVJ5AYEEOJIJFWSBKNBO5GTJKUXQFPAA&xl=6764043273&dn=%D0%90%D0%BB%D0%B5%D1%88%D0%B0_%D0%9F%D0%BE%D0%BF%D0%BE%D0%B2%D0%B8%D1%87_%D0%B8_%D0%A2%D1%83%D0%B3%D0%B0%D1%80%D0%B8%D0%BD_%D0%97%D0%BC%D0%B5%D0%B9(2004).mkv'),
(15, 'magnet:?xt=urn:tree:tiger:73QEPM23RAD47APK2LOFZFKFCMUUPCSO7QINRRA&xl=9716664519&dn=%D0%91%D0%B5%D0%BE%D0%B2%D1%83%D0%BB%D1%8C%D1%84(2007).mkv'),
(16, 'magnet:?xt=urn:tree:tiger:YKI6CHO554VWRQBWDV525FAKFZKKYUOS47P3VSI&xl=7508604950&dn=%D0%9B%D0%B5%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D1%8B%D0%B9_%D0%BF%D0%B5%D1%80%D0%B8%D0%BE%D0%B4_3-%D0%AD%D1%80%D0%B0_%D0%B4%D0%B8%D0%BD%D0%BE%D0%B7%D0%B0%D0%B2%D1%80%D0%BE%D0%B2(2009).mkv'),
(17, 'magnet:?xt=urn:tree:tiger:YD2X24XIQCLHVHFS53NBXJ3D2U4KDJ7TEYUTBKQ&xl=3131846027&dn=%D0%A1%D0%B5%D0%B7%D0%BE%D0%BD_%D0%BE%D1%85%D0%BE%D1%82%D1%8B_2(2008).mkv'),
(18, 'magnet:?xt=urn:tree:tiger:MYJP3726JRM7BKZLFPPA32CCNH6I26ZRJE3HDVQ&xl=1192588408&dn=the.dresden.files.s01e01.720p.hdtv.x264.mkv'),
(19, 'magnet:?xt=urn:tree:tiger:VWLP6WW6QHCY6IINK5PE2T7YVSQB2O7OFET7ZXQ&xl=1191610802&dn=the.dresden.files.s01e02.720p.hdtv.x264.mkv'),
(20, 'magnet:?xt=urn:tree:tiger:BEMHBKCNDGEHKKF4GY3MM2S6JUDPECUUFBDFO3I&xl=1191362548&dn=the.dresden.files.s01e03.720p.hdtv.x264.mkv'),
(21, 'magnet:?xt=urn:tree:tiger:TBLMA5R6Z6BXZUZF7Z6ITTAI7ECM3GJIA322JOY&xl=1192322501&dn=the.dresden.files.s01e04.720p.hdtv.x264.mkv'),
(22, 'magnet:?xt=urn:tree:tiger:PC4YXSLW2ZV46YAIJKYZZKWAXYGW6IRLFTIMZQQ&xl=1191499607&dn=the.dresden.files.s01e05.720p.hdtv.x264.mkv'),
(23, 'magnet:?xt=urn:tree:tiger:EKRQCTHIMN5BE4Z2UYU4LGEGE7FOL3VA3KKVUIQ&xl=1192248295&dn=the.dresden.files.s01e06.720p.hdtv.x264.mkv'),
(24, 'magnet:?xt=urn:tree:tiger:G4ERFCARWBJLMC6R5L2BBS7Z3VCHVG3BI7HS2HY&xl=1192260943&dn=the.dresden.files.s01e07.720p.hdtv.x264.mkv'),
(25, 'magnet:?xt=urn:tree:tiger:TDCMD6ECJUBH74VYLY7IH3IOFJOU5NYW56FQ6XQ&xl=1192595058&dn=the.dresden.files.s01e08.720p.hdtv.x264.mkv'),
(26, 'magnet:?xt=urn:tree:tiger:STCFISBJQXEECJO6PT45Q2ZKKPK5WLEXKFIQPEI&xl=1192196414&dn=the.dresden.files.s01e09.720p.hdtv.x264.mkv'),
(27, 'magnet:?xt=urn:tree:tiger:TXOFI7SQGV4F4BVNQWEQGC24BWNYJ6JVMOLOKXY&xl=1192383266&dn=the.dresden.files.s01e10.720p.hdtv.x264.mkv'),
(28, 'magnet:?xt=urn:tree:tiger:LMZCFAW6O4SMD7XCI5G367V7BJG53PVUSMJ5FAQ&xl=1192408781&dn=the.dresden.files.s01e11.720p.hdtv.x264.mkv'),
(29, 'magnet:?xt=urn:tree:tiger:2HL76ZS7PELNUM5X6S2F2KWPQRG445QPVVUGU2I&xl=1192395025&dn=the.dresden.files.s01e12.720p.hdtv.x264.mkv'),
(31, 'magnet:?xt=urn:tree:tiger:DLD3ICPIKTLLKVRIM7AGFK7DISO3PTW7LP5LJHQ&xl=242013842&dn=01.mkv'),
(32, 'magnet:?xt=urn:tree:tiger:7YQWQKQMP5FIOFK6G436SYWCDRILUSYDZJF7VBY&xl=281710563&dn=02.mkv'),
(33, 'magnet:?xt=urn:tree:tiger:CT3EMGINWNC3X2FGGM4B5E7HSKIRAR3FE6XWBQY&xl=249968450&dn=03.mkv'),
(34, 'magnet:?xt=urn:tree:tiger:2CVKO62LBVBTS7JAB65DSJG7GHSUZGVMVPQR6VY&xl=207151178&dn=04.mkv'),
(35, 'magnet:?xt=urn:tree:tiger:XWGBBGKXGO57ZTNBD23IAAPWD6I3XDSG5XLYFUY&xl=212774067&dn=05.mkv'),
(36, 'magnet:?xt=urn:tree:tiger:Z22LG7P3LTCS7LPR56OCJLT6UVIQ3IKCJCIAIRA&xl=221976629&dn=06.mkv'),
(37, 'magnet:?xt=urn:tree:tiger:7UMIPMRLK3KRP6TQDUSRXWQZPPHTMIVVMEEBFTI&xl=273702124&dn=07.mkv'),
(38, 'magnet:?xt=urn:tree:tiger:RNWW5QGR6JXDGB7SOTE4UL6UBUPX33WHUNVHJLA&xl=233103824&dn=08.mkv'),
(39, 'magnet:?xt=urn:tree:tiger:TRHH3EI3PUJDKBQK43JPU5FPWSXYBRM7JCXJIEY&xl=266653653&dn=09.mkv'),
(40, 'magnet:?xt=urn:tree:tiger:N5AO5WZT7IGIJ2ZXRNE4EMN4T6B2LTZZAMF7XQA&xl=230031928&dn=10.mkv'),
(41, 'magnet:?xt=urn:tree:tiger:KY7EW2EYEJC634GFJM7GHB4QIJSYVWVENC5YVFI&xl=217797848&dn=11.mkv'),
(42, 'magnet:?xt=urn:tree:tiger:7ZPN5EQDTX7U5TXRLLF6JD2VRYL6IVNWAZMQIEQ&xl=218039778&dn=12.mkv'),
(43, 'magnet:?xt=urn:tree:tiger:5TZ22JS7JBFS5LTPY3E6ZXDDFE37P75EYFSM7AI&xl=253258030&dn=13.mkv');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `film_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `original_name` varchar(50) NOT NULL DEFAULT '',
  `about` text,
  `poster` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `cartoon` enum('yes','no') NOT NULL DEFAULT 'no',
  `serial` enum('yes','no') NOT NULL DEFAULT 'no',
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`film_id`, `name`, `original_name`, `about`, `poster`, `cartoon`, `serial`) VALUES
(10, 'Американец', 'The American', 'После провала очередной операции и гибели любовницы профессиональный киллер Джек решает завершить свою карьеру. Остается последнее дело, заказанное ему таинственной женщиной, для выполнения которого он тайно едет в Италию и поселяется в маленьком городке, затерявшемся в живописных горах. Здесь неожиданно для себя самого Джек сближается с местным священником и влюбляется в красавицу Клару. Впервые в жизни раскрывается сердце человека, вынужденного таиться всю свою жизнь. Джек спокоен и счастлив настолько, что теряет бдительность…', 'Американец.jpg', 'no', 'no'),
(11, 'Безумный Макс 3: Под куполом грома', 'Mad Max Beyond Thunderdome', 'В городе Батертауне правит коварная властительница Энтити. Для укрепления своей власти она пытается использовать Макса, непревзойденного мастера дорожных схваток. Но теперь завораживающую череду автомобильных разборок под испепеляющим солнцем начинают сменять невероятные рукопашные бои.', 'Безумный_Макс_3.jpg', 'no', 'no'),
(12, 'Бурлеск', 'Burlesque', 'Али — молодая амбициозная девушка из маленького городка с чудесным голосом, совсем недавно потеряла своих родителей. Теперь никому не нужная, она отправляется в большой город Лос-Анджелес, где устраивается на работу у Тесс, хозяйки ночного клуба «Бурлеск». За короткое время она находит друзей, поклонников и любовь всей своей жизни. Но может ли сказка длиться вечно? Ведь немало людей завидует этой прекрасной танцовщице…', 'Бурлеск.jpg', 'no', 'no'),
(13, 'Алеша Попович и Тугарин Змей', '', 'В древнем русском городе Ростове родился в поповской семье сын. Назвали его родители Алешей. А когда он вырос и стал богатырем, то совершил такие подвиги, что стал героем русских былин Алешей Поповичем. Только подвиги его начались с конфуза…<br><br>Подступила к Ростову тугарская вражеская орда во главе с Тугарином Змеем и потребовала, чтобы жители города выплатили дань. Поповский сын предложил план действий. Народ этот план одобрил и собрал гору золота. Алеша же умудрился собственный план «благополучно» провалить, да с каким треском!<br><br>И золото упустил, и полгорода разрушил. После чего поклялся — Тугарина Змея изловить и золото вернуть. Отправился Алеша Попович в путь вместе с дедом Тихоном, который мальчика вырастил и воспитал, а чуть позже компанию им составили говорящий конь Юлий, купленный у цыган, почти 16-летняя красавица Любава, ее бабка и их ослик Моисей…', 'Алеша_Попович_и_Тугарин_Змей.jpg', 'yes', 'no'),
(14, 'Беовульф', 'Beowulf', 'События фильма разворачиваются в ту чудесную эпоху, покрытую туманом прошлого, богатую на героев и монстров, приключения и отвагу, богатство и славу, когда одному исключительному человеку по имени Беовульф удается спасти древнее датское королевство от жуткого чудовища, истребляющего его жителей. После этого сей легендарный викинг ростом почти в два метра, полный дерзости, уверенности и удивительной амбициозности, восходит на трон.<br><br>Всё чаще в королевстве звучит имя Беовульфа, о нем слагаются песни, восхваляющие его небывалую доблесть и решительность после того, как он приходит на помощь королю Хродгару, чье королевство подвергается вероломным нападкам Гренделя, беспощадного монстра, который мучает и пожирает жителей королевства, заставляя их жить в вечном ожидании страха и опасности.<br><br>Избавляя королевство от безжалостного монстра, Беовульф обретает славу и успех. К его ногам оказываются брошены несметные богатства, но непреодолимые искушения подстерегают его повсюду. То, насколько мудро он сможет распорядиться своей новоприобретенной властью, навсегда определит его судьбу как воина, победителя, как лидера, мужа и, что более важно, как человека.', 'Беовульф.jpg', 'yes', 'no'),
(15, 'Ледниковый период 3: Эра динозавров', 'Ice Age: Dawn of the Dinosaurs', 'К событиям «Ледникового периода 3» жизнь главных героев мультфильма потерпела некоторые изменения. Мамонты Манфред и Элли ожидают появление на свет своего детёныша; саблезубый тигр Диего впал в раздумье о том, не стал ли он слишком «мягкотелым» в компании своих друзей; ленивец Сид, бредя желанием создать собственное племя, решился украсть несколько яиц динозавра. Отправившись спасать Сида, друзья попадают в таинственный растительный мир, скрытый под толщами льда, где они сталкиваются с динозаврами и агрессивной окружающей средой, а также знакомятся с охотником на динозавров — лаской по имени Бак. Крысобелка Скрэт (который вновь случайным образом стал виной глобальной проблемы, открыв путь в мир динозавров) по-прежнему гоняется за своим орехом, но на этот раз у него появился конкурент — крысобелка Скрэтти, однако, одновременно с одержимой борьбой за орех, эти двое влюбляются друг в друга.', 'Ледниковый_период_3.jpg', 'yes', 'no'),
(16, 'Сезон охоты 2', 'Open Season 2', 'Буга и Элиота ждут новые безумные приключения! Элиот без памяти влюбился в Жизель, но ему приходится сойти с дороги, ведущей к алтарю, когда Мистера Уини похищают избалованные домашние животные, которые намерены вернуть его хозяевам. Буг, Элиот, Макскизи, Бадди и другие обитатели леса разворачивают полномасштабную спасательную операцию ради своего похожего на сосиску друга, и вскоре оказываются в лагере врага: в мире домашних питомцев. Домашние неженки под предводительством карликового пуделя Фифи не собираются отдавать Мистера Уини без боя.', 'Сезон_охоты_2.jpg', 'yes', 'no'),
(17, 'Досье Дрездена', 'The Dresden Files', 'Гарри Дрезден — единственный чародей, который дает объявления в Чикагскую телефонную книгу. Он грешит, но и против него «грешат». Но во тьме его прошлого, он находит внутренние силы и неистовое желание поступать правильно. Вооруженный верным посохом (согласен, это просто клюшка) и обаянием (если вы ничего не имеете против элегантного чувства юмора), и при содействии своего надоедливого духа-справочника Боба (обречённая душа, магический эксперт, вуаер (любитель подглядывать за обнаженными людьми)), Дрезден защитит неудачника от всевозможных сверхъестественных опасностей — всего за пять сотен долларов в день. Плюс дополнительные расходы. Но если фокус становится покусом, если начинаются... странности, если вещи, рухнувшие в ночи, начинают обладать мощной силой... «один звонок и его клюшка, к вашим услугам».', '559b5317b18e6a775e1db8742a079b83.jpg', 'no', 'yes'),
(29, 'Футурама', 'Futurama', 'Разносчик пиццы из Нью-Йорка Филипп Джей Фрай случайно был заморожен в криогенной камере ровно в 00 часов 00 минут 00 секунд 1 января 2000 года. Он был разморожен тысячу лет спустя, 31 декабря 2999 года. Фрай оказывается в далёком будущем в городе Новый Нью-Йорк. Первым с кем знакомится Фрай - девушка-мутант Туранга Лила. Фрай сбегает и начинает исследовать Новый Нью-Йорк, попутно знакомясь с Бендером. В конце-концов втроём они направляются к живому потомку Фрая Хьюберту Фарнсворту — 150-летнему гениальному учёному-склеротику, который берёт их на работу в свою небольшую компанию «Межпланетный экспресс» специализирующуюся на межгалактических грузоперевозках, на должность курьера.<br><br>Сериал показывает приключения Фрая, Лилы, робота Бендера и многих других персонажей, связанные как с полётами в космос, так и с личностями героев.<br><br>В сюжетах серий используется множество отсылок к фантастике XX века, как литературе, так и кинематографу; а также к поп- и рок-музыке; часто пародируются названия реально существующих корпораций, многочисленные отсылки к актуальным мировым событиям.', '77fb8e12e195c1e375989f8aa397ab40.jpg', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='genres of the films' AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`genre_id`, `name`) VALUES
(7, 'вестерн'),
(8, 'боевик'),
(9, 'триллер'),
(10, 'детектив'),
(11, 'драма'),
(12, 'комедия'),
(13, 'мелодрама'),
(14, 'приключения'),
(15, 'ужасы'),
(16, 'фантастика'),
(17, 'фэнтези'),
(18, 'ситком'),
(19, 'sci-fi');

-- --------------------------------------------------------

--
-- Структура таблицы `genres_of_films`
--

CREATE TABLE IF NOT EXISTS `genres_of_films` (
  `genre_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  KEY `genre_id` (`genre_id`,`film_id`),
  KEY `film_id` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres_of_films`
--

INSERT INTO `genres_of_films` (`genre_id`, `film_id`) VALUES
(8, 14),
(10, 17),
(11, 14),
(14, 14),
(17, 14),
(17, 17),
(18, 29),
(19, 29);

-- --------------------------------------------------------

--
-- Структура таблицы `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `item_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `year` varchar(4) CHARACTER SET cp1251 NOT NULL,
  `length` int(5) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `file_id` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movie`
--

INSERT INTO `movie` (`item_id`, `file_id`, `year`, `length`) VALUES
(10, 11, '2010', 101),
(11, 12, '1985', 107),
(12, 13, '2010', 119),
(13, 14, '2004', 72),
(14, 15, '2007', 113),
(15, 16, '2009', 94),
(16, 17, '2008', 76);

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `add_time` datetime NOT NULL,
  `post_body` text CHARACTER SET cp1251 NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `producer_if_film`
--

CREATE TABLE IF NOT EXISTS `producer_if_film` (
  `producer_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  KEY `producer_id` (`producer_id`,`film_id`),
  KEY `film_id` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `producer_if_film`
--

INSERT INTO `producer_if_film` (`producer_id`, `film_id`) VALUES
(7, 14),
(8, 29),
(9, 29),
(10, 17),
(11, 17),
(13, 29);

-- --------------------------------------------------------

--
-- Структура таблицы `producerі`
--

CREATE TABLE IF NOT EXISTS `producerі` (
  `producer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`producer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `producerі`
--

INSERT INTO `producerі` (`producer_id`, `first_name`, `last_name`) VALUES
(6, 'Бен', 'Кетаи'),
(7, 'Роберт', 'Земекис'),
(8, 'Рич', 'Мур'),
(9, 'Джеймс', 'Пурдум'),
(10, 'Дэвид', 'Карсон'),
(11, 'Майкл', 'Гроссман'),
(13, 'Крис', 'Лоудон');

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE IF NOT EXISTS `season` (
  `season_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `season_num` int(3) NOT NULL,
  `season_name` varchar(50) CHARACTER SET cp1251 NOT NULL DEFAULT '',
  PRIMARY KEY (`season_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`season_id`, `item_id`, `season_num`, `season_name`) VALUES
(2, 29, 1, 'Season 1'),
(3, 29, 2, 'Season 2');

-- --------------------------------------------------------

--
-- Структура таблицы `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `topic_num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `serial`
--

CREATE TABLE IF NOT EXISTS `serial` (
  `item_id` int(11) NOT NULL,
  `year_start` varchar(4) CHARACTER SET cp1251 NOT NULL,
  `year_end` varchar(4) CHARACTER SET cp1251 NOT NULL,
  `seasons_num` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `serial`
--

INSERT INTO `serial` (`item_id`, `year_start`, `year_end`, `seasons_num`) VALUES
(17, '2007', '2007', 1),
(29, '1999', 'no', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `topic_name` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `post_num` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `section_id` (`section_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_pass` varchar(32) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `user_first_name` varchar(50) CHARACTER SET cp1251 NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_birthday` date DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `group` enum('Administrator','User') NOT NULL DEFAULT 'User',
  `avatar` varchar(50) NOT NULL DEFAULT 'default.png',
  `reg_date` datetime NOT NULL,
  `status` enum('online','offline') NOT NULL DEFAULT 'offline',
  `timestamp` int(15) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `user_pass`, `user_mail`, `nickname`, `user_first_name`, `user_last_name`, `user_birthday`, `gender`, `group`, `avatar`, `reg_date`, `status`, `timestamp`) VALUES
(34, '4357a9bf98b1bd2678aecdae3daf19d4', 'shadow_nwaps@mail.ru', 'ShadowSpawn', 'Yakovlev', 'Sergey', '1990-08-14', 'male', 'Administrator', '093296db2cdd2e38c7a702064e20011c.jpg', '2011-11-27 18:49:36', 'offline', 0),
(35, 'a58f384007ef2bd67c254428b54f6f46', 'shadowspawnshadow@gmail.com', 'Kage', 'Яковлев', 'Сергей', '1990-08-14', 'male', 'User', '9f75c7d245d6169c6821df838f1042f5.jpg', '2011-11-29 14:59:05', 'offline', 0);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `actor_in_film`
--
ALTER TABLE `actor_in_film`
  ADD CONSTRAINT `actor_in_film_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actor_in_film_ibfk_3` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`actor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `countries_of_films`
--
ALTER TABLE `countries_of_films`
  ADD CONSTRAINT `countries_of_films_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `countries_of_films_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `episod`
--
ALTER TABLE `episod`
  ADD CONSTRAINT `episod_ibfk_1` FOREIGN KEY (`file_id`) REFERENCES `files` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `episod_ibfk_2` FOREIGN KEY (`season_id`) REFERENCES `season` (`season_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `genres_of_films`
--
ALTER TABLE `genres_of_films`
  ADD CONSTRAINT `genres_of_films_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genres_of_films_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `files` (`file_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `producer_if_film`
--
ALTER TABLE `producer_if_film`
  ADD CONSTRAINT `producer_if_film_ibfk_1` FOREIGN KEY (`producer_id`) REFERENCES `producerі` (`producer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producer_if_film_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `serial` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `serial`
--
ALTER TABLE `serial`
  ADD CONSTRAINT `serial_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
