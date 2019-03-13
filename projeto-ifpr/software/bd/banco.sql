-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Mar-2019 às 20:31
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `num_casa` int(10) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `telefone` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `rg`, `cpf`, `dataNasc`, `email`, `cep`, `num_casa`, `complemento`, `telefone`) VALUES
(1, 'Gustavo Leonart', '123', '123', '1991-01-01', 'guto@gmail.com', 12123123, 1, '1', 123456789),
(2, 'Miguel Theodoro do Santos', '1', '1', '1991-02-02', 'miguel@gmail.com', 123456, 12, '12', 123456798),
(3, '?', '111111111', '11111111111', '2019-03-20', 'c@b.a', 12121212, 1, 'nha', 2147483647),
(4, 'a', '121212121', '12121122121', '2019-03-13', 'c@b.a', 11111111, 1, 'nha', 2147483647),
(5, 'Um nome', '122212222', '33333333333', '2019-03-30', 'nha@a', 11124356, 343, 'a', 2147483647),
(6, 'ozil ', '127098989', '67667676767', '2019-03-12', 'a@c.v', 12333333, 3333, 'advbgh', 2147483647),
(7, '?', '122437677', '99999999999', '2019-03-20', 'asas@asasad', 12121212, 1212, 'adas', 12121212121);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cep` int(10) DEFAULT NULL,
  `num_casa` int(10) NOT NULL,
  `complemento` varchar(20) DEFAULT NULL,
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `nome`, `rg`, `cnpj`, `cpf`, `dataNasc`, `email`, `cep`, `num_casa`, `complemento`, `telefone`) VALUES
(1, 'Rio verde', '31231231', '3123123', '12312412', '2019-02-17', 'theopdoro@gmail.com', 12313, 21, 'afas', 31233456),
(2, 'Condor', '1231231', '3123123', '3123131', '2019-09-12', 'sdad@ghaa.com', 123123, 123, 'casadfas', 12312312),
(3, 'carrefur', '1231231', '3123123', '3123131', '2019-09-12', 'sdad@ghaa.com', 123123, 123, 'casadfas', 12312312),
(6, 'hjsjasji', '877878787', '78787878787', '78787878787', '7878-08-07', '787878787878787878@78.78', 78787878, 7878, 'a', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nome_receita` varchar(100) NOT NULL,
  `des_receita` text NOT NULL,
  `tempo_preparo` int(11) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id_menu`, `nome_receita`, `des_receita`, `tempo_preparo`, `data_cadastro`) VALUES
(1, 'Bolo de enxofre com aipo', 'sla', 50, '2019-03-07 00:00:00'),
(4, 'Barra de cereal', 'qualquer coisa', 1, '2019-03-13 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_menu` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `data_entrega` datetime DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `status_pedido` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_cliente`, `id_menu`, `id_usuario`, `data_cadastro`, `data_entrega`, `valor`, `status_pedido`) VALUES
(1, 1, 1, 4, '2019-03-07 00:00:00', '2019-03-07 00:00:00', 1230, 1),
(2, 2, 1, 3, '2019-03-07 00:00:00', '2019-03-28 00:00:00', 12345, 3),
(3, 1, 1, 7, '2019-03-07 00:00:00', '2019-03-09 00:00:00', 123, 2),
(4, 6, 1, 7, '2019-03-13 00:00:00', '2019-03-28 00:00:00', 12.09, 2),
(5, 4, 4, 3, '2019-03-13 00:00:00', '2019-03-13 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(10) NOT NULL,
  `id_tipo_produto` int(10) NOT NULL,
  `id_fornecedor` int(10) NOT NULL,
  `des_produto` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `preco` double NOT NULL,
  `data_validade` date DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_tipo_produto`, `id_fornecedor`, `des_produto`, `marca`, `preco`, `data_validade`, `data_compra`, `quantidade`) VALUES
(3, 4, 1, 'tirrol', 'tirrol', 1280.81, '2018-01-26', '2018-01-26', 8),
(5, 4, 1, 'nutella', 'nutella', 15000, '2019-03-02', '2019-03-12', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `id_tipo_produto` int(10) NOT NULL,
  `des_tipo_produto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`id_tipo_produto`, `des_tipo_produto`) VALUES
(1, 'leite '),
(4, 'arroz'),
(6, 'banana'),
(10, 'desconhecido'),
(11, 'nhaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(3, 'miguel', 'theodoronowa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'guto', 'guto@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'marccus', 'marccus@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(8, 'teste', 'teste@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, '1231234', 'tdasdbs@asdas.com', 'af43f4ef20cf9f221c9b89066255de27'),
(10, '?', 'a@b.c', '202cb962ac59075b964b07152d234b70'),
(11, 'Um nome', 'c@b.a', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedido_cliente1_idx` (`id_cliente`),
  ADD KEY `fk_pedido_menu1_idx` (`id_menu`),
  ADD KEY `fk_pedido_usuario1_idx` (`id_usuario`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_produto_fornecedor_idx` (`id_fornecedor`),
  ADD KEY `fk_produto_tipo_produto1_idx` (`id_tipo_produto`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`id_tipo_produto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `id_tipo_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_cliente1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_menu1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_fornecedor` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id_fornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_tipo_produto1` FOREIGN KEY (`id_tipo_produto`) REFERENCES `tipo_produto` (`id_tipo_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
