<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
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
                'email' => 'super@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->assignRole(RoleEnum::SUPER_ADMIN);

        $user = User::create(
            [
                'name' =>"Admin",
                'full_name' =>"Admin",
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->assignRole(RoleEnum::ADMIN);

        $user = User::create(
            [
                'name' =>"Seeker",
                'full_name' =>"Seeker",
                'email' => 'seeker@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->assignRole(RoleEnum::SEEKER);

        $user = User::create(
            [
                'name' =>"Company",
                'full_name' =>"Company",
                'email' => 'company@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('123456789')
            ]);

        $user->assignRole(RoleEnum::COMPANY);
    }
}
