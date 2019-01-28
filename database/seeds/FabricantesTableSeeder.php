<?php

use Illuminate\Database\Seeder;

class FabricantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fabricantes')->delete();
    	DB::table('fabricantes')->insert(['nombre' => 'Pluralsight']);
		DB::table('fabricantes')->insert(['nombre' => 'Udemy']);
		DB::table('fabricantes')->insert(['nombre' => 'Mosh Hamedani']);
		DB::table('fabricantes')->insert(['nombre' => 'Maximilian Schwarzmüller']);
		DB::table('fabricantes')->insert(['nombre' => 'Lynda']);
    }
}
