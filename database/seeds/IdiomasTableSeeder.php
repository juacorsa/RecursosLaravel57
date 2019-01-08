<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdiomasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('idiomas')->truncate();
 		DB::table('idiomas')->insert(['nombre' => 'Inglés']);        
 		DB::table('idiomas')->insert(['nombre' => 'Castellano']);        
    }
}
