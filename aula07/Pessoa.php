<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public final function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }

    public function setNome($new) {
        $this->nome = $new;
    }
    public function setIdade($new) {
        $this->idade = $new;
    }
    public function setSexo($new) {
        $this->sexo = $new;
    }
}