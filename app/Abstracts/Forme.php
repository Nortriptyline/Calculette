<?php

namespace App\Abstracts;

use App\Interfaces\Geometry;

abstract class Forme implements Geometry
{
    protected float $area;
    protected float $perimeter;

    /**
     * setArea
     *
     * @param  float $area
     * @return void
     */
    protected function setArea(float $area)
    {
        $this->area = $area;
    }

    /**
     * setPerimeter
     *
     * @param  float $perimeter
     * @return void
     */
    protected function setPerimeter(float $perimeter)
    {
        $this->perimeter = $perimeter;
    }
}
