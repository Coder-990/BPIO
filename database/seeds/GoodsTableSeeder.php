<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    
    public function run()
    {
        App\Good::create
        (
            [
                'product_name'=>'CPU_AMD_X2A4_4020',
                'amount'=>'10',
                'price'=>215.00,
                'describe'=>'3.2Ghz Socket FM2 procesor',
                'UOM'=>'pcs'

            ]);

        App\Good::create
        (
            [
                'product_name'=>'CPU_AMDA6_9500',
                'amount'=>'10',
                'price'=>393.00,
                'describe'=>'3.5Ghz , 2 Threads 2 cores Socket AM4',
                'UOM'=>'pcs'
            ]
        );

        App\Good::create
        (
            [
                'product_name'=>'CPU_AMDx4FX_4300',
                'amount'=>'10',
                'price'=>425.00,
                'describe'=>'Vishera 4 Core, 4 Thread, Clock:3.8GHZ',
                'UOM'=>'pcs'
            ]
        );  
            
        App\Good::create
        (
            [
                'product_name'=>'CPU_AMDx4A8_7650K',
                'amount'=>'10',
                'price'=>599.00,
                'describe'=>'4 Core, 4 Thread, Clock:3.3 GHZ',
                'UOM'=>'pcs'
            ]
        );  

        App\Good::create
        (
            [
                'product_name'=>'CPU_AMDa10_9700',
                'amount'=>'10',
                'price'=>660.00,
                'describe'=>'4 Core, 4 Thread, Clock 3.5 GHZ',
                'UOM'=>'pcs'
            ]
        );  
    }
}
