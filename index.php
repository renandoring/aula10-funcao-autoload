<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 3:56 PM
 */
function __autoload($classe){
    include_once "{$classe}.class.php";
}

$pessoa = new Pessoa();
$pessoa->nome = "Renan";
$pessoa->telefone = "9999-9999";
echo $pessoa;