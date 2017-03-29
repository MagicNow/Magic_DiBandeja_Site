ALTER TABLE `fornecedores` ADD `nota` INT NOT NULL DEFAULT '0' AFTER `imagem`;

CREATE TABLE `distribuidores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `delivery` enum('sim','não') NOT NULL DEFAULT 'sim',
  `venda_online` enum('sim','não') NOT NULL DEFAULT 'sim',
  `nota` int(2) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `distribuidores`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `distribuidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE `fornecedores_distribuidores` (
  `fornecedor_id` int(11) DEFAULT NULL,
  `distribuidor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `fornecedores_distribuidores`
  ADD KEY `fd_distribuidor_id` (`fornecedor_id`);

ALTER TABLE `fornecedores_distribuidores`
  ADD CONSTRAINT `fd_distribuidor_id` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`),
  ADD CONSTRAINT `fd_fornecedor_id` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`);