<?php
namespace Daw2\Dsw2024rol\Personajes;

class Mago extends Personaje{
  public int $mana;
  public function __construct(string $nombre,int $nivel,int $puntosDeVida, int $mana){
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->mana = $mana;
  }
  public function atacar():int {
    return $this->mana / 2;
  }
  public function defender($golpe):int {
    $dañoFinal = $golpe - ($this->mana / 5);
    return $dañoFinal > 0 ? $dañoFinal : 0;
  }
}