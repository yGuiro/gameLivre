-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2022 às 20:14
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gl_gamelivre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `friendship`
--

CREATE TABLE `friendship` (
  `friendshipID` int(11) NOT NULL,
  `useroneID` int(11) NOT NULL,
  `usertwoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `offer`
--

CREATE TABLE `offer` (
  `offerID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `ownerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proposal`
--

CREATE TABLE `proposal` (
  `proposalID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `proposalType` varchar(255) NOT NULL,
  `productType` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `itemsIMG` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `userName` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `phoneNumber` bigint(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `CPF` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`userName`, `Name`, `Email`, `Password`, `phoneNumber`, `Address`, `CPF`) VALUES
('Guiro', 'Guilherme ', 'guiro@gmail.com', '123', 6151565151, '83410130', 651651651615);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`friendshipID`);

--
-- Índices para tabela `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerID`),
  ADD KEY `fk_users_offers` (`userName`),
  ADD KEY `fk_users_offers2` (`ownerID`);

--
-- Índices para tabela `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`proposalID`),
  ADD KEY `fk_users_proposal` (`userName`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `friendship`
--
ALTER TABLE `friendship`
  MODIFY `friendshipID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `offer`
--
ALTER TABLE `offer`
  MODIFY `offerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `proposal`
--
ALTER TABLE `proposal`
  MODIFY `proposalID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
