<?php

namespace Database\Seeders;

use App\Models\User;
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
        // usuario por defecto
        User::create([
            'name' => 'Lucia',
            'email' => 'cmvivancoc@gmail.com',
            'lastname' => 'Flores',
            'address' => 'Av. Napo y bobonaza',
            'birthday' => now(),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'password' => bcrypt('contra1234')
        ]);
    }
}
