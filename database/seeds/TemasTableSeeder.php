<?php

use Illuminate\Database\Seeder;

class TemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temas')->truncate();
        DB::table('temas')->insert(['nombre' => 'Angular']);
		DB::table('temas')->insert(['nombre' => 'MongoDB']);
		DB::table('temas')->insert(['nombre' => 'Node']);
		DB::table('temas')->insert(['nombre' => 'Linux']);
		DB::table('temas')->insert(['nombre' => 'MySQL']);
    }
}
