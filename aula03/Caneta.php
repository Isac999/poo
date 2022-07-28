<?php 

class Caneta {
    public $modelo;
    public $cor;
    public $ponta; 
    public $tampada;

    public function __construct($m, $c, $p) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar();
    }

    public function tampar() {
        $this->setTampada(1);
    }
    public function destampar() {
        $this->setTampada(0);
    }
    public function listarTudo() {
        echo "<br> {$this->getModelo()} <br>";
        echo "<br> {$this->getCor()} <br>";
        echo "<br> {$this->getPonta()} <br>";
        echo "<br> {$this->getTampada()} <br>";
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function getCor() {
        return $this->cor;
    }
    public function getPonta() {
        return $this->ponta;
    }
    public function getTampada() {
        return $this->tampada;
    }

    public function setModelo($new) {
        $this->modelo = $new;
    }
    public function setCor($new) {
        $this->cor = $new;
    }
    public function setPonta($new) {
        $this->ponta = $new;
    }
    public function setTampada($new) {
        $this->tampada = $new;
    }
}

?>