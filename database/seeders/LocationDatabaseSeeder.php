<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locationData=[
            [
                'name'=>'Кониярви',
                'coordX'=>'60.316305',
                'coordY'=>'29.371934',
                'adress'=>'Полянское сельское поселение, Выборгский район, Ленинградская область',
                'description'=>' большой открытый полигон. с дорогами и укреплениями'
            ],
            [
                'name'=>'Первый',
                'coordX'=>'60.160969',
                'coordY'=>'29.918538',
                'adress'=>'Лесная улица, 24, посёлок Солнечное, Курортный район, Санкт-Петербург',
                'description'=>'Смешанный открытый полигон с большим количеством зданий '
            ],
            [
                'name'=>'Офис',
                'coordX'=>'59.875799',
                'coordY'=>'30.346815',
                'adress'=>'Витебский проспект, 11Н, Санкт-Петербург, 196105',
                'description'=>'Закрытый SQB 3х этажный полигон с лестницами'
            ]
        ];
        foreach( $locationData as $location){
            Location::firstOrCreate([
                'name'=>$location['name'],
                'coordX'=>$location['coordX'],
                'coordY'=>$location['coordY'],
                'adress'=>$location['adress'],
                'description'=>$location['description']
            ]);
        }

    }
}
