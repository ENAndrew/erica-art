<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("
        	INSERT INTO
        		`user_roles` (`id`, `slug`, `name`, `created_at`, `updated_at`)
        	VALUES
        		(1, 'admin', 'Admin', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
        		(2, 'guest', 'Guest', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)
        	ON DUPLICATE KEY UPDATE
        		`slug` = VALUES(`slug`),
        		`name` = VALUES(`name`),
        		`updated_at` = VALUES(`updated_at`);
        ");
    }
}
