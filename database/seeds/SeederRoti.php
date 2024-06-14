<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SeederRoti extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('roti')->insert([
                'nama' => $faker->sentence(2),
                'rasa' => $faker->word(),
                'harga' => $faker->numberBetween(15, 50),
                'stok' => $faker->numberBetween(0, 100),
                'foto' => $faker->sentence()
            ]);
        }
    }
}
