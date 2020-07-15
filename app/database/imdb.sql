-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jul-2020 às 23:28
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Drama'),
(2, 'Aventura'),
(3, 'SCI-FI'),
(4, 'Terror'),
(5, 'Ação'),
(6, 'Suspense');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `title`, `id_category`, `image`) VALUES
(1, 'Moonlight', '1', 'poster-moonlight.jpg'),
(2, 'Blade Runner', '5,3', 'poster-bladerunner.jpg'),
(3, 'Mad Max', '2,3,4', 'poster-mad-max.jpg'),
(4, 'Alita', '2,3', 'poster-alita.jpg'),
(5, 'Batman VS Superman', '1,5', 'poster-batman-superman.jpg'),
(6, 'Jurassic World', '2,4', 'poster-jurassic-world.jpg'),
(7, 'Guerra Civil', '2,5', 'poster-guerra-civil.jpg'),
(8, 'Capitã Marvel', '3', 'poster-capita-marvel.jpg'),
(9, 'Coringa', '6,1', 'poster-coringa.jpg'),
(10, 'Liga da Justiça', '2,5', 'poster-liga-justica.jpg'),
(11, 'Star Wars VII', '2,3', 'poster-star-wars.jpg'),
(12, 'Pantera Negra', '2,3', 'poster-pantera-negra.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
