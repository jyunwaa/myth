<?php

namespace Database\Seeders;

use App\Models\Role\Role;
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
        Role::factory()->count(50)->create();
    }
}
