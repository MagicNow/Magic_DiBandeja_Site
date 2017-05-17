CREATE TABLE `ingredientes_historico_revisao` (
  `id` int(11) NOT NULL,
  `descricao` text,
  `ingredientes_id` int(11) DEFAULT NULL,
  `clientes_site_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Status: Aprovado (1), Reprovado (2)' ROW_FORMAT=COMPACT;

ALTER TABLE `ingredientes_historico_revisao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredientes_historico_fk` (`ingredientes_id`),
  ADD KEY `ingredientes_historico_cliente_id` (`clientes_site_id`);


ALTER TABLE `ingredientes_historico_revisao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `ingredientes_historico_revisao`
  ADD CONSTRAINT `ingredientes_historico_cliente_id` FOREIGN KEY (`clientes_site_id`) REFERENCES `clientes_site` (`id`),
  ADD CONSTRAINT `ingredientes_historico_fk` FOREIGN KEY (`ingredientes_id`) REFERENCES `ingredientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;