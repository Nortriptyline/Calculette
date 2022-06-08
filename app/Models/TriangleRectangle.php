<?php

namespace App\Models;

class TriangleRectangle extends Triangle
{
    protected $hypothenuse;

    public function __construct(float $side1, float $side2, float $side3)
    {
        // On extrait l'hypothénuse qui est forcément le côté le plus grand
        // et on l'applique en AB.
        /**
         *              A
         *             /|
         *            / |
         *           /__|
         *          B    C
         */
        $sides = [$side1, $side2, $side3];
        rsort($sides);
        $this->hypothenuse = $sides[0];
        // Construction au format AB AC BC
        parent::__construct($sides[0], $sides[1], $sides[2]);
    }

    public function get_aire() :float
    {
        return ($this->ac * $this->bc) / 2;
    }
}
