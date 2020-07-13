<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class barangStore extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 650; $i++){
            $name = $faker->name;
            DB::table('stores')->insert([
            'id' => uuid::uuid4(),
              'lapak_id' => 'be8dab14-31b7-47a3-8bc4-63fa5c89330b',
              'namaBarang' => $name,
              'kategori' => 'Makanan',
              'harga' => $faker->numberBetween(2000,7000),
              'bobot' => $faker->numberBetween(1,50),
              'volume' => 'Gram',
              'kondisi' => 'Baru',
              'deskripsi' => 'lorem ipsum danl lain-lain sesuai dengan deskripsi barang barang yang di dagangkan',
              'url' => str::slug($name),
             ]);
        }
    }
}
