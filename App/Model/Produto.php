<?php
    namespace App\Model;

    class Produto{
        //Atributos criados
        private $id;
        private $nome;
        private $descricao;
        private $qtdprod;

        // Metodos get e set para cada atributo
        public  function getId(){
            return $this->id;
        }
        public  function setId(int $id){
            return $this->id = $id;
        }
        public  function getNome(){
            return $this->nome;
        }
        public  function setNome(string $nm){
            return $this->nome = $nm;
        }
        public  function getDescricao(){
            return $this->descricao;
        }
        public  function setDescricao(string $descricao){
            return $this->descricao = $descricao;
        }
        public  function getQtdprod(){
            return $this->qtdprod;
        }
        public  function setQtdprod(int $prod){
            return $this->qtdprod = $prod;
        }
       
    }