-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 02 2018 г., 16:49
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--
CREATE DATABASE IF NOT EXISTS `web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 NOT NULL,
  `introt` text CHARACTER SET utf8 NOT NULL,
  `fullt` text CHARACTER SET utf8 NOT NULL,
  `timea` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `img`, `introt`, `fullt`, `timea`) VALUES
(1, 'Как заработать на комментариях к фильмам ', 'Kak-zarabotat-na-kommentariyah-k-filmam.jpg', 'Вы любите смотреть фильмы и хотите зарабатывать на своем хобби? Это вполне реально!\r\n<p> Речь даже не про серьезные рецензии для крупных сайтов, куда еще устроиться надо, а про небольшой доход за комментарии к фильмам. Просто оставляйте короткие комментарии к фильмам и получайте за это оплату. Работает только на определенных сайтах!</p>', '<blockquote><p>В целом я бы рекомендовала лучше <a href=\"http://xn--80aaacq2clcmx7kf.xn--p1ai/napisanie-otzyivov-i-kommentariev\" target=\"_blank\" rel=\"noopener\">писать отзывы</a>&nbsp;с оплатой за просмотры или <a href=\"http://xn--80aaacq2clcmx7kf.xn--p1ai/zarabotok-na-kommentariyah-sa\" target=\"_blank\" rel=\"noopener\">размещать комментарии</a> на заказ. Доходы могут быть повыше, чем в данной сфере.</p></blockquote>\r\n<p>Никаких специальных знаний не требуется. Не нужно даже обладать особыми познаниями в области киноиндустрии (разбираться в тонкостях жанров, отличать работы гения от посредственности). Достаточно изложить в нескольких предложениях свои впечатления о фильме.</p>', '2018-04-08'),
(2, 'Лучшее приложение для заработка денег на андроид', 'earn money.png', 'Если у вас есть телефон на android, можно не тратиться на&nbsp;баланс, а пополнять его с помощью специальных приложений для заработка денег на андроид. Задания очень простые и не требуют никаких знаний и умений. С помощью такой работы можно скрасить время ожидания в очереди, в общественном транспорте или дожидаясь заказа в кафе с Wi Fi.', '<p>Существует огромное количество приложений, с помощью которых можно заработать деньги на смартфоне. Но среди них много однодневок, мошенников и даже вирусных сервисов! Не рискуйте своим телефоном и работайте только с проверенными приложениями, о которых есть положительные отзывы и есть доказательства вывода средств.</p>\r\n<p><strong>Как можно заработать на андроиде?</strong></p>\r\n<p>Специально для телефонов существует не так много заданий, и все их можно разбить на 3 общие группы:</p>\r\n<ol>\r\n<li><strong>Скачать приложения и установить</strong> — это основной способ получить деньги с помощью телефона. Конечно вам не нужно скачивать все подряд приложения, а только оплачиваемые. Найти их можно с помощью специальных сервисов, где такая работа оплачивается. Именно о них я и напишу немного ниже. А пока что посмотрим другой способ заработать на андроиде.</li>\r\n<li><strong>Просмотр видео-рекламы</strong> — ее продолжительность обычно 15-30 секунд, можно даже не смотреть в это время в экранчик, но и оплата довольно низкая: до 15 копеек за рекламу. Найти подобные задания можно в некоторых нижеописанных сервисах.</li>\r\n<li><strong>Выполнение заданий</strong> — самые разные задания, которые можно выполнять с телефона. Например, зайти в магазин и сфотографировать необходимые товары (<a href=\"http://xn--80aaacq2clcmx7kf.xn--p1ai/taynyiy-pokupatel\" target=\"_blank\" rel=\"noopener\">тайный проверяющий</a>), проверить данные об организации и сфотографировать фасад (сайт Яндекс.Толоко платит до 1$, подробней в<a href=\"http://xn--80aaacq2clcmx7kf.xn--p1ai/zarabotok-na-yandeks-toloka\" target=\"_blank\" rel=\"noopener\"> этой статье</a>) и другие подобные задания.</li>\r\n</ol>', '2018-04-09'),
(3, 'Выполнение заданий в интернете за деньги', 'third.jpg', 'Сейчас существует более сотни бирж заданий, которые помогают веб-мастерам находить исполнителей, которые готовы немного подзаработать денег.', '<blockquote><p><strong>Биржа заданий</strong> — это сайт на котором выкладывают простые&nbsp;задачи за денежное вознаграждение, которые занимают 3-5 минут времени у исполнителя.</p></blockquote>\r\n<p>Выполнение заданий в интернете за деньги появилось около 10 лет назад и на сегодняшний день это один из самых прибыльных способов работы в интернете.</p>\r\n<p>Все благодаря тому, что заказчики&nbsp;придумывают миллионы заданий&nbsp;и конкурируют между собой, выставляя цену выше и выше, что хорошо для исполнителя.</p>', '2018-04-09'),
(4, 'Как заработать на Форексе\r\n', 'kak-zarabotat-na-foreks.jpg', '<strong>Форекс — это финансовый рынок, где происходит обмен валют. Играя на разнице обменных курсов, можно получить прибыль от десятка долларов до сумм с несколькими нулями. </strong><p>Этот процесс называется трейдингом. Насколько он будет успешным, зависит от знаний, опыта, выбранной стратегии и везения игрока, а также от первоначально инвестированных сумм.</p>', '<h3>Форекс для новичков, или Как начать зарабатывать, не имея опыта и денег?</h3>\r\n<p>В настоящее время стоимость входа на рынок может быть ничтожно мала — многие брокеры предлагают открыть депозит, начиная с символической суммы в $1. Понятно, что прибыль с такой суммы тоже будет ничтожной, поэтому клиентам предоставляется кредитное плечо в соотношении вплоть до 1:50. Это означает, что при депозите, например, $10 для сделок на Форексе вам будет доступно $500, $490 из которых предоставляет для временного пользования фирма-брокер. Однако доступ к оставшейся денежной сумме автоматически прекращается, как только вы проиграли собственные $10.</p>\r\n<p>Не обязательно вкладывать сразу огромные деньги, $300–400 вполне достаточно, чтобы постепенно выйти на стабильный доход. Из тех, кто заработал на Форексе, многие начинали именно так.</p>\r\n<p>Чтобы можно было говорить о каком-либо стабильном заработке на Форексе, необходимо около полугода учиться, а еще несколько месяцев торговать. Допустим, вы проявили способности к обучению, все схватываете на лету, быстро осваиваете стратегии торговли, успели поработать с демо-счетами и переходите к реальной торговле с депозитом в $500. При стабильной торговле со средней прибылью в 20% (что очень хороший показатель) вы сможете удвоить сумму на депозите уже к концу четвертого месяца. Свою первую тысячу долларов можно заработать месяцев через семь после начала торговли. Если желаете это сделать быстрее, имейте в виду, что можно потерять и те $500, что были вложены вначале. Не торопитесь, прочувствуйте вкус игры и постепенный рост денег на вашем счету.</p>', '2018-04-15');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `articleid` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `commentt` text CHARACTER SET utf8 NOT NULL,
  `datea` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `articleid`, `user`, `commentt`, `datea`) VALUES
(3, 2, 'fitsyersi@gmail.com', 'Good text!', '2018-04-10'),
(4, 2, 'fitsyersi@gmail.com', 'Nice article!', '2018-04-10'),
(5, 3, 'aitkazya@gmail.com', 'Good article! ', '2018-04-10'),
(6, 1, 'fitsyersi@gmail.com', 'Это спасло меня!', '2018-04-15'),
(7, 4, 'fitsyersi@gmail.com', 'Спасибо, я улучшил знание о форексе!', '2018-04-16'),
(8, 4, 'aitkazya@gmail.com', 'Думаю это актуальная вещь в нашем стране...', '2018-04-16'),
(9, 1, 'aitkazya@gmail.com', 'Думая на это уходить очень много времени!', '2018-04-16'),
(10, 3, 'fitsyersi@gmail.com', 'Можете ли вы подробно написать инструкции по заработку.', '2018-04-17'),
(11, 2, 'aitkazya@gmail.com', 'Можете ли вы подробно написать инструкции по заработку.', '2018-04-17'),
(12, 3, 'admin', 'Думаю простым способом только копейки можно заработать.', '2018-04-17'),
(13, 4, 'fitsyersi@gmail.com', 'Good article!', '2018-04-17'),
(14, 4, 'aitkazya@gmail.com', 'Форекс уже устарел!', '2018-04-23'),
(15, 3, 'aitkazya@gmail.com', 'Good article!', '2018-04-24'),
(16, 4, 'aitkazya@gmail.com', 'wfwefwedewf', '2018-04-24'),
(17, 4, 'aitkazya@gmail.com', 'ewvfwfwe', '2018-04-24'),
(18, 4, 'aitkazya@gmail.com', 'asfdbsdsdbfngsad', '2018-04-24'),
(19, 4, 'fitsyersi@gmail.com', 'Yera che tam', '2018-04-24'),
(20, 5, 'admin', 'scsdca', '2018-04-24'),
(21, 4, 'admin', 'sdfbnfgdsd', '2018-04-26');

-- --------------------------------------------------------

--
-- Структура таблицы `tasklist`
--

CREATE TABLE `tasklist` (
  `id` int(11) NOT NULL,
  `usermail` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `datet` date NOT NULL,
  `worktypes` int(4) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `moneyt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tasklist`
--

INSERT INTO `tasklist` (`id`, `usermail`, `city`, `datet`, `worktypes`, `description`, `moneyt`) VALUES
(2, 'aitkazya@gmail.com', 'Almaty', '2018-04-17', 4, 'Дендрапаркте фотосеттер жасау', 5000),
(3, 'fitsyersi@gmail.com', 'Shymkent', '2018-04-16', 2, 'Фотосет жасау ', 4000),
(4, 'aldiyarm@gmial.com', 'Almaty', '2018-04-17', 2, 'Бірге жүгіру   ', 1400);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_sample`
--

CREATE TABLE `tbl_sample` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tbl_sample`
--

INSERT INTO `tbl_sample` (`id`, `first_name`, `last_name`) VALUES
(10832, 'Assylbekov', 'Yersultan'),
(10833, 'Aitkazy', 'Argyn');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `surname` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(19) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `dob`, `city`, `email`, `password`) VALUES
(1, 'admin', 'admin', '1998-08-25', 'Shymkent', 'admin', '1a1dc91c907325c69271ddf0c944bc72'),
(6, 'Aitkazy', 'Argyn', '1998-08-25', 'Uzinagash', 'aitkazya@gmail.com', 'a8a55a630d5d4d30378b8500553c7043'),
(8, 'Yersultan', 'Assylbekov', '1998-08-25', 'Shymkent', 'fitsyersi@gmail.com', '4d5f63805e0e212732a7d555d3d781d0'),
(10, 'Didar', 'Bakhitzhanov', '1998-08-12', 'Atyrau', 'didar@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb'),
(11, 'Myrzabek', 'Aldiyar', '1998-12-08', 'Almaty', 'aldiyarm@gmail.com', '168397cd4eedcd77fcc036f1e2bf3ce4'),
(12, 'Madina', 'Mekenbayeva', '1998-08-29', 'Saryagash', 'mekenbaym@mail.ru', '202cb962ac59075b964b07152d234b70'),
(13, 'Tanirbergen', 'Kaldibay', '1998-11-09', 'Aktay', 'tanik@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Структура таблицы `пример`
--

CREATE TABLE `пример` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `orders` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `пример`
--

INSERT INTO `пример` (`id`, `name`, `orders`) VALUES
(1, 'yers', 500),
(2, 'max', 300),
(3, 'yers', 400),
(4, 'joma', 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_sample`
--
ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `пример`
--
ALTER TABLE `пример`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `tbl_sample`
--
ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10834;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `пример`
--
ALTER TABLE `пример`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
