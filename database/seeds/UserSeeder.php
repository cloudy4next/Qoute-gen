<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\User');
        DB::table('users')->insert([
        'name' => $faker->name(),
        'email' => "kkdestiny@gmail.com",
        'password' => Hash::make("kkdestiny@gmail.com"),
        ]);
    }
}
