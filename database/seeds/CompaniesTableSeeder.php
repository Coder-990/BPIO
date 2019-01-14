<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    public function run()
    {
        //u seeder mora ici model znaci ne pisem companies nego company
        App\Company::create
        (
            [
                'company_name'=>'Acceleration',
                'PINcompany'=>'12345678910'
            ]
        );

        App\Company::create
         (
            [
                'company_name'=>'Microbyte',
                'PINcompany'=>'78910145875'
            ]);
        
        App\Company::create
         (
            [
                'company_name'=>'Lazarus',
                'PINcompany'=>'75875586125'
            ]
        );

        App\Company::create
        (
            [
               'company_name'=>'Tecfoot',
               'PINcompany'=>'05861255748'
           ]
        );
    }
}
