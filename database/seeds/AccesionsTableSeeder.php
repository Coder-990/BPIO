<?php

use Illuminate\Database\Seeder;

class AccesionsTableSeeder extends Seeder
{
    public function run()
    {
        App\Accesion::create
        (
            [
                'company_id'=>1,
                'accesion_date'=>'2018-01-01'
            ]
        );
    }


}