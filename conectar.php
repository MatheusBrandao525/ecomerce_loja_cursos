<?php
    include_once "classes/conexaoMySQL.php";

    $con = new conexaoMySQL();

    $qry = $con->executarSQL("select * from pessoa");
    echo "conexao realizada com sucesso";


?>