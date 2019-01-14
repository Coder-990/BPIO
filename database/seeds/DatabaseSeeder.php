<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        //u database se samo mora ubaciti migracija tablice koju zelimo pozvati u ovom slucaju su companies
        $this->call(CompaniesTableSeeder::class);
        $this->call(GoodsTableSeeder::class);
        $this->call(AccesionsTableSeeder::class);
        $this->call(DeliveryNoteTableSeeder::class);
        $this->call(CaseAccesionsTableSeeder::class);
        $this->call(CaseDeliveryNoteTableSeeder::class);
        $this->call(ContinentsTableSeeder::class);
    }
}
