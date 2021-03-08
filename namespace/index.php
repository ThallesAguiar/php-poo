<?php

require_once('config.php');

// usar namespace
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Thalles Aguiar");
$cad->setEmail("thalles@email.com");
$cad->setSenha("123456");
// echo $cad;

$cad->registrarVenda();
