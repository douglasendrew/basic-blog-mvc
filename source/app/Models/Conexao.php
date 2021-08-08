<?php
    // \

    namespace App\Models;

    use PDO;
    use Exception;

    class Conexao
    {
        private string $db = "mysql";
        private string $host = "localhost";
        private string $usuario = "root";
        private string $senha = "";
        private string $databaseName = "bancoteste";
        public $porta = 3306;
        public object $connect;

        public function conectar()
        {
            try {

                $this->connect = new PDO($this->db. ':host=' .$this->host. ';port=' . $this->porta . ';dbname='. $this->databaseName, $this->usuario, $this->senha);

                // echo "Conexao realizada";
                return $this->connect;

            } catch (Exception $ex){
                die("Erro: Não foi possivel conectar com o banco de dados");
            }
        }
    }
?>