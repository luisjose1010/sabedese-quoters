ALTER TABLE `wp81_sq_health` ADD PRIMARY KEY(`id`);
ALTER TABLE `wp81_sq_health` ADD INDEX(`index`, `company`, `age`, `insured_sum`, `type`);