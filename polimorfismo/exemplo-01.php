<?php
abstract class Animal {
    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "late";
    }
}

class Gato extends Animal{
    public function falar(){
        return "mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "canta";
    }
    public function mover(){
        return "voa e ".parent::mover();
    }
}
// this se refere ao proprio objeto, mas o PARENT se refere a classe PAI.

$pluto = new Cachorro();
echo $pluto->falar().'<br/>';
echo $pluto->mover().'<br/>';
echo "------------------------ <br/>";
$frajola = new Gato();
echo $frajola->falar().'<br/>';
echo $frajola->mover().'<br/>';
echo "------------------------ <br/>";
$picapau = new Passaro();
echo $picapau->falar().'<br/>';
echo $picapau->mover().'<br/>';
echo "------------------------ <br/>";