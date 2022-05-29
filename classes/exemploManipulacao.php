<?php

include_once ("manipulacaoDeDados.php");


    $novo = new manipulacaoDeDados();

    $novo->setTabela("pessoa");
    $novo->setCampos("nome", "email");
    $novo->setDados("Matheus", "mafe123silva@gmail.com");
    $novo->inserir();
    print_r($novo);
    echo $novo ->getMsg();


?>