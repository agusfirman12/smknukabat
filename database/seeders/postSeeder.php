<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'SMK NU Kabat',
            'slug' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod voluptatem fugit omnis. Nam, temporibus est!',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit...',
            'post_fill' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores itaque facere, iste omnis dolorem iusto amet accusamus nostrum, delectus doloribus laudantium ab ducimus modi harum assumenda corrupti enim non corporis, vel eaque unde dolores excepturi! Animi dolorem quo facilis molestiae vitae quibusdam debitis maiores dignissimos, laborum est magnam aut tempora!',
            'created_at' => now(),
            'updated_at' => now(),
            //admin123
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => 'SMK NU Kabat',
            'slug' => 'amet consectetur adipisicing elit. Quod voluptatem fugit omnis. Nam, temporibus est!',
            'excerpt' => 'Maiores itaque facere, iste omnis dolorem iusto amet accusamus nostrum, delectus doloribus laudantium...',
            'post_fill' => 'Maiores itaque facere, iste omnis dolorem iusto amet accusamus nostrum, delectus doloribus laudantium ab ducimus modi harum assumenda corrupti enim non corporis, vel eaque unde dolores excepturi! Animi dolorem quo facilis molestiae vitae quibusdam debitis maiores dignissimos, laborum est magnam aut tempora!',
            'created_at' => now(),
            'updated_at' => now(),
            //admin123
        ]);
    
    }
}
