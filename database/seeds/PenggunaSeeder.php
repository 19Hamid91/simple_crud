<?php

use App\pengguna;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('id_ID');

        for($i = 1; $i < 5; $i++){

            $pengguna = [
                [
                    'nama' => $faker->firstName,
                    'alamat' => $faker->address,
                    'telpon' => $faker->numerify('############'),
                    'tgl_lahir' =>$faker->dateTimeBetween('1990-01-01', '2012-12-31')->format('Y-m-d'),
                    'asal_sekolah' => 'polines'
                ]
            ];
            pengguna::insert($pengguna);
        }
    }
}
