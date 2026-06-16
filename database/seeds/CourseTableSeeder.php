<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        
        DB::table('courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Electricidade Industrial',
                'slug' => 'electricidade-industrial',
                'description' => NULL,
                'image' => 'courses/1780996073_electricidade industrial - imagem.jfif',
                'price' => '5000.00',
                'status' => 'published',
                'duration' => '150 horas',
                'level' => 'intermediate',
                'category_id' => 2,
                'teacher_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:05:06',
                'updated_at' => '2026-06-09 10:32:48',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Python',
                'slug' => 'python',
                'description' => 'O conteúdo do curso prepara o aluno desde os fundamentos básicos até a resolução de problemas complexos, automação de tarefas, inteligência artificial, ciência de dados e desenvolvimento web.',
                'image' => 'courses/1780996382_python - imagem.jfif',
                'price' => '3200.00',
                'status' => 'published',
                'duration' => '15 horas',
                'level' => 'intermediate',
                'category_id' => 6,
                'teacher_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:09:20',
                'updated_at' => '2026-06-09 10:31:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Contabilidade e Gestão',
                'slug' => 'contabilidade-e-gestao',
                'description' => NULL,
                'image' => NULL,
                'price' => '5000.00',
                'status' => 'published',
                'duration' => '35 horas',
                'level' => 'advanced',
                'category_id' => 4,
                'teacher_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:14:25',
                'updated_at' => '2026-06-09 10:29:49',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Manicure e Pedicure',
                'slug' => 'manicure-e-pedicure',
                'description' => 'Se você estiver buscando dicas sobre rotinas de cuidados, estilo pessoal, ou até mesmo procurando algum salão de beleza ou estética na sua área aqui em Luanda, eu posso te indicar as melhores opções.',
                'image' => 'courses/1781010265_manicure.jpg',
                'price' => '5000.00',
                'status' => 'published',
                'duration' => '10 horas',
                'level' => 'advanced',
                'category_id' => 4,
                'teacher_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:17:45',
                'updated_at' => '2026-06-09 14:04:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bobinagem de Motores',
                'slug' => 'bobinagem-de-motores',
            'description' => 'A blindagem automotiva foca essencialmente na cabine (portas, vidros e teto). A "blindagem de motor" não existe literalmente, pois partes móveis não podem ser enrijecidas sem travar o veículo. O que é feito são proteções balísticas para o cofre do motor.',
                'image' => 'courses/1781010454_motor.jpeg',
                'price' => '125000.00',
                'status' => 'published',
                'duration' => NULL,
                'level' => 'advanced',
                'category_id' => 3,
                'teacher_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:42:28',
                'updated_at' => '2026-06-09 14:07:34',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Controladores lógicos Programáveis - plc',
                'slug' => 'controladores-logicos-programaveis-plc',
                'description' => NULL,
                'image' => 'courses/1780999398_plc - imagem.jpg',
                'price' => '300000.00',
                'status' => 'published',
                'duration' => '240 horas',
                'level' => 'advanced',
                'category_id' => 2,
                'teacher_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:44:20',
                'updated_at' => '2026-06-09 11:03:19',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'JavasCript',
                'slug' => 'javascript',
                'description' => NULL,
                'image' => NULL,
                'price' => '125000.00',
                'status' => 'published',
                'duration' => '30 horas',
                'level' => 'beginner',
                'category_id' => 6,
                'teacher_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:45:20',
                'updated_at' => '2026-06-09 10:45:20',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Excel',
                'slug' => 'excel',
                'description' => NULL,
                'image' => NULL,
                'price' => '5000.00',
                'status' => 'published',
                'duration' => '30 horas',
                'level' => 'beginner',
                'category_id' => 5,
                'teacher_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:46:19',
                'updated_at' => '2026-06-09 10:46:37',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Finanças',
                'slug' => 'financas',
                'description' => NULL,
                'image' => 'courses/1780999721_financas - imagem.jfif',
                'price' => '5000.00',
                'status' => 'published',
                'duration' => '10 horas',
                'level' => 'advanced',
                'category_id' => 5,
                'teacher_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:47:25',
                'updated_at' => '2026-06-09 11:08:41',
            ),
        ));
    }
}
