CREATE TABLE `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
   `community_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

INSERT INTO `meetings` (`id`, `title`, `description`, `startDate`, `endDate`, `community_id`) VALUES (NULL, 'Oh my god of bed bugs !', 'Sciences of World', '2025-03-12', '2025-02-12', '1'), (NULL, 'Mattresses on the moon', 'Geography of the space', '2018-01-25', '2018-03-11', '2'), (NULL, 'Why we code ?', 'Question existential', '2017-12-15', '2017-12-16', '2');
