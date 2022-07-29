<?php
require_once('./Pessoa.php');
//Herança para diferença
class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade() {
        echo "<p>Pagando a mensalidade do aluno ".($this->nome)."...</p>";
    }

    public function getMatricula() {
        return $this->matricula;
    }
    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($new) {
        $this->matricula = $new;
    }
    public function setCurso($new) {
        $this->curso = $new;
    }
}