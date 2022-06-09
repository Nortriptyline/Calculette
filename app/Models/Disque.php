<?php

namespace App\Models;

use App\Abstracts\Forme;

class Disque extends Forme
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    public function calcArea(): float
    {
        $area = pi() * pow($this->radius, 2);
        $this->setArea($area);

        return $area;
    }

    public function calcPerimeter(): float
    {
        $perimeter = pi() * 2 * $this->radius;
        $this->setPerimeter($perimeter);

        return $perimeter;
    }


    /**
     * setRadius
     *
     * @param  float $radius
     * @return void
     */
    public function setRadius(float $radius)
    {
        $this->radius = $radius;
    }
}
