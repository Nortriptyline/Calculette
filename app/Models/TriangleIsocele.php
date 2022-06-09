<?php

namespace APp\Models;


use App\Models\Triangle;

class TriangleIsocele extends Triangle
{
  protected $base;

  /**
   * __construct
   *
   * @param  float $sidesLen Longeur des côtés égaux
   * @param  float $baseLen Longueur de la base
   * @return void
   */
  public function __construct(float $side1, float $side2, float $side3)
  {

    /**
     *              A
     *             /\
     *      Side  /  \ ..Side
     *           /____\
     *          B Base C
     */
    $baseLen = $this->getBaseLen($side1, $side2, $side3);
    $sidesLen = $this->getSidesLen($side1, $side2, $side3);
    parent::__construct($sidesLen, $sidesLen, $baseLen);
  }

  /**
   * getBaseLen
   *
   * @param  float $side1
   * @param  float $side2
   * @param  float $side3
   * @return float
   */
  public function getBaseLen(float $side1, float $side2, float $side3): float
  {
    $sides = [$side1, $side2, $side3];
    sort($sides);
    for ($i = 1; $i < count($sides); $i++) {
      if ($sides[$i] == $sides[$i - 1]) {
        // Si on trouve un élément doublon, on supprimer le courant et son précédent
        array_splice($sides, $i - 1, 2);
      }
    }

    // Il ne nous reste plus que la base
    return $sides[0];
  }

  /**
   * getSidesLen
   *
   * @param  float $side1
   * @param  float $side2
   * @param  float $side3
   * @return float
   */
  public function getSidesLen(float $side1, float $side2, float $side3): float
  {
    $sides = [$side1, $side2, $side3];
    sort($sides);
    for ($i = 1; $i < count($sides); $i++) {
      if ($sides[$i] == $sides[$i - 1]) {
        // Si on trouve un doublon, il s'agit de la longeur de nos côtés
        $sideLen = $sides[$i];
      }
    }

    return $sideLen;
  }
}
