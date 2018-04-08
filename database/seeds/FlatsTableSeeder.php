<?php

use Illuminate\Database\Seeder;

class FlatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {

            DB::table('flats')->insert([
                'flat_number' => mt_rand(001, 999),
                'block' => mt_rand(1,5),
                'owner_name' => $faker->name,
                'members' => mt_rand(1, 20),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'status' => 'Active',
                'remark' => $faker->paragraph,
            ]);


        }


    }
}
