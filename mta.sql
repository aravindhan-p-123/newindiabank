CREATE DATABASE mta;
USE  mta;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `transaction` (`sender`, `receiver`, `credits`) VALUES
('Arav', 'Preethi', 4530),
('Ramesh', 'Deepa', 3443),
('Rishabh', 'Sumit Kumar', 8939);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `name`, `email`, `credits`) VALUES
(1, 'Arav', 'arav@gmail.com', 129540),
(2, 'Ramesh', 'ramesh@gmail.com', 62583),
(45, 'Sandeep', 'sandeep@gmail.com', 76902),
(23, 'Pradeep Krishna ', 'pkrishna@rediffmail.com', 190590),
(4, 'Deepa', 'deepa@gmail.com', 45980),
(3, 'Rishabh Pant', 'rpant@gmail.com', 156934),
(7, 'Sumit Kumar', 'sumit@jmail.com', 215363),
(15, 'Yash ', 'yash@rediffmail.com', 228245),
(12, 'Prashant Kumar', 'prashant@gmail.com', 30309),
(10, 'Preethi ', 'saurabh@yahoo.com', 290897);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;