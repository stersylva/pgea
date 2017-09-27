<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use pgea\Curso;
use pgea\Categoria;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

        $this->call('CursoTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('TitulacaoTableSeeder');
    }
}

class CursoTableSeeder extends Seeder
{
    public function run()
    {
        Curso::create(['nome' => 'SISTEMAS DE INFORMAÇÃO']);
        Curso::create(['nome' => 'PEDAGOGIA']);
        Curso::create(['nome' => 'DIREITO']);
    }
}
class CategoriaTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::create(['nome' => 'CURSO']);
        Categoria::create(['nome' => 'PALESTRA']);
        Categoria::create(['nome' => 'EDITAL']);
    }
}
class TitulacaoTableSeeder extends Seeder
{
    public function run()
    {
        Categoria::create(['nome' => 'PROFESSOR']);
        Categoria::create(['nome' => 'CORDENADOR']);
        Categoria::create(['nome' => 'DIRETOR']);
    }
}
