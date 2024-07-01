<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(User::find('admin@admin.admin')){
            User::firstOrCreate([
                'name'=>'admin',
                'email'=>'admin@admin.admin',
                'password' => bcrypt('123456789')
            ]);
        };

    }
}
