<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AddCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Apaga tudo que tem na tabela TRUNCATE não existe em todo DB
       // DB::table ('categorias')->truncate();

        DB::table('categorias')->insert([
            [
                'nome' => 'Video Game',
                'created_at' => '2020-02-01 22:22:22',
                'updated_at' => '2020-02-01 22:22:22'
            ],
            [
                'nome' => 'Programação',
                'created_at' => '2020-02-01 22:22:22',
                'updated_at' => '2020-02-01 22:22:22'
            ],
            [
                'nome' => 'Redes',
                'created_at' => '2020-02-01 22:22:22',
                'updated_at' => '2020-02-01 22:22:22'
            ],
            [
                'nome' => 'Devops',
                'created_at' => '2020-02-01 22:22:22',
                'updated_at' => '2020-02-01 22:22:22'
            ]
        ]);
    }
}
