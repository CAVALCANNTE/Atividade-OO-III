<?php
abstract class Bebida {
    protected $nome;
    protected $tipo;
    protected $preco;
 
    public function __construct($nome, $tipo, $preco) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->preco = $preco;
    }

    abstract public function mostrarBebida();
    abstract public function verificarPreco($preco);
}
?>