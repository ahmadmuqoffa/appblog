<?php

use Phoenix\Database\Element\Index;
use Phoenix\Migration\AbstractMigration;

final class Init extends AbstractMigration
{
    protected function up(): void
    {
        $this->execute('CREATE TABLE `user` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `username` varchar(255) NOT NULL,
            `password` varchar(255) NOT NULL,
            `created_at` datetime NOT NULL,
            `updated_at` datetime NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `idx_user_username` (`username`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;');

        $this->insert('user', [
            [
                'username' => 'affa',
                'password' => '12345',
                'created_at' => date ('Y-m-d'),
            ]
            ]);
    }

    protected function down(): void
    {
        $this->table('user')
            ->drop();
    }
}