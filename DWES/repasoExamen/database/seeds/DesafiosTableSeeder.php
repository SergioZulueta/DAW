<?php

use Illuminate\Database\Seeder;

class DesafiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0;$i<50;$i++){
            DB::table('desafios')->insert([
                'nombre' => $faker->realText(50,4),
                'fecha' => $faker->date("Y-m-d"),
                'prueba_id' => $faker->numberBetween(1,10)
            ]);
        }
    }
}
