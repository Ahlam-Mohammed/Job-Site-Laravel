<?php

namespace Database\Seeders;

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
        Role::create([ 'name' => 'SUPER_ADMIN' ]);

        Role::create([ 'name' => 'ADMIN' ]);

        Role::create([ 'name' => 'SEEKER' ]);

        Role::create([ 'name' => 'COMPANY' ]);
    }
}
