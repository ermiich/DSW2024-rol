<?php
namespace Daw2\Dsw2024rol\Personajes;

class Guerrero extends Personaje{
  public int $fuerza;
  public function __construct(string $nombre,int $nivel,int $puntosDeVida, int $fuerza){
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->fuerza = $fuerza;
  }
  public function atacar():int {
    return $this->fuerza * $this->nivel;
  }
  public function defender($golpe):int {
    $res = ($golpe)-($this->fuerza/2);
    if($res > 0){return $res;}
    return 0;
  }
}