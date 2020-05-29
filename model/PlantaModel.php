<?php

class PlantaModel {
    private $codigo;
    private $nome;
    private $preco;
    private $descricao;
    private $dimensao;
    private $tipologia;

    // Uma planta pode ter um ou mais compartimentos
    private $compartimentos = array();

    // Uma planta pode ter uma ou mais fotos
    private $fotos = array();

    function __construct($nome, $preco, $descricao, $dimensao, $tipologia) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->dimensao = $dimensao;
        $this->tipologia = $tipologia;
    }
    
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setNome($nome) {
        $this->nome = nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setDimensao($dimensao) {
        $this->dimensao = $dimensao;
    }

    public function getDimensao() {
        return $this->dimensao;
    }

    public function setTipologia($tipologia) {
        $this->tipologia = $tipologia;
    }

    public function getTipologia() {
        returh $this->tipologia;
    }

    public function setCompartimentos(array $compartimentos) {
        $this->compartimentos = $compartimentos;
    }

    public function getCompartimentos() {
        return $this->compartimentos;
    }

    public function setFotos(array $fotos) {
        $this->fotos = $fotos;
    }

    public function getFotos() {
        return $this->fotos;
    }

}

?>