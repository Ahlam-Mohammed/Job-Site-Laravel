<?php

namespace Database\Seeders;

use App\Enum\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([ 'name' => RoleEnum::SUPER_ADMIN ]);

        Role::create([ 'name' => RoleEnum::ADMIN ]);

        Role::create([ 'name' => RoleEnum::SEEKER ]);

        Role::create([ 'name' => RoleEnum::COMPANY ]);
    }
}
