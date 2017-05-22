ALTER TABLE `fornecedores` ADD `observacoes` TEXT NULL DEFAULT NULL AFTER `nota`;

ALTER TABLE `fornecedores_distribuidores` CHANGE `nota` `nota` DECIMAL(5,2) NULL DEFAULT NULL;

ALTER TABLE `receitas` CHANGE `	ranking_dibandeja` `	ranking_dibandeja` DECIMAL(5,2) NULL DEFAULT NULL;
ALTER TABLE `receitas` CHANGE `	ranking_clientes` `	ranking_clientes` DECIMAL(5,2) NULL DEFAULT NULL;
ALTER TABLE `receitas` CHANGE `ranking_parceiros` `ranking_parceiros` DECIMAL(5,2) NULL DEFAULT NULL;
