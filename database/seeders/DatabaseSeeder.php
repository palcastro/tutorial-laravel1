<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Palomia',
            'email' => 'palomia@problemas.com',
            'password' => bcrypt('admin1234'),
            'is_admin' => true,
            'is_staff' => true,
        ]);

        Post::factory()->count(50)->create();
    }
}
