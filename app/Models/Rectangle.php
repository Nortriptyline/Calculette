<?php

namespace App\Models;

use App\Abstracts\Forme;

class Rectangle extends Forme
{
    protected float $width; // Largeur
    protected float $height; // Hauteur
    
    /**
     * __construct
     *
     * @param  float $width
     * @param  float $height
     * @return void
     */
    public function __construct(float $width, float $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function calcArea(): float
    {
        $area = $this->width * $this->height;
        $this->setArea($area);

        return $area;
    }

    public function calcPerimeter(): float
    {
        $perimeter = ($this->width + $this->height) * 2;
        $this->setPerimeter($perimeter);

        return $perimeter;
    }

    /**
     * setWidth
     *
     * @param  float $width
     * @return void
     */
    private function setWidth(float $width)
    {
        $this->width = $width;
    }
    /**
     * setHeight
     *
     * @param  float $height
     * @return void
     */
    private function setHeight(float $height)
    {
        $this->height = $height;
    }
}
