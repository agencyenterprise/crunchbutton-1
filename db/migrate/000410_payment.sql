ALTER TABLE payment CHANGE COLUMN `payment_status` `payment_status` enum('pending','failed','succeeded','canceled','reversed') DEFAULT NULL;