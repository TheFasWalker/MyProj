<?php

namespace Database\Seeders;

use App\Models\Organizer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizatorDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $organizers=[
            [
                'orgGroupName'=>'ТАИ',
                'orgGroupLink'=>'https://taipoligon.ru/',
                'orgName'=>'Шэф',
                'orgLink'=>'https://vk.com/mckupaev',
                'orgphoto'=>'https://sun9-23.userapi.com/IP03XbMx_XaLu45UAznH2SmcS1BPRzABotiSfg/8FkeKbDfE3w.jpg',
                'description'=>'На наших мероприятиях мы строго следим за соблюдением Техники Безопасности, игровых правил, а также заботимся о безопасности и комфорте наших клиентов! Подтверждением стало получение статуса "Повышенный Уровень Безопасности" от СПб ГБУ «Центр развития и поддержки предпринимательства».'
            ],
        ];
        foreach( $organizers as $organizer){
            Organizer::firstOrCreate([

                'org_group_name'=>$organizer['orgGroupName'],
                'org_group_link'=>$organizer['orgGroupLink'],
                'org_name'=>$organizer['orgName'],
                'org_link'=>$organizer['orgLink'],
                'org_group_photo'=>$organizer['orgphoto'],
                'description'=>$organizer['description']
            ]);
        }
    }
}
