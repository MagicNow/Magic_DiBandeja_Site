CREATE TABLE `dibandeja`.`dias_semana` ( `id` INT NULL , `nome` VARCHAR(50) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
ALTER TABLE `dias_semana` CHANGE `id` `id` INT(11) NULL DEFAULT NULL AUTO_INCREMENT;
INSERT INTO `dias_semana` (`id`, `nome`) VALUES (NULL, 'Domingo'), (NULL, 'Segunda-feira'), (NULL, 'Terça-feira'), (NULL, 'Quarta-feira'), (NULL, 'Quinta-feira'), (NULL, 'Sexta-feira'), (NULL, 'Sábado');

CREATE TABLE `refeicoes` (`id` int(11) NOT NULL, `nome` varchar(100) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `refeicoes` (`id`, `nome`) VALUES (1, 'Café da manhã'), (2, 'Lanche da manhã'), (3, 'Almoço'), (4, 'Jantar'), (5, 'Lanche da noite');
ALTER TABLE `refeicoes` ADD PRIMARY KEY (`id`);
ALTER TABLE `refeicoes` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `receita_cardapios` CHANGE `refeicao` `refeicao_id` INT(11) NULL DEFAULT NULL;
ALTER TABLE `receita_cardapios` ADD CONSTRAINT `fk_receitas_cardapios_refeicao_id` FOREIGN KEY (`refeicao_id`) REFERENCES `refeicoes`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `parceiros` ADD `image` VARCHAR(255) NULL AFTER `complemento`;

CREATE TABLE `receitas_parceiros` (
  `receitas_id` int(11) DEFAULT NULL,
  `parceiros_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `receitas_parceiros`
  ADD KEY `fk_receitas_parceiros_parceiros_id` (`parceiros_id`),
  ADD KEY `fk_receitas_parceiros_receitas_id` (`receitas_id`);
ALTER TABLE `receitas_parceiros`
  ADD CONSTRAINT `fk_receitas_parceiros_parceiros_id` FOREIGN KEY (`parceiros_id`) REFERENCES `parceiros` (`id`),
  ADD CONSTRAINT `fk_receitas_parceiros_receitas_id` FOREIGN KEY (`receitas_id`) REFERENCES `receitas` (`id`);