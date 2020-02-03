<?php

use Illuminate\Database\Seeder;

class PruebasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<10;$i++){
            DB::table('pruebas')->insert([
                'nombre' => $faker->realText(50,4),
                'titulo' => $faker->realText(50,4),
                'subtitulo' => $faker->realText(50,4),
                'telefono' => $faker->phoneNumber
            ]);
        }

    }
}
