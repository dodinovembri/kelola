# Users
```sql
CREATE TABLE users (
	`id` VARCHAR(36) NOT NULL,
	`name` VARCHAR(255) NULL,
	`email` VARCHAR(255) NULL,
    `email_verified_at` TIMESTAMP NULL,
    `password` VARCHAR(255) NULL,
    `remember_token` VARCHAR(100) NULL,
    `google_id` VARCHAR(255) NULL,
    `created_at` TIMESTAMP NULL,
    `updated_at` TIMESTAMP NULL,
    `creator_id` VARCHAR(36) NOT NULL,
    `updater_id` VARCHAR(36) NOT NULL,
	PRIMARY KEY (`id`)
);
```