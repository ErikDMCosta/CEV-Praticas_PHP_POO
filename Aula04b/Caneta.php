<?php

class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
 /* Gerado pelo NetBeans 
    function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->setTampada(true);
    }

    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }
*/
        
    //public function __construct() { // Método Construtor
/*  
    public function Caneta() { // Método Construtor
        $this->cor = "Azul";
        $this->tampar();
    }
*/    

    public function __construct($m, $c, $p){ // Método Construtor
       
       $this->modelo = $m;
       $this->cor = $c;
       $this->ponta = $p;
       $this->tampar();
       
/*----
       $this->setModelo($m);
       $this->setCor($c);
       $this->setPonta($p); 
----*/ 
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    
    public function getCor() {
        return $this->cor;
    }
    
    public function setCor($c) {
        $this->cor = $c;
    }
    
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        $this->ponta = $p;
    }
    
    //*/
}
