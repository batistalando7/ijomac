<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        
        DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Politica',
                'description' => NULL,
                'deleted_at' => '2026-06-09 09:59:41',
                'created_at' => '2025-11-04 10:32:05',
                'updated_at' => '2026-06-09 09:59:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Energia, Automação e Sistemas Elétricos',
                'description' => 'Capacita profissionais para projetar, operar e otimizar sistemas de geração, transmissão e distribuição de energia.',
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:55:45',
                'updated_at' => '2026-06-09 09:59:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Máquinas e Motores',
                'description' => 'Capacita profissionais para projetar, operar, diagnosticar e realizar manutenção em sistemas mecânicos e termodinâmicos.',
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:56:02',
                'updated_at' => '2026-06-09 09:58:14',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Beleza e Estética',
                'description' => 'Os cursos de Beleza e Estética preparam profissionais para atuar com cuidados corporais, faciais e capilares focados na saúde, autoestima e bem-estar.',
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:56:35',
                'updated_at' => '2026-06-09 09:56:05',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Administração e Negócios',
            'description' => 'Engloba formações voltadas para o planejamento, organização, direção e controle de recursos (humanos, financeiros, materiais e tecnológicos) em organizações públicas, privadas ou do terceiro setor.',
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:57:32',
                'updated_at' => '2026-06-09 09:54:54',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Tecnologia e Informática',
                'description' => 'Foco na criação de softwares, aplicativos móveis e sistemas web utilizando linguagens como Python, Java e JavaScript.',
                'deleted_at' => NULL,
                'created_at' => '2025-11-04 10:58:11',
                'updated_at' => '2026-06-09 09:53:09',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Tecnologia e Informática',
                'description' => NULL,
                'deleted_at' => '2026-06-09 11:37:14',
                'created_at' => '2026-06-09 11:36:57',
                'updated_at' => '2026-06-09 11:37:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Tecnologia e Informática',
                'description' => 'Foco na criação de softwares, aplicativos móveis e sistemas web utilizando linguagens como Python, Java e JavaScript.',
                'deleted_at' => '2026-06-09 11:38:46',
                'created_at' => '2026-06-09 11:37:27',
                'updated_at' => '2026-06-09 11:38:46',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Tecnologia e Informática',
                'description' => 'Foco na criação de softwares, aplicativos móveis e sistemas web utilizando linguagens como Python, Java e JavaScript.',
                'deleted_at' => '2026-06-09 11:40:40',
                'created_at' => '2026-06-09 11:40:24',
                'updated_at' => '2026-06-09 11:40:40',
            ),
        ));
    }
}
