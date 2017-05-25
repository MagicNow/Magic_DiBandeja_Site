RENAME TABLE `ocasiaos` TO `ocasioes`;
RENAME TABLE `cardapios_ocasiaos` TO `dibandeja`.`cardapios_ocasioes`;
RENAME TABLE `dibandeja`.`ocasiaos_receitas` TO `dibandeja`.`ocasioes_receitas`;

DELETE FROM ocasioes_receitas WHERE ocasiao_id NOT IN (SELECT riid FROM (SELECT ore.ocasiao_id AS "riid" FROM `ocasioes_receitas` ore JOIN ocasioes o ON o.id = ore.ocasiao_id) AS orefrom);
DELETE FROM ocasioes_receitas WHERE receita_id NOT IN (SELECT riid FROM (SELECT ore.receita_id AS "riid" FROM `ocasioes_receitas` ore JOIN ocasioes o ON o.id = ore.ocasiao_id) AS orefrom)
ALTER TABLE `ocasioes_receitas` ADD  CONSTRAINT `fk_ocasioes_receitas_ocasioes_id` FOREIGN KEY (`ocasiao_id`) REFERENCES `ocasioes`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `ocasioes_receitas` ADD CONSTRAINT `fk_ocasioes_receitas_receita_id` FOREIGN KEY (`receita_id`) REFERENCES `receitas`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `receita_cardapios` ADD CONSTRAINT `fk_receitas_cardapios_receita_id` FOREIGN KEY (`receita_id`) REFERENCES `receitas`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `receita_cardapios` ADD CONSTRAINT `fk_receitas_cardapios_cardapios_id` FOREIGN KEY (`cardapio_id`) REFERENCES `cardapios`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `receitas` ADD `propriedades_nutricionais` VARCHAR(255) NULL DEFAULT NULL AFTER `preparo`,
					   ADD `qualificacao` VARCHAR(255) NULL DEFAULT NULL AFTER `propriedades_nutricionais`,
					   ADD `beneficios` VARCHAR(255) NULL DEFAULT NULL AFTER `qualificacao`,
					   ADD `tempo` INT NULL DEFAULT NULL AFTER `beneficios`,
					   ADD `dificuldade` INT NULL DEFAULT NULL AFTER `tempo`,
					   ADD `porcoes` VARCHAR(100) NULL DEFAULT NULL AFTER `dificuldade`,
					   ADD `conservacao` VARCHAR(255) NULL DEFAULT NULL AFTER `porcoes`,
					   ADD `calorias` INT NULL DEFAULT NULL AFTER `conservacao`,
					   ADD `custo` DECIMAL(5,2) NULL DEFAULT NULL AFTER `calorias`,
					   ADD `parceiro` VARCHAR(100) NULL DEFAULT NULL AFTER `custo`,
					   ADD `ranking_dibandeja` INT(11) NULL DEFAULT NULL AFTER `parceiro`,
					   ADD `ranking_parceiros` INT NULL DEFAULT NULL AFTER `ranking_dibandeja`,
					   ADD `ranking_clientes` INT NULL DEFAULT NULL AFTER `ranking_parceiros`,
					   ADD `sazonalidade_inicial` DATE NULL DEFAULT NULL AFTER `ranking_clientes`,
					   ADD `sazonalidade_final` DATE NULL DEFAULT NULL AFTER `sazonalidade_inicial`;

CREATE TABLE `categorias` ( `id` INT NULL DEFAULT NULL AUTO_INCREMENT , `nome` VARCHAR(255) NULL DEFAULT NULL , `image` VARCHAR(255) NULL DEFAULT NULL , PRIMARY KEY  (`id`)) ENGINE = InnoDB;
INSERT INTO `categorias` (`id`, `nome`, `image`) VALUES (NULL, 'Receitas Clássicas', NULL), (NULL, 'Receitas com Abacate', NULL), (NULL, 'Rceeitas com Abacaxi', NULL), (NULL, 'Receitas com Abóbora', NULL), (NULL, 'Receitas com Aveia', NULL), (NULL, 'Receitas com Bacon', NULL), (NULL, 'Receitas com Banana', NULL), (NULL, 'Receitas com Chocolate', NULL), (NULL, 'Receitas com Nutella', NULL), (NULL, 'Receitas com Ovo', NULL), (NULL, 'Receitas de Abobrinha', NULL), (NULL, 'Receitas de Almôndega', NULL), (NULL, 'Receitas de Aperitivos', NULL);

CREATE TABLE `receitas_categorias` ( `receitas_id` INT NULL DEFAULT NULL , `categorias_id` INT NULL DEFAULT NULL ) ENGINE = InnoDB;
ALTER TABLE `receitas` DROP `categoria`;

ALTER TABLE `receitas_categorias` ADD `created_at` DATETIME NULL DEFAULT NULL AFTER `categorias_id`, ADD `updated_at` DATETIME NULL DEFAULT NULL AFTER `created_at`;
ALTER TABLE `receitas_categorias` ADD CONSTRAINT `fk_receitas_categorias_receita_id` FOREIGN KEY (`receitas_id`) REFERENCES `receitas`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `receitas_categorias` ADD CONSTRAINT `fk_receitas_categorias_categorias_id` FOREIGN KEY (`categorias_id`) REFERENCES `categorias`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `clientes` ADD CONSTRAINT `clientes_sexos_id` FOREIGN KEY (`sexo_id`) REFERENCES `sexos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `clientes` ADD CONSTRAINT `clientes_estado_civil_id` FOREIGN KEY (`estadoCivil_id`) REFERENCES `estado_civils`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cardapios` ADD `clientes_id` INT(11) NULL DEFAULT NULL AFTER `show_ingredientes`;
ALTER TABLE `cardapios` ADD CONSTRAINT `fk_cardapios_clientes_id` FOREIGN KEY (`clientes_id`) REFERENCES `clientes`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cardapios` DROP `show_fornecedores`, DROP `show_receitas`, DROP `show_ingredientes`;