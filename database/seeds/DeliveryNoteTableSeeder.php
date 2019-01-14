<?php

use Illuminate\Database\Seeder;

class DeliveryNoteTableSeeder extends Seeder
{
    public function run()
    {
        App\DeliveryNote::create
        (
            [
                'company_id'=>1,
                'delivery_note_date'=>'2018-01-01'
            ]
        );
    }


}

