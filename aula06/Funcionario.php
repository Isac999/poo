<?php
require_once('Pessoa.php');

class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;

    public function mudarTrabalho() {
        $this->setTrabalhando(!$this->getTrabalhando());
    }

    public function getSetor() {
        return $this->setor;
    }
    public function getTrabalhando() {
        return $this->trabalhando;
    }
    public function setSetor($new) {
        $this->setor = $new;
    }
    public function setTrabalhando($new) {
        $this->trabalhando = $new;
    }
}