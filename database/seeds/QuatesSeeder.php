<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class QuatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Models\Quotes');
        for($i = 1 ; $i <= 100 ; $i++){
        	DB::table('quotes')->insert([
        	'name' => $faker->name(),
        	'quotes' => $faker->sentence(),
        	'created_at' => \Carbon\Carbon::now(),
        	'Updated_at' => \Carbon\Carbon::now(),
        ]);


    }
}

}