<?php
class Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome.'<br/>';
        echo $this->idade.'<br/>';
        echo $this->senha.'<br/>';
    }
}

class Programador extends Pessoa {
    public function verDados(){
        // saber de qual classe foi feita a instancia desse objeto
        echo get_class($this).'<br/>';

        echo $this->nome.'<br/>';
        echo $this->idade.'<br/>';
        echo $this->senha.'<br/>';
    }
}

$dev = new Programador();

$dev->verDados();