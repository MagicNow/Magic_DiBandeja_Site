ALTER TABLE `cardapios` ADD CONSTRAINT `fk_cardapios_tipo_cardapio` FOREIGN KEY (`tipo_cardapio_id`) REFERENCES `tipo_cardapios`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cardapios` ADD CONSTRAINT `fk_cardapios_periodo_id` FOREIGN KEY (`periodo_id`) REFERENCES `periodos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cardapios` DROP `data`;

ALTER TABLE `cardapios` ADD `created_at` DATETIME NULL DEFAULT NULL AFTER `show_ingredientes`, ADD `updated_at` DATETIME NULL DEFAULT NULL AFTER `created_at`;

ALTER TABLE `cardapios_momentos` ADD CONSTRAINT `fk_cardapios_momentos_momento_id` FOREIGN KEY (`momento_id`) REFERENCES `momentos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `cardapios_momentos` ADD CONSTRAINT `fk_cardapios_momentos_cardapio_id` FOREIGN KEY (`cardapio_id`) REFERENCES `cardapios`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cliente_cardapios` ADD  CONSTRAINT `fk_clientes_cardapios_cardapio_id` FOREIGN KEY (`cardapio_id`) REFERENCES `cardapios`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `cliente_cardapios` ADD  CONSTRAINT `fk_clientes_cardapios_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `clientes_site`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `cardapios_ocasiaos` ADD CONSTRAINT `fk_cardapios_ocasiaos_ocasiao_id` FOREIGN KEY (`ocasiao_id`) REFERENCES `ocasiaos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `cardapios_ocasiaos` ADD CONSTRAINT `fk_cardapios_ocasiaos_cardapio_id` FOREIGN KEY (`cardapio_id`) REFERENCES `cardapios`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

DELETE FROM receitas_ingredientes WHERE id NOT IN (SELECT riid from (SELECT ri.id AS "riid" FROM `receitas_ingredientes` ri JOIN receitas r ON r.id = ri.receita_id) AS rifrom);
DELETE FROM receitas_ingredientes WHERE id NOT IN (SELECT riid FROM (SELECT ri.id AS "riid" FROM `receitas_ingredientes` ri JOIN unidades u ON u.id = ri.unidade_id) AS rifrom);
ALTER TABLE `receitas_ingredientes` ADD  CONSTRAINT `fk_receitas_ingredientes_receita_id` FOREIGN KEY (`receita_id`) REFERENCES `receitas`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `receitas_ingredientes` ADD CONSTRAINT `fk_receitas_ingredientes_ingrediente_id` FOREIGN KEY (`ingrediente_id`) REFERENCES `ingredientes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `receitas_ingredientes` ADD CONSTRAINT `fk_receitas_ingredientes_unidade_id` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;