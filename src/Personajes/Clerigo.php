<?php

namespace Daw2\Dsw2024rol\Personajes;



class Clerigo extends Personaje implements Curable
{
  public int $poderCurativo;
  public function __construct(string $nombre, int $nivel, int $puntosDeVida, int $poderCurativo)
  {
    parent::__construct($nombre, $nivel, $puntosDeVida);
    $this->poderCurativo = $poderCurativo;
  }
  public function atacar(): int
  {
    return $this->poderCurativo * 2;
  }
  public function defender($golpe): int
  {
    $res = ($golpe) - ($this->poderCurativo / 2);
    return $res > 0 ? $res :0;
  }
  public function curar()
  {
    return $this->poderCurativo * 3;
  }
}
