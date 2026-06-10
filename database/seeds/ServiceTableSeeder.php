<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('services')->delete();
        
        DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Higiene e Segurança no Trabalho',
            'description' => 'HST refere-se a Higiene e Segurança no Trabalho (ou Saúde, Higiene e Segurança no Trabalho). É a área focada na prevenção de acidentes e doenças profissionais, garantindo um ambiente seguro e saudável para os colaboradores nas empresas.',
                'image' => 'images/services/1780997665_hst.png',
                'status' => 'published',
                'slug' => 'higiene-e-seguranca-no-trabalho',
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:34:25',
                'updated_at' => '2026-06-09 10:34:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Controlo de Qualidade',
                'description' => 'O termo "controle de qualidade" pode referir-se à verificação de processos e produtos em ambientes industriais, à auditoria de serviços ou, metaforicamente, à forma como diferentes culturas são representadas na sociedade. Em contextos empresariais, profissionais de diversas etnias exercem papéis fundamentais de inspeção, assegurando a excelência e a padronização.',
                'image' => 'images/services/1780997886_controlo-qualidade.avif',
                'status' => 'published',
                'slug' => 'controlo-de-qualidade',
                'deleted_at' => NULL,
                'created_at' => '2026-06-09 10:38:06',
                'updated_at' => '2026-06-09 10:38:06',
            ),
        ));
    }
}
