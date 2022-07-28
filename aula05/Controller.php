<?php 

interface Controller {
    public function ligar(); //abstract
    public function desligar(); //abstract
    public function abrirMenu(); //abstract
    public function fecharMenu(); //abstract
    public function maisVolume(); //abstract
    public function menosVolume(); //abstract
    public function ligarMudo(); //abstract
    public function desligarMudo(); //abstract
    public function play(); //abstract
    public function pause(); //abstract
}

?>