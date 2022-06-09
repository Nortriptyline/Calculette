<?php

namespace App\Interfaces;

interface Geometry
{
  /**
   * calcArea
   * Calcul, set et retourne l'aire de l'objet
   * @return float 
   */
  public function calcArea(): float;

  /**
   * calcPerimeter
   * Calcule, set et retourne le perimetre de l'objet
   * @return float
   */
  public function calcPerimeter(): float;
}
