


CREATE DATABASE `user` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `user`;


CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50)  NOT NULL ,
  `password` varchar(50)  NOT NULL ,
  `email` varchar(50) NOT NULL ,
  `class` varchar(15)  NOT NULL DEFAULT 'c',
  PRIMARY KEY (`username`,`password`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`username`, `password`, `email`, `class`) VALUES
('user1', '123456', '123456789qq.com', '0'),
('user2', '123456', '234567890qq.com', '0'),
('super', '123456', '258369147', '1');

INSERT INTO `user` (`username`, `password`, `email`, `class`) VALUES('super', '123456', '258369147', '1');


CREATE TABLE IF NOT EXISTS `music` (
  `musicname` varchar(50) NOT NULL  ,
  `whoup` varchar(50)  NOT NULL ,
  `src` varchar(50)NOT NULL ,
  `singer` varchar(50)  NOT NULL ,
  `time` varchar(50)NOT NULL 

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `music` (`musicname`, `whoup`, `src`,`singer`, `time`) VALUES
('user1', '123456', '123456789qq.com', '0','',''),
('user2', '123456', '234567890qq.com', '0'),
('super', '123456', '258369147', '1');


管理员  1
普通    0
会员    3

CREATE TABLE IF NOT EXISTS `store` (
  `user` varchar(50) NOT NULL  ,
  `name` varchar(50)  NOT NULL ,
  `which` varchar(50)NOT NULL,
   `singer` varchar(50)NOT NULL,
   `time` varchar(30) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;