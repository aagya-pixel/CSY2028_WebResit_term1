-- Adminer 4.8.1 MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `database`;
CREATE DATABASE `database` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `database`;

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `article_Id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` mediumblob NOT NULL,
  `date` date NOT NULL,
  `categoryId` int NOT NULL,
  `postedperson` varchar(255) NOT NULL,
  PRIMARY KEY (`article_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `article` (`article_Id`, `title`, `content`, `date`, `categoryId`, `postedperson`) VALUES
(39,	'Amanda Serrano Knows Exactly Where She Belongs',	'Amanda Serrano leaned an elbow against a wall at her boxing gym in Brooklyn after a recent workout, massaging her triceps against a lacrosse ball. Her face was flushed and her hair pulled back into a tight bun, with the sweaty proof of her work in the ring.\r\n\r\n�I�m holding up the wall. How am I doing?� she said with a laugh.\r\n\r\nIf anyone were up to the task, it would be Serrano.\r\n\r\nSerrano, 34, is a world champion in seven weight classes, a number rivaled only by Manny Pacquiao. On Saturday, she will try to add to her collection of belts when she faces Erika Cruz of Mexico for the undisputed world featherweight championship in the Hulu Theater at Madison Square Garden. Serrano enters Saturday�s fight with a record of 43-2-1 and 30 knockouts, one of the best in women�s boxing.\r\n\r\n�There�s a lot of history for me in the Hulu Theater,� Serrano, who has fought at Madison Square Garden three times, said. �Now I�m fighting for the last piece of the puzzle in my division.�',	'2023-02-04',	17,	'admin'),
(40,	'Kyrie Irving Asks the Nets to Trade Him',	'The Nets guard, who will be a free agent this summer, wants out of Brooklyn just months after he caused an uproar by linking to an antisemitic film on social media.',	'2023-02-04',	17,	'admin'),
(41,	'Tweets reveal hardware stores cause disgust but hostels bring joy',	'Your tweets may reveal when and where you are angry, disgusted, sad or joyful.\r\n\r\nBelieving that tweets hold a �wealth of information� on human behaviour, Panote Siriaraya at the Kyoto Institute of Technology, Japan, and his colleagues analysed the content of tweets posted in San Francisco and London from early September 2016 to late August 2017.\r\n\r\nSiriaraya says they used data from this period because Twitter removed precise location tagging from its posts in 2019. The researchers had also already analysed tweets posted between 2016 and 2017 for a previous study, which they reused.\r\n\r\n\r\nThe team drew a boundary around each city, analysing every tweet posted within these geographical areas that wasn�t sent by apps such as Foursquare, which tweets automatically when a user �checks in� using its app.',	'2023-02-04',	18,	'admin'),
(42,	'San Francisco is getting cold feet about self-driving car tests',	'Officials in San Francisco have asked for a halt to the expansion of driverless car tests across the city after a series of incidents that have hampered the work of emergency services.\r\n\r\nSan Francisco�s position at the heart of Silicon Valley and its wealth of technology talent has made it a hotbed for the driverless car industry. Both Waymo, owned by Google�s parent company Alphabet, and Cruise, owned by General Motors, operate experimental robotic taxi services in the city. But they haven�t been without problems.\r\n\r\nNew Scientist has previously reported how autonomous vehicles (AV) from Cruise, for example, have randomly stopped and blocked traffic and had a run-in with police. But details of other incidents with driverless cars have now emerged in letters from city officials.\r\n\r\n',	'2023-02-04',	17,	'admin'),
(43,	'How to Start a Business: A Step-by-Step Guide',	'Starting a new small business? Find out where to begin and how to achieve success.\r\nYou should prepare thoroughly before starting a business, but realize that things will almost certainly go awry. To run a successful business, you must adapt to changing situations.\r\nConducting in-depth market research on your field and the demographics of your potential clientele is an important part of crafting a business plan. This involves running surveys, holding focus groups, and researching SEO and public data.\r\nIn addition to selling your product or service, you need to build up your brand and get a following of people who are interested in what your business offers.\r\nThis article is for entrepreneurs who want to learn the basic steps of starting a new business.',	'2023-02-04',	19,	'admin'),
(44,	'Small Business Impacts of USPS Delays',	'Recent policy changes and the waning effects of COVID-19 have impacted the U.S. Postal Service, causing a major headache for small businesses that depend on it.\r\nUSPS delays, caused by COVID-19 and service changes, are impacting small businesses.\r\nThe effects of these delays are seen in transportation, customer satisfaction and financial transactions.\r\nWhile businesses can�t control the holdup, there are different ways of working around the problem.\r\nThis article is for small businesses challenged by the ongoing USPS delays. ',	'2023-02-04',	19,	'admin'),
(45,	'Briton arrested in Spain for allegedly helping Russian oligarch evade sanctions',	'A British man who is wanted by the US authorities for allegedly helping a Russian oligarch evade sanctions relating to his $90m (�73m) superyacht has been arrested in Spain.\r\n\r\nThe Briton, named by the US Department of Justice as Richard Masters, 52, has been charged with facilitating a sanctions-evasion and money-laundering scheme involving Tango, a 255ft luxury yacht belonging to Viktor Vekselberg, a Russian oligarch under US sanctions who is an associate of Vladimir Putin.\r\n\r\nAnother businessman, Vladislav Osipov, 51, a Russian national, has also been charged in the US but remains at large.\r\n\r\nVekselberg, the founder of a Russian energy conglomerate, has been the target of US sanctions since 2018.',	'2023-02-04',	20,	'admin'),
(46,	'3-year-old gang-raped in Delhi\'s Fatehpur Beri, 2 arrested',	'By Arvind Ojha: A 3-year-old girl was allegedly raped by two men in south Delhi\'s Fatehpur Beri on Friday. The incident came to the fore when the child\'s mother found her crying in the jungle with her private part bleeding.\r\n\r\nThe accused, hailing from Madhya Pradesh, have been arrested, police said. The accused lived in the same neighbourhood.\r\n\r\nThe victim\'s mother told the police her daughter went missing in the morning and she was desperately looking for her but the minor was nowhere to be found. Later on, Rani, the girl\'s neighbour, told her that she saw her daughter near the jungle area.\r\n\r\nADVERTISEMENT\r\n\"Rani said she also saw two people going in the same direction,\" the child\'s mother told police. According to police, the duo picked up the child when she was playing outside her house. The accused, who were consuming alcohol, spotted her, took her to the jungle and raped her, police said.\r\n\r\nALSO READ | Delhi Police apprehend 14-year-old boy accused of gang-rape, humiliating woman\r\n\r\nThe child was rescued when her mother saw the 3-year-old crying, following which she took her daughter to the police station. The child has been sent for her medical examination and is undergoing treatment at the All India Institute of Medical Sciences (AIIMS). Her condition is stable, police said.\r\n\r\nHarish\r\nMUST READ\r\nSebi should give detailed report in 72 hrs: Gautam Adani\'s ex-lawyer Harish Salve\r\n\r\nBoth the accused, Ramniwas Panika Shaktiman Singh, are married and are working as helpers for Bhumi Green Company, which deals with garbage recycling.\r\n\r\n\r\n(With PTI inputs)\r\n\r\nALSO READ | Cousin among 3 minors who gang-raped 10-year-old Delhi boy and left him for dead\r\n\r\n--- ENDS ---\r\n\r\nEdited By:\r\nRitika Shah\r\nPublished On:\r\nFeb 4, 2023\r\nCOMMENTS 07\r\nPost your comment here\r\nPOST\r\n',	'2023-02-04',	21,	'admin'),
(47,	'Biden administration expands EV tax credits in boost for Tesla, Cadillac, others',	'DETROIT – The U.S. Treasury said Friday it is changing its definition of an “SUV” to make more electric vehicles from Tesla, General Motors\r\n and other automakers eligible for up to $7,500 in federal tax credits at higher prices.\r\n\r\nThe decision follows Tesla\r\n CEO Elon Musk publicly criticizing the former standards on Twitter as well as automakers such as GM and Ford Motor\r\n lobbying to change the guidelines ahead of final rules being announced next month.\r\n\r\nThe change raises the retail price cap to $80,000 from $55,000 for vehicles such as the Tesla Model Y, Cadillac Lyriq, Ford Mustang Mach-E and Volkswagen’s ID.4. Previously some or all models of these vehicles did not qualify because they didn’t weigh enough to be considered an SUV by the Treasury’s standards.\r\n\r\nThe credits are part of the Biden administration’s $437 billion Inflation Reduction Act, which was approved in August. Under the bill, SUVs can be priced at up to $80,000 to qualify for EV tax credits, while cars, sedans and wagons have to be priced at or under $55,000.',	'2023-02-04',	19,	'admin');

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_Id` int NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`category_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `category` (`category_Id`, `categoryName`) VALUES
(17,	'Sports'),
(18,	'Technology'),
(19,	'Business'),
(20,	'Trade'),
(21,	'Crime');

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `register_Id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`register_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `registration` (`register_Id`, `fullname`, `email`, `password`) VALUES
(41,	'a',	'a@gmail.com',	'$2y$10$Dz/VZ/Y84C6E6VONB8qSTu87mHhFvv1IIi/jCYa1eil/vFVxLhqW6'),
(42,	'aagya',	'aagya@gmail.com',	'$2y$10$zHuL9rujpmMQ8as9HI5BGOg.cx7s8d72nkU5mp6f6VdipizQ5dXcK'),
(43,	'aagya',	'aagya@gmail.com',	'$2y$10$6YK5NXiCx.TUPsgi9vasj.ya3Ra92t9uxS4JJ1EUqh651LEcSQFza');

-- 2023-02-04 10:17:57