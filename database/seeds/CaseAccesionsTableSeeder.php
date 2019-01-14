<?php

use Illuminate\Database\Seeder;

class CaseAccesionsTableSeeder extends Seeder
{
    public function run()
    {
        App\CaseAccesion::create
        (
            [
                'product_name' =>'CPU',
                'UOM'=>'pcs',
                'accesion_id' => 1,
                'good_id'=>1  
            ]
        );
    }
}
