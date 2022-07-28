<?php 

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada = true;
    
    private function pintar() {

    }
    private function escrever() {

    }
    private function rabiscar() {
        if (!$this->tampada) {
            echo "<br>A caneta está rabiscando... <br>";
        } else {
            echo "<br> Destampe a caneta para rabiscar! <br>";
        }
    }
    public function tampar() {
        if (!$this->tampada) {
            $this->tampada = true;
            echo "<br> Caneta tampada! <br>";
        }
    }
    public function destampar() {
        if ($this->tampada) {
            $this->tampada = false;
            echo "<br> Caneta destampada! <br>"; 
        }
    }

}

?>