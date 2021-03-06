<?php

class Cadastro
{
    private $nome;
    private $email;
    private $senha;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function __toString()
    {
        return json_encode(array(
            'nome'=>$this->getNome(),
            'email'=>$this->getEmail(),
            'senha'=>$this->getSenha(),
        ));
    }
}
