<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => '$2y$10$cDXqF/1UCAg5XExiuJy.B.7XYDJSpV2ekMlxgBiafqICeQPyKs1Ai', // 12345678
        ]);
    }
}
