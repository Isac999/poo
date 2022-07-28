<?php 
include_once('./Controller.php');
 
class ControleRemoto implements Controller {
    private $volume;
    private $ligado;
    private $tocando;

    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($new) {
        $this->volume = $new;
    }
    private function setLigado($new) {
        $this->ligado = $new;
    }
    private function setTocando($new) {
        $this->tocando = $new;
    }
    
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<br> Está ligado: ".($this->getLigado() ? "SIM" : "NÃO");
        echo "<br> Está tocando: ".($this->getTocando() ? "SIM" : "NÃO");
        echo "<br> Volume: ".($this->getVolume());
        for ($i = 1; $i <= $this->getVolume; $i++) {
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "Fechando menu... <br>";
    }
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play() {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
        }
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}

?>