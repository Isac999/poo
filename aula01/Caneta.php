<?php 

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada = true;
    
    function rabiscar() {
        if (!$this->tampada) {
            echo "<br>A caneta está rabiscando... <br>";
        } else {
            echo "<br> Destampe a caneta para rabiscar! <br>";
        }
    }
    function tampar() {
        if (!$this->tampada) {
            $this->tampada = true;
            echo "<br> Caneta tampada! <br>";
        }
    }
    function destampar() {
        if ($this->tampada) {
            $this->tampada = false;
            echo "<br> Caneta destampada! <br>"; 
        }
    }

}

?>