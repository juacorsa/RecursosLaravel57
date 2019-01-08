<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IdiomasTableSeeder::class);
        $this->call(TemasTableSeeder::class);
        $this->call(ValoracionesTableSeeder::class);
        $this->call(EditorialesTableSeeder::class);
        $this->call(FabricantesTableSeeder::class);
    }
}
