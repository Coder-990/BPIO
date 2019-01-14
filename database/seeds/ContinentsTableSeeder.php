<?php

use Illuminate\Database\Seeder;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::create([
            'name' => 'HR',
            'number_of_countries' => 1,
            'native_name'=>'unknown'
        ]);
    }
}
