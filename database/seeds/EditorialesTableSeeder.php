<?php

use Illuminate\Database\Seeder;

class EditorialesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoriales')->delete();
		DB::table('editoriales')->insert(['nombre' => 'Apress']);                
		DB::table('editoriales')->insert(['nombre' => 'Wrox']);                
		DB::table('editoriales')->insert(['nombre' => 'Oreilly']);                
		DB::table('editoriales')->insert(['nombre' => 'Packt']);                
		DB::table('editoriales')->insert(['nombre' => 'Wiley']);                
    }
}
