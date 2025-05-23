-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2025 at 06:12 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onenewsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `news_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `comment` text COLLATE utf8mb3_persian_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `news_id`, `name`, `comment`, `created_at`) VALUES
(1, 44, 'mahdi', 'سلام', '2025-05-10 18:28:31'),
(2, 44, 'mahdi', 'عبدالی یه گلی است', '2025-05-10 18:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `text` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `imageurl` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `imageurl`) VALUES
(41, 'چنگالی', 'کارد پولک تراش عسل\r\nکارد پولک تراش عسل ، از ابتدایی و ساده ترین ابزار مورد استفاده در پولک گیری شان های عسل ها است و به همین دلیل اکثر زنبورداران از آن استفاده می کنند.\r\n\r\nاین وسیله ی ساده از دسته ای چوبی یا پلاستیکی و بدنه ای فلزی ساخته شده که بدنه ی آن دارای لبه های تیزی است که بتواند پولک ها را برش و از شان های عسل جدا نماید.\r\n\r\nاین شیوه از پولک تراشی به دلیل سهولت در استفاده از روش های مرسوم میان زنبورداران است و هزینه ی چندانی نیز متحمل زنبوردار نمی شود. اما بکارگیری این کارد زمان بیشتری نسبت به کارد پولک تراشی برقی عسل را نیاز دارد.', 'images/image21.jpg'),
(42, 'لباس زنبورداری فضایی', 'لباس زنبورداری فضایی\r\nلباس زنبورداری فضایی یکی از پر فروش ترین و بهترین لباس های زنبورداری محسوب می شود که در کشور ما از محبوبیت زیادی برخوردار است.\r\n\r\nلباس فضایی همان طور که در عکس زیر مشخص است دارای یک شلوار، یک پیراهن و یک کلاه است، که پیراهن با یک زیپ به کلاه متصل شده است، اما شلوار جدا است که به سفارش مشتری می توان آن را یک تکه دوخت، یعنی شلوار، پیراهن و کلاه به صورت یکسره باشند، هر دو مدل این لباس ها در قسمت لوازم زنبورداری موجود می باشد که شما به راحتی می توانید آنها را سفارش دهید.\r\n\r\nهمان طور که مطلع هستید زنبورها به رنگ تیره حساس هستند و این می تواند سیستم عصبی آنها را تحریک کند.\r\n\r\nبه همین دلیل برای تهیه لباس های زنبورداری معمولا از پارچه هایی با رنگ روشن استفاده می شود.\r\n\r\nروپوش فضایی دارای جیب مخصوص برای نگهداری لوازم مورد نیاز زنبورداران مانند اهرم زنبورداری و ماژیک ملکه هست و همچنین در پایین پاچه شلوار و لبه آستین ها دارای کش مخصوص برای جلو گیری زنبور از ورود به داخل لباس است.\r\n\r\nکلاه لباس فضایی دارای یک تور در جلو صورت و بقیه آن از جنس پارچه هست، که این باعث می شود که کل', 'images/image22.jpg'),
(43, 'کندو', 'کندو عسل :خانه و محل کار زنبورهای عسل است. زنبورها با کمک موادی که جمع آوری و ترشح می‌کنند، کندو عسل را می‌سازند. در این خانه زنبورها، لاروها را پرورش داده، عسل تولید و ذخیره می‌کنند و سایر فرآورده‌های آن‌ها نیز در این خانه تولید و نگهداری می‌شود. به این ترتیب باید متوجه شده باشید که کندوی عسل نقش بسیار پر رنگی در زندگی زنبور عسل دارد.\r\n\r\nماده تشکیل دهنده کندو زنبور عسل را، موم می‌گویند. این موم‌ها به شکل خانه‌های شش ضلعی ساخته شده و حاوی مقدار زیادی عسل خام هستند. از دیگر موادی که داخل موم یا همان کندو عسل یافت می‌شود، می‌توان به: بره موم، گرده گل و ژل رویال اشاره نمود. با این وجود، مقدار عسل در کندو بیشتر از سایر فرآورده‌ها است.\r\n\r\nدر ادامه مقاله قرار است به بررسی کامل انواع کندو عسل، ساختار آنها، ویژگی یک کندوی عسل خوب و… بپردازیم. پس اگر به دنبال تحقیق و یا آشنایی با کندوهای عسل هستید، پیشنهاد می‌کنیم این مقاله را از دست ندهید.\r\n\r\nانواع کندو عسل:\r\nزنبورداران امروزی از انواع مختلف کندو عسل استفاده می‌کنند، که متداول ترین آنها لانگستروت است که در سال 1851 ابداع شد. در طراحی این کندوی', 'images/image23.jpg'),
(40, 'استراکتور', 'دستگاه اکستراکتور عسل چیست؟\r\nزنبور عسل شهد گل را از طبیعت جمع آوری می کند و داخل سلول های مومی قاب کندو ذخیره می کند ، زنبورداران برای برداشت و فروش عسل خود، مجبور به خارج کردن عسل از داخل این سلول ها هستند.\r\n\r\nبرای خارج کردن عسل از داخل سلول های مومی از دستگاه اکستراکتور یا همان عسل گیر استفاده می شود. دستگاه اکستراکتور تشکیل شده است از یک بدنه که معمولا از جنس استیل هست، یک شیر در پایین دستگاه که مخصوص تخلیه عسل است، گیربکس دستگاه که در بالای آن تعبیه شده و یک توری داخل مخزن که محل قرار گیری شان های عسل است.\r\n\r\nدر قدیم اکستراکتورها بیشتر در سایز چهار قاب تولید می شدند، اما امروزه در ابعاد بزرگتری هم تولید می شوند که اکثرا با گیربکس برقی عرضه می شوند.\r\n\r\nاین دستگاه در انواع گوناگون و قیمت مختلف در بازار عرضه می شود.\r\n\r\nانواع اکستراکتور\r\nدستگاه اکستراکتور عسل یا عسل گیر در دو نوع تولید و ساخته و به بازار عرضه می شود:\r\n\r\n۱- برقی : در اکستراکتور برقی یک موتور در بالای دستگاه قرار دارد در واقع این نوع استراکتورها با انرژی برق کار می کنند و میزان تولید و تخلیه ی شانها با دقت بیشتری انجام م', 'images/image20.jpg'),
(44, 'ژل رویال', 'ژل رویال چیست؟ژله رویال (Royal jelly) یا همان غذای مخصوص ملکه زنبورهای عسل که با نام هایی چون شاه انگبین، عسل سلطنتی، غذای ملکه، شهد یا شیره شاهانه و شیر زنبور عسل نیز شناخته می شود، یک نوع ماده کرمی شکل و شیری‌رنگ است که توسط زنبورهای پرستار یا همان زنبورهیا 12 تا 19 روزه در کندو و مخصوص ملکه تولید می‌شود.\r\n\r\nمهم ترین خواص ژل رویال چیست: از مهم ترین خواص ژل رویال می توان به درمان و بهبود انواع سرطان ، درمان بیماری های خود ایمنی نظیر ام اس و ALS، پارکینسون، درمان کم خونی و پوکی استخوان شدید، تقویت اعصاب، تقویت سیستم ایمنی بدن و محرک ساخت گلبول سفید و درمان عفونت های داخلی و گوارشی اشاره کرد.\r\n\r\n>> از ژل رویال زنبور عسل بعنوان اکسیر جوانی و حیات نام برده می شود و یکی از مواد کمیاب و ویژه است که به افزایش طول عمر و جلوگیری از پیری و نگهداشت نشاط و جوانی کمک می کند.\r\n\r\nحضور قوی ترین ماده ضد سرطانی دنیا بنام (10HDA) و غنی بودن از آنتی اکسیدان و استیل کولین ژل رویال را تبدیل به یک ابرغذا یا سوپرفود فراسودمند کرده است.', 'images/image20.jpg'),
(45, 'عسل طبیعی', 'عَسَل (همچنین «انگُبین» و «اَنگُوین» و در فارسی میانه کَندی[۱]) مایعی شیرین و گران‌رو است که توسط زنبورعسل و برخی حشرات دیگر نیز تولید می‌شود.[۲] زنبورها، عسل را از تراوش شکری گیاهان و گل‌ها (شهد گل‌ها) یا تراوش‌های برخی دیگر (مانند عسلک) از راه بالاآوری، فعالیت آنزیمی و بخار آب فرآوری می‌کنند. زنبورها عسل را در ساختارهایی از جنس موم به نام کندو اندوخته می‌کنند.[۲][۳][۴] عسل از کلونی‌های زنبورهای عسل وحشی یا از کندوهای زنبورهای پرورشی گردآوری می‌شود، که به این کار زنبورداری گفته می‌شود.\r\n\r\nعسل، شیرینی خود را از مونوساکاریدها، فروکتوز و گلوکز به‌دست می‌آورد و شیرینی نسبی آن در حد ساکارز است.[۵][۶] عسل دارای حدود ۳۲۵ کیلو کالری انرژی در هر ۱۰۰ گرم است. عسل به لحاظ داشتن برخی مواد تخمیری در تبادلات غذایی و کمک به هضم غذا بالاترین مرتبه را در میان غذاها دارد.', 'images/image25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `original_price` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `stock` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `original_price`, `discount`, `image_url`, `stock`) VALUES
(1, 'عسل طبیعی کوهستان', 'عسل طبیعی صد درصد خالص از دامنه‌های کوهستانی، سرشار از ویتامین‌ها و مواد معدنی.', 120000, 140000, 15, 'https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80', 10),
(2, 'موم زنبور عسل', 'موم طبیعی زنبور عسل برای ساخت شمع، محصولات آرایشی و بهداشتی.', 85000, NULL, NULL, 'https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80', 5),
(3, 'کندوی چوبی استاندارد', 'کندوی چوبی با کیفیت بالا برای زنبورداری حرفه‌ای، مقاوم در برابر شرایط جوی.', 450000, 500000, 10, 'https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80', 3),
(4, 'دستگاه استخراج عسل', 'دستگاه استخراج عسل 4 فریم، مناسب برای زنبورداران نیمه حرفه‌ای.', 1250000, NULL, NULL, 'https://images.unsplash.com/photo-1587049352851-8d4e89133924?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `admin`) VALUES
(1, 'hasan', 'h100', '1234', 0),
(2, 'taghi', 'taghi', '1234', 0),
(3, 'mahdi', 'ali1', '1234', 0),
(4, 'mahdi', 'ali1', '1234', 0),
(5, 'mahdi', 'mmm', '1234', 1),
(6, 'mahdi', 'mmm', '1234', 0),
(7, 'mahdi', 'mmm', '1234', 0),
(8, 'mahdi', 'mmm', '1234', 0),
(9, 'mahdi', 'mmm', '1234', 0),
(10, 'mahdi', 'mmm', '1234', 0),
(11, 'mahdi', 'mmm', '1234', 0),
(12, 'mahdi', 'mmm', '1234', 0),
(13, 'mahdi', 'mmm', '1234', 0),
(14, 'mahdi', 'mmm', '1234', 0),
(15, 'mahdi', 'mmm', '1234', 0),
(16, 'mahdi', 'mmm', '1234', 0),
(17, 'mahdi', 'mmm', '1234', 0),
(18, 'mahdi', 'mmm', '1234', 0),
(19, 'mahdi', 'mmm', '1234', 0),
(20, 'mahdi', 'mmm', '1234', 0),
(21, 'mahdi', 'mmm', '1234', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
