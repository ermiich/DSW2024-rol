<?php

namespace Daw2\Dsw2024rol\Personajes;

abstract class Personaje
{
  public string $nombre;
  public int $nivel;
  public int $puntosDeVida;

  public function __construct(string $nombre, int $nivel, int $puntosDeVida)
  {
    $this->nombre = $nombre;
    $this->nivel = $nivel;
    $this->puntosDeVida = $puntosDeVida;
  }
  abstract protected function atacar(): int;
  abstract protected function defender(int $golpe): int;
  public function subirNivel(): void
  {
    $this->nivel += 1;
  }
}
