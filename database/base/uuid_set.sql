ALTER TABLE `wp81_sq_health` ADD COLUMN id CHAR(36);
UPDATE `wp81_sq_health` SET id = UUID();