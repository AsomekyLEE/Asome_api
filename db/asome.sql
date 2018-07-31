-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 18-07-30 23:51
-- 서버 버전: 5.7.22
-- PHP 버전: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `asome`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `proj_info`
--

CREATE TABLE `proj_info` (
  `proj_id` int(20) NOT NULL,
  `proj_name` varchar(100) NOT NULL,
  `proj_about` varchar(100) NOT NULL,
  `proj_status` varchar(100) DEFAULT NULL,
  `proj_error` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `proj_info`
--

INSERT INTO `proj_info` (`proj_id`, `proj_name`, `proj_about`, `proj_status`, `proj_error`) VALUES
(6, 'aa', 'aaaaa', 'aaaaa', 'd'),
(7, 'df', 'dfdfdfdf', 'dfdfdfdf', 'd'),
(8, 'df1', 'dfdfdfdf1', 'dfdfdfdf1', 'd'),
(9, 'df2', 'dfdfdfdf2', 'dfdfdfdf2', 'd'),
(10, 'df2', 'dfdfdfdf2', 'dfdfdfdf2', 'd'),
(11, 'df3', 'dfdfdfdf3', 'dfdfdfdf3', 'd'),
(12, 'df2', 'dfdfdfdf2', 'dfdfdfdf2', 'd'),
(13, 'df3', 'dfdfdfdf3', 'dfdfdfdf3', 'd'),
(14, 'df5', 'dfdfdfdf5', 'dfdfdfdf5', 'd'),
(15, 'df6', 'dfdfdfdf6', 'dfdfdfdf6', 'd');

-- --------------------------------------------------------

--
-- 테이블 구조 `status_user`
--

CREATE TABLE `status_user` (
  `proj_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `status_user_role` varchar(100) DEFAULT NULL,
  `status_user` varchar(100) DEFAULT NULL,
  `status_user_error` varchar(100) DEFAULT NULL,
  `status_user_start` varchar(100) DEFAULT NULL,
  `status_user_midend` varchar(100) DEFAULT NULL,
  `status_user_end` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `status_user`
--

INSERT INTO `status_user` (`proj_name`, `user_name`, `status_user_role`, `status_user`, `status_user_error`, `status_user_start`, `status_user_midend`, `status_user_end`) VALUES
('aa', 'bb', 'cc', 'dd', 'ee', 'ff', 'zz', 'kk'),
('df', 'as', 'we', 'tt', 'uu', 'yy', 'oo', 'qq'),
('df1', 'as1', 'we1', 'tt1', 'uu1', 'yy1', 'oo1', 'qq1'),
('df2', 'as2', 'we2', 'tt2', 'uu2', 'yy2', 'oo2', 'qq2'),
('df3', 'as3', 'we3', 'tt3', 'uu3', 'yy3', 'oo3', 'qq3'),
('df5', 'as5', 'we5', 'tt5', 'uu5', 'yy5', 'oo5', 'qq5'),
('df6', 'as6', 'we6', 'tt6', 'uu6', 'yy6', 'oo6', 'qq6');

-- --------------------------------------------------------

--
-- 테이블 구조 `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL,
  `user_company` varchar(100) DEFAULT NULL,
  `user_department` varchar(100) DEFAULT NULL,
  `user_position` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `user_login_api_type` varchar(100) DEFAULT NULL,
  `user_profile_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `proj_info`
--
ALTER TABLE `proj_info`
  ADD PRIMARY KEY (`proj_id`);

--
-- 테이블의 인덱스 `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `proj_info`
--
ALTER TABLE `proj_info`
  MODIFY `proj_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 테이블의 AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
