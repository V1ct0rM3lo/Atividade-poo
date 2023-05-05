<?php

class Produto
{

    //Atributos
    private $nome;
    private $marca;
    private $descricao;
    private $valor;
    private $result1;

    //Construtores

    function _construct($valor)
    {

        $this->valor = $valor;
    }
    function atualizarValor($taxa)
    {
        $x = ($this->valor * $taxa) / 100;
        $this->valor=$this->valor+$x;
    }


    function Imprimir()
    {
    }
}
