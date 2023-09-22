<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'nip' => '38470983787',
            'nik' => 36476876927,
            'name' => 'imam sahroni',
            'address' => 'kabat',
            'departemen' => 'matematika',
            'email' => 'imamSahroni@gmail.com',
            'phone_number' => '08176876565',
            'joint_date' => '2020-09-02',
            'created_at' => now(),
            'updated_at' => now(),
            //admin123
        ]);

    }
}
