<?php

use Illuminate\Database\Seeder;

class CaseDeliveryNoteTableSeeder extends Seeder
{
    public function run()
    {
        App\CaseDeliveryNote::create
        (
            [
                'product_name' =>'CPU',
                'UOM'=>'pcs',
                'delivery_note_id' => 1,
                'good_id'=>1  
            ]
        );
    }
}
