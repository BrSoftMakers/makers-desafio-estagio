-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2021 às 04:57
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `id_veiculo` int(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `disponibilidade` varchar(255) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `automoveis`
--

INSERT INTO `automoveis` (`id_veiculo`, `modelo`, `marca`, `tipo`, `disponibilidade`, `valor`) VALUES
(5, 'Onix', 'Chevrolet', 'Normal', 'Alugado', 150),
(6, 'Prisma', 'Chevrolet', 'Sedan', 'Disponivel', 300),
(8, 'Spin', 'Chevrolet', 'Minivan', 'Disponivel', 200),
(10, 'Mobi', 'Fiat', 'Compacto', '', 100),
(11, 'Argo', 'Fiat', 'Normal', 'Disponivel', 150),
(14, 'Doblo', 'Fiat', 'Minivan', 'Alugado', 200),
(16, 'Ka', 'Ford', 'Normal', 'Disponivel', 200),
(17, 'Fusion', 'Ford', 'Sedan', 'Disponivel', 450),
(27, 'Etios', 'Toyota', 'Normal', 'Alugado', 200),
(28, 'Corolla', 'Toyota', 'Sedan', 'Alugado', 400),
(29, 'Hillux', 'Toyota', 'Premium', 'Alugado', 500),
(32, 'UP', 'Volkswagen', 'Compacto', 'Alugado', 120),
(33, 'Polo', 'Volkswagen', 'Normal', 'Alugado', 230),
(34, 'Voyage', 'Volkswagen', 'Sedan', 'Disponivel', 210),
(35, 'Jetta', 'Volkswagen', 'Premium', 'Alugado', 430),
(39, 'Sandero', 'Renault', 'Normal', 'Disponivel', 200),
(40, 'Logan', 'Renault', 'Sedan', 'Alugado', 300),
(41, 'Duster', 'Renault', 'Premium', 'Alugado', 400),
(43, 'Captur', 'Renault', 'SUV', 'Disponivel', 500);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`id_veiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `id_veiculo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
