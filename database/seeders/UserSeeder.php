<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' =>"superAdmin",
                'full_name' =>"superAdmin",
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->assignRole('SUPER_ADMIN');
    }
}
