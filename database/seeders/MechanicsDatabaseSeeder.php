<?php

namespace Database\Seeders;

use App\Models\Mechanics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MechanicsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mechanicsData = [
            [
                'name' =>'Медицина',
                'description' =>'Сценарий подразумевающий использование медицины'
            ],
            [
                'name' =>'Инженерка',
                'description' =>'Сценарий разрешаюший использование инженерной подготовки'
            ],
            [
                'name' =>'Техника для ротации',
                'description' =>'Орагнизаторами предоставляется техника для ротации по полигону'
            ],
            [
                'name' =>'Военная техника',
                'description' =>'Орагнизаторами предоставляется военная техника для антуража и силовой поддержки'
            ],
            [
                'name' =>'Военная техника',
                'description' =>'Орагнизаторами предоставляется военная техника для антуража и силовой поддержки'
            ]
            ];
            foreach ($mechanicsData as $mechanics) {
                Mechanics::firstOrCreate([
                    'name'=> $mechanics['name'],
                    'description'=> $mechanics['description']
                ]);
            }
    }
}
