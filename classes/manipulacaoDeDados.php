<?php

include_once ("conexaoMySQL.php");


class manipulacaoDeDados extends conexaoMySQL
{

    protected $sql;
    protected $tabela;
    protected $campos;
    protected $dados;
    protected $msg;

    public function setTabela($tbl)
    {
        $this->tabela = $tbl;
    }

    public function setCampos($campo)
    {
        $this->campos = $campo;
    }

    public function setDados($dado)
    {
        $this->dados = $dado;
    }

    public function getMsg()
    {
       return $this->msg;
    }

    
    public function inserir()
    {
        $this->sql = "INSERT INTO $this->tabela ($this->campos) VALUES ($this->dados)";
        if(self::executarSQL($this->sql)){

            echo "inserido com susseço";
        }else{
            echo "erro";
        }

    }
}