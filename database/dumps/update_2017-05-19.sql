ALTER TABLE `fornecedores` ADD `observacoes` TEXT NULL DEFAULT NULL AFTER `nota`;

ALTER TABLE `fornecedores_distribuidores` CHANGE `nota` `nota` DECIMAL(5,2) NULL DEFAULT NULL;