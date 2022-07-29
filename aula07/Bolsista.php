<?php
include_once("./Aluno.php");

class Bolsista extends Aluno {
    private $bolsa;

    public function renovarBolsa() {
        echo "<p>Bolsa renovada!</p>";
    }
    //Sobreescrevendo o método;
    public function pagarMensalidade() {
        echo "<p>Este aluno é bolsista, então tem desconto!</p>";
    }
    
    public function getBolsa() {
        return $this->bolsa;
    }
    public function setBolsa($new) {
        $this->bolsa = $new;
    }
}