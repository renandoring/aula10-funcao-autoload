<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 3:50 PM
 */

class Pessoa {
    private $nome;
    private $telefone;

    function __get($propriedade){
        return $this->$propriedade;
    }

    function __set($propriedade,$valor){
        $this->$propriedade = $valor;
    }

    function __toString(){
        return $this->nome."\n";
    }
} 