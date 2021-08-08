<?php

    namespace App\Models;

    class ListarBlog extends Conexao
    {
        private object $conn;
        public function listar()
        {
            $this->conn = $this->conectar();

            $queryArtigos = "SELECT * FROM teste ";
            $resultArtigos = $this->conn->prepare($queryArtigos);
            $resultArtigos->execute();
            $return = $resultArtigos->fetchAll();

            return $return;
        }
    }