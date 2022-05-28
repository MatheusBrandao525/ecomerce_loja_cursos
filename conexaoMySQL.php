<?php 

    class conexaoMySQL
    {

        protected $servidor;
        protected $usuario;
        protected $senha;
        protected $banco;
        protected $conexao;

        public function __construct()
        {
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->senha = "1exagon1@";
            $this->banco = "ecomerce";
        
        }

        function conectar(){
            $this->conexao = @mysqli_connect($this->servidor,$this->usuario,$this->senha) or die("Não foi posivel se conectar ao database!");

            $this->banco = @mysqli_select_db($this->banco) or die("Não foi possivel acassar o banco");
        }
    }