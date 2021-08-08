<?php

    namespace App\Controllers;

    class Blog
    {

        private array $dados;
        public function index()
        {
            // echo "Página blog";

            // FAZ REQUISIÇÃO DA MODEL
            $listarArtigos = new \App\Models\ListarBlog();
            $this->dados['artigos'] = $listarArtigos->listar();

            $carregarView = new \Core\ConfigView("Views/Blog/listarArtigo", $this->dados);
            $carregarView->renderizar();
        }

    }