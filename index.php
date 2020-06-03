<?php
/*
* Padrao de projeto e DAO: 'Data Accass Object'
* Objetivo do projeto: "Aprendizado"
*/


ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


require_once "vendor/autoload.php";

use App\Model\Conexao_Mysql;
use App\Model\Produto;
use App\Model\ProdutosDao;

$pd = new Produto;
$pd->setId(1);
// $pd->setNome('Notebook Sansumg');
// $pd->setDescricao('tamanha de tela 14, 16gb');
// $pd->setQtdprod('800');

// var_dump($pd);

$pdao = new ProdutosDao();
$pdao->delete($pd);
