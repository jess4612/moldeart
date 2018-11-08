-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 08-Nov-2018 às 20:04
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MoldeArt`
--
CREATE DATABASE IF NOT EXISTS `MoldeArt` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `MoldeArt`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `E_Artefato`
--

CREATE TABLE `E_Artefato` (
  `ART_COD` int(11) NOT NULL,
  `ART_NOME` varchar(300) NOT NULL,
  `ART_DESCRICAO` text NOT NULL,
  `ART_MATERIAIS` text NOT NULL,
  `ART_CATEGORIA` varchar(150) NOT NULL,
  `ART_IMAGEM` varchar(500) NOT NULL,
  `ART_TUTORIAL` text NOT NULL,
  `ART_DATA` date NOT NULL,
  `ART_TAGS` text NOT NULL,
  `ART_VIEWS` bigint(20) NOT NULL DEFAULT '0',
  `USU_COD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `E_Artefato`
--

INSERT INTO `E_Artefato` (`ART_COD`, `ART_NOME`, `ART_DESCRICAO`, `ART_MATERIAIS`, `ART_CATEGORIA`, `ART_IMAGEM`, `ART_TUTORIAL`, `ART_DATA`, `ART_TAGS`, `ART_VIEWS`, `USU_COD`) VALUES
(2, 'Vaso de flores', 'Vaso de flores com aparência semelhante a de um vaso de flores. Parece-se com um vaso de flores e se trata de um recipiente que possui, como função principal \r<br>o armazenamento de flores e terra, que sujará sua casa quando seu neto acertar a bola nele.', 'a:3:{i:0;s:17:\"1 Vaso de flores\r\";i:1;s:13:\"2kg de terra\r\";i:2;s:25:\"Flores que você preferir\";}', 'Decoração', '1541714037.jpeg', 'a:3:{i:0;a:2:{s:9:\"descricao\";s:83:\"Decore da forma como desejar o vaso à sua escolha antes de inserir qualquer coisa.\";s:7:\"nomeImg\";s:15:\"1541714048.jpeg\";}i:1;a:2:{s:9:\"descricao\";s:108:\"Adicione a terra ao interior do vaso, tome cuidado para não estragar a decoração ou sujar muito ao redor.\";s:7:\"nomeImg\";s:15:\"1541714058.jpeg\";}i:2;a:2:{s:9:\"descricao\";s:104:\"Escolha suas flores e plante-as no vaso, agora basta esperá-las crescer para o seu neto quebrar o vaso.\";s:7:\"nomeImg\";s:15:\"1541714075.jpeg\";}}', '2018-11-08', 'a:5:{i:0;s:4:\"vaso\";i:1;s:6:\"flores\";i:2;s:4:\"flor\";i:3;s:10:\"prateleira\";i:4;s:5:\"terra\";}', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `E_Produto`
--

CREATE TABLE `E_Produto` (
  `PRO_COD` int(11) NOT NULL,
  `PRO_NOME` varchar(200) NOT NULL,
  `PRO_DESCRICAO` text NOT NULL,
  `PRO_PRECO` float NOT NULL,
  `PRO_QUANTIDADE` int(11) NOT NULL,
  `PRO_CATEGORIA` varchar(150) NOT NULL,
  `PRO_TAGS` text NOT NULL,
  `USU_COD` int(11) NOT NULL,
  `ART_COD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `E_Usuario`
--

CREATE TABLE `E_Usuario` (
  `USU_COD` int(11) NOT NULL,
  `USU_NOME` varchar(100) NOT NULL,
  `USU_SOBRENOME` varchar(200) NOT NULL,
  `USU_IMAGEM` varchar(2000) NOT NULL DEFAULT 'default-user-img.png',
  `USU_EMAIL` varchar(300) NOT NULL,
  `USU_SENHA` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `E_Usuario`
--

INSERT INTO `E_Usuario` (`USU_COD`, `USU_NOME`, `USU_SOBRENOME`, `USU_IMAGEM`, `USU_EMAIL`, `USU_SENHA`) VALUES
(1, 'Caio', 'Corrêa Chaves', '1541108206.jpeg', 'caio.chaves@etec.sp.gov.br', '24c5e3161169356af8689aac778bf1c5'),
(2, 'Melissa', 'Corrêa Chaves', 'default-user-img.png', 'melissa@email.com', 'f5bb0c8de146c67b44babbf4e6584cc0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `R_Compra`
--

CREATE TABLE `R_Compra` (
  `COM_COD` int(11) NOT NULL,
  `USU_COD` int(11) NOT NULL,
  `PRO_COD` int(11) NOT NULL,
  `COM_QUANTIDADE` int(11) NOT NULL,
  `COM_DATA` date NOT NULL,
  `COM_ENTREGA` date NOT NULL,
  `COM_RECEBIDO` date DEFAULT NULL,
  `COM_INFOS` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `E_Artefato`
--
ALTER TABLE `E_Artefato`
  ADD PRIMARY KEY (`ART_COD`),
  ADD KEY `USU_COD` (`USU_COD`);

--
-- Indexes for table `E_Produto`
--
ALTER TABLE `E_Produto`
  ADD PRIMARY KEY (`PRO_COD`),
  ADD KEY `ART_COD` (`ART_COD`),
  ADD KEY `USU_COD` (`USU_COD`);

--
-- Indexes for table `E_Usuario`
--
ALTER TABLE `E_Usuario`
  ADD PRIMARY KEY (`USU_COD`);

--
-- Indexes for table `R_Compra`
--
ALTER TABLE `R_Compra`
  ADD PRIMARY KEY (`COM_COD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `E_Artefato`
--
ALTER TABLE `E_Artefato`
  MODIFY `ART_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `E_Produto`
--
ALTER TABLE `E_Produto`
  MODIFY `PRO_COD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `E_Usuario`
--
ALTER TABLE `E_Usuario`
  MODIFY `USU_COD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `R_Compra`
--
ALTER TABLE `R_Compra`
  MODIFY `COM_COD` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `E_Artefato`
--
ALTER TABLE `E_Artefato`
  ADD CONSTRAINT `E_Artefato_ibfk_1` FOREIGN KEY (`USU_COD`) REFERENCES `E_Usuario` (`USU_COD`);

--
-- Limitadores para a tabela `E_Produto`
--
ALTER TABLE `E_Produto`
  ADD CONSTRAINT `E_Produto_ibfk_1` FOREIGN KEY (`ART_COD`) REFERENCES `E_Artefato` (`ART_COD`),
  ADD CONSTRAINT `E_Produto_ibfk_2` FOREIGN KEY (`USU_COD`) REFERENCES `E_Usuario` (`USU_COD`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
