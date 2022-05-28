<?php
    include_once "conexaoMySQL.php";

    $con = new conexaoMySQL();

    $con->conectar();

    echo "conexao realizada com sucesso";


?>