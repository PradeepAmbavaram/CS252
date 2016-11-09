
CREATE TABLE IF NOT EXISTS `students` (
  `s` int(4) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `roll` int(5) NOT NULL,
  `reg` varchar(10) NOT NULL,
  `cpi` float NOT NULL,
  `grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `students` (`s`, `name`, `dob`, `roll`, `reg`, `cpi`, `grade`) VALUES
(1, 'goutham', '2015-08-06', 13334, 'iitk013334', 4.5, 'D'),
(2, 'goutham', '2015-08-06', 13335, 'iitk013334', 4.7, 'D'),
(3, 'khsdfbja', '1209-12-12', 12222, 'iitk011111', 2.3, 'E'),
(4, 'skhdbfhdsf', '2020-12-12', 14444, 'iitk014444', 7.9, 'C'),
(5, 'viswanadh', '1995-12-12', 13561, 'IITK013561', 6.6, 'C'),
(6, 'Pree', '2015-12-02', 13666, 'IIITK01212', 0, 'F'),
(7, 'edsfdfsd2324', '2112-12-13', 12225, 'iitk012225', 6.1, 'C'),
(8, 'pramodasd', '2112-12-13', 12122, 'iitk012124', 8.9, 'B'),
(9, 'kjafhsi,,', '1212-12-12', 12124, 'iitk012124', 5.5, 'D');


ALTER TABLE `students`
  ADD PRIMARY KEY (`s`),
  ADD UNIQUE KEY `s.no` (`s`),
  ADD UNIQUE KEY `roll` (`roll`);

