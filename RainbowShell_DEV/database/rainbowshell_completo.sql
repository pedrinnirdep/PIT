create database rainbowshell;
use rainbowshell;
--
-- Database: `rainbowshell`
--
-- --------------------------------------------------------

--
-- Stand-in structure for view `mais_comprados`
-- (See below for the actual view)
--
CREATE TABLE `mais_comprados` (
`produto_tipo` varchar(40)
,`cidade_compra` varchar(50)
,`estampa_autor` varchar(101)
,`estampa_nome` varchar(50)
,`produto_nome` varchar(50)
,`comprados` int(11)
,`data_compra` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `produto_dados`
-- (See below for the actual view)
--
CREATE TABLE `produto_dados` (
`produto_nome` varchar(50)
,`produto_descricao` text
,`produto_valor` double(9,2)
,`produto_imagem` varchar(80)
,`produto_tipo` varchar(40)
,`estampa_nome` varchar(50)
,`estampa_descricao` text
,`estampa_imagem` varchar(80)
,`estampa_tag` varchar(40)
,`estampa_autor_nome` varchar(50)
,`estampa_autor_sobrenome` varchar(50)
,`produto_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatorio_compra`
-- (See below for the actual view)
--
CREATE TABLE `relatorio_compra` (
`id_compra` int(11)
,`unidade` double(9,2)
,`valor_prod` double(19,2)
,`valor_final` double(19,2)
,`lucro` double(19,2)
,`quantidade` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `relatorio_itens_compra`
-- (See below for the actual view)
--
CREATE TABLE `relatorio_itens_compra` (
`id_produto` int(11)
,`id_estampa` int(11)
,`id_tipo` int(11)
,`id_produtos_compra` int(11)
,`id_compra` int(11)
,`id_endereco` int(11)
,`nome_produto` varchar(50)
,`valor_unidade_produto` double(9,2)
,`valor_compra_produto` double(19,2)
,`prod_compra_produto` double(19,2)
,`lucro` double(19,2)
,`nome_estampa` varchar(50)
,`comissao_estampa` double(4,2)
,`tag_estampa` varchar(40)
,`tipo_nome` varchar(40)
,`quantidade_produto_compra` int(11)
,`var_cor` varchar(45)
,`var_tamanho` char(1)
,`compra_data` datetime
,`compra_status` varchar(45)
,`endereco_cidade` varchar(50)
,`endereco_estado` varchar(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compra`
--

CREATE TABLE `tbl_compra` (
  `id_compra` int(11) NOT NULL,
  `data_compra` datetime NOT NULL,
  `data_entrega` datetime NOT NULL,
  `frete` double(9,2) NOT NULL,
  `desconto` double(9,2) DEFAULT NULL,
  `valor_total` double(9,2) NOT NULL,
  `valor_prod_total` double(9,2) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT '0',
  `compra_id_usuario` int(11) NOT NULL,
  `compra_id_endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_compra`
--

INSERT INTO `tbl_compra` (`id_compra`, `data_compra`, `data_entrega`, `frete`, `desconto`, `valor_total`, `valor_prod_total`, `status`, `compra_id_usuario`, `compra_id_endereco`) VALUES
(1, '2019-09-22 00:00:00', '2019-10-07 00:00:00', 20.00, NULL, 490.00, 420.00, '1', 5, 3),
(2, '2019-09-05 00:00:00', '2019-10-06 00:00:00', 20.00, NULL, 490.00, 420.00, '1', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_endereco`
--

CREATE TABLE `tbl_endereco` (
  `id_endereco` int(11) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `endereco_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_endereco`
--

INSERT INTO `tbl_endereco` (`id_endereco`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `complemento`, `endereco_id_usuario`) VALUES
(1, '32603242', 'Rua Flávio Saraiva', 270, 'Guarujá', 'Betim', 'MG', NULL, 2),
(2, '33569845', 'Rua Púrpura', 126, 'Guarujá', 'Betim', 'MG', NULL, 3),
(3, '00000000', 'Logradouro', 0, 'Bairro', 'Cidade', 'ET', NULL, 5),
(4, '32603242', 'Rua Motorista FlÃ¡vio Saraiva', 270, 'GuarujÃ¡', 'Betim', 'MG', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estampa`
--

CREATE TABLE `tbl_estampa` (
  `id_estampa` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `comissao` double(4,2) NOT NULL,
  `tag` varchar(40) NOT NULL,
  `aprovacao` tinyint(4) NOT NULL,
  `estampa_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_estampa`
--

INSERT INTO `tbl_estampa` (`id_estampa`, `nome`, `descricao`, `imagem`, `comissao`, `tag`, `aprovacao`, `estampa_id_usuario`) VALUES
(1, 'O Creeper', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/estampa/4/creeper.png', 10.00, 'Minecraft', 1, 4),
(2, 'Macaco', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/estampa/4/macaco.png', 5.00, 'Animal', 1, 4),
(3, 'Cog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img/estampa/4/cog.png', 17.00, 'Máquina', 1, 4),
(7, 'ASDASDASD', 'ASD', 'img/estampa/1/ASDASDASD.png', 10.00, 'ASD', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estoque`
--

CREATE TABLE `tbl_estoque` (
  `id_estoque` int(11) NOT NULL,
  `cor` varchar(30) DEFAULT NULL,
  `tamanho` varchar(10) DEFAULT NULL,
  `material` varchar(30) DEFAULT NULL,
  `capacidade` varchar(45) DEFAULT NULL,
  `volume` double(9,2) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_compra` double(9,2) NOT NULL,
  `estoque_id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_estoque`
--

INSERT INTO `tbl_estoque` (`id_estoque`, `cor`, `tamanho`, `material`, `capacidade`, `volume`, `quantidade`, `preco_compra`, `estoque_id_tipo`) VALUES
(1, 'Preto', 'P', 'Algodão', NULL, NULL, 20, 0.00, 1),
(2, 'Preto', 'M', 'Algodão', NULL, NULL, 20, 0.00, 1),
(3, 'Preto', 'G', 'Algodão', NULL, NULL, 20, 0.00, 1),
(4, 'Branco', 'P', 'Algodão', NULL, NULL, 20, 0.00, 1),
(5, 'Branco', 'M', 'Algodão', NULL, NULL, 20, 0.00, 1),
(6, 'Branco', 'G', 'Algodão', NULL, NULL, 20, 0.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produto`
--

CREATE TABLE `tbl_produto` (
  `id_produto` int(11) NOT NULL,
  `datamod` datetime NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `valor` double(9,2) NOT NULL,
  `valor_prod` double(9,2) NOT NULL,
  `imagem` varchar(80) DEFAULT 'img/produto/default.png',
  `produto_id_estampa` int(11) NOT NULL,
  `produto_id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_produto`
--

INSERT INTO `tbl_produto` (`id_produto`, `datamod`, `nome`, `descricao`, `valor`, `valor_prod`, `imagem`, `produto_id_estampa`, `produto_id_tipo`) VALUES
(1, '2019-09-28 13:23:15', 'Camisa - O Creeper', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 40.00, 30.00, 'img/produto/camisa/1/camisaocreeper.png', 1, 1),
(2, '2019-09-28 13:23:15', 'Camisa - Cog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 40.00, 30.00, 'img/produto/camisa/2/camisacog.png', 3, 1),
(3, '2019-09-28 13:23:15', 'Camisa - Macaco', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 40.00, 30.00, 'img/produto/camisa/3/camisamacaco.png', 2, 1),
(4, '2019-09-28 13:23:15', 'Moletom - Macaco', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 90.00, 75.00, 'img/produto/moletom/4/moletommacaco.png', 2, 4),
(5, '2019-09-28 13:23:15', 'Moletom - O Creeper', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 90.00, 75.00, 'img/produto/moletom/5/moletomocreeper.png', 1, 4),
(6, '2019-09-28 13:23:15', 'Regata - O Creeper', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 30.00, 25.00, 'img/produto/regata/6/regataocreeper.png', 1, 3),
(7, '2019-09-28 13:23:15', 'Regata - Macaco', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 30.00, 25.00, 'img/produto/regata/7/regatamacaco.png', 2, 4),
(8, '2019-09-28 13:23:15', 'Moletom - Cog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 90.00, 75.00, 'img/produto/moletom/8/moletomcog.png', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produtos_compra`
--

CREATE TABLE `tbl_produtos_compra` (
  `id_produtos_compra` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `cor` varchar(45) DEFAULT NULL,
  `tamanho` char(1) DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `capacidade` varchar(45) DEFAULT NULL,
  `volume` double(5,2) DEFAULT NULL,
  `produtos_compra_id_produto` int(11) NOT NULL,
  `produtos_compra_id_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_produtos_compra`
--

INSERT INTO `tbl_produtos_compra` (`id_produtos_compra`, `quantidade`, `cor`, `tamanho`, `material`, `capacidade`, `volume`, `produtos_compra_id_produto`, `produtos_compra_id_compra`) VALUES
(1, 2, 'Preto', 'P', 'Algodão', NULL, NULL, 1, 1),
(2, 1, 'Branco', 'P', 'Algodão', NULL, NULL, 5, 1),
(3, 3, 'Branco', 'M', 'Algodão', NULL, NULL, 8, 1),
(4, 5, 'Preto', 'P', 'Algodão', NULL, NULL, 6, 1),
(5, 2, 'Preto', 'G', 'Algodão', NULL, NULL, 1, 2),
(6, 1, 'Preto', 'M', 'Algodão', NULL, NULL, 5, 2),
(7, 3, 'Preto', 'P', 'Algodão', NULL, NULL, 8, 2),
(8, 5, 'Branco', 'M', 'Algodão', NULL, NULL, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipo`
--

CREATE TABLE `tbl_tipo` (
  `id_tipo` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_tipo`
--

INSERT INTO `tbl_tipo` (`id_tipo`, `nome`) VALUES
(1, 'Camisa'),
(2, 'Camiseta'),
(3, 'Regata'),
(4, 'Moletom');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `imagem` varchar(80) DEFAULT 'img/avatar/default.png',
  `email` varchar(80) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `nome`, `sobrenome`, `cpf`, `telefone`, `imagem`, `email`, `senha`, `tipo`) VALUES
(1, 'ADM', 'Administrador', '14994549613', '31984251993', 'img/avatar/1/1.png', 'adm', 'c4ca4238a0b923820dcc509a6f75849b', 9),
(2, 'Gabriel', 'Bonfim', NULL, NULL, NULL, 'gb@a.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'Rafaela', 'Henrique', NULL, NULL, NULL, 'rh@a.com', '202cb962ac59075b964b07152d234b70', 1),
(4, 'Artista', 'Genérico', NULL, NULL, NULL, 'artista', '202cb962ac59075b964b07152d234b70', 1),
(5, 'Usuario', 'Genérico', NULL, NULL, NULL, 'usuario', '202cb962ac59075b964b07152d234b70', 1),
(6, 'Tester', 'Tester', NULL, NULL, NULL, 'teste', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Structure for view `mais_comprados`
--
DROP TABLE IF EXISTS `mais_comprados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mais_comprados`  AS  select `t`.`nome` AS `produto_tipo`,`ender`.`cidade` AS `cidade_compra`,concat(`u`.`nome`,' ',`u`.`sobrenome`) AS `estampa_autor`,`e`.`nome` AS `estampa_nome`,`p`.`nome` AS `produto_nome`,`pc`.`quantidade` AS `comprados`,`c`.`data_compra` AS `data_compra` from ((((((`tbl_produto` `p` join `tbl_tipo` `t` on((`t`.`id_tipo` = `p`.`produto_id_tipo`))) join `tbl_estampa` `e` on((`e`.`id_estampa` = `p`.`produto_id_estampa`))) join `tbl_produtos_compra` `pc` on((`pc`.`produtos_compra_id_produto` = `p`.`id_produto`))) join `tbl_compra` `c` on((`c`.`id_compra` = `pc`.`produtos_compra_id_compra`))) join `tbl_usuario` `u` on((`u`.`id_usuario` = `e`.`estampa_id_usuario`))) join `tbl_endereco` `ender` on((`ender`.`id_endereco` = `c`.`compra_id_endereco`))) where (`c`.`status` = 1) ;

-- --------------------------------------------------------

--
-- Structure for view `produto_dados`
--
DROP TABLE IF EXISTS `produto_dados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `produto_dados`  AS  select `p`.`nome` AS `produto_nome`,`p`.`descricao` AS `produto_descricao`,`p`.`valor` AS `produto_valor`,`p`.`imagem` AS `produto_imagem`,`t`.`nome` AS `produto_tipo`,`e`.`nome` AS `estampa_nome`,`e`.`descricao` AS `estampa_descricao`,`e`.`imagem` AS `estampa_imagem`,`e`.`tag` AS `estampa_tag`,`u`.`nome` AS `estampa_autor_nome`,`u`.`sobrenome` AS `estampa_autor_sobrenome`,`p`.`id_produto` AS `produto_id` from (((`tbl_produto` `p` join `tbl_tipo` `t` on((`t`.`id_tipo` = `p`.`produto_id_tipo`))) join `tbl_estampa` `e` on((`e`.`id_estampa` = `p`.`produto_id_estampa`))) join `tbl_usuario` `u` on((`u`.`id_usuario` = `e`.`estampa_id_usuario`))) ;

-- --------------------------------------------------------

--
-- Structure for view `relatorio_compra`
--
DROP TABLE IF EXISTS `relatorio_compra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatorio_compra`  AS  select `c`.`id_compra` AS `id_compra`,`p`.`valor` AS `unidade`,(`p`.`valor_prod` * `pc`.`quantidade`) AS `valor_prod`,(`p`.`valor` * `pc`.`quantidade`) AS `valor_final`,((`p`.`valor` * `pc`.`quantidade`) - (`p`.`valor_prod` * `pc`.`quantidade`)) AS `lucro`,`pc`.`quantidade` AS `quantidade` from ((`tbl_compra` `c` join `tbl_produtos_compra` `pc` on((`pc`.`produtos_compra_id_compra` = `c`.`id_compra`))) join `tbl_produto` `p` on((`pc`.`produtos_compra_id_produto` = `p`.`id_produto`))) ;

-- --------------------------------------------------------

--
-- Structure for view `relatorio_itens_compra`
--
DROP TABLE IF EXISTS `relatorio_itens_compra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relatorio_itens_compra`  AS  select `p`.`id_produto` AS `id_produto`,`e`.`id_estampa` AS `id_estampa`,`t`.`id_tipo` AS `id_tipo`,`pc`.`id_produtos_compra` AS `id_produtos_compra`,`c`.`id_compra` AS `id_compra`,`ed`.`id_endereco` AS `id_endereco`,`p`.`nome` AS `nome_produto`,`p`.`valor` AS `valor_unidade_produto`,(`p`.`valor` * `pc`.`quantidade`) AS `valor_compra_produto`,(`p`.`valor_prod` * `pc`.`quantidade`) AS `prod_compra_produto`,((`p`.`valor` * `pc`.`quantidade`) - (`p`.`valor_prod` * `pc`.`quantidade`)) AS `lucro`,`e`.`nome` AS `nome_estampa`,`e`.`comissao` AS `comissao_estampa`,`e`.`tag` AS `tag_estampa`,`t`.`nome` AS `tipo_nome`,`pc`.`quantidade` AS `quantidade_produto_compra`,`pc`.`cor` AS `var_cor`,`pc`.`tamanho` AS `var_tamanho`,`c`.`data_compra` AS `compra_data`,`c`.`status` AS `compra_status`,`ed`.`cidade` AS `endereco_cidade`,`ed`.`estado` AS `endereco_estado` from (((((`tbl_produto` `p` join `tbl_estampa` `e` on((`e`.`id_estampa` = `p`.`produto_id_estampa`))) join `tbl_produtos_compra` `pc` on((`pc`.`produtos_compra_id_produto` = `p`.`id_produto`))) join `tbl_tipo` `t` on((`t`.`id_tipo` = `p`.`produto_id_tipo`))) join `tbl_compra` `c` on((`c`.`id_compra` = `pc`.`produtos_compra_id_compra`))) join `tbl_endereco` `ed` on((`ed`.`id_endereco` = `c`.`compra_id_endereco`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_compra`
--
ALTER TABLE `tbl_compra`
  ADD PRIMARY KEY (`id_compra`,`compra_id_usuario`,`compra_id_endereco`),
  ADD KEY `fk_tbl_compra_tbl_usuario1_idx` (`compra_id_usuario`),
  ADD KEY `fk_tbl_compra_tbl_endereco1_idx` (`compra_id_endereco`);

--
-- Indexes for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  ADD PRIMARY KEY (`id_endereco`),
  ADD KEY `fk_tbl_endereco_tbl_usuario_idx` (`endereco_id_usuario`);

--
-- Indexes for table `tbl_estampa`
--
ALTER TABLE `tbl_estampa`
  ADD PRIMARY KEY (`id_estampa`,`estampa_id_usuario`),
  ADD KEY `fk_tbl_estampa_tbl_usuario1_idx` (`estampa_id_usuario`);

--
-- Indexes for table `tbl_estoque`
--
ALTER TABLE `tbl_estoque`
  ADD PRIMARY KEY (`id_estoque`,`estoque_id_tipo`),
  ADD KEY `fk_tbl_estoque_tbl_tipo1_idx` (`estoque_id_tipo`);

--
-- Indexes for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD PRIMARY KEY (`id_produto`,`produto_id_estampa`,`produto_id_tipo`),
  ADD KEY `fk_tbl_produto_tbl_estampa1_idx` (`produto_id_estampa`),
  ADD KEY `fk_tbl_produto_tbl_tipo1_idx` (`produto_id_tipo`);

--
-- Indexes for table `tbl_produtos_compra`
--
ALTER TABLE `tbl_produtos_compra`
  ADD PRIMARY KEY (`id_produtos_compra`),
  ADD KEY `fk_tbl_produtos_compra_tbl_produto1_idx` (`produtos_compra_id_produto`),
  ADD KEY `fk_tbl_produtos_compra_tbl_compra1_idx` (`produtos_compra_id_compra`);

--
-- Indexes for table `tbl_tipo`
--
ALTER TABLE `tbl_tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_compra`
--
ALTER TABLE `tbl_compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_estampa`
--
ALTER TABLE `tbl_estampa`
  MODIFY `id_estampa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_estoque`
--
ALTER TABLE `tbl_estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_produtos_compra`
--
ALTER TABLE `tbl_produtos_compra`
  MODIFY `id_produtos_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_tipo`
--
ALTER TABLE `tbl_tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_compra`
--
ALTER TABLE `tbl_compra`
  ADD CONSTRAINT `fk_tbl_compra_tbl_endereco1` FOREIGN KEY (`compra_id_endereco`) REFERENCES `tbl_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_compra_tbl_usuario1` FOREIGN KEY (`compra_id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_endereco`
--
ALTER TABLE `tbl_endereco`
  ADD CONSTRAINT `fk_tbl_endereco_tbl_usuario` FOREIGN KEY (`endereco_id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_estampa`
--
ALTER TABLE `tbl_estampa`
  ADD CONSTRAINT `fk_tbl_estampa_tbl_usuario1` FOREIGN KEY (`estampa_id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_estoque`
--
ALTER TABLE `tbl_estoque`
  ADD CONSTRAINT `fk_tbl_estoque_tbl_tipo1` FOREIGN KEY (`estoque_id_tipo`) REFERENCES `tbl_tipo` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD CONSTRAINT `fk_tbl_produto_tbl_estampa1` FOREIGN KEY (`produto_id_estampa`) REFERENCES `tbl_estampa` (`id_estampa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_produto_tbl_tipo1` FOREIGN KEY (`produto_id_tipo`) REFERENCES `tbl_tipo` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_produtos_compra`
--
ALTER TABLE `tbl_produtos_compra`
  ADD CONSTRAINT `fk_tbl_produtos_compra_tbl_compra1` FOREIGN KEY (`produtos_compra_id_compra`) REFERENCES `tbl_compra` (`id_compra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_produtos_compra_tbl_produto1` FOREIGN KEY (`produtos_compra_id_produto`) REFERENCES `tbl_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `filtro_mais_comprados` (IN `p_num` INT, IN `p_variavel` VARCHAR(60))  BEGIN	
        if p_num = '0' then        
        	if p_variavel = ' ' then
        		select produto_tipo as filtro, sum(comprados) as quantidade from mais_comprados GROUP by filtro order by comprados desc;            
            else
            	select produto_tipo as filtro, sum(comprados) as quantidade from mais_comprados WHERE p_variavel = produto_tipo order by comprados desc;
            end if;            
        end if;       
        
        if p_num = '1' then        
        	if p_variavel = ' ' then
        		select cidade_compra as filtro, sum(comprados) as quantidade from mais_comprados GROUP by filtro order by comprados desc;            
            else
            	select cidade_compra as filtro, sum(comprados) as quantidade from mais_comprados WHERE p_variavel = cidade_compra order by comprados desc;
            end if;            
        end if;        
        
        if p_num = '2' then        
        	if p_variavel = ' ' then
        		select estampa_autor as filtro, sum(comprados) as quantidade from mais_comprados GROUP by filtro order by comprados desc;            
            else
            	select estampa_autor as filtro, sum(comprados) as quantidade from mais_comprados WHERE p_variavel = estampa_autor order by comprados desc;
            end if;            
        end if;        
        
        if p_num = '3' then        
        	if p_variavel = ' ' then
        		select estampa_nome as filtro, sum(comprados) as quantidade from mais_comprados GROUP by filtro order by comprados desc;            
            else
            	select estampa_nome as filtro, sum(comprados) as quantidade from mais_comprados WHERE p_variavel = estampa_nome order by comprados desc;
            end if;            
        end if;     
        
        if p_num = '4' then        
        	if p_variavel = ' ' then
        		select produto_nome as filtro, sum(comprados) as quantidade from mais_comprados GROUP by filtro order by comprados desc;            
            else
            	select produto_nome as filtro, sum(comprados) as quantidade from mais_comprados WHERE p_variavel = produto_nome order by comprados desc;
            end if;            
        end if;
        
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `produtos_nao_comprados` (IN `data_compra` DATE, IN `data_inicio` DATE, IN `data_fim` DATE)  BEGIN

       SELECT
       tbl_produto.nome

        from tbl_produto
        left join tbl_produtos_compra on tbl_produtos_compra.produtos_compra_id_produto=tbl_produto.id_produto
        left join tbl_compra on tbl_compra.id_compra=tbl_produtos_compra.produtos_compra_id_compra
        where status = '2' and
       data_compra BETWEEN data_inicio AND data_fim GROUP by nome;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `rel_mais_comprados` (IN `p_num` INT, IN `data_fim` DATETIME, IN `data_inicio` DATETIME)  BEGIN

        if p_num = '0' then

                select produto_tipo as filtro, sum(comprados) as quantidade from mais_comprados WHERE data_compra BETWEEN data_inicio AND data_fim GROUP by produto_tipo;
        end if;

        if p_num = '1' then

                select cidade_compra as filtro, sum(comprados) as quantidade from mais_comprados WHERE data_compra BETWEEN data_inicio AND data_fim GROUP by cidade_compra;
        end if;

        if p_num = '2' then

                select estampa_autor as filtro, sum(comprados) as quantidade from mais_comprados WHERE data_compra BETWEEN data_inicio AND data_fim GROUP by estampa_autor;
        end if;
        
        if p_num = '3' then

                select estampa_nome as filtro, sum(comprados) as quantidade from mais_comprados WHERE data_compra BETWEEN data_inicio AND data_fim GROUP by estampa_nome;
        end if;
        
        if p_num = '4' then

                select produto_nome as filtro, sum(comprados) as quantidade from mais_comprados WHERE data_compra BETWEEN data_inicio AND data_fim GROUP by produto_nome;
        end if;

END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `comissao_compra` (`p_id_compra` INT) RETURNS DOUBLE BEGIN
    DECLARE comissao DOUBLE; 
    SELECT sum(lucro_bruto_compra(p_id_compra)*0.01*e.comissao) INTO comissao 
    FROM tbl_compra c
    JOIN tbl_produtos_compra pc ON pc.produtos_compra_id_compra = c.id_compra
    JOIN tbl_produto p ON p.id_produto = pc.produtos_compra_id_produto
    JOIN tbl_estampa e ON e.id_estampa = p.produto_id_estampa
    WHERE p_id_compra=c.id_compra;
    RETURN comissao;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `lucro_bruto_compra` (`p_id_compra` INT) RETURNS DOUBLE BEGIN
    DECLARE lucro DOUBLE; 
    SELECT valor_total - frete - valor_prod_total INTO lucro FROM tbl_compra WHERE p_id_compra=id_compra;
    RETURN lucro;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `lucro_liquido_compra` (`p_compra_id` INT) RETURNS DOUBLE(9,2) BEGIN
    DECLARE lucro DOUBLE; 
    SELECT lucro_bruto_compra(p_compra_id)-comissao_compra(p_compra_id) INTO lucro FROM item WHERE pedido_id=p_pedido_id;
    RETURN lucro;
END$$

DELIMITER ;
