<?php
require_once('bebida.php');
 
class Suco extends Bebida {
    public function mostrarBebida() {
        return "Nome: {$this->nome}, Tipo: {$this->tipo}, Preço: {$this->preco}";
    }
 
    public function verificarPreco($preco) {
        return $preco < 2.5;
    }
}
?>