<?php

declare(strict_types=1);

use Phoenix\Migration\AbstractMigration;

final class AddTablePost extends AbstractMigration
{
    protected function up(): void
    {
        $this->execute('CREATE TABLE `post` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `title` varchar(255) NOT NULL,
            `article` text NOT NULL,
            `created_at` datetime NOT NULL,
            `updated_at` datetime NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;');
    }

    protected function down(): void
    {
        $this->table('post')
            ->drop();
    }
}
