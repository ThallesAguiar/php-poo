<?php
class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }
}

class CPF extends Documento {
    public function validar():bool {
        return true;
    }
}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());
echo '<br/>';
echo $doc->getNumero();