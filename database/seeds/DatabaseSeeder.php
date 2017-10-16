<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use pgea\Curso;
use pgea\Categoria;
use pgea\Titulacao;
use pgea\Estado;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Model::unguard();

        $this->call('CursoTableSeeder');
        $this->call('CategoriaTableSeeder');
        $this->call('TitulacaoTableSeeder');
        $this->call('EstadoTableSeeder');
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
        Titulacao::create(['nome' => 'PROFESSOR']);
        Titulacao::create(['nome' => 'COORDENADOR']);
        Titulacao::create(['nome' => 'DIRETOR']);
    }
}
class EstadoTableSeeder extends Seeder
{
    public function run()
    {
        Estado::create(['nome' => 'ACRE']);
        Estado::create(['nome' => 'ALAGOAS']);
        Estado::create(['nome' => 'AMAPÁ']);
        Estado::create(['nome' => 'AMAZONAS']);
        Estado::create(['nome' => 'BAHIA']);
        Estado::create(['nome' => 'CEARÁ']);
        Estado::create(['nome' => 'DISTRITO FEDERAL']);
        Estado::create(['nome' => 'ESPÍRITO SANTO']);
        Estado::create(['nome' => 'GOIÁS']);
        Estado::create(['nome' => 'MARANHÃO']);
        Estado::create(['nome' => 'MATO GROSSO DO SUL']);
        Estado::create(['nome' => 'MATO GROSSO']);
        Estado::create(['nome' => 'MINAS GERAIS']);
        Estado::create(['nome' => 'PARANÁ']);
        Estado::create(['nome' => 'PARAÍBA']);
        Estado::create(['nome' => 'PARÁ']);
        Estado::create(['nome' => 'PERNAMBUCO']);
        Estado::create(['nome' => 'PIAUÍ']);
        Estado::create(['nome' => 'RIO DE JANEIRO']);
        Estado::create(['nome' => 'RIO GRANDE DO NORTE']);
        Estado::create(['nome' => 'RIO GRANDE DO SUL']);
        Estado::create(['nome' => 'RONDÔNIA']);
        Estado::create(['nome' => 'RORAIMA']);
        Estado::create(['nome' => 'SANTA CATARINA']);
        Estado::create(['nome' => 'SERGIPE']);
        Estado::create(['nome' => 'SÃO PAULO']);
        Estado::create(['nome' => 'TOCANTINS']);
    }
}
