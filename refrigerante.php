<?php
require_once('bebida.php');
 
class Refrigerante extends Bebida {
    public function mostrarBebida() {
        return "Nome: {$this->nome}, Tipo: {$this->tipo}, Preço: {$this->preco}";
    }
 
    public function verificarPreco($preco) {
        return $preco < 5;
    }
}
?>