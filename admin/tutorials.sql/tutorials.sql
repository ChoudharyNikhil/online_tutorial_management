-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 23, 2014 at 12:26 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `tutorials`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_admin`
-- 

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tbl_admin`
-- 

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES 
(1, 'admin', '1234');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_content`
-- 

CREATE TABLE `tbl_content` (
  `id` int(5) NOT NULL auto_increment,
  `subj_id` int(5) default NULL,
  `subtopic_id` int(5) default NULL,
  `heading` text NOT NULL,
  `description` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `example` longtext NOT NULL,
  `snapshot` varchar(100) NOT NULL,
  `vediolink` varchar(100) NOT NULL,
  `upload_file` longtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `tbl_content`
-- 

INSERT INTO `tbl_content` (`id`, `subj_id`, `subtopic_id`, `heading`, `description`, `content`, `example`, `snapshot`, `vediolink`, `upload_file`) VALUES 
(1, 15, 10, 'Joomla', 'Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online applications...', 'Joomla is an award-winning content management system (CMS), which enables you to build Web sites and powerful online applications. Many aspects, including its ease-of-use and extensibility, have made Joomla the most popular Web site software available. Best of all, Joomla is an open source solution that is freely available to everyone.\r\nJoomla is written in PHP, uses object-oriented programming (OOP) techniques (since version 1.5) and software design patterns, stores data in a MySQL, MS SQL (since version 2.5), or PostgreSQL (since version 3.0) database, and includes features such as page caching, RSS feeds, printable versions of pages, news flashes, blogs, polls, search, and support forlanguage internationalization.\r\n', 'some real world examples \r\nJoomla is used all over the world to power Web sites of all shapes and sizes. For example:\r\n•	Corporate Web sites or portals\r\n•	Corporate intranets and extranets\r\n•	Online magazines, newspapers, and publications\r\n•	E-commerce and online reservations\r\n•	Government applications\r\n•	Small business Web sites\r\n•	Non-profit and organizational Web sites\r\n•	Community-based portals\r\n•	School and church Web sites\r\n•	Personal or family homepages\r\n', 'image/joomla.png', 'https://www.youtube.com/', 'books/CORE PHP.pdf'),
(2, 16, 12, 'Core Java', 'WordPress is a free and open source blogging tool and a content management system (CMS) based on PHP and MySQL, which runs on a...', 'WordPress is a free and open source blogging tool and a content management system (CMS) based on PHP and MySQL, which runs on a web hosting service. Features include a plugin architecture and a template system. WordPress is used by more than 22.0% of the top 10 million websites as of August 2013. WordPress is the most popular blogging system in use on the Web, at more than 60 million websites. \r\nIt was first released on May 27, 2003, by its founders, Matt Mullenweg and Mike Little, as a fork of b2/cafelog. As of February 19, 2014, version 3.8 had been downloaded more than 20 million times. The license under which WordPress software is released is the GPLv2 (or later) from the Free Software Foundation. \r\n', '', 'image/CORE JAVA.jpg', '', 'books/yii-blog-1.1.0.pdf'),
(3, 17, 16, 'C#', 'C#(pronounced as see sharp) is a multi-paradigm programming language encompassing strong typing, imperative,declarative, functional..', 'C#(pronounced as see sharp) is a multi-paradigm programming language encompassing strong typing, imperative,declarative, functional, generic, object-oriented (class-based), and component-oriented programming disciplines. It was developed by Microsoft within its .NET initiative and later approved as a standard by Ecma (ECMA-334) and ISO (ISO/IEC 23270:2006). C# is one of the programming languages designed for the Common Language Infrastructure. C# is built on the syntax and semantics of C++, allowing C programmers to take advantage of .NET and the common language runtime. \r\nC# is intended to be a simple, modern, general-purpose, object-oriented programming language. Its development team is led by Anders Hejlsberg. The most recent version is C# 5.0, which was released on August 15, 2012.\r\n\r\nDesign goals\r\nThe ECMA standard lists these design goals for C#:\r\n•	The C# language is intended to be a simple, modern, general-purpose, object-oriented programming language.\r\n•	The language, and implementations thereof, should provide support for software engineering principles such as strong type checking, array bounds checking, detection of attempts to use uninitialized variables, and automatic garbage collection. Software robustness, durability, and programmer productivity are important.\r\n•	The language is intended for use in developing software components suitable for deployment in distributed environments.\r\n•	Source code portability is very important, as is programmer portability, especially for those programmers already familiar with C and C++.\r\n•	Support for internationalization is very important.\r\n•	C# is intended to be suitable for writing applications for both hosted and embedded systems, ranging from the very large that use sophisticated operating systems, down to the very small having dedicated functions.\r\n•	Although C# applications are intended to be economical with regard to memory and processing power requirements, the language was not intended to compete directly on performance and size with C or assembly language.\r\n\r\n\r\n', '', 'image/C.jpg', '', 'books/yii-blog-1.1.0.pdf'),
(4, 18, 19, 'SIMPLE APP', 'Android software development is the process by which new applications are created for the Android...', 'Android software development is the process by which new applications are created for the Android operating system. Applications are usually developed in the Java programming language using the Android Software Development Kit, but other development tools are available.\r\nAs of July 2013, more than 1 million applications have been developed for Android, with over 25 billion downloads. A June 2011 research indicated that over 67% of mobile developers used the platform, at the time of publication. In Q2 2012, around 105 million units of Android smartphones were shipped which acquires a total share of 68% in overall smartphones sale till Q2 2012.\r\nIntelliJ IDEA supports development of applications to be executed on mobile phones that run under the Android operating system. Besides general coding assistance, the IDE lets you test Android applications on user-configured emulators of physical devices.\r\nIntelliJ IDEA helps:\r\n?	Create an Android application using the New Project Wizard.\r\n?	Explore an Android application as a tree-view of files and folders.\r\n?	Create elements of an Android application and manage static content resources, such as strings, colors, etc. via tight integration between resources and the R.java file.\r\n?	Run an application.\r\n?	Configure an emulator of a physical device to run Android applications on.\r\nThis tutorial will walk you step-by-step through developing and launching a simple Android application.\r\n', '', 'image/OS.jpg', '', 'books/yii-blog-1.1.0.pdf'),
(5, 15, 9, 'WordPress', 'WordPress is a free and open source blogging tool and a content management system (CMS) based on PHP and MySQL...', 'WordPress is a free and open source blogging tool and a content management system (CMS) based on PHP and MySQL, which runs on a web hosting service. Features include a plugin architecture and a template system. WordPress is used by more than 22.0% of the top 10 million websites as of August 2013. WordPress is the most popular blogging system in use on the Web, at more than 60 million websites. \r\nIt was first released on May 27, 2003, by its founders, Matt Mullenweg and Mike Little, as a fork of b2/cafelog. As of February 19, 2014, version 3.8 had been downloaded more than 20 million times. The license under which WordPress software is released is the GPLv2 (or later) from the Free Software Foundation. \r\n', '', 'image/wordpress.png', '', 'books/CORE PHP.pdf'),
(6, 15, 8, 'Core PHP', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language...', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. As of January 2013, PHP was installed on more than 240 million websites (39% of those sampled) and 2.1 million web servers. Originally created by Rasmus Lerdorf in 1995, the reference implementation of PHP is now produced by The PHP Group. While PHP originally stood for Personal Home Page it now stands for PHP: Hypertext Preprocessor, a recursive backronym. \r\nPHP code can be simply mixed with HTML code, or it can be used in combination with various templating engines and web frameworks. PHP code is usually processed by a PHP interpreter, which is usually implemented as a web server''s native module or aCommon Gateway Interface (CGI) executable. After the PHP code is interpreted and executed, the web server sends resulting output to its client, usually in form of a part of the generated web page – for example, PHP code can generate a web page''s HTML code, an image, or some other data. PHP has also evolved to include a command-line interface (CLI) capability and can be used instandalone graphical applications. \r\nPHP is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge. \r\n', '', 'image/PHP.jpg', '', 'books/CORE PHP.pdf'),
(7, 15, 11, 'Code Igniter', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP....', 'CodeIgniter is an Application Development Framework - a toolkit - for people who build web sites using PHP. Its goal is to enable you to develop projects much faster than you could if you were writing code from scratch, by providing a rich set of libraries for commonly needed tasks, as well as a simple interface and logical structure to access these libraries. CodeIgniter lets you creatively focus on your project by minimizing the amount of code needed for a given task.\r\n\r\nWho is CodeIgniter For?\r\nCodeIgniter is right for you if:\r\n•	You want a framework with a small footprint.\r\n•	You need exceptional performance.\r\n•	You need broad compatibility with standard hosting accounts that run a variety of PHP versions and configurations.\r\n•	You want a framework that requires nearly zero configuration.\r\n•	You want a framework that does not require you to use the command line.\r\n•	You want a framework that does not require you to adhere to restrictive coding rules.\r\n•	You do not want to be forced to learn a templating language (although a template parser is optionally available if you desire one).\r\n•	You eschew complexity, favoring simple solutions.\r\n•	You need clear, thorough documentation.\r\n', '', 'image/CODEIGNITER.jpg', '', 'books/CORE PHP.pdf'),
(8, 15, 22, 'Magento', 'Magento is an open source e-commerce web application that was launched on March 31, 2008 under the name Bento....', 'Magento is an open source e-commerce web application that was launched on March 31, 2008 under the name Bento. Magento is a content management system (CMS) based on PHP and MySQL for web hosting service, which was built using parts of theZend Framework. It provides full support for object-oriented programming and Model-View-Controller (MVC) architecture. Magento also uses the entity-attribute-value (EAV) database model to store data. It was developed by Varien (now Magento, a division of eBay) with help from the programmers within the open source community but is now owned solely by eBay Inc.\r\nIn April 2014, W3Techs estimated that Magento was used by 1.0% of all websites. According to the research conducted by aheadWorks in April, 2014, Magento''s share is about 34% among 20 most popular e-commerce platforms. \r\n', '', 'image/MAGENTO.jpg', '', 'books/CORE PHP.pdf'),
(9, 15, 23, 'YII', 'Yii is a high-performance, component-based PHP framework for developing large-scale Web applications rapidly.', 'Yii is a high-performance, component-based PHP framework for developing large-scale Web applications rapidly. It enables maximum reusability in Web programming and can significantly accelerate your Web application development process. The name Yii (pronounced Yee or [ji:]) is an acroynym for "Yes It Is!". This is often the accurate, and most concise response to inquires from those new to Yii:\r\nIs it fast? ... Is it secure? ... Is it professional? ... Is it right for my next project? ... Yes, it is!\r\n1. Requirements \r\nTo run a Yii-powered Web application, you need a Web server that supports PHP 5.1.0.\r\nFor developers who want to use Yii, understanding object-oriented programming (OOP) is very helpful, because Yii is a pure OOP framework.\r\n2. What is Yii Best for? \r\nYii is a generic Web programming framework that can be used for developing virtually any type of Web application. Because it is light-weight and equipped with sophisticated caching mechanisms, it is especially suited to high-traffic applications, such as portals, forums, content management systems (CMS), e-commerce systems, etc.\r\n3. How does Yii Compare with Other Frameworks? \r\nLike most PHP frameworks, Yii is an MVC framework.\r\nYii excels other PHP frameworks at being efficient, feature-rich and clearly-documented. Yii is carefully designed from the ground up to be fit for serious Web application development. It is neither a byproduct of some project nor a conglomerate of third-party work. It is the result of the authors'' rich experience with Web application development and their investigation of the most popular Web programming frameworks and applications.\r\n', '', 'image/YII.jpg', '', 'books/CORE PHP.pdf'),
(10, 16, 13, 'Servelet', 'The servlet is a Java programming language class used to extend the capabilities of a server. Although servlets...', 'The servlet is a Java programming language class used to extend the capabilities of a server. Although servlets can respond to any types of requests, they are commonly used to extend the applications hosted byweb servers, so they can be thought of as Java applets that run on servers instead of in web browsers. These kinds of servlets are the Java counterpart to other dynamic Web content technologies such as PHPand ASP.NET.\r\n\r\nServlets are most often used to: \r\n•	Process or store data that was submitted from an HTML form\r\n•	Provide dynamic content such as the results of a database query\r\n•	Manage state information that does not exist in the stateless HTTP protocol, such as filling the articles into the shopping cart of the appropriate customer\r\nTechnically speaking, a "servlet" is a Java class in Java EE that conforms to the Java Servlet API, a standard for implementing Java classes which respond to requests. Servlets could in principle communicate over any client–server protocol, but they are most often used with the HTTP protocol. Thus "servlet" is often used as shorthand for "HTTP servlet".Thus, a software developer may use a servlet to add dynamic content to a web server using the Java platform. The generated content is commonly HTML, but may be other data such as XML. Servlets can maintain state in session variables across many server transactions by using HTTP cookies, or URL rewriting.\r\nTo deploy and run a servlet, a web container must be used. A web container (also known as a servlet container) is essentially the component of a web server that interacts with the servlets. The web container is responsible for managing the lifecycle of servlets, mapping a URL to a particular servlet and ensuring that the URL requester has the correct access rights.\r\n', '', 'image/SERVLET.png', '', 'books/CORE PHP.pdf'),
(11, 16, 14, 'JSP', 'JavaServer Pages (JSP) is a technology that helps software developers create dynamically generated web pages based...', 'JavaServer Pages (JSP) is a technology that helps software developers create dynamically generated web pages based on HTML, XML, or other document types. Released in 1999 by Sun Microsystems, JSP is similar to PHP, but it uses the Java programming language.\r\n\r\n JSP may be viewed as a high-level abstraction of Java servlets. JSPs are translated into servlets at runtime; each JSP servlet is cached and re-used until the original JSP is modified.\r\n\r\nJSP can be used independently or as the view component of a server-side model–view–controller design, normally with JavaBeans as the model and Java servlets (or a framework such as Apache Struts) as the controller. This is a type of Model 2 architecture.\r\n\r\nJSP allows Java code and certain pre-defined actions to be interleaved with static web markup content, with the resulting page being compiled and executed on the server to deliver a document. The compiled pages, as well as any dependent Java libraries, use Java bytecode rather than a native software format. Like any other Java program, they must be executed within a Java virtual machine (JVM) that integrates with the server''s host operating system to provide an abstract platform-neutral environment.\r\n\r\nJSPs are usually used to deliver HTML and XML documents, but through the use of OutputStream, they can deliver other types of data as well.', '', 'image/JSP.jpg', '', 'books/CORE PHP.pdf'),
(12, 17, 17, 'Asp.net', 'ASP.NET is a server-side Web application framework designed for Web development to produce dynamic Web pages. It was...', 'ASP.NET is a server-side Web application framework designed for Web development to produce dynamic Web pages. It was developed by Microsoft to allow programmers to build dynamic web sites, web applications and web services. It was first released in January 2002 with version 1.0 of the .NET Framework, and is the successor to Microsoft''s Active Server Pages (ASP) technology. ASP.NET is built on the Common Language Runtime (CLR), allowing programmers to write ASP.NET code using any supported.NET language. The ASP.NET SOAP extension framework allows ASP.NET components to process SOAP messages.', 'Inline Coding\r\n<%@ Page Language="C#" %>\r\n<!DOCTYPE html PUBLIC "---//W3C//DTD XHTML 1.0  //EN"\r\n"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<script runat="server">\r\n  protected void Page_Load(object sender, EventArgs e)\r\n  {\r\n    // Assign the datetime to label control\r\n    lbl1.Text = DateTime.Now.ToLongTimeString();\r\n  }\r\n</script>\r\n \r\n<html xmlns="http://www.w3.org/1999/xhtml">\r\n<head runat="server">\r\n  <title>My Style</title>\r\n</head>\r\n<body>\r\n  <form id="form1" runat="server">\r\n  </form>\r\n</body>\r\n</html>\r\n', 'image/ASP.NET.jpg', '', 'books/CORE PHP.pdf'),
(13, 17, 18, 'MVC', 'Model–view–controller (MVC) is a software architectural pattern for implementing user interfaces. It divides a given...', 'Model–view–controller (MVC) is a software architectural pattern for implementing user interfaces. It divides a given software application into three interconnected parts, so as to separate internal representations of information from the ways that information is presented to or accepted from the user. The central component, the model, consists of application data, business rules, logic and functions. A view can be any output representation of information, such as a chart or a diagram. Multiple views of the same information are possible, such as a bar chart for management and a tabular view for accountants. The third part, the controller, accepts input and converts it to commands for the model or view. \r\n\r\nIn addition to dividing the application into three kinds of components, the model–view–controller design defines the interactions between them. \r\n•	A controller can send commands to the model to update the model''s state (e.g., editing a document). It can also send commands to its associated view to change the view''s presentation of the model (e.g., by scrolling through a document).\r\n•	A model notifies its associated views and controllers when there has been a change in its state. This notification allows the views to produce updated output, and the controllers to change the available set of commands. In some cases an MVC implementation might instead be "passive," so that other components must poll the model for updates rather than being notified.\r\n•	A view requests information from the model that it needs for generating an output representation to the user.\r\n', '', 'image/mvc.jpg', '', 'books/CORE PHP.pdf'),
(14, 18, 29, 'Security', 'Android is a modern mobile platform that was designed to be truly open. Android applications make use of advanced hardware...', 'Android is a modern mobile platform that was designed to be truly open. Android applications make use of advanced hardware and software, as well as local and served data, exposed through the platform to bring innovation and value to consumers. To protect that value, the platform must offer an application environment that ensures the security of users, data, applications, the device, and the network.\r\nSecuring an open platform requires a robust security architecture and rigorous security programs. Android was designed with multi-layered security that provides the flexibility required for an open platform, while providing protection for all users of the platform.\r\nAndroid was designed with developers in mind. Security controls were designed to reduce the burden on developers. Security-savvy developers can easily work with and rely on flexible security controls. Developers less familiar with security will be protected by safe defaults.\r\nAndroid was designed with device users in mind. Users are provided visibility into how applications work, and control over those applications. This design includes the expectation that attackers would attempt to perform common attacks, such as social engineering attacks to convince device users to install malware, and attacks on third-party applications on Android. Android was designed to both reduce the probability of these attacks and greatly limit the impact of the attack in the event it was successful.\r\nThis document outlines the goals of the Android security program, describes the fundamentals of the Android security architecture, and answers the most pertinent questions for system architects and security analysts. This document focuses on the security features of Android''s core platform and does not discuss security issues that are unique to specific applications, such as those related to the browser or SMS application. Recommended best practices for building Android devices, deploying Android devices, or developing applications for Android are not the goal of this document and are provided elsewhere.\r\n', '', 'image/ANDROID-SECURITY.jpg', '', 'books/CORE PHP.pdf'),
(15, 18, 21, 'Dynamic APP', 'A dynamic application represents a software system that embodies a business process and is built for...', 'A dynamic application represents a software system that embodies a business process and is built for change, adaptable to business context, and information rich\r\n\r\n\r\nCreating a dynamic app in Android\r\n\r\ncreate a web-based view. You must read the questionnaire and generate the html, then present it in aWebView.\r\n2 - generate a xml layout and inflate it. With "inflate" i''m referring to use the object LayoutInflater with some of inflate calls that accept an XmlPullParser, it''s must generate a view exactly identical to a view defined in the IDE. I never test it so please let my know if it''s works.\r\n', '', 'image/DYNAMIC APP.jpg', '', 'books/CORE PHP.pdf');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_feedback`
-- 

CREATE TABLE `tbl_feedback` (
  `id` int(200) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `tbl_feedback`
-- 

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `message`) VALUES 
(1, 'yamini', 'yamini@gmail.com', 'good website'),
(2, 'Neelam jain', 'nilamsehlot@gmail.com', 'vey good'),
(3, 'Neelam jain', 'nilamsehlot@gmail.com', 'vey good');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_subj`
-- 

CREATE TABLE `tbl_subj` (
  `id` int(3) NOT NULL auto_increment,
  `sub_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `tbl_subj`
-- 

INSERT INTO `tbl_subj` (`id`, `sub_name`) VALUES 
(15, 'PHP'),
(16, 'JAVA'),
(17, 'DOTNET'),
(18, 'ANDROID');

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_subtopic`
-- 

CREATE TABLE `tbl_subtopic` (
  `id` int(5) NOT NULL auto_increment,
  `subj_id` int(5) NOT NULL,
  `topic_name` varchar(30) NOT NULL,
  `hits` int(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- 
-- Dumping data for table `tbl_subtopic`
-- 

INSERT INTO `tbl_subtopic` (`id`, `subj_id`, `topic_name`, `hits`) VALUES 
(10, 15, 'JOOMLA', 0),
(9, 15, 'WORD PRESS', 0),
(8, 15, 'CORE PHP', 0),
(11, 15, 'CODEGINITER', 0),
(12, 16, 'CORE JAVA', 0),
(13, 16, 'SERVLET', 0),
(14, 16, 'JSP', 0),
(15, 16, 'STRUCTS', 0),
(16, 17, 'C#', 0),
(17, 17, 'ASP.NET', 0),
(18, 17, 'MVC', 0),
(19, 18, 'SIMPLE APP', 0),
(20, 18, 'MULTIMEDIA APP', 0),
(21, 18, 'DYNAMIC APP', 0),
(22, 15, 'MEGENTO', 0),
(23, 15, 'YII', 0),
(24, 16, 'HIBERNET', 0),
(25, 16, 'J2ME', 0),
(26, 17, 'SQLSERVER', 0),
(27, 17, 'VB.NET', 0),
(28, 18, 'OS', 0),
(29, 18, 'SECURITY', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_user`
-- 

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL auto_increment,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(1) NOT NULL default '0',
  `email` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `tbl_user`
-- 

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `pass`, `status`, `email`, `gender`, `dob`) VALUES 
(9, 'ankit', 'kumar', '1234', 1, 'ankit@gmail.com', 'm', '1990-06-25'),
(10, '', '', '', 0, '', '', '1969-12-31'),
(11, '', '', '', 0, '', '', '1969-12-31'),
(12, '', '', '', 0, '', '', '1969-12-31'),
(13, '', '', '', 0, '', '', '1969-12-31'),
(14, '', '', '', 0, '', '', '1969-12-31'),
(15, '', '', '', 0, '', '', '1969-12-31'),
(16, '', '', '', 0, '', '', '1969-12-31'),
(17, '', '', '', 0, '', '', '1969-12-31'),
(18, 'yamini', 'singh', 'abc', 0, 'yamini@gmail.com', '', '1969-12-31');
