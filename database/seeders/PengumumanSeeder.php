<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announcements')->insert([
            'user_id' => 1,
            'title' => 'SMK NU Kabat',
            'annoucment_fill' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores itaque facere, iste omnis dolorem iusto amet accusamus nostrum, delectus doloribus laudantium ab ducimus modi harum assumenda corrupti enim non corporis, vel eaque unde dolores excepturi! Animi dolorem quo facilis molestiae vitae quibusdam debitis maiores dignissimos, laborum est magnam aut tempora!',
            'created_at' => now(),
            'updated_at' => now(),
            //admin123
        ]);

        DB::table('announcements')->insert([
            'user_id' => 1,
            'title' => 'SMK NU Kabat1',
            'annoucment_fill' => 'Maiores itaque facere, iste omnis dolorem iusto amet accusamus nostrum, delectus doloribus laudantium ab ducimus modi harum assumenda corrupti enim non corporis, vel eaque unde dolores excepturi! Animi dolorem quo facilis molestiae vitae quibusdam debitis maiores dignissimos, laborum est magnam aut tempora!',
            'created_at' => now(),
            'updated_at' => now(),
            //admin123
        ]);
    
    }
}
