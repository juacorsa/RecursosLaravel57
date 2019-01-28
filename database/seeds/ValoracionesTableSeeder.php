<?php

use Illuminate\Database\Seeder;

class ValoracionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('valoraciones')->delete();
 		DB::table('valoraciones')->insert(['nombre' => 'Excelente']);        
 		DB::table('valoraciones')->insert(['nombre' => 'Bueno']);        
 		DB::table('valoraciones')->insert(['nombre' => 'Regular']);        
    }
}
