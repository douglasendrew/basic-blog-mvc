<?php

    foreach($this->dados['artigos'] as $artigo)
    {
        extract($artigo);
        echo "ID: ". $id . "<br>";
        echo "Titulo: ". $titulo . "<br>";
        echo "Conteudo: ". $conteudo . "<br>";
    }
