<?php 

class Banco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $status;
    private $saldo;

    public function getNumConta() {
        return $this->numConta;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getSaldo() {
        return $this->saldo;
    }

    public function setNumConta($new) {
        $this->numConta = $new;
    }
    public function setTipo($new) {
        $this->tipo = $new;
    }
    public function setDono($new) {
        $this->dono = $new;
    }
    public function setStatus($new) {
        $this->status = $new;
    }
    public function setSaldo($new) {
        $this->saldo = $new;
    }
}

?>