<?php

use App\Categoria;
use App\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Se borra cada tabla
        Post::truncate();
        Categoria::truncate();
        //construyo instancia
        $categoria = new Categoria;
        $categoria->nombre = "Categoria 1";
        $categoria->save();
        $categoria = new Categoria;
        $categoria->nombre = "Categoria 2";
        $categoria->save();
        $categoria = new Categoria;
        $categoria->nombre = "Categoria 3";
        $categoria->save();

        $post = new Post;
        $post->titulo = "Post 1";
        $post->cuerpo_previo = "Previa del cuerpo del post...";
        $post->cuerpo = "Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...";
        $post->fecha_publicado = Carbon::now()->subDays(5);
        $post->categoria_id = 1;
        $post->save();

        $post = new Post;
        $post->titulo = "Post 2";
        $post->cuerpo_previo = "Previa del cuerpo del post...";
        $post->cuerpo = "Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...";
        $post->fecha_publicado = Carbon::now()->subDays(4);
        $post->categoria_id = 2;
        $post->save();

        $post = new Post;
        $post->titulo = "Post 3";
        $post->cuerpo_previo = "Previa del cuerpo del post...";
        $post->cuerpo = "Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...";
        $post->fecha_publicado = Carbon::now()->subDays(3);
        $post->categoria_id = 1;
        $post->save();

        $post = new Post;
        $post->titulo = "Post 4";
        $post->cuerpo_previo = "Previa del cuerpo del post...";
        $post->cuerpo = "Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...";
        $post->fecha_publicado = Carbon::now()->subDays(2);
        $post->categoria_id = 2;
        $post->save();

        $post = new Post;
        $post->titulo = "Post 4";
        $post->cuerpo_previo = "Previa del cuerpo del post...";
        $post->cuerpo = "Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...";
        $post->fecha_publicado = Carbon::now()->subDays(1);
        $post->categoria_id = 3;
        $post->save();

        $post = new Post;
        $post->titulo = "Post 5";
        $post->cuerpo_previo = "Previa del cuerpo del post...";
        $post->cuerpo = "Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...Previa del cuerpo del post...";
        $post->fecha_publicado = Carbon::now();
        $post->categoria_id = 3;
        $post->save();
    }
}
