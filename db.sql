-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2016 at 09:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `menuid` int(11) NOT NULL DEFAULT '0',
  `label` varchar(25) NOT NULL,
  `issub` tinyint(4) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `uri` varchar(250) DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL,
  `iconclass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`menuid`, `label`, `issub`, `parentid`, `uri`, `isactive`, `displayorder`, `iconclass`) VALUES
(1, 'Home', 0, NULL, 'admin/home', 1, 10, 'glyphicon glyphicon-home margin-right-10'),
(2, 'Admissions', 0, NULL, NULL, 1, 20, 'glyphicon glyphicon-tasks margin-right-10'),
(3, 'Requirements', 1, 2, 'admin/requirements', 1, 10, NULL),
(4, 'Procedure', 1, 2, 'admin/procedure', 1, 20, NULL),
(5, 'Policy', 1, 2, 'admin/policy', 1, 30, NULL),
(6, 'News & Events', 0, NULL, NULL, 1, 30, 'fa fa-calendar fa-fw margin-right-10'),
(7, 'School News', 1, 6, 'admin/news', 1, 10, NULL),
(8, 'Upcomming Events', 1, 6, 'admin/events', 1, 20, NULL),
(9, 'Gallery', 0, NULL, 'admin/gallery', 1, 40, 'fa fa-image fa-fw margin-right-10'),
(10, 'Administrations', 0, NULL, NULL, 1, 50, 'fa fa-sitemap fa-fw margin-right-10'),
(11, 'Board of Trustees', 1, 10, 'admin/trustees', 1, 10, NULL),
(12, 'Staff Directory', 1, 10, 'admin/staff', 1, 20, NULL),
(13, 'About Us', 0, NULL, NULL, 1, 60, 'fa fa-book fa-fw margin-right-10'),
(14, 'History', 1, 13, 'admin/history', 1, 10, NULL),
(15, 'Mission and Vision', 1, 13, 'admin/mission_vision', 1, 20, NULL),
(16, 'Contact Us', 0, NULL, 'admin/contact_us', 1, 70, 'fa fa-send fa-fw margin-right-10');

-- --------------------------------------------------------

--
-- Table structure for table `appconfig`
--

CREATE TABLE `appconfig` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `key` varchar(25) NOT NULL,
  `value` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appconfig`
--

INSERT INTO `appconfig` (`id`, `category`, `key`, `value`) VALUES
(1, 'header', 'bodybackground', 'assets/images/bg1.jpg'),
(2, 'header', 'headerlogo', 'assets/images/SMPCS_Logo.jpg'),
(3, 'header', 'headertxt_left', 'St. Martin de Porres'),
(4, 'header', 'headertxt_right', 'Catholic School'),
(8, 'about_us', 'mapcode', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.8194247576453!2d120.7884936!3d14.835389299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396519099f76501%3A0x9c4171ef76999199!2sSt.+Martin+de+Porres+Catholic+School!5e0!3m2!1sen!2sph!4v1436582019515" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(9, 'security', 'passkey', 'projschool'),
(10, 'information', 'tel_number', '(044) 665 0232'),
(11, 'information', 'fax_number', '(044) 665 0232'),
(12, 'information', 'school_email', 'smpcs@yahoo.com'),
(13, 'information', 'school_address', 'Poblacion Rd., Poblacion, Paombong, Bulacan Philippines'),
(17, 'information', 'school_name', 'St. Martin de Porres Catholic School'),
(18, 'information', 'short_name', 'St. Martin'),
(19, 'reference', 'gallery_folder', 'assets/images/gallery/');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designationid` int(11) NOT NULL,
  `label` varchar(250) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `displayorder` int(11) NOT NULL,
  `groupid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designationid`, `label`, `description`, `displayorder`, `groupid`) VALUES
(1, 'Director', '', 10, 0),
(2, 'Principal', '', 20, NULL),
(3, 'Finance Officer', '', 30, NULL),
(4, 'Religion Coordinator', '', 40, NULL),
(5, 'Registrar', '', 50, 10),
(6, 'Cashier', '', 60, 10),
(7, 'Librarian', '', 70, 20),
(8, 'Bookkeeper', '', 80, 20),
(9, 'Faculty', '', 90, NULL),
(10, 'Support Personnel', '', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `what` varchar(250) NOT NULL,
  `when` datetime DEFAULT NULL,
  `where` varchar(250) DEFAULT NULL,
  `details` varchar(4000) DEFAULT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `isactive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `what`, `when`, `where`, `details`, `picture`, `datecreated`, `isactive`) VALUES
(1, 'Basketball Game 1', '2015-07-19 09:49:56', 'Paombong Bulacan', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/events/1.jpg', '2015-07-19 09:49:56', 1),
(2, 'Basketball Game 2', '2015-07-19 09:49:56', 'Paombong Bulacan', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/events/2.jpg', '2015-07-19 09:49:56', 1),
(3, 'Basketball Game 3', '2015-07-19 09:49:56', 'Paombong Bulacan', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/events/3.jpg', '2015-07-19 09:49:56', 1),
(4, 'Basketball Game 4', '2015-07-19 09:49:56', 'Paombong Bulacan', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/events/4.jpg', '2015-07-19 09:49:56', 1),
(5, 'Basketball Game 5', '2015-07-19 09:49:56', 'Paombong Bulacan', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/events/5.jpg', '2015-07-19 09:49:56', 1),
(8, 'Basketball Game 6.5', '2015-07-19 10:49:56', 'Paombong Bulacan', '<p>I''m a paragraph. Click here to add your own text and edit me. It&rsquo;s easy. Just click &ldquo;Edit Text&rdquo; or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I&rsquo;m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.</p>', '', '2015-07-19 09:49:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `g_folder`
--

CREATE TABLE `g_folder` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `datecreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_folder`
--

INSERT INTO `g_folder` (`id`, `name`, `description`, `datecreated`) VALUES
(1, 'Events 2015', '', '2015-07-20 20:30:22'),
(2, 'First Folder', '', '2015-07-20 20:30:49'),
(3, 'School Activities', '', '2015-07-20 20:31:13'),
(4, 'School Year End 2015', '', '2015-07-20 20:31:35'),
(21, 'test', 'test', '2016-07-10 04:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `g_images`
--

CREATE TABLE `g_images` (
  `id` int(11) NOT NULL,
  `folderid` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `label` varchar(250) DEFAULT NULL,
  `datecreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_images`
--

INSERT INTO `g_images` (`id`, `folderid`, `filename`, `label`, `datecreated`) VALUES
(1, 1, '1.jpg', '1', '2015-07-20 20:37:54'),
(2, 2, '1.jpg', '1', '2015-07-20 20:39:00'),
(3, 3, '1.jpg', '1', '2015-07-20 20:39:00'),
(4, 4, '1.jpg', '1', '2015-07-20 20:39:00'),
(5, 1, '2.jpg', '2', '2015-07-20 20:39:40'),
(6, 2, '2.jpg', '2', '2015-07-20 20:39:40'),
(7, 3, '2.jpg', '2', '2015-07-20 20:39:40'),
(8, 4, '2.jpg', '2', '2015-07-20 20:39:40'),
(12, 1, '3.jpg', '3', '2015-07-20 20:40:16'),
(13, 2, '3.jpg', '3', '2015-07-20 20:40:16'),
(14, 3, '3.jpg', '3', '2015-07-20 20:40:16'),
(15, 4, '3.jpg', '3', '2015-07-20 20:40:16'),
(19, 1, '4.jpg', '4', '2015-07-20 20:40:51'),
(20, 2, '4.jpg', '4', '2015-07-20 20:40:51'),
(21, 3, '4.jpg', '4', '2015-07-20 20:40:51'),
(22, 4, '4.jpg', '4', '2015-07-20 20:40:51'),
(26, 1, '5.jpg', '5', '2015-07-20 20:41:40'),
(27, 2, '5.jpg', '5', '2015-07-20 20:41:40'),
(28, 3, '5.jpg', '5', '2015-07-20 20:41:40'),
(29, 4, '5.jpg', '5', '2015-07-20 20:41:40'),
(30, 15, 'C:\\xampp\\tmp\\php2776.tmp', 'C:\\xampp\\tmp\\php2776.tmp', '2016-07-09 18:35:34'),
(31, 15, 'C:\\xampp\\tmp\\php2777.tmp', 'C:\\xampp\\tmp\\php2777.tmp', '2016-07-09 18:35:34'),
(32, 15, 'C:\\xampp\\tmp\\php2787.tmp', 'C:\\xampp\\tmp\\php2787.tmp', '2016-07-09 18:35:34'),
(33, 15, 'C:\\xampp\\tmp\\php2788.tmp', 'C:\\xampp\\tmp\\php2788.tmp', '2016-07-09 18:35:34'),
(34, 16, 'P.E uniform - Boy.jpg', 'P.E uniform - Boy.jpg', '2016-07-09 18:36:46'),
(35, 16, 'P.E uniform - Girl.jpg', 'P.E uniform - Girl.jpg', '2016-07-09 18:36:46'),
(36, 16, 'School uniform - boy.jpg', 'School uniform - boy.jpg', '2016-07-09 18:36:46'),
(37, 16, 'School uniform - girl.jpg', 'School uniform - girl.jpg', '2016-07-09 18:36:46'),
(38, 17, 'P.E uniform - Boy.jpg', 'P.E uniform - Boy.jpg', '2016-07-09 18:39:40'),
(39, 17, 'P.E uniform - Girl.jpg', 'P.E uniform - Girl.jpg', '2016-07-09 18:39:40'),
(40, 17, 'School uniform - boy.jpg', 'School uniform - boy.jpg', '2016-07-09 18:39:40'),
(41, 17, 'School uniform - girl.jpg', 'School uniform - girl.jpg', '2016-07-09 18:39:40'),
(42, 18, 'pe1.jpg', 'pe1.jpg', '2016-07-09 18:42:26'),
(43, 18, 'pe2.jpg', 'pe2.jpg', '2016-07-09 18:42:26'),
(44, 18, 'pe3.jpg', 'pe3.jpg', '2016-07-09 18:42:26'),
(45, 18, 'pe5.jpg', 'pe5.jpg', '2016-07-09 18:42:26'),
(46, 19, 'pe1.jpg', 'pe1.jpg', '2016-07-09 18:44:29'),
(47, 19, 'pe2.jpg', 'pe2.jpg', '2016-07-09 18:44:29'),
(48, 19, 'pe3.jpg', 'pe3.jpg', '2016-07-09 18:44:29'),
(49, 19, 'pe5.jpg', 'pe5.jpg', '2016-07-09 18:44:29'),
(51, 20, 'pe1.jpg', 'pe1.jpg', '2016-07-10 04:42:42'),
(52, 20, 'pe2.jpg', 'pe2.jpg', '2016-07-10 04:42:42'),
(55, 21, 'pe1.jpg', 'pe1.jpg', '2016-07-10 04:43:33'),
(56, 21, 'pe2.jpg', 'pe2.jpg', '2016-07-10 04:43:34'),
(57, 21, 'pe3.jpg', 'pe3.jpg', '2016-07-10 04:43:34'),
(58, 21, 'pe5.jpg', 'pe5.jpg', '2016-07-10 04:43:34'),
(59, 21, '1.jpg', '1.jpg', '2016-07-10 05:16:12'),
(62, 21, '4.jpg', '4.jpg', '2016-07-10 05:16:12'),
(63, 21, '5.jpg', '5.jpg', '2016-07-10 05:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `label` varchar(25) NOT NULL,
  `issub` tinyint(4) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  `uri` varchar(250) DEFAULT NULL,
  `isactive` tinyint(4) DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `label`, `issub`, `parentid`, `uri`, `isactive`, `displayorder`) VALUES
(1, 'Home', 0, NULL, 'welcome', 1, 10),
(2, 'Admissions', 0, NULL, NULL, 1, 20),
(3, 'Requirements', 1, 2, 'admissions/requirements', 1, 10),
(4, 'Procedure', 1, 2, 'admissions/procedure', 1, 20),
(5, 'Policy', 1, 2, 'admissions/policy', 1, 30),
(6, 'News & Events', 0, NULL, NULL, 1, 30),
(7, 'School News', 1, 6, 'news_events/news', 1, 10),
(8, 'Upcoming Events', 1, 6, 'news_events/events', 1, 20),
(9, 'Gallery', 0, NULL, 'gallery', 1, 40),
(10, 'Administrations', 0, NULL, NULL, 1, 50),
(11, 'Board of Trustees', 1, 10, 'administrations/trustees', 1, 10),
(12, 'Staff Directory', 1, 10, 'administrations/staff', 1, 20),
(13, 'About Us', 0, NULL, NULL, 1, 60),
(14, 'History', 1, 13, 'about_us/history', 1, 10),
(15, 'Mission and Vision', 1, 13, 'about_us/mission_vision', 1, 20),
(16, 'Contact Us', 0, NULL, 'contact_us', 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(4000) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `isactive` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `details`, `picture`, `datecreated`, `isactive`) VALUES
(1, 'This is my first day.', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/news/1.jpg', '2015-07-18 00:00:00', 1),
(2, 'When I''m young.', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/news/2.jpg', '2015-07-18 00:00:00', 1),
(3, 'Christmas party for all.', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/news/3.jpg', '2015-07-18 00:00:00', 1),
(4, 'Please forgive me.', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/news/4.jpg', '2015-07-18 00:00:00', 1),
(5, 'When I''m gone', 'I''m a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.?This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.', 'assets/images/news/5.jpg', '2015-07-18 00:00:00', 1),
(6, 'Test News', 'Test test test test.', '', '2015-07-23 00:26:43', 1),
(8, 'Base under attack!!!', '<p>asdasdas dasd</p>\r\n<p>as</p>\r\n<p>da</p>\r\n<p>sd asd asd asd</p>\r\n<p>a sd</p>\r\n<p>as&nbsp;</p>\r\n<p>dasd&nbsp;</p>\r\n<p>asd asd asd asd asd asd asd</p>\r\n<p>&nbsp;asd asd</p>', 'assets/images/news/1439466183.jpg', '2015-08-13 14:41:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pagefiles`
--

CREATE TABLE `pagefiles` (
  `id` int(11) NOT NULL,
  `fileid` int(11) NOT NULL,
  `basepath` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagefiles`
--

INSERT INTO `pagefiles` (`id`, `fileid`, `basepath`, `type`) VALUES
(1, 1001, 'assets/bower_components/bootstrap/dist/css/bootstrap.min.css', 'css'),
(2, 1002, 'assets/bower_components/metisMenu/dist/metisMenu.min.css', 'css'),
(3, 1003, 'assets/dist/css/sb-admin-2.css', 'css'),
(4, 1004, 'assets/bower_components/font-awesome/css/font-awesome.min.css', 'css'),
(5, 1005, 'assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css', 'css'),
(6, 1006, 'assets/bower_components/datatables-responsive/css/dataTables.responsive.css', 'css'),
(8, 2001, 'assets/bower_components/jquery/dist/jquery.min.js', 'js'),
(9, 2002, 'assets/bower_components/bootstrap/dist/js/bootstrap.min.js', 'js'),
(10, 2003, 'assets/bower_components/metisMenu/dist/metisMenu.min.js', 'js'),
(11, 2004, 'assets/dist/js/sb-admin-2.js', 'js'),
(12, 2005, 'assets/bower_components/datatables/media/js/jquery.dataTables.min.js', 'js'),
(13, 2006, 'assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js', 'js'),
(15, 2007, 'assets/js/admin/news.js', 'js'),
(16, 2008, 'assets/js/admin/events.js', 'js'),
(17, 2009, 'assets/js/admin/modal.js', 'js'),
(18, 3001, 'assets/tinymce/tinymce.min.js', 'js'),
(19, 2010, 'assets/js/admin/requirements.js', 'js'),
(20, 2011, 'assets/js/admin/procedure.js', 'js'),
(21, 2012, 'assets/js/admin/policy.js', 'js'),
(22, 2013, 'assets/js/admin/trustees.js', 'js');

-- --------------------------------------------------------

--
-- Table structure for table `pagefilesetting`
--

CREATE TABLE `pagefilesetting` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `fileid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagefilesetting`
--

INSERT INTO `pagefilesetting` (`id`, `pageid`, `fileid`) VALUES
(1, 1001, 1001),
(2, 1001, 1002),
(3, 1001, 1003),
(4, 1001, 1004),
(5, 1001, 1005),
(6, 1001, 1006),
(7, 1001, 2001),
(8, 1001, 2002),
(9, 1001, 2003),
(10, 1001, 2004),
(11, 1001, 2005),
(12, 1001, 2006),
(16, 1002, 1001),
(17, 1002, 1002),
(18, 1002, 1003),
(19, 1002, 1004),
(20, 1002, 1005),
(21, 1002, 1006),
(22, 1002, 2001),
(23, 1002, 2002),
(24, 1002, 2003),
(25, 1002, 2004),
(26, 1002, 2005),
(27, 1002, 2006),
(31, 1003, 1001),
(32, 1003, 1002),
(33, 1003, 1003),
(34, 1003, 1004),
(35, 1003, 1005),
(36, 1003, 1006),
(37, 1003, 2001),
(38, 1003, 2002),
(39, 1003, 2003),
(40, 1003, 2004),
(41, 1003, 2005),
(42, 1003, 2006),
(46, 1004, 1001),
(47, 1004, 1002),
(48, 1004, 1003),
(49, 1004, 1004),
(50, 1004, 1005),
(51, 1004, 1006),
(52, 1004, 2001),
(53, 1004, 2002),
(54, 1004, 2003),
(55, 1004, 2004),
(56, 1004, 2005),
(57, 1004, 2006),
(61, 1005, 1001),
(62, 1005, 1002),
(63, 1005, 1003),
(64, 1005, 1004),
(65, 1005, 1005),
(66, 1005, 1006),
(67, 1005, 2001),
(68, 1005, 2002),
(69, 1005, 2003),
(70, 1005, 2004),
(71, 1005, 2005),
(72, 1005, 2006),
(76, 1006, 1001),
(77, 1006, 1002),
(78, 1006, 1003),
(79, 1006, 1004),
(80, 1006, 1005),
(81, 1006, 1006),
(82, 1006, 2001),
(83, 1006, 2002),
(84, 1006, 2003),
(85, 1006, 2004),
(86, 1006, 2005),
(87, 1006, 2006),
(91, 1007, 1001),
(92, 1007, 1002),
(93, 1007, 1003),
(94, 1007, 1004),
(95, 1007, 1005),
(96, 1007, 1006),
(97, 1007, 2001),
(98, 1007, 2002),
(99, 1007, 2003),
(100, 1007, 2004),
(101, 1007, 2005),
(102, 1007, 2006),
(106, 1008, 1001),
(107, 1008, 1002),
(108, 1008, 1003),
(109, 1008, 1004),
(110, 1008, 1005),
(111, 1008, 1006),
(112, 1008, 2001),
(113, 1008, 2002),
(114, 1008, 2003),
(115, 1008, 2004),
(116, 1008, 2005),
(117, 1008, 2006),
(121, 1009, 1001),
(122, 1009, 1002),
(123, 1009, 1003),
(124, 1009, 1004),
(125, 1009, 1005),
(126, 1009, 1006),
(127, 1009, 2001),
(128, 1009, 2002),
(129, 1009, 2003),
(130, 1009, 2004),
(131, 1009, 2005),
(132, 1009, 2006),
(136, 1010, 1001),
(137, 1010, 1002),
(138, 1010, 1003),
(139, 1010, 1004),
(140, 1010, 1005),
(141, 1010, 1006),
(142, 1010, 2001),
(143, 1010, 2002),
(144, 1010, 2003),
(145, 1010, 2004),
(146, 1010, 2005),
(147, 1010, 2006),
(151, 1011, 1001),
(152, 1011, 1002),
(153, 1011, 1003),
(154, 1011, 1004),
(155, 1011, 1005),
(156, 1011, 1006),
(157, 1011, 2001),
(158, 1011, 2002),
(159, 1011, 2003),
(160, 1011, 2004),
(161, 1011, 2005),
(162, 1011, 2006),
(166, 1012, 1001),
(167, 1012, 1002),
(168, 1012, 1003),
(169, 1012, 1004),
(170, 1012, 1005),
(171, 1012, 1006),
(172, 1012, 2001),
(173, 1012, 2002),
(174, 1012, 2003),
(175, 1012, 2004),
(176, 1012, 2005),
(177, 1012, 2006),
(181, 1013, 1001),
(182, 1013, 1002),
(183, 1013, 1003),
(184, 1013, 1004),
(185, 1013, 1005),
(186, 1013, 1006),
(187, 1013, 2001),
(188, 1013, 2002),
(189, 1013, 2003),
(190, 1013, 2004),
(191, 1013, 2005),
(192, 1013, 2006),
(196, 1005, 2007),
(197, 1006, 2008),
(198, 1005, 2009),
(199, 1002, 3001),
(200, 1002, 2010),
(201, 1003, 2011),
(202, 1003, 3001),
(203, 1004, 3001),
(204, 1004, 2012),
(205, 1006, 2009),
(206, 1008, 2009),
(208, 1008, 2013),
(209, 1007, 2009);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pageid` int(11) NOT NULL,
  `title` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pageid`, `title`) VALUES
(1, 1001, 'Home'),
(2, 1002, 'Requirements'),
(3, 1003, 'Procedure'),
(4, 1004, 'Policy'),
(5, 1005, 'School News'),
(6, 1006, 'Upcoming Events'),
(7, 1007, 'Gallery'),
(8, 1008, 'Board of Trustees'),
(9, 1009, 'Staff Directory'),
(10, 1010, 'History'),
(11, 1011, 'Mission and Vision'),
(12, 1012, 'Contact Us'),
(16, 1013, 'cPanel Login');

-- --------------------------------------------------------

--
-- Table structure for table `site_content`
--

CREATE TABLE `site_content` (
  `id` int(11) NOT NULL,
  `keycode` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `content` mediumtext NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_content`
--

INSERT INTO `site_content` (`id`, `keycode`, `section`, `content`, `type`) VALUES
(1, 'adm_req', 'Requirements', '<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">A.&nbsp; Pre-Kindergarten&nbsp; </span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">&nbsp;</span></strong></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l3 level1 lfo1; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">1.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original NSO and Xerox copies of the Birth Certificates.&nbsp; Children applicants must be 4 years old within the first semester of the curriculum year.</span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l3 level1 lfo1; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">2.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original and Xerox copies of the Baptismal Certificate from the Roman Catholic Church.</span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l3 level1 lfo1; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">3.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Should&nbsp; have passed the entrance examination and interview.</span></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">b.&nbsp; Kindergarten&nbsp; </span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">&nbsp;</span></strong></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l2 level1 lfo2; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">1.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original NSO and Xerox copies of the Birth Certificate.&nbsp; Children applicants must be 5 years old </span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l2 level1 lfo2; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">2.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original and Xerox copies of the Baptismal Certificate from the Roman Catholic Church.</span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l2 level1 lfo2; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">3.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Should&nbsp; have passed the entrance examination and interview.</span></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">&nbsp;</span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">&nbsp;</span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">c.&nbsp; Grade I </span></strong></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l1 level1 lfo3; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">1.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original NSO and Xerox copies of the Birth Certificate.&nbsp; Children applicants must be 6 years old </span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l1 level1 lfo3; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">2.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original and Xerox copies of the Baptismal Certificate from the Roman Catholic Church.</span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l1 level1 lfo3; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">3.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Report Card </span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l1 level1 lfo3; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">4.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Should&nbsp; have passed the entrance examination and interview.</span></span></p>\n<p class="MsoBodyTextIndent" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l1 level1 lfo3; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">5.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">The child should have attended a preparatory school for at least one year.</span></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">d.&nbsp; Transfer Pupils</span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">&nbsp;</span></strong></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo4; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">1.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original NSO and Xerox copies of the Birth Certificates </span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo4; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">2.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Original and Xerox copies of the Baptismal Certificate from the Roman Catholic Church.</span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo4; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">3.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Must have passed the entrance examination and interview.</span></span></p>\n<p class="MsoNormal" style="margin-left: .75in; text-align: justify; text-indent: -.25in; mso-list: l0 level1 lfo4; tab-stops: list .75in;"><span style="font-family: arial, helvetica, sans-serif;"><!-- [if !supportLists]--><span lang="EN-US" style="font-size: 10pt;">4.<span style="font-stretch: normal; font-size: 7pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span lang="EN-US" style="font-size: 10pt;">Must present a letter of recommendation or certification of good moral character from the Principal of the school attended.</span></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">&nbsp;</span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><strong><span lang="EN-US" style="font-size: 10pt;">e.&nbsp; Foreign Pupils</span></strong></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<p class="MsoBodyText3" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In addition to credentials required for regular pupils, foreign and Filipino pupils who studied abroad should present the following. </span></p>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<ol style="margin-top: 0in;" start="1" type="1">\n<li class="MsoNormal" style="text-align: justify; mso-list: l4 level1 lfo5; tab-stops: list .5in;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Approved study permit from the Foreign Students Divisions, DepEd and grade placement or evaluation papers inclusive.&nbsp; Certificate of Eligibility from the Department of Education.</span></li>\n<li class="MsoNormal" style="text-align: justify; mso-list: l4 level1 lfo5; tab-stops: list .5in;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Photocopy of Alien Certificate of Registration (ACR) and signed by the officer from the Foreign Division, DECS.</span></li>\n</ol>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<h4 style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">TRANSFER OF PUPILS AND TRANSFER CREDENTIALS</span></h4>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;"><span lang="EN-US" style="font-size: 10pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span lang="EN-US" style="font-size: 10pt;">A pupil who&nbsp; wishes to transfer or withdraw from school for any reason: </span></span></p>\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<p class="MsoNormal" style="text-align: justify;"><span style="font-family: arial, helvetica, sans-serif;">&nbsp;</span></p>\n<ol style="margin-top: 0in;" start="1" type="1">\n<li class="MsoNormal" style="text-align: justify; mso-list: l5 level1 lfo6; tab-stops: list .5in;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Must apply to the Principal</span></li>\n<li class="MsoNormal" style="text-align: justify; mso-list: l5 level1 lfo6; tab-stops: list .5in;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Must settle all his financial obligation which include payment of his tuition and other&nbsp; school fees.</span></li>\n<li class="MsoNormal" style="text-align: justify; mso-list: l5 level1 lfo6; tab-stops: list .5in;"><span lang="EN-US" style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Must accomplish all requirements in the clearance Form.</span></li>\n</ol>', 'html'),
(2, 'adm_proc', 'Procedure', '<p style="font-size: 18px; line-height: 1.75; margin: 0px 0px 26px; color: #242424; font-family: Roboto, Verdana, Helvetica, Arial, sans-serif;"><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Enrolment is the three-step process that confirms your place at university. The steps to enrolment are:</span></p>\n<ul style="margin: -8px 0px 26px; color: #242424; font-family: Roboto, Verdana, Helvetica, Arial, sans-serif; font-size: medium;">\n<li style="padding-top: 0px; font-size: 18px; line-height: 1.75; margin-bottom: 8px;"><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Step 1 &ndash; Activate your account and accept, decline or defer</span></li>\n<li style="padding-top: 0px; font-size: 18px; line-height: 1.75; margin-bottom: 8px;"><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Step 2 &ndash; Subject enrolment</span></li>\n<li style="padding-top: 0px; font-size: 18px; line-height: 1.75; margin-bottom: 8px;"><span style="font-family: arial, helvetica, sans-serif; font-size: 12pt;">Step 3 &ndash; Get ready for university.</span></li>\n</ul>', 'html'),
(3, 'adm_poli', 'policy', '<h1>Put the policy here.... :)</h1>\n<div class="newsBody" style="font-size: 12px; line-height: 16px;">\n<p>We welcome you to the Internet home of St. Martin de Porres School. Located in North Philadelphia, we strive to provide a solid, Catholic-Christian education to children from kindergarten through the 8th grade. We endeavor to build within our students a strong sense of Christian character and cultural pride, and we expect them to accomplish high levels of proficiency, so&nbsp;they will be well-prepared to meet the challenges of high school, college, and beyond.&nbsp;</p>\n</div>', 'html');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `salutation` varchar(10) DEFAULT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `designationid` int(11) DEFAULT NULL,
  `otherinfo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `salutation`, `firstname`, `middlename`, `lastname`, `designationid`, `otherinfo`) VALUES
(1, 'Msgr.', 'Epitacio', 'V.', 'Castro', 1, ''),
(2, 'Sr.', 'Elvira', 'R.', 'Mateo', 2, ''),
(3, 'Sr.', 'Cristina', 'C.', 'Cruz', 3, ''),
(4, 'Sr.', 'Anna Marie', '', 'Francisco', 4, ''),
(5, 'Mrs.', 'Elena', 'V.', 'Ilagan', 5, ''),
(6, 'Ms.', 'Aloha', 'S.', 'Dela Cruz', 6, ''),
(7, 'Ms.', 'Aurea', 'S.', 'Paynor', 7, ''),
(8, 'Mr.', 'Norberto', 'DC.', 'Landayan', 8, ''),
(16, 'Ms.', 'Mercy Grace', 'T.', 'Magisa', 9, 'Grade VI'),
(17, 'Mrs.', 'Nerissa', 'S.', 'Angeles', 9, 'Grade VI'),
(18, 'Mrs.', 'Maria Cristina', 'C.', 'Villarta', 9, 'Grade V'),
(19, 'Mrs.', 'Josefina', 'S.F.', 'Camua', 9, 'Grade V'),
(20, 'Mrs.', 'Rodelia', 'A.', 'Mendoza', 9, 'Grade IV'),
(21, 'Ms.', 'Raquel', 'D.', 'Reyes', 9, 'Grade IV'),
(22, 'Mrs.', 'Maria', 'V.', 'Ventura', 9, 'Grade III'),
(23, 'Ms.', 'Marie Franciarine', 'G.', 'Lizarondo', 9, 'Grade II'),
(24, 'Ms.', 'Sarah Jane', 'M.', 'Nigos', 9, 'Grade II'),
(25, 'Mrs.', 'Angelita', 'C.', 'Sulit', 9, 'Grade I'),
(26, 'Ms.', 'Angelyn', 'C.', 'Laquindanum', 9, 'Grade I'),
(27, 'Ms.', 'Jesicca', 'G.', 'Sumala', 9, 'St. Gabriel and Grade I'),
(28, 'Ms.', 'Eliza Joy', 'L.', 'Feliciano', 9, 'St. Michael and Pre-Kinder'),
(29, 'Ms.', 'Ruby Ann', 'V.', 'Cruz', 9, ''),
(46, 'Mr.', 'Juanito', 'B.', 'Gonzales', 10, 'Driver'),
(47, 'Mr.', 'Isagani', 'Q.', 'Dimaya', 10, 'Security Guard'),
(48, 'Mr.', 'Francisco', 'V.', 'Nazario', 10, 'Janitor'),
(49, 'Mr.', 'Row', 'P.', 'Martinez', 10, 'Janitor'),
(50, 'Mrs.', 'Teresita', 'C.', 'Villena', 10, ''),
(51, 'Ms.', 'Ma. Charmaine', 'A.', 'Alfaro', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `trustees`
--

CREATE TABLE `trustees` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `otherinfo` varchar(4000) DEFAULT NULL,
  `picture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trustees`
--

INSERT INTO `trustees` (`id`, `name`, `address`, `otherinfo`, `picture`) VALUES
(1, 'Jeffrey Sapitan', 'Buihan, Malolos Bulacan', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', NULL),
(2, 'Rosa Elena Isais', 'Calumpit Bulacan', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', NULL),
(3, 'Faye Sapitan', 'Malolos Bulacan', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', NULL),
(4, 'Elena Ilagan', 'Pinagbakahan, Malolos Bulacan', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', NULL),
(5, 'Jadel Masirag', 'San Jose Del Monte Bulacan', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `password`) VALUES
(1, 'admin', 'M0Rj9jX3cSEUerG3CEl9Qkmb6EMZUpkxet5FK3ZMe+m5pLcUM1kNy/QSl+8JcQ3CkgnY+OmzxWvF4Hiw8l4wTA==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appconfig`
--
ALTER TABLE `appconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designationid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_folder`
--
ALTER TABLE `g_folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_images`
--
ALTER TABLE `g_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagefiles`
--
ALTER TABLE `pagefiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagefilesetting`
--
ALTER TABLE `pagefilesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_content`
--
ALTER TABLE `site_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `trustees`
--
ALTER TABLE `trustees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appconfig`
--
ALTER TABLE `appconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `g_folder`
--
ALTER TABLE `g_folder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `g_images`
--
ALTER TABLE `g_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pagefiles`
--
ALTER TABLE `pagefiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pagefilesetting`
--
ALTER TABLE `pagefilesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `site_content`
--
ALTER TABLE `site_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `trustees`
--
ALTER TABLE `trustees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
