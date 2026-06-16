<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
        
        DB::table('teachers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'João Dumba',
                'email' => 'joaodumba@gmail.com',
                'phone' => '99944455',
                'address' => 'Bairro luanda',
                'entries_date' => '2026-06-09',
                'photo' => NULL,
                'qualification' => 'Técnico Médio',
                'deleted_at' => '2026-06-09 10:23:56',
                'created_at' => '2026-06-09 10:20:02',
                'updated_at' => '2026-06-09 10:23:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'João Dumba',
                'email' => 'joaodumba1@gmail.com',
                'phone' => '99944455',
                'address' => 'Bairro luanda',
                'entries_date' => '2026-06-09',
                'photo' => NULL,
                'qualification' => 'Técnico Médio',
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:20:15',
                'updated_at' => '2026-06-09 10:20:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Antonio Lombongo',
                'email' => 'antonio@gmail.com',
                'phone' => '987654321',
                'address' => 'Bairro São Paulo',
                'entries_date' => '2026-06-09',
                'photo' => 'public/teachers/1780996983_foto de perfil.jpg',
                'qualification' => 'Técnico Médio',
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:23:03',
                'updated_at' => '2026-06-09 10:40:09',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mateus Muhongo',
                'email' => 'mateus@gmail.com',
                'phone' => NULL,
                'address' => 'Bairro São Paulo',
                'entries_date' => '2026-06-09',
                'photo' => NULL,
                'qualification' => 'Engenheiro',
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:34:05',
                'updated_at' => '2026-06-09 10:34:05',
            ),
        ));
    }
}
