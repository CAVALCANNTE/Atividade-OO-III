<?php
require_once('bebida.php');
 
class Vinho extends Bebida {
    private $safra;
 
    public function __construct($nome, $tipo, $preco, $safra) {
        parent::__construct($nome, $tipo, $preco);
        $this->safra = $safra;
    }
 
    public function mostrarBebida() {
        return "Nome: {$this->nome}, Tipo: {$this->tipo}, Preço: {$this->preco}, Safra: {$this->safra}";
    }
 
    public function verificarPreco($preco) {
        return $preco < 25;
    }
}
?>