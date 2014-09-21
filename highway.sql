
-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2014 at 08:06 AM
-- Server version: 5.5.37-0ubuntu0.13.10.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `highway`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `art_title` varchar(100) NOT NULL,
  `art_content` text NOT NULL,
  `art_status` enum('publish','unpublish') NOT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`art_id`, `cat_id`, `art_title`, `art_content`, `art_status`) VALUES
(1, 1, 'Template Info', '<p>Posted by <a href="#">ealigam</a></p>\r\n          <p><strong>PixelGreen 1.1</strong> is a free, W3C-compliant, CSS-based website template by <strong>styleshout.com</strong>. This work is distributed under the <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/2.5/"> Creative Commons Attribution 2.5 License</a>, which means that you are free to use and modify it for any purpose. All I ask is that you include a link back to my website in your credits.</p>\r\n          <p>For more free designs, you can visit my website to see my other works.</p>\r\n          <p>Good luck and I hope you find my free templates useful!1</p>', 'publish'),
(2, 1, 'Oracle Database SQL Reference,', 'The Programs (which include both the software and documentation) contain proprietary information; they\r\nare provided under a license agreement containing restrictions on use and disclosure and are also protected\r\nby copyright, patent, and other intellectual and industrial property laws. Reverse engineering, disassembly,\r\nor decompilation of the Programs, except to the extent required to obtain interoperability with other\r\nindependently created software or as specified by law, is prohibited.\r\nThe information contained in this document is subject to change without notice. If you find any problems in\r\nthe documentation, please report them to us in writing. This document is not warranted to be error-free.\r\nExcept as may be expressly permitted in your license agreement for these Programs, no part of these\r\nPrograms may be reproduced or transmitted in any form or by any means, electronic or mechanical, for any\r\npurpose.\r\nIf the Programs are delivered to the United States Government or anyone licensing or using the Programs on\r\nbehalf of the United States Government, the following notice is applicable:\r\nU.S. GOVERNMENT RIGHTS Programs, software, databases, and related documentation and technical data\r\ndelivered to U.S. Government customers are "commercial computer software" or "commercial technical data"\r\npursuant to the applicable Federal Acquisition Regulation and agency-specific supplemental regulations. As\r\nsuch, use, duplication, disclosure, modification, and adaptation of the Programs, including documentation\r\nand technical data, shall be subject to the licensing restrictions set forth in the applicable Oracle license\r\nagreement, and, to the extent applicable, the additional rights set forth in FAR 52.227-19, Commercial\r\nComputer Softwareï¿½Restricted Rights (June 1987). Oracle Corporation, 500 Oracle Parkway, Redwood City,\r\nCA 94065', 'publish'),
(3, 4, 'For Linux users ', 'PHP for Linux is available in an RPM as well as in\r\nsource files. It might be in RPM format on your distribution CD. However,\r\nwhen you install PHP from an RPM, you canï¿½t control the options that PHP\r\nis installed with. For instance, you need to install PHP with MySQL support\r\nenabled, but the RPM may not have MySQL support enabled. MySQL is\r\npopular, so many RPMs enable support for it, but it is out of your control.\r\nAlso, an RPM usually enables all the most popular options, so an RPM might\r\nenable options that you donï¿½t need. Consequently, the simplest and most\r\nefficient way to install PHP could be from the source. If youï¿½re familiar with\r\nRPMs, feel free to find an RPM and install it. RPMs are available. However, I\r\nam providing steps for source code installation, not RPMs.', 'publish'),
(4, 4, 'hhhhhh', '', 'publish'),
(5, 3, 'frame', '', 'unpublish'),
(6, 1, 't', 'hhhhhhhh', 'unpublish'),
(7, 4, 'y', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'publish'),
(8, 6, 'unnecessary', 'uuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 'unpublish'),
(12, 7, 'y', 'yyyyyyyyyuuuuuuuuut', 'unpublish'),
(13, 3, '???????', '?"????????????????', 'publish'),
(18, 4, 'd', 'd', 'unpublish'),
(19, 1, 'qqqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqq', 'publish'),
(20, 4, 'error 404', '<br>', 'publish'),
(21, 1, 'dddddddd', 's', 'publish'),
(22, 5, 'sample code', '<h1><br></h1><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p><code> code-sample {</code></p><p><code><!--?php echo "!!!!!!!!!!"?--><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; font-weight: bold;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; font-style: italic;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } </code></p>', 'publish'),
(23, 1, 'Getting Programming Done', '<font face="Comic Sans MS"><sub></sub></font>David Allenâ€™s productivity book, Getting Things Done: The Art of Stress- Free Productivity<br>(Penguin, 2002), has attracted a lot of interest in the past few years. The methodology, abbreviated<br>GTD, has become especially popular among the tech crowd. Itâ€™s the primary subject of<br>Merlin Mannâ€™s 43folders.com web site and many other blogs.<br>The GTD methodology might be summarized with these principles:<br>Define what done looks like: Visualize what your end goal is. Envision what it will take to<br>get there. Allow your mind to brainstorm how to get yourself there.<br>Define what doing looks like: Decide what the next physical action is that will move you<br>closer to your goal. What can you do to move closer to completion, based on your current<br>priorities, resources, and context?<br>Unit testing helps you define what done looks like for your code. Unit testing gives you<br>a specific goal to aim for as you code. It requires mental exertion up- front, as you decide specifically<br>what your code should do, and then it â€œsignalsâ€ to you in clear terms when youâ€™ve<br>reached your goal<br>', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_status` enum('publish','unpublish') NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_status`) VALUES
(1, 'node.js', 'publish'),
(2, 'jQuery', 'publish'),
(3, 'Java script', 'publish'),
(4, 'Ajax', 'publish'),
(5, 'PHP', 'publish'),
(6, 'MySQL', 'publish'),
(7, 'CSS', 'publish'),
(8, 'Drupal cms', 'publish'),
(9, 'wp', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(20) NOT NULL,
  `page_title` varchar(20) NOT NULL,
  `page_content` text NOT NULL,
  `page_status` enum('publish','unpublish') NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_title`, `page_content`, `page_status`) VALUES
(1, 'About Us', 'About Us', '      <a name="SampleTags"></a>\n        <h1>Sample Tags</h1>\n        <h3>Code</h3>\n        <p><code> code-sample { <br />\n          font-weight: bold;<br />\n          font-style: italic;<br />\n          } </code></p>\n        <h3>Example Lists</h3>\n        <ol>\n          <li><span>example of ordered list</span></li>\n          <li><span>uses span to color the numbers</span></li>\n        </ol>\n        <ul>\n          <li><span>example of unordered list</span></li>\n          <li><span>uses span to color the bullets</span></li>\n        </ul>\n        <h3>Blockquote</h3>\n        <blockquote>\n          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat....</p>\n        </blockquote>\n        <h3>Image and text</h3>\n        <p> <a href="http://all-free-download.com/free-website-templates/"><img src="images/firefox-gray.jpg" width="100" height="121" alt="firefox-gray"  class="float-left" /></a> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar ullamcorper nonummy, mauris enim eleifend urna, congue egestas elit lectus eu est. </p>\n       \n        <br />', 'publish'),
(2, 'Contact Us', 'Contact Us', ' <h3>Contact Form</h3>\n        <form action="http://all-free-download.com/free-website-templates/">\n          <p>\n            <label>Name</label>\n            <input name="dname" value="Your Name" type="text" size="30" />\n            <label>Email</label>\n            <input name="demail" value="Your Email" type="text" size="30" />\n            <label>Your Comments</label>\n            <textarea rows="5" cols="5"></textarea>\n            <br />\n            <input class="button" type="submit" />\n          </p>\n        </form>', 'publish'),
(3, 'FAQ', 'faq', '<h3>jQuery & php </h3>\n\n<p>To fully understand jQuery and its applications in modern web programming, it''s important to take a\nmoment and look back at where jQuery came from, what needs it was built to fill, and what\nprogramming in JavaScript was like before jQuery came around.\nIn this chapter you''ll learn about JavaScript libraries and the needs they seek to fulfill, as well as why\njQuery is the library of choice for the majority of web developers. You''ll also learn the basics of jQuery,\nincluding how to make the library available for use in your applications and how the core of jQuery—its\npowerful selector engine—works.</p>', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` enum('pending','banned','active') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'tanvir', 'fc1200c7a7aa52109d762a9f005b149abef01479', 'active'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
