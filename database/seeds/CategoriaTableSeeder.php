<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    
    public function run()
    {
        $categoria = new Categoria;
        $categoria ->NombCategoria = 'rapida';
        $categoria->Descripcion = 'analisis de pocos componentes';
        $categoria->save();


        $categoria2 = new Categoria;
        $categoria2 ->NombCategoria = 'recomendada';
        $categoria2 ->Descripcion = 'analisis de todos los componentes del sistema';
        $categoria2 ->save();

        $categoria3 = new Categoria;
        $categoria3 ->NombCategoria = 'especifica';
        $categoria3 ->Descripcion = 'analisis y actualizacion de todo el sistema';
        $categoria3 ->save();
    }
}
